(()=>{
 const top=document.getElementById('whpBackTop'),toggle=document.getElementById('whpChatToggle');
 const win=document.getElementById('whpChatWindow'),close=document.getElementById('whpChatClose');
 const log=document.getElementById('whpChatMessages'),input=document.getElementById('whpChatInput');
 const form=document.getElementById('whpChatForm');
 if(!top||!win)return;
 const updateTop=()=>top.classList.toggle('visible',window.scrollY>280);
 window.addEventListener('scroll',updateTop,{passive:true});updateTop();
 top.addEventListener('click',()=>window.scrollTo({top:0,behavior:'smooth'}));
 function bubble(text,from){const e=document.createElement('div');e.className='whp-chat-bubble'+(from?' user':'');e.textContent=text;log.appendChild(e);log.scrollTop=log.scrollHeight;}
 bubble('Hello! I can answer common questions about WHP services, quotations and Kwithu Events. For personal help, contact info@whp-digital.com.',false);
 function openChat(on){win.hidden=!on;toggle.setAttribute('aria-expanded',String(on));if(on)input.focus();else toggle.focus();}
 toggle.addEventListener('click',()=>openChat(win.hidden));close.addEventListener('click',()=>openChat(false));
 document.addEventListener('keydown',e=>{if(e.key==='Escape'&&!win.hidden)openChat(false)});
 function response(q){const s=q.toLowerCase();
  if(/quote|price|cost|pricing|pay/.test(s))return 'To request a tailored quotation, use quote.php on this website or email info@whp-digital.com with your requirements. I cannot issue a confirmed price in this chat.';
  if(/kwithu|event|entertainment|ticket|artist/.test(s))return 'WHP Entertainment supports event planning, publicity, performer coordination and event technology through Kwithu Events. Email info@whp-digital.com to discuss your event.';
  if(/web|software|lms|ai|cloud|hosting|tech|service/.test(s))return 'WHP Digital offers websites, software and systems, AI solutions, e-learning technology, cloud/hosting, and IT support. Tell us your project requirements at info@whp-digital.com.';
  if(/contact|human|agent|person|help|support|email/.test(s))return 'You can contact the WHP team directly at info@whp-digital.com. This widget is automated; it does not connect you to a live agent.';
  if(/hello|hi|good morning|hey/.test(s))return 'Welcome to WHP Digital & Entertainment! Ask about services, events, quotations or contacting our team.';
  return 'I do not have a verified answer for that question. Please email info@whp-digital.com and the WHP team can assist you.';
 }
 function ask(q){if(!q.trim())return;bubble(q.trim(),true);bubble(response(q),false);}
 form.addEventListener('submit',e=>{e.preventDefault();ask(input.value);input.value='';input.focus()});
 win.querySelectorAll('[data-whp-question]').forEach(b=>b.addEventListener('click',()=>ask(b.dataset.whpQuestion)));
})();
