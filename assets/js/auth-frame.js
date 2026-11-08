(()=>{
  const allowed=['login.php','signup.php','reset-password.php'];
  const inFrame=window.parent!==window;
  const post=(data)=>{if(inFrame)window.parent.postMessage({whpAuth:data.type,...data},window.location.origin)};
  function measure(){
    const el=document.querySelector('.auth-wrap');
    if(!el)return;
    post({type:'height',height:Math.ceil(el.getBoundingClientRect().height)+2});
  }
  window.addEventListener('load',measure);
  const observer=new ResizeObserver(measure);
  const el=document.querySelector('.auth-wrap');
  if(el)observer.observe(el);
  document.querySelectorAll('a[href]').forEach(a=>a.addEventListener('click',e=>{
    if(!inFrame)return;
    const page=a.getAttribute('href');
    if(allowed.includes(page)){e.preventDefault();post({type:'go',page});}
  }));
})();
