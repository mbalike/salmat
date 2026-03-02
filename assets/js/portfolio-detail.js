(function () {
  function qs(sel, root) { return (root || document).querySelector(sel); }
  function qsa(sel, root) { return Array.from((root || document).querySelectorAll(sel)); }

  /* ── Build full-screen gallery viewer DOM ──────────────── */
  function buildViewer() {
    var el = document.createElement('div');
    el.className = 'pd-lightbox';
    el.setAttribute('role', 'dialog');
    el.setAttribute('aria-modal', 'true');
    el.setAttribute('aria-label', 'Image viewer');

    var igSvg = '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9A5.5 5.5 0 0 1 16.5 22h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2Zm0 2A3.5 3.5 0 0 0 4 7.5v9A3.5 3.5 0 0 0 7.5 20h9a3.5 3.5 0 0 0 3.5-3.5v-9A3.5 3.5 0 0 0 16.5 4h-9Zm4.5 3.5A4.5 4.5 0 1 1 7.5 12 4.5 4.5 0 0 1 12 7.5Zm0 2A2.5 2.5 0 1 0 14.5 12 2.5 2.5 0 0 0 12 9.5Zm6.2-2.3a1 1 0 1 1 0 2 1 1 0 0 1 0-2Z"/></svg>';

    el.innerHTML =
      '<div class="pd-lb-wrap">' +
        '<div class="pd-lb-topbar">' +
          '<div class="pd-lb-info">' +
            '<span class="pd-lb-title"></span>' +
            '<span class="pd-lb-sep" aria-hidden="true">&thinsp;&mdash;&thinsp;</span>' +
            '<span class="pd-lb-counter"></span>' +
          '</div>' +
          '<div class="pd-lb-ctrls">' +
            '<button class="pd-lb-ctrl" data-lb-prev aria-label="Previous">' +
              '<svg viewBox="0 0 24 24" fill="none"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>' +
            '</button>' +
            '<button class="pd-lb-ctrl" data-lb-next aria-label="Next">' +
              '<svg viewBox="0 0 24 24" fill="none"><path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>' +
            '</button>' +
            '<button class="pd-lb-ctrl pd-lb-close" data-lb-close aria-label="Close">' +
              '<svg viewBox="0 0 24 24" fill="none"><path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>' +
            '</button>' +
          '</div>' +
        '</div>' +
        '<div class="pd-lb-stage">' +
          '<button class="pd-lb-nav-btn pd-lb-nav-prev" data-lb-prev aria-label="Previous image">' +
            '<svg viewBox="0 0 24 24" fill="none"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>' +
          '</button>' +
          '<div class="pd-lb-imgwrap"><img class="pd-lb-img" src="" alt="" /></div>' +
          '<button class="pd-lb-nav-btn pd-lb-nav-next" data-lb-next aria-label="Next image">' +
            '<svg viewBox="0 0 24 24" fill="none"><path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>' +
          '</button>' +
        '</div>' +
        '<div class="pd-lb-footer">' +
          '<div class="pd-lb-thumbs-outer"><div class="pd-lb-thumbs"></div></div>' +
          '<div class="pd-lb-bottombar">' +
            '<div class="pd-lb-share-wrap">' +
              '<button class="pd-lb-share-btn" type="button" aria-haspopup="true" aria-expanded="false">' +
                '<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><polyline points="16 6 12 2 8 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><line x1="12" y1="2" x2="12" y2="15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>' +
                ' Share' +
              '</button>' +
              '<div class="pd-lb-share-drop" hidden>' +
                '<a class="pd-lb-share-wa" href="#" target="_blank" rel="noreferrer">' +
                  '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.5 11.9c0 4.8-3.9 8.6-8.6 8.6-1.5 0-2.9-.4-4.2-1.1l-3 1 .98-2.9A8.53 8.53 0 0 1 3.3 12c0-4.8 3.9-8.6 8.6-8.6 4.8 0 8.6 3.9 8.6 8.6Zm-8.6-7c-3.9 0-7.1 3.2-7.1 7.1 0 1.4.4 2.6 1.1 3.7l.18.29-.58 1.7 1.76-.56.28.17c1.1.7 2.4 1.1 3.7 1.1 3.9 0 7.1-3.2 7.1-7.1s-3.2-7.1-7.1-7.1Z"/><path d="M15.6 13.9c-.2-.1-1.2-.6-1.4-.7-.2-.1-.3-.1-.5.1l-.6.7c-.1.2-.3.2-.5.1-.2-.1-.9-.3-1.7-1.1-.6-.6-1.1-1.4-1.2-1.6-.1-.2 0-.4.1-.5l.5-.6c.1-.1.1-.3.1-.4l-.7-1.6c-.1-.2-.2-.3-.4-.3h-.4c-.2 0-.4.1-.6.3-.2.2-.8.8-.8 1.9s.8 2.2.9 2.4c.1.2 1.6 2.5 4 3.4.6.2 1 .3 1.3.4.6.2 1.1.2 1.5.1.5-.1 1.2-.5 1.4-1 .2-.5.2-.9.1-1-.1-.1-.2-.2-.4-.3Z"/></svg>' +
                  ' WhatsApp' +
                '</a>' +
                '<a class="pd-lb-share-ig" href="#" data-lb-ig>' +
                  igSvg +
                  ' Instagram' +
                '</a>' +
              '</div>' +
            '</div>' +
          '</div>' +
        '</div>' +
      '</div>';

    document.body.appendChild(el);
    return el;
  }

  /* ── Gallery viewer logic ──────────────────────────────── */
  function setupViewer() {
    var links = qsa('a[data-lightbox]');
    if (!links.length) return;

    /* Collect all images: {src, thumb, alt} */
    var images = links.map(function (a) {
      var img = qs('img', a);
      var src = a.getAttribute('href') || '';
      return {
        src:   src,
        thumb: (img && img.src) || a.getAttribute('data-thumb') || src,
        alt:   (img && img.alt) || a.getAttribute('aria-label') || ''
      };
    });

    var lb        = buildViewer();
    var mainImg   = qs('.pd-lb-img', lb);
    var titleEl   = qs('.pd-lb-title', lb);
    var counterEl = qs('.pd-lb-counter', lb);
    var thumbsEl  = qs('.pd-lb-thumbs', lb);
    var shareBtn  = qs('.pd-lb-share-btn', lb);
    var shareDrop = qs('.pd-lb-share-drop', lb);
    var waLink    = qs('.pd-lb-share-wa', lb);
    var igLink    = qs('.pd-lb-share-ig', lb);

    var cur         = 0;
    var lastFocused = null;
    var galleryTitle = (function () {
      var h = qs('h1.inner-hero-title') || qs('h1');
      return h ? h.textContent.trim() : document.title;
    }());

    var igSvgInner = '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9A5.5 5.5 0 0 1 16.5 22h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2Zm0 2A3.5 3.5 0 0 0 4 7.5v9A3.5 3.5 0 0 0 7.5 20h9a3.5 3.5 0 0 0 3.5-3.5v-9A3.5 3.5 0 0 0 16.5 4h-9Zm4.5 3.5A4.5 4.5 0 1 1 7.5 12 4.5 4.5 0 0 1 12 7.5Zm0 2A2.5 2.5 0 1 0 14.5 12 2.5 2.5 0 0 0 12 9.5Zm6.2-2.3a1 1 0 1 1 0 2 1 1 0 0 1 0-2Z"/></svg>';

    /* Build thumbnail strip */
    images.forEach(function (item, idx) {
      var btn = document.createElement('button');
      btn.className = 'pd-lb-thumb';
      btn.type = 'button';
      btn.setAttribute('aria-label', 'View photo ' + (idx + 1));
      var ti = document.createElement('img');
      ti.src = item.thumb;
      ti.alt = '';
      ti.loading = 'lazy';
      ti.decoding = 'async';
      btn.appendChild(ti);
      btn.addEventListener('click', function () { navigate(idx); });
      thumbsEl.appendChild(btn);
    });

    function navigate(idx) {
      cur = ((idx % images.length) + images.length) % images.length;
      var item = images[cur];
      mainImg.src           = item.src;
      mainImg.alt           = item.alt;
      titleEl.textContent   = galleryTitle;
      counterEl.textContent = (cur + 1) + ' / ' + images.length;
      var thumbBtns = qsa('.pd-lb-thumb', thumbsEl);
      thumbBtns.forEach(function (tb, i) { tb.classList.toggle('is-active', i === cur); });
      var active = thumbBtns[cur];
      if (active) active.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
    }

    function openAt(idx) {
      lastFocused = document.activeElement;
      navigate(idx);
      lb.classList.add('is-open');
      document.body.style.overflow = 'hidden';
      qs('.pd-lb-close', lb).focus();
      var text = encodeURIComponent(galleryTitle + '\n' + location.href);
      waLink.href = 'https://wa.me/?text=' + text;
    }

    function close() {
      lb.classList.remove('is-open');
      shareDrop.hidden = true;
      shareBtn.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
      if (lastFocused && lastFocused.focus) lastFocused.focus();
    }

    /* Attach click to all gallery links (visible + hidden) */
    links.forEach(function (a, idx) {
      a.addEventListener('click', function (e) { e.preventDefault(); openAt(idx); });
    });

    /* Navigation */
    qsa('[data-lb-prev]', lb).forEach(function (btn) {
      btn.addEventListener('click', function () { navigate(cur - 1); });
    });
    qsa('[data-lb-next]', lb).forEach(function (btn) {
      btn.addEventListener('click', function () { navigate(cur + 1); });
    });
    qsa('[data-lb-close]', lb).forEach(function (btn) {
      btn.addEventListener('click', close);
    });

    lb.addEventListener('click', function (e) { if (e.target === lb) close(); });

    /* Share dropdown */
    shareBtn.addEventListener('click', function (e) {
      e.stopPropagation();
      var isOpen = !shareDrop.hidden;
      shareDrop.hidden = isOpen;
      shareBtn.setAttribute('aria-expanded', String(!isOpen));
    });
    document.addEventListener('click', function () {
      if (!shareDrop.hidden) {
        shareDrop.hidden = true;
        shareBtn.setAttribute('aria-expanded', 'false');
      }
    });

    /* Instagram = copy link */
    igLink.addEventListener('click', function (e) {
      e.preventDefault();
      if (navigator.clipboard) {
        navigator.clipboard.writeText(location.href).then(function () {
          igLink.innerHTML = igSvgInner + ' Copied!';
          setTimeout(function () { igLink.innerHTML = igSvgInner + ' Instagram'; }, 2000);
        });
      }
    });

    /* Keyboard */
    document.addEventListener('keydown', function (e) {
      if (!lb.classList.contains('is-open')) return;
      if (e.key === 'Escape')     close();
      if (e.key === 'ArrowLeft')  navigate(cur - 1);
      if (e.key === 'ArrowRight') navigate(cur + 1);
    });
  }

  /* ── Page-level share links in pd-aside ────────────────── */
  function setupPageShare() {
    var url   = location.href;
    var h     = qs('h1.inner-hero-title') || qs('h1');
    var title = h ? h.textContent.trim() : document.title;
    var text  = encodeURIComponent(title + '\n' + url);

    qsa('a[data-share-wa]').forEach(function (a) {
      a.href   = 'https://wa.me/?text=' + text;
      a.target = '_blank';
      a.rel    = 'noreferrer';
    });

    qsa('a[data-share-ig]').forEach(function (a) {
      a.addEventListener('click', function (e) {
        e.preventDefault();
        if (navigator.clipboard) {
          navigator.clipboard.writeText(url).then(function () {
            var orig = a.innerHTML;
            a.textContent = '\u2713 Copied';
            setTimeout(function () { a.innerHTML = orig; }, 2000);
          });
        }
      });
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    setupViewer();
    setupPageShare();
  });
}());
