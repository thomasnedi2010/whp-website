<?php
// WHP public enquiry endpoint; server-side validation, CSRF and basic anti-spam protection.
declare(strict_types=1);
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: contact.php', true, 303); exit; }
$type = (string)($_POST['form_type'] ?? 'contact');
$type = in_array($type, ['contact','quote','support'], true) ? $type : 'contact';
$target = ['contact'=>'contact.php','quote'=>'quote.php','support'=>'support.php'][$type];
function back(string $target): never { header('Location: '.$target, true, 303); exit; }
function failure(string $msg, string $target): never { $_SESSION['form_error']=$msg; back($target); }
$serverToken = (string)($_SESSION['whp_form_csrf'] ?? '');
$userToken = (string)($_POST['csrf'] ?? '');
if ($serverToken === '' || $userToken === '' || !hash_equals($serverToken, $userToken)) failure('Session expired. Refresh the page and try again.', $target);
if (!empty($_POST['website'])) back($target); // honeypot
if (time()-(int)($_SESSION['whp_form_last']??0)<12) failure('Please wait a moment before submitting another enquiry.', $target);
$name=trim((string)($_POST['name'] ?? ''));
$email=trim((string)($_POST['email'] ?? ''));
$subject=trim((string)($_POST['subject'] ?? ''));
$message=trim((string)($_POST['message'] ?? ''));
$phone=trim((string)($_POST['phone'] ?? ''));
if (strlen($name)>160 || strlen($email)>254 || strlen($subject)>190 || strlen($message)>6000 || strlen($phone)>80) failure('One or more entries are too long.', $target);
if (strlen($name)<2 || !filter_var($email,FILTER_VALIDATE_EMAIL) || strlen($message)<12) failure('Enter a valid name, email address and message of at least 12 characters.', $target);
$allowed = ['Website Development','Software & Systems','Artificial Intelligence','Education & E-Learning','Cloud & Hosting','IT Support & Branding','Event Planning','Kwithu Events','Entertainment Support','General Enquiry','Other'];
$service=trim((string)($_POST['service'] ?? 'General Enquiry'));
if (!in_array($service,$allowed,true)) $service='General Enquiry';
$clean = static fn(string $s): string => str_replace(["\r","\n","\0"], ' ', $s);
$body="WHP ".strtoupper($type)." enquiry\n\nName: ".$clean($name)."\nEmail: ".$clean($email)."\nPhone: ".$clean($phone)."\nService: ".$service."\nSubject: ".$clean($subject)."\n\nMessage:\n".$message."\n";
$headers=['From: WHP Website <info@whp-digital.com>', 'Reply-To: '.$clean($email), 'Content-Type: text/plain; charset=UTF-8'];
// mail() requires a configured outgoing mail service on the hosting server.
$sent=@mail('info@whp-digital.com', '[WHP Website] '.ucfirst($type).' - '.($subject!==''?$clean($subject):$service), $body, implode("\r\n", $headers));
if (!$sent) failure('Your message could not be sent from this server. Please email info@whp-digital.com directly.', $target);
$_SESSION['whp_form_last']=time();
$_SESSION['form_success']='Your message has been handed to the server email service. We will respond using the email you supplied.';
back($target);
