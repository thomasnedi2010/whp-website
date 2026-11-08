// Frontend only. Do not store passwords or pretend to authenticate.
const status=document.getElementById('status');
document.getElementById('authForm')?.addEventListener('submit',event=>{
 event.preventDefault();
 status.textContent='Account authentication is not yet connected. A secure backend endpoint is required.';
});
document.querySelectorAll('[data-provider]').forEach(btn=>btn.addEventListener('click',()=>{
 status.textContent=btn.dataset.provider[0].toUpperCase()+btn.dataset.provider.slice(1)+' sign-in requires OAuth credentials and a server-side callback.';
}));

