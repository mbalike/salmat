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

(function(){
  const track = document.querySelector('.testimonials-cards[data-carousel-track]');
  if(!track) return;

  const root = track.closest('.testimonials-carousel');
  if(!root) return;

  const prevBtn = root.querySelector('[data-carousel-prev]');
  const nextBtn = root.querySelector('[data-carousel-next]');
  const dotsWrap = root.querySelector('[data-carousel-dots]');

  const slides = Array.from(track.querySelectorAll('.t-card'));
  if(slides.length === 0) return;

  const prefersReduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const behavior = prefersReduced ? 'auto' : 'smooth';

  function getGap(){
    const cs = getComputedStyle(track);
    const g = parseFloat(cs.gap || cs.columnGap || '0');
    return Number.isFinite(g) ? g : 0;
  }

  function getStep(){
    const first = slides[0];
    if(!first) return track.clientWidth;
    return first.getBoundingClientRect().width + getGap();
  }

  function clampIndex(i){
    return Math.max(0, Math.min(slides.length - 1, i));
  }

  function getIndex(){
    const step = getStep();
    if(step <= 0) return 0;
    return clampIndex(Math.round(track.scrollLeft / step));
  }

  function scrollToIndex(i){
    const idx = clampIndex(i);
    const left = idx * getStep();
    track.scrollTo({ left, behavior });
  }

  function buildDots(){
    if(!dotsWrap) return;
    dotsWrap.innerHTML = '';
    slides.forEach((_, i) => {
      const b = document.createElement('button');
      b.type = 'button';
      b.setAttribute('aria-label', 'Go to review ' + (i + 1));
      b.addEventListener('click', () => scrollToIndex(i));
      dotsWrap.appendChild(b);
    });
  }

  function updateUI(){
    const idx = getIndex();

    if(prevBtn) prevBtn.disabled = idx <= 0;
    if(nextBtn) nextBtn.disabled = idx >= slides.length - 1;

    if(dotsWrap){
      const dots = Array.from(dotsWrap.querySelectorAll('button'));
      dots.forEach((d, i) => d.setAttribute('aria-current', i === idx ? 'true' : 'false'));
    }
  }

  if(prevBtn){
    prevBtn.addEventListener('click', () => scrollToIndex(getIndex() - 1));
  }
  if(nextBtn){
    nextBtn.addEventListener('click', () => scrollToIndex(getIndex() + 1));
  }

  let raf = null;
  function onScroll(){
    if(raf) cancelAnimationFrame(raf);
    raf = requestAnimationFrame(updateUI);
  }

  track.addEventListener('scroll', onScroll, { passive: true });
  window.addEventListener('resize', updateUI, { passive: true });

  buildDots();
  updateUI();

  // ── Autoplay ──────────────────────────────────────────────
  const INTERVAL = 3000;
  let timer = null;
  let paused = false;

  function advance(){
    if(paused) return;
    const next = getIndex() + 1;
    scrollToIndex(next < slides.length ? next : 0);
  }

  function startAutoplay(){
    if(timer) return;
    timer = setInterval(advance, INTERVAL);
  }

  function stopAutoplay(){
    clearInterval(timer);
    timer = null;
  }

  function pause(){ paused = true;  stopAutoplay(); }
  function resume(){ paused = false; startAutoplay(); }

  // Pause while user hovers or focuses inside the carousel
  root.addEventListener('mouseenter', pause);
  root.addEventListener('mouseleave', resume);
  root.addEventListener('focusin',    pause);
  root.addEventListener('focusout',   resume);

  // Also restart timer after manual prev/next click
  if(prevBtn) prevBtn.addEventListener('click', () => { stopAutoplay(); startAutoplay(); });
  if(nextBtn) nextBtn.addEventListener('click', () => { stopAutoplay(); startAutoplay(); });

  startAutoplay();
})();
