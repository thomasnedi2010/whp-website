<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Create Your Account | WHP Digital &amp; Entertainment</title>
<link rel="icon" href="assets/img/favicon.png">
<link rel="stylesheet" href="assets/css/auth.css">
<link rel="stylesheet" href="assets/css/signup.css">
</head>
<body>
<main class="auth-wrap">

<h1>Create Your Account</h1>
<p class="sub">Start your journey with WHP Digital &amp; Entertainment.</p>
<form id="authForm">
<div class="field">
<label for="name">Full name</label>
<input type="text" id="name" name="name" autocomplete="name" required placeholder="Your full name">
</div>
<div class="field">
<label for="company">Company name</label>
<input type="text" id="company" name="company" autocomplete="organization" required placeholder="Your company name">
</div>
<div class="field">
<label for="email">Email address</label>
<input type="email" id="email" name="email" autocomplete="email" required placeholder="you@example.com">
</div>
<div class="field">
<label for="password">Password</label>
<input type="password" id="password" name="password" autocomplete="new-password" required minlength="8" placeholder="At least 8 characters">
</div>
<button type="submit" class="submit">Create Account</button>
</form>
<div class="divider">Or continue with</div>
<div class="socials" aria-label="Social sign-in options">
<button class="social" type="button" data-provider="google" title="Continue with Google" aria-label="Continue with Google"><svg viewBox="0 0 48 48" aria-hidden="true"><path fill="#EA4335" d="M24 9.5c3.5 0 6.6 1.2 9.1 3.6l6.8-6.8C35.9 2.4 30.4 0 24 0 14.6 0 6.5 5.4 2.6 13.3l7.9 6.2C12.3 13.8 17.7 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6C44.4 38 46.98 31.66 46.98 24.55z"/><path fill="#FBBC05" d="M10.53 28.48A14.4 14.4 0 0 1 9.75 24c0-1.56.27-3.07.76-4.48l-7.9-6.19A24.07 24.07 0 0 0 0 24c0 3.87.92 7.52 2.61 10.67l7.92-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.9-5.8l-7.73-6C30 37.6 27.3 38.5 24 38.5c-6.3 0-11.66-4.3-13.48-10.02l-7.91 6.19C6.54 42.6 14.6 48 24 48z"/></svg></button>
<button class="social" type="button" data-provider="facebook" title="Continue with Facebook" aria-label="Continue with Facebook"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#1877F2" d="M24 12a12 12 0 1 0-13.875 11.854v-8.386H7.078V12h3.047V9.356c0-3.007 1.79-4.669 4.532-4.669 1.31 0 2.683.234 2.683.234v2.953h-1.513c-1.49 0-1.953.925-1.953 1.874V12h3.328l-.532 3.468h-2.796v8.386A12.003 12.003 0 0 0 24 12z"/><path fill="white" d="M16.671 15.468 17.203 12h-3.328V9.748c0-.949.464-1.874 1.953-1.874h1.513V4.921s-1.373-.234-2.683-.234c-2.742 0-4.532 1.662-4.532 4.669V12H7.078v3.468h3.047v8.386c.61.096 1.237.146 1.875.146s1.265-.05 1.875-.146v-8.386z"/></svg></button>
<button class="social" type="button" data-provider="github" title="Continue with Github" aria-label="Continue with Github"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#181717" d="M12 .3a12 12 0 0 0-3.793 23.387c.6.11.82-.26.82-.577v-2.23c-3.338.726-4.043-1.416-4.043-1.416-.546-1.388-1.333-1.758-1.333-1.758-1.09-.745.083-.73.083-.73 1.205.085 1.84 1.236 1.84 1.236 1.07 1.833 2.807 1.303 3.492.996.108-.775.418-1.303.76-1.602-2.665-.304-5.467-1.333-5.467-5.93 0-1.31.47-2.381 1.235-3.221-.124-.303-.535-1.525.117-3.176 0 0 1.008-.323 3.301 1.23A11.55 11.55 0 0 1 12 6.82c1.02.005 2.046.138 3.004.404 2.29-1.553 3.297-1.23 3.297-1.23.654 1.65.243 2.872.12 3.176.768.84 1.233 1.91 1.233 3.22 0 4.61-2.807 5.623-5.48 5.922.43.372.814 1.102.814 2.222v3.3c0 .32.216.694.825.576A12 12 0 0 0 12 .3z"/></svg></button>
</div>
<p class="account-switch">Already have an account? <a id="switch" href="login.php">Log in</a></p>
<p class="status" id="status" aria-live="polite" role="status"></p>
</main>
<script src="assets/js/auth.js" defer></script>
<script src="assets/js/auth-frame.js" defer></script>
</body>
</html>