(function () {
  const grid = document.getElementById("portfolioGrid");
  const loadMoreBtn = document.getElementById("loadMoreBtn");
  const tabs = Array.from(document.querySelectorAll("[data-portfolio-filter]"));

  if (!grid || !loadMoreBtn || !tabs.length) return;

  const ITEMS = [
    {
      title: "ALC 2025 & 10th FFT Anniversary",
      category: "Events",
      image: "assets/img/events/alc (1).jpeg",
      count: 23,
      href: "portfolio-detail-alc-2024-fft.html",
    },
    {
      title: "Ijuka Omuka Festival 2024",
      category: "Culture",
      image: "assets/img/events/ijuka (1).jpeg",
      count: 12,
      href: "portfolio-detail-ijuka-omuka-2024.html",
    },
    {
      title: "3rd FAR4ViBE Conference 2024",
      category: "Conference",
      image:
        "assets/img/events/FAR4VIBE (2).jpeg",
      count: 6,
      href: "portfolio-detail-far4vibe-2024.html",
    },
    {
      title: "Regenerative Ocean Week (ROW) 2025",
      category: "Conference",
      image:
        "assets/img/events/ROW25 (2).jpg",
      count: 6,
      href: "portfolio-detail-row-2025.html",
    },
    {
      title: "MarCOSIO Fisheries Exchange Workshop 2025",
      category: "Conference",
      image: "assets/img/events/MarCOSIO (1).jpeg",
      count: 22,
      href: "portfolio-detail-marcosio-2025.html",
    },
    {
      title: "Korean Delegation Visit to Tanzania",
      category: "Government",
      image: "assets/img/events/korea-1.jpeg",
      count: 37,
      href: "portfolio-detail-kiost-delegation.html",
    },
    {
      title: "Nane Nane, Uvuvi & Mifugo Day",
      category: "Events",
      image:
        "assets/img/events/NaneNane (10).jpg",
      count: 6,
      href: "portfolio-detail-nane-nane-summary.html",
    },
  ];

  const INITIAL = 9;
  const STEP = 6;

  let activeCategory = "All";
  let visibleCount = 0;

  function normalizeCategory(cat) {
    return (cat || "").trim().toLowerCase();
  }

  function filteredItems() {
    if (normalizeCategory(activeCategory) === "all") return ITEMS;
    const target = normalizeCategory(activeCategory);
    return ITEMS.filter((x) => normalizeCategory(x.category) === target);
  }

  function cardEl(item) {
    const a = document.createElement("a");
    a.className = "p-card";
    a.href = item.href || "#";
    a.setAttribute("role", "article");
    a.setAttribute("aria-label", item.title);

    const media = document.createElement("div");
    media.className = "p-media";

    const img = document.createElement("img");
    img.src = item.image;
    img.alt = item.title;
    img.loading = "lazy";
    img.decoding = "async";

    const badge = document.createElement("div");
    badge.className = "p-count";
    badge.textContent = String(item.count);

    media.appendChild(img);
    media.appendChild(badge);

    const body = document.createElement("div");
    body.className = "p-body";

    const meta = document.createElement("div");
    meta.className = "p-meta";
    meta.textContent = item.category.toUpperCase();

    const title = document.createElement("div");
    title.className = "p-title";
    title.textContent = item.title;

    body.appendChild(meta);
    body.appendChild(title);

    a.appendChild(media);
    a.appendChild(body);

    return a;
  }

  function updateLoadMoreState(total) {
    const remaining = total - visibleCount;
    const hasMore = remaining > 0;
    loadMoreBtn.hidden = !hasMore;
    loadMoreBtn.disabled = !hasMore;
  }

  function render(reset) {
    const items = filteredItems();

    if (reset) {
      grid.innerHTML = "";
      visibleCount = Math.min(INITIAL, items.length);
      const frag = document.createDocumentFragment();
      items.slice(0, visibleCount).forEach((it) => frag.appendChild(cardEl(it)));
      grid.appendChild(frag);
      updateLoadMoreState(items.length);
      return;
    }

    const prev = visibleCount;
    visibleCount = Math.min(visibleCount + STEP, items.length);

    const frag = document.createDocumentFragment();
    items.slice(prev, visibleCount).forEach((it) => frag.appendChild(cardEl(it)));
    grid.appendChild(frag);

    updateLoadMoreState(items.length);
  }

  function setActiveTab(categoryLabel) {
    activeCategory = categoryLabel;
    tabs.forEach((btn) => {
      const isActive = btn.getAttribute("data-portfolio-filter") === categoryLabel;
      btn.classList.toggle("is-active", isActive);
      btn.setAttribute("aria-selected", isActive ? "true" : "false");
      btn.tabIndex = isActive ? 0 : -1;
    });
  }

  tabs.forEach((btn) => {
    btn.addEventListener("click", () => {
      setActiveTab(btn.getAttribute("data-portfolio-filter") || "All");
      render(true);
    });
  });

  loadMoreBtn.addEventListener("click", () => render(false));

  // Initial render
  setActiveTab("All");
  render(true);
})();
