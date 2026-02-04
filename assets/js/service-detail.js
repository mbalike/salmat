(function(){
  const btn = document.querySelector('.back-to-top');
  const toggle = () => {
    if(!btn) return;
    const show = window.scrollY > 450;
    btn.classList.toggle('show', show);
  };
  window.addEventListener('scroll', toggle, {passive:true});
  toggle();
})();

(function(){
  const title = document.querySelector('.inner-hero-title');
  const lead = document.querySelector('.inner-hero-lead');
  if(!title || !lead) return;

  const sync = () => {
    lead.style.width = 'auto';
    const w = Math.ceil(title.getBoundingClientRect().width);
    const extra = parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--hero-lead-extra')) || 0;
    const containerW = title.parentElement?.getBoundingClientRect().width || w;
    lead.style.width = Math.min(w + extra, containerW) + 'px';
  };

  let raf = null;
  const schedule = () => {
    if(raf) cancelAnimationFrame(raf);
    raf = requestAnimationFrame(sync);
  };

  schedule();

  if(document.fonts && document.fonts.ready){
    document.fonts.ready.then(schedule).catch(() => {});
  }

  window.addEventListener('resize', schedule, {passive:true});
})();
