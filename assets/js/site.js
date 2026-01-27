(function () {
  function currentFile() {
    var path = window.location.pathname || "";
    var file = path.split("/").pop();
    if (!file) return "index.html";
    return file;
  }

  function normalizeHref(href) {
    if (!href) return "";
    var clean = href.split("#")[0];
    return clean || "index.html";
  }

  function markActiveLinks() {
    var file = currentFile();

    var isServiceDetail = /^service-.*\.html$/i.test(file);
    var isDeptDetail = /^department-.*\.html$/i.test(file);

    var navLinks = document.querySelectorAll("nav a[href]");
    var footerLinks = document.querySelectorAll(".site-footer a[href]");

    function applyActive(links, hrefMatch) {
      links.forEach(function (a) {
        var href = normalizeHref(a.getAttribute("href"));
        if (href === hrefMatch) {
          a.setAttribute("aria-current", "page");
          a.classList.add("is-active");
        }
      });
    }

    // Exact match
    applyActive(navLinks, file);
    applyActive(footerLinks, file);

    // Group detail pages under their parents
    if (isServiceDetail) {
      applyActive(navLinks, "services.html");
      applyActive(footerLinks, "services.html");
    }
    if (isDeptDetail) {
      applyActive(navLinks, "departments.html");
      applyActive(footerLinks, "departments.html");
    }
  }

  function setupMobileSubmenus() {
    var media = window.matchMedia("(max-width: 980px)");
    var items = document.querySelectorAll("nav li.has-submenu");

    items.forEach(function (li) {
      var trigger = li.querySelector(":scope > a");
      var panel = li.querySelector(":scope .nav-mega");
      if (!trigger || !panel) return;

      trigger.setAttribute("aria-haspopup", "true");
      trigger.setAttribute("aria-expanded", "false");

      trigger.addEventListener("click", function (e) {
        if (!media.matches) return; // desktop: allow navigation
        // On mobile, first tap opens submenu; second tap navigates
        if (!li.classList.contains("submenu-open")) {
          e.preventDefault();
          li.classList.add("submenu-open");
          trigger.setAttribute("aria-expanded", "true");
        } else {
          // allow navigation
          li.classList.remove("submenu-open");
          trigger.setAttribute("aria-expanded", "false");
        }
      });
    });
  }

  function setupCounters() {
    var counters = document.querySelectorAll("[data-count]");
    if (!counters.length) return;

    var prefersReduced = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    function formatValue(el, value) {
      var suffix = el.getAttribute("data-suffix") || "";
      var fmt = (el.getAttribute("data-format") || "").toLowerCase();
      var out;

      if (fmt === "compact" && typeof Intl !== "undefined" && Intl.NumberFormat) {
        out = new Intl.NumberFormat("en", { notation: "compact", maximumFractionDigits: 1 }).format(value);
        out = out.replace("K", "k");
      } else {
        out = Math.round(value).toLocaleString();
      }
      return out + suffix;
    }

    function animate(el) {
      var target = parseFloat(el.getAttribute("data-count") || "0");
      var duration = 900;
      var start = null;

      function frame(ts) {
        if (!start) start = ts;
        var t = Math.min(1, (ts - start) / duration);
        var value = target * t;
        el.textContent = formatValue(el, value);
        if (t < 1) requestAnimationFrame(frame);
      }

      if (prefersReduced) {
        el.textContent = formatValue(el, target);
        return;
      }
      requestAnimationFrame(frame);
    }

    var seen = new WeakSet();
    var io = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting && !seen.has(entry.target)) {
            seen.add(entry.target);
            animate(entry.target);
          }
        });
      },
      { threshold: 0.35 }
    );

    counters.forEach(function (el) {
      io.observe(el);
    });
  }

  document.addEventListener("DOMContentLoaded", function () {
    markActiveLinks();
    setupMobileSubmenus();
    setupCounters();
  });
})();
