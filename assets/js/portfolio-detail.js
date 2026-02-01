(function () {
  function qs(sel, root) {
    return (root || document).querySelector(sel);
  }

  function qsa(sel, root) {
    return Array.from((root || document).querySelectorAll(sel));
  }

  function ensureLightbox() {
    var existing = qs('.pd-lightbox');
    if (existing) return existing;

    var lb = document.createElement('div');
    lb.className = 'pd-lightbox';
    lb.setAttribute('role', 'dialog');
    lb.setAttribute('aria-modal', 'true');
    lb.setAttribute('aria-label', 'Image preview');

    lb.innerHTML =
      '<div class="pd-lightbox-inner">' +
      '  <button class="pd-lightbox-close" type="button" aria-label="Close">' +
      '    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">' +
      '      <path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>' +
      '    </svg>' +
      '  </button>' +
      '  <img alt="" />' +
      '</div>';

    document.body.appendChild(lb);
    return lb;
  }

  function setupLightbox() {
    var links = qsa('a[data-lightbox]');
    if (!links.length) return;

    var lb = ensureLightbox();
    var img = qs('img', lb);
    var closeBtn = qs('.pd-lightbox-close', lb);

    var lastActive = null;

    function open(href, alt) {
      lastActive = document.activeElement;
      img.src = href;
      img.alt = alt || '';
      lb.classList.add('is-open');
      closeBtn.focus();
    }

    function close() {
      lb.classList.remove('is-open');
      img.removeAttribute('src');
      if (lastActive && lastActive.focus) lastActive.focus();
    }

    links.forEach(function (a) {
      a.addEventListener('click', function (e) {
        e.preventDefault();
        var href = a.getAttribute('href');
        var thumb = qs('img', a);
        open(href, (thumb && thumb.alt) || a.getAttribute('aria-label') || '');
      });
    });

    closeBtn.addEventListener('click', close);

    lb.addEventListener('click', function (e) {
      if (e.target === lb) close();
    });

    document.addEventListener('keydown', function (e) {
      if (!lb.classList.contains('is-open')) return;
      if (e.key === 'Escape') close();
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    setupLightbox();
  });
})();
