<?php
declare(strict_types=1);
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
if (empty($_SESSION['whp_form_csrf'])) $_SESSION['whp_form_csrf']=bin2hex(random_bytes(32));
function whp_h(string $s): string { return htmlspecialchars($s, ENT_QUOTES|ENT_SUBSTITUTE, 'UTF-8'); }
function whp_notice(): void {
 foreach (['form_error'=>'error','form_success'=>'success'] as $key=>$class) {
   if (!empty($_SESSION[$key])) { echo '<div class="whp-notice whp-notice-'.whp_h($class).'" role="status">'.whp_h((string)$_SESSION[$key]).'</div>'; unset($_SESSION[$key]); }
 }
}
function whp_field(string $id, string $label, string $type='text', bool $required=false, string $placeholder=''): void {
 echo '<div class="whp-field"><label for="'.whp_h($id).'">'.whp_h($label).'</label><input id="'.whp_h($id).'" name="'.whp_h($id).'" type="'.whp_h($type).'" placeholder="'.whp_h($placeholder).'" '.($required?'required ':'').'autocomplete="'.($id==='email'?'email':($id==='name'?'name':'off')).'"></div>';
}
function whp_form(string $type): void {
 echo '<form class="whp-contact-form" action="form-handler.php" method="post">';
 echo '<input type="hidden" name="form_type" value="'.whp_h($type).'"><input type="hidden" name="csrf" value="'.whp_h((string)$_SESSION['whp_form_csrf']).'">';
 echo '<div class="whp-honeypot" aria-hidden="true"><label for="website">Leave this empty</label><input id="website" name="website" tabindex="-1" autocomplete="off"></div>';
 echo '<div class="whp-form-row">'; whp_field('name','Full name','text',true,'Your name'); whp_field('email','Email address','email',true,'you@example.com'); echo '</div>';
 echo '<div class="whp-form-row">'; whp_field('phone','Phone number (optional)','tel',false,'Include country code'); whp_field('subject','Subject (optional)','text',false,'How can we help?'); echo '</div>';
 echo '<div class="whp-field"><label for="service">Area of interest</label><select id="service" name="service">';
 foreach (['General Enquiry','Website Development','Website Hosting','Domain Registration','Software & Systems','Artificial Intelligence','Education & E-Learning','Cloud & Hosting','Cybersecurity','Digital Marketing','IT Support & Branding','Event Planning','Kwithu Events','Entertainment Support','Other'] as $opt) echo '<option>'.whp_h($opt).'</option>';
 echo '</select></div><div class="whp-field"><label for="message">'.($type==='quote'?'Project / event requirements':'Your message').'</label><textarea id="message" name="message" rows="6" minlength="12" maxlength="6000" placeholder="Tell us what you need..." required></textarea></div>';
 echo '<button class="btn btn-primary whp-send" type="submit"><i class="fa-solid fa-paper-plane" aria-hidden="true"></i> '.($type==='quote'?'Request Quotation':'Send Message').'</button><p class="whp-form-note">Your information is used to respond to this enquiry. This form requires server email to be configured.</p></form>';
}
