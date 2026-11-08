document.getElementById('resetForm')?.addEventListener('submit', e=>{
  e.preventDefault();
  const status=document.getElementById('resetStatus');
  status.textContent='Password reset email is not configured yet. Please contact info@whp-digital.com for account assistance.';
});
