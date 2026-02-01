(function () {
  function textEquals(el, expected) {
    if (!el) return false;
    return (el.textContent || "").trim().toLowerCase() === expected.trim().toLowerCase();
  }

  function setColumnLinks(mega, title, links) {
    if (!mega) return;
    var cols = mega.querySelectorAll(".nav-col");
    var targetCol = null;
    cols.forEach(function (col) {
      var t = col.querySelector(":scope > .nav-col-title");
      if (textEquals(t, title)) targetCol = col;
    });
    if (!targetCol) return;

    // Remove existing links in that column, keep the title
    Array.from(targetCol.querySelectorAll(":scope > a")).forEach(function (a) {
      a.remove();
    });

    links.forEach(function (item) {
      var a = document.createElement("a");
      a.href = item.href;
      a.textContent = item.label;
      var arr = document.createElement("span");
      arr.className = "arr";
      arr.setAttribute("aria-hidden", "true");
      arr.textContent = "→";
      a.appendChild(document.createTextNode(" "));
      a.appendChild(arr);
      targetCol.appendChild(a);
    });
  }

  function hydrateMegaMenus() {
    var servicesMega = document.querySelector('.nav-mega[aria-label="Services menu"]');
    var departmentsMega = document.querySelector('.nav-mega[aria-label="Departments menu"]');

    // Keep the exact set of pages in sync with the workspace naming.
    var serviceLinks = [
      { href: "service-event-management-production.html", label: "Event Management & Production" },
      { href: "service-production-branding-venue.html", label: "Production, Branding & Venue" },
      { href: "service-conference-support-coverage.html", label: "Conference Support & Coverage" },
      { href: "service-mice-delivery.html", label: "MICE Delivery" },
      { href: "service-cruise-line-services.html", label: "Cruise Line Services" },
      { href: "service-cultural-tourism-experiences.html", label: "Cultural & Tourism Experiences" },
      { href: "service-luxury-accommodation-logistics.html", label: "Luxury Accommodation & Logistics" },
      { href: "service-media-management-strategic-storytelling.html", label: "Media Management & Strategic Storytelling" },
      { href: "service-protocol-diplomatic.html", label: "Protocol & Diplomatic Services" },
    ];

    var departmentLinks = [
      { href: "department-business-development-partnerships.html", label: "Business Development & Partnerships" },
      { href: "department-destination-management-hospitality.html", label: "Destination Management & Hospitality" },
      { href: "department-event-conference-management.html", label: "Event & Conference Management" },
      { href: "department-finance-administration.html", label: "Finance & Administration" },
      { href: "department-media-communications.html", label: "Media & Communications" },
      { href: "department-training-capacity-building.html", label: "Training & Capacity Building" },
    ];

    setColumnLinks(servicesMega, "Core Services", serviceLinks);
    setColumnLinks(departmentsMega, "Departments", [
      { href: "departments.html", label: "Departments Overview" },
    ].concat(departmentLinks));
  }

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
    var isPortfolioDetail = /^portfolio-detail-.*\.html$/i.test(file);

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

    if (isPortfolioDetail) {
      applyActive(navLinks, "portfolio.html");
      applyActive(footerLinks, "portfolio.html");
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
    hydrateMegaMenus();
    markActiveLinks();
    setupMobileSubmenus();
    setupCounters();
  });
})();
