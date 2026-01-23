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
  const toggleBtn = document.querySelector('.menu-toggle');
  const backdrop = document.querySelector('[data-nav-backdrop]');

  const close = () => document.body.classList.remove('nav-open');
  const open = () => document.body.classList.add('nav-open');
  const isOpen = () => document.body.classList.contains('nav-open');

  if(toggleBtn){
    toggleBtn.addEventListener('click', () => {
      isOpen() ? close() : open();
    });
  }

  if(backdrop){
    backdrop.addEventListener('click', (e) => {
      e.preventDefault();
      close();
    });
  }

  document.addEventListener('keydown', (e) => {
    if(e.key === 'Escape') close();
  });

  document.addEventListener('click', (e) => {
    const a = e.target.closest('nav a');
    if(a) close();
  });
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
