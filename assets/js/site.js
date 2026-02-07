(function () {
  function normalizePhone(raw) {
    if (!raw) return "";
    return String(raw).trim().replace(/[^\d+]/g, "");
  }

  function setupTopbarPhoneAndCleanup() {
    // 1) Remove language options from the topbar
    var lang = document.querySelector(".topbar .topbar-lang");
    if (lang && lang.parentNode) lang.parentNode.removeChild(lang);

    // 2) Remove 'Consultation by appointment' from header actions
    var headerContact = document.querySelector("header .header-actions .contact");
    if (headerContact && headerContact.parentNode) headerContact.parentNode.removeChild(headerContact);

    // 3) Add phone number to the topbar (before social icons)
    var topbarRight = document.querySelector(".topbar .topbar-right");
    var social = document.querySelector(".topbar .topbar-social");
    if (!topbarRight || !social) return;

    // Avoid duplicates if multiple pages/scripts run.
    if (document.querySelector(".topbar [data-topbar-phone]")) return;

    // Prefer an existing phone number from the site, otherwise fall back.
    var existingTel = document.querySelector('a[href^="tel:"]');
    var phoneText = existingTel ? (existingTel.textContent || "").trim() : "+255 742 398 600";
    var phoneHref = existingTel ? existingTel.getAttribute("href") : ("tel:" + normalizePhone(phoneText) || "tel:+255742398600");

    var item = document.createElement("div");
    item.className = "topbar-item";
    item.setAttribute("data-topbar-phone", "true");

    var svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    svg.setAttribute("class", "topbar-ico");
    svg.setAttribute("viewBox", "0 0 24 24");
    svg.setAttribute("fill", "none");
    svg.setAttribute("aria-hidden", "true");
    var path = document.createElementNS("http://www.w3.org/2000/svg", "path");
    path.setAttribute(
      "d",
      "M7.5 3.5h.9c.6 0 1.1.4 1.2 1l.6 3c.1.6-.2 1.2-.7 1.4l-1.4.6c1 2.2 2.8 4 5 5l.6-1.4c.2-.6.8-.8 1.4-.7l3 .6c.6.1 1 .6 1 1.2v.9c0 1.1-.9 2-2 2C11 18.5 5.5 13 5.5 6.5c0-1.1.9-2 2-2Z"
    );
    path.setAttribute("stroke", "currentColor");
    path.setAttribute("stroke-width", "2");
    path.setAttribute("stroke-linejoin", "round");
    svg.appendChild(path);

    var a = document.createElement("a");
    a.href = phoneHref || "tel:+255742398600";
    a.textContent = phoneText || "+255 742 398 600";

    item.appendChild(svg);
    item.appendChild(a);

    topbarRight.insertBefore(item, social);
  }

  function setupMobileDrawer() {
    // Avoid double-binding if multiple scripts try to wire the drawer.
    if (document.documentElement && document.documentElement.hasAttribute("data-nav-drawer-wired")) return;

    var toggleBtn = document.querySelector(".menu-toggle");
    var backdrop = document.querySelector("[data-nav-backdrop]");
    var closeBtn = document.querySelector("[data-nav-close]");
    var nav = document.getElementById("primary-nav") || document.querySelector('header nav[aria-label="Primary"]');

    if (!toggleBtn || !nav) return;

    function isMobile() {
      if (!window.matchMedia) return false;
      return window.matchMedia("(max-width: 980px)").matches;
    }

    function isOpen() {
      return document.body.classList.contains("nav-open");
    }

    function sync() {
      // Keep ARIA attributes aligned.
      if (nav && nav.id) toggleBtn.setAttribute("aria-controls", nav.id);
      toggleBtn.setAttribute("aria-expanded", isOpen() ? "true" : "false");
    }

    function open() {
      document.body.classList.add("nav-open");
      sync();
    }

    function close() {
      document.body.classList.remove("nav-open");
      sync();
    }

    toggleBtn.addEventListener("click", function (e) {
      e.preventDefault();
      if (isOpen()) close();
      else open();
    });

    if (backdrop) {
      backdrop.addEventListener("click", function (e) {
        e.preventDefault();
        close();
      });
    }

    if (closeBtn) {
      closeBtn.addEventListener("click", function (e) {
        e.preventDefault();
        close();
      });
    }

    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape") close();
    });

    // Close nav when a link is clicked.
    document.addEventListener("click", function (e) {
      var a = e.target && e.target.closest ? e.target.closest("nav a") : null;
      if (!a) return;

      // On mobile, allow first tap on submenu trigger to open the submenu (handled elsewhere).
      var li = a.closest && a.closest("li.has-submenu");
      var isSubmenuTrigger = li && li.querySelector && li.querySelector(":scope > a") === a;
      if (isMobile() && isSubmenuTrigger) return;

      close();
    });

    // If we move to desktop, ensure the drawer state can't get stuck.
    try {
      if (window.matchMedia) {
        var mql = window.matchMedia("(max-width: 980px)");
        var onChange = function () {
          if (!mql.matches) close();
          else sync();
        };
        if (mql && mql.addEventListener) mql.addEventListener("change", onChange);
        else if (mql && mql.addListener) mql.addListener(onChange);
      }
    } catch (e) {}

    sync();
    if (document.documentElement) document.documentElement.setAttribute("data-nav-drawer-wired", "true");
  }

  function setupMobileNavExtras() {
    var nav = document.querySelector('header nav[aria-label="Primary"]');
    if (!nav) return;
    var existing = nav.querySelector('[data-mobile-nav-extras]');

    var extras = existing || document.createElement('div');
    if (!existing) {
      extras.className = 'mobile-nav-extras';
      extras.setAttribute('data-mobile-nav-extras', '');
    }

    function isMobile() {
      if (!window.matchMedia) return false;
      return window.matchMedia('(max-width: 980px)').matches;
    }

    function syncVisibility() {
      // Use the hidden attribute so it cannot affect desktop layout even if CSS is overridden.
      extras.hidden = !isMobile();
      extras.setAttribute('aria-hidden', extras.hidden ? 'true' : 'false');
    }

    // If it's already built, just keep visibility in sync.
    if (existing) {
      syncVisibility();
      try {
        if (window.matchMedia) {
          var mql = window.matchMedia('(max-width: 980px)');
          if (mql && mql.addEventListener) mql.addEventListener('change', syncVisibility);
          else if (mql && mql.addListener) mql.addListener(syncVisibility);
        } else {
          window.addEventListener('resize', syncVisibility);
        }
      } catch (e) {}
      return;
    }

    extras.innerHTML = '';

    var ctaWrap = document.createElement('div');
    ctaWrap.className = 'mobile-cta';

    var proposal = document.querySelector('header .header-actions a.btn');
    if (proposal) {
      var proposalClone = proposal.cloneNode(true);
      proposalClone.removeAttribute('style');
      ctaWrap.appendChild(proposalClone);
    }

    var metaWrap = document.createElement('div');
    metaWrap.className = 'mobile-meta';

    var contactText = document.querySelector('header .header-actions .contact strong');
    if (contactText && contactText.textContent) {
      var contactLine = document.createElement('div');
      contactLine.textContent = contactText.textContent.trim();
      metaWrap.appendChild(contactLine);
    }

    var email = document.querySelector('.topbar a[href^="mailto:"]');
    if (email) {
      metaWrap.appendChild(email.cloneNode(true));
    }

    var tagline = document.querySelector('.topbar-left .topbar-item:nth-child(2) span');
    if (tagline && tagline.textContent) {
      var taglineLine = document.createElement('div');
      taglineLine.textContent = tagline.textContent.trim();
      metaWrap.appendChild(taglineLine);
    }

    var socials = document.querySelector('.topbar-social');
    extras.appendChild(ctaWrap);
    extras.appendChild(metaWrap);
    if (socials) {
      var socialClone = socials.cloneNode(true);
      socialClone.classList.add('mobile-social');
      extras.appendChild(socialClone);
    }

    nav.appendChild(extras);

    syncVisibility();
    try {
      if (window.matchMedia) {
        var mql2 = window.matchMedia('(max-width: 980px)');
        if (mql2 && mql2.addEventListener) mql2.addEventListener('change', syncVisibility);
        else if (mql2 && mql2.addListener) mql2.addListener(syncVisibility);
      } else {
        window.addEventListener('resize', syncVisibility);
      }
    } catch (e) {}
  }

  function setupChatWidget() {
    // Allow opting out on any page:
    // <body data-disable-chat="true">
    if (document.body && document.body.getAttribute("data-disable-chat") === "true") return;

    // If a page already has a widget in its HTML, just wire it up.
    var existing = document.querySelector("[data-chat-widget]");
    var root = existing || document.createElement("div");

    var defaults = {
      whatsapp: "+255700000000",
      sms: "+255700000000",
      phone: "+255700000000",
      email: "hello@salmart.example",
      instagram: "salmartdiplomatichospitality",
      defaultMessage:
        "Hello Salmart team, I’m reaching out from your website. I’d like to ask about your services.",
      emailSubject: "Website inquiry",
    };

    // Optional global override:
    // window.SDH_CHAT_CONFIG = { whatsapp:'', sms:'', phone:'', email:'', instagram:'', defaultMessage:'', emailSubject:'' }
    var cfg = (window.SDH_CHAT_CONFIG && typeof window.SDH_CHAT_CONFIG === "object") ? window.SDH_CHAT_CONFIG : {};

    function encodeText(text) {
      return encodeURIComponent((text || "").trim());
    }

    function normalizePhone(raw) {
      if (!raw) return "";
      return String(raw).trim().replace(/[^\d+]/g, "");
    }

    function digitsOnly(phone) {
      return String(phone || "")
        .trim()
        .replace(/[^\d]/g, "");
    }

    function safeSetHidden(el, hidden) {
      if (!el) return;
      el.classList.toggle("chat-hidden", !!hidden);
    }

    function channelMeta(channel) {
      switch (channel) {
        case "whatsapp":
          return { title: "WhatsApp", subtitle: "We’ll open WhatsApp with your message." };
        case "sms":
          return { title: "SMS", subtitle: "We’ll open your messaging app with your message." };
        case "call":
          return { title: "Call", subtitle: "We’ll start a phone call." };
        case "email":
          return { title: "Email", subtitle: "We’ll open your email client with your message." };
        case "instagram":
          return { title: "Instagram DM", subtitle: "We’ll open Instagram direct messages." };
        default:
          return { title: "Hi there", subtitle: "Choose a channel and we’ll open it with your message." };
      }
    }

    function buildLink(channel, config, message) {
      var msg = (message || config.defaultMessage || "").trim();

      if (channel === "whatsapp") {
        var wa = digitsOnly(config.whatsapp);
        if (!wa) return "";
        return "https://wa.me/" + wa + "?text=" + encodeText(msg);
      }

      if (channel === "sms") {
        var sms = normalizePhone(config.sms);
        if (!sms) return "";
        return "sms:" + sms + "?body=" + encodeText(msg);
      }

      if (channel === "call") {
        var tel = normalizePhone(config.phone);
        if (!tel) return "";
        return "tel:" + tel;
      }

      if (channel === "email") {
        var email = (config.email || "").trim();
        if (!email) return "";
        var subject = config.emailSubject || "Website inquiry";
        var params =
          "subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(msg);
        return "mailto:" + email + "?" + params;
      }

      if (channel === "instagram") {
        var user = (config.instagram || "").trim().replace(/^@/, "");
        if (!user) return "";
        return "https://ig.me/m/" + encodeURIComponent(user);
      }

      return "";
    }

    function getConfig() {
      function pick(key) {
        return (cfg[key] != null ? cfg[key] : defaults[key]) || "";
      }

      return {
        whatsapp: pick("whatsapp"),
        sms: pick("sms"),
        phone: pick("phone"),
        email: pick("email"),
        instagram: pick("instagram"),
        defaultMessage: pick("defaultMessage"),
        emailSubject: pick("emailSubject"),
      };
    }

    function createMarkup(target, config) {
      target.className = "chat-widget";
      target.setAttribute("data-chat-widget", "");
      target.setAttribute("aria-label", "Quick chat");

      // Keep config on the element for easier overrides later.
      target.setAttribute("data-whatsapp", config.whatsapp);
      target.setAttribute("data-sms", config.sms);
      target.setAttribute("data-phone", config.phone);
      target.setAttribute("data-email", config.email);
      target.setAttribute("data-instagram", config.instagram);
      target.setAttribute("data-default-message", config.defaultMessage);
      target.setAttribute("data-email-subject", config.emailSubject);

      target.innerHTML =
        '<button class="chat-fab" type="button" aria-label="Open chat options" aria-expanded="false" aria-controls="chat-panel" data-chat-toggle>' +
        '  <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">' +
        '    <path d="M7.6 18.7l-2.9.8.8-2.9A8.5 8.5 0 1 1 7.6 18.7Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>' +
        '    <path d="M8.7 10.9h6.6M8.7 14h4.2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>' +
        '  </svg>' +
        '</button>' +
        '<section class="chat-panel" id="chat-panel" role="dialog" aria-label="Contact options" data-chat-panel>' +
        '  <div class="chat-header">' +
        '    <div class="chat-header-row">' +
        '      <button class="chat-header-back chat-hidden" type="button" aria-label="Back" data-chat-back>←</button>' +
        '      <div style="flex:1">' +
        '        <h3 class="chat-title" data-chat-title>Hi there</h3>' +
        '        <div class="chat-subtitle" data-chat-subtitle>Choose a channel and we’ll open it with your message.</div>' +
        '      </div>' +
        '      <button class="chat-header-close" type="button" aria-label="Close" data-chat-close>×</button>' +
        '    </div>' +
        '  </div>' +
        '  <div class="chat-body">' +
        '    <div class="chat-menu" data-chat-menu>' +
        '      <button class="chat-option" type="button" data-chat-channel="whatsapp">' +
        '        <div class="chat-ico" style="background:#22c55e">' +
        '          <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M12 2a9.6 9.6 0 0 0-8.3 14.4L2 22l5.7-1.5A9.6 9.6 0 1 0 12 2Zm5.6 13.4c-.2.6-1.2 1.1-1.7 1.1-.5.1-1.1.2-3.5-.8-3-1.2-4.8-4.3-5-4.6-.2-.3-1.2-1.6-1.2-3.1 0-1.4.7-2.1 1-2.4.2-.3.6-.4.8-.4h.6c.2 0 .5-.1.7.5.2.6.8 2.1.9 2.2.1.2.1.4 0 .6-.1.2-.2.4-.3.6-.1.1-.3.3-.4.4-.2.2-.3.4-.1.7.2.3.8 1.3 1.7 2.1 1.2 1.1 2.2 1.5 2.5 1.6.3.1.5.1.7-.1.2-.2.8-.9 1-1.2.2-.3.4-.2.7-.1.3.1 2 .9 2.4 1 .4.2.6.3.7.5 0 .2 0 .6-.2 1.2Z"/></svg>' +
        '        </div>' +
        '        <div><strong>WhatsApp</strong><span>Start a WhatsApp chat</span></div>' +
        '      </button>' +
        '      <button class="chat-option" type="button" data-chat-channel="sms">' +
        '        <div class="chat-ico" style="background:#3b82f6">' +
        '          <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M4 4h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H9l-5 4v-4H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Zm3 6h10v2H7V10Zm0-3h10v2H7V7Z"/></svg>' +
        '        </div>' +
        '        <div><strong>SMS</strong><span>Send a text message</span></div>' +
        '      </button>' +
        '      <button class="chat-option" type="button" data-chat-channel="call">' +
        '        <div class="chat-ico" style="background:#10b981">' +
        '          <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M6.6 10.8c1.6 3.1 3.5 5 6.6 6.6l2.2-2.2c.3-.3.7-.4 1.1-.2 1.2.4 2.4.6 3.7.6.6 0 1 .4 1 1V21c0 .6-.4 1-1 1C10.4 22 2 13.6 2 3c0-.6.4-1 1-1h3.4c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.7.1.4 0 .8-.2 1.1l-2.2 2.1Z"/></svg>' +
        '        </div>' +
        '        <div><strong>Call</strong><span>Call our team</span></div>' +
        '      </button>' +
        '      <button class="chat-option" type="button" data-chat-channel="email">' +
        '        <div class="chat-ico" style="background:#f59e0b">' +
        '          <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Zm0 4-8 5L4 8V6l8 5 8-5v2Z"/></svg>' +
        '        </div>' +
        '        <div><strong>Email</strong><span>Send an email inquiry</span></div>' +
        '      </button>' +
        '      <button class="chat-option" type="button" data-chat-channel="instagram">' +
        '        <div class="chat-ico" style="background:linear-gradient(135deg,#f58529,#dd2a7b,#8134af,#515bd4)">' +
        '          <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5Zm10 2H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3Zm-5 4.5A3.5 3.5 0 1 1 8.5 12 3.5 3.5 0 0 1 12 8.5Zm0 2A1.5 1.5 0 1 0 13.5 12 1.5 1.5 0 0 0 12 10.5ZM17.8 7.2a.8.8 0 1 1-.8-.8.8.8 0 0 1 .8.8Z"/></svg>' +
        '        </div>' +
        '        <div><strong>Instagram DM</strong><span>Open direct messages</span></div>' +
        '      </button>' +
        '    </div>' +
        '    <div class="chat-convo chat-hidden" data-chat-convo>' +
        '      <div class="chat-messages" aria-label="Message preview" data-chat-messages>' +
        '        <div class="chat-bubble them">Hello, share a few details and we’ll open the right app with your message.</div>' +
        '      </div>' +
        '      <form class="chat-compose" data-chat-form>' +
        '        <textarea class="chat-input" rows="2" aria-label="Message" data-chat-input></textarea>' +
        '        <button class="chat-send" type="submit" aria-label="Send">' +
        '          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">' +
        '            <path d="M4 12h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>' +
        '            <path d="M14 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>' +
        '          </svg>' +
        '        </button>' +
        '      </form>' +
        '    </div>' +
        '  </div>' +
        '</section>';
    }

    function initWidget(widgetRoot) {
      var toggleBtn = widgetRoot.querySelector("[data-chat-toggle]");
      var closeBtn = widgetRoot.querySelector("[data-chat-close]");
      var backBtn = widgetRoot.querySelector("[data-chat-back]");
      var menu = widgetRoot.querySelector("[data-chat-menu]");
      var convo = widgetRoot.querySelector("[data-chat-convo]");
      var titleEl = widgetRoot.querySelector("[data-chat-title]");
      var subtitleEl = widgetRoot.querySelector("[data-chat-subtitle]");
      var form = widgetRoot.querySelector("[data-chat-form]");
      var input = widgetRoot.querySelector("[data-chat-input]");

      var activeChannel = null;
      var config = {
        whatsapp: widgetRoot.getAttribute("data-whatsapp") || "",
        sms: widgetRoot.getAttribute("data-sms") || "",
        phone: widgetRoot.getAttribute("data-phone") || "",
        email: widgetRoot.getAttribute("data-email") || "",
        instagram: widgetRoot.getAttribute("data-instagram") || "",
        defaultMessage: widgetRoot.getAttribute("data-default-message") || "",
        emailSubject: widgetRoot.getAttribute("data-email-subject") || "Website inquiry",
      };

      function setHeaderFor(channel) {
        var meta = channelMeta(channel);
        if (titleEl) titleEl.textContent = meta.title;
        if (subtitleEl) subtitleEl.textContent = meta.subtitle;
      }

      function showMenu() {
        activeChannel = null;
        setHeaderFor(null);
        safeSetHidden(menu, false);
        safeSetHidden(convo, true);
        safeSetHidden(backBtn, true);
      }

      function showConvo(channel) {
        activeChannel = channel;
        setHeaderFor(channel);
        safeSetHidden(menu, true);
        safeSetHidden(convo, false);
        safeSetHidden(backBtn, false);
        if (input) {
          input.value = config.defaultMessage || "";
          input.focus();
          try {
            input.setSelectionRange(input.value.length, input.value.length);
          } catch (e) {
            // ignore
          }
        }
      }

      function openPanel() {
        widgetRoot.classList.add("is-open");
        if (toggleBtn) toggleBtn.setAttribute("aria-expanded", "true");
        showMenu();
        var first = menu ? menu.querySelector("[data-chat-channel]") : null;
        if (first) first.focus();
      }

      function closePanel() {
        widgetRoot.classList.remove("is-open");
        if (toggleBtn) toggleBtn.setAttribute("aria-expanded", "false");
        activeChannel = null;
        setHeaderFor(null);
      }

      function openTarget(channel, message) {
        var url = buildLink(channel, config, message);
        if (!url) {
          alert(
            "This channel isn’t configured yet. Set contact details in window.SDH_CHAT_CONFIG in assets/js/site.js."
          );
          return;
        }

        if (channel === "instagram") {
          if (message && navigator.clipboard && navigator.clipboard.writeText) {
            navigator.clipboard.writeText(message).catch(function () {});
          }
        }

        window.location.href = url;
      }

      if (toggleBtn) {
        toggleBtn.addEventListener("click", function () {
          if (widgetRoot.classList.contains("is-open")) closePanel();
          else openPanel();
        });
      }

      if (closeBtn) closeBtn.addEventListener("click", closePanel);
      if (backBtn) backBtn.addEventListener("click", showMenu);

      if (menu) {
        menu.addEventListener("click", function (e) {
          var btn = e.target.closest("[data-chat-channel]");
          if (!btn) return;
          showConvo(btn.getAttribute("data-chat-channel"));
        });
      }

      // Click outside to close
      document.addEventListener("click", function (e) {
        if (!widgetRoot.classList.contains("is-open")) return;
        if (widgetRoot.contains(e.target)) return;
        closePanel();
      });

      // ESC to close
      document.addEventListener("keydown", function (e) {
        if (!widgetRoot.classList.contains("is-open")) return;
        if (e.key === "Escape") {
          e.preventDefault();
          closePanel();
          if (toggleBtn) toggleBtn.focus();
        }
      });

      if (form) {
        form.addEventListener("submit", function (e) {
          e.preventDefault();
          if (!activeChannel) return;
          var msg = input ? String(input.value || "").trim() : "";
          if (!msg && activeChannel !== "call") msg = config.defaultMessage || "";
          openTarget(activeChannel, msg);
        });
      }
    }

    var config = getConfig();
    if (!existing) {
      createMarkup(root, config);
      document.body.appendChild(root);
    }

    initWidget(root);
  }

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
      { href: "service-sports-tourism-services.html", label: "Sports Tourism Service" },
      { href: "service-cultural-tourism-experiences.html", label: "Cultural & Tourism Experiences" },
      { href: "service-luxury-accommodation-logistics.html", label: "Luxury Accommodation & Logistics" },
      { href: "service-media-management-strategic-storytelling.html", label: "Media Management & Strategic Storytelling" },
      { href: "service-protocol-diplomatic.html", label: "Protocol & Diplomatic Services" },
    ];

    var departmentLinks = [
      { href: "department-business-development-partnerships.html", label: "Business Development & Partnerships" },
      { href: "department-tours-experiences.html", label: "Tours & Experiences" },
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

      function ensureOverviewLink() {
        if (panel.hasAttribute("data-mobile-overview")) return;

        var href = trigger.getAttribute("href") || "#";
        var label = (trigger.textContent || "").trim() || "Overview";

        var a = document.createElement("a");
        a.href = href;
        a.className = "nav-overview-link";
        a.textContent = "View all " + label;

        var firstCol = panel.querySelector(".nav-col");
        if (firstCol) {
          firstCol.insertBefore(a, firstCol.firstChild);
        } else {
          panel.insertBefore(a, panel.firstChild);
        }

        panel.setAttribute("data-mobile-overview", "true");
      }

      trigger.addEventListener("click", function (e) {
        if (!media.matches) return; // desktop: allow navigation
        e.preventDefault();

        var willOpen = !li.classList.contains("submenu-open");
        // Close any other open submenus.
        items.forEach(function (other) {
          if (other !== li) {
            other.classList.remove("submenu-open");
            var otherTrigger = other.querySelector(":scope > a");
            if (otherTrigger) otherTrigger.setAttribute("aria-expanded", "false");
          }
        });

        if (willOpen) {
          ensureOverviewLink();
          li.classList.add("submenu-open");
          trigger.setAttribute("aria-expanded", "true");
        } else {
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
    setupTopbarPhoneAndCleanup();
    setupMobileDrawer();
    hydrateMegaMenus();
    markActiveLinks();
    setupMobileSubmenus();
    setupCounters();
    setupMobileNavExtras();
    setupChatWidget();
  });
})();
