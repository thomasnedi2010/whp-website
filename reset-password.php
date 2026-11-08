<!DOCTYPE html>
<html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Reset Password | WHP Digital &amp; Entertainment</title>
<link rel="icon" href="assets/img/favicon.png"><link rel="stylesheet" href="assets/css/auth.css"><link rel="stylesheet" href="assets/css/login.css"></head>
<body><main class="auth-wrap" id="resetView">
<div class="kicker">ACCOUNT RECOVERY</div><h1>Reset Password</h1>
<p class="sub">Enter the email linked to your WHP account to request a password reset.</p>
<form id="resetForm"><div class="field"><label for="resetEmail">Email address</label><input id="resetEmail" name="email" type="email" autocomplete="email" placeholder="you@example.com" required></div>
<button class="submit" type="submit">Send Reset Link</button></form>
<a href="login.php" class="back-login" id="switch">&larr; Back to log in</a>
<p class="status" id="resetStatus" role="status" aria-live="polite"></p>
</main><script src="assets/js/auth-frame.js" defer></script><script src="assets/js/reset-password.js" defer></script></body></html>
