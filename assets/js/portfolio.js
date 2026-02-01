(function () {
  const grid = document.getElementById("portfolioGrid");
  const loadMoreBtn = document.getElementById("loadMoreBtn");
  const tabs = Array.from(document.querySelectorAll("[data-portfolio-filter]"));

  if (!grid || !loadMoreBtn || !tabs.length) return;

  const ITEMS = [
    {
      title: "Musée d’Orsay",
      category: "Culture",
      image:
        "https://images.unsplash.com/photo-1528909514045-2fa4ac7a08ba?auto=format&fit=crop&w=1200&q=80",
      count: 6,
    },
    {
      title: "Accademia Gallery",
      category: "Culture",
      image:
        "https://images.unsplash.com/photo-1528460033278-a6ba57020470?auto=format&fit=crop&w=1200&q=80",
      count: 6,
    },
    {
      title: "The Bund",
      category: "Events",
      image:
        "https://images.unsplash.com/photo-1526318472351-c75fcf070305?auto=format&fit=crop&w=1200&q=80",
      count: 6,
    },
    {
      title: "Protest",
      category: "Culture",
      image:
        "https://images.unsplash.com/photo-1520975682031-a77e3b61a6a8?auto=format&fit=crop&w=1200&q=80",
      count: 6,
    },
    {
      title: "Business portfolio",
      category: "Business",
      image:
        "https://images.unsplash.com/photo-1523731407965-2430cd12f5e4?auto=format&fit=crop&w=1200&q=80",
      count: 6,
    },
    {
      title: "Museum of New York",
      category: "History Building",
      image:
        "https://images.unsplash.com/photo-1548013146-72479768bada?auto=format&fit=crop&w=1200&q=80",
      count: 6,
    },
    {
      title: "Melton Art Museum",
      category: "Government",
      image:
        "https://images.unsplash.com/photo-1526481280695-3c687fd643ed?auto=format&fit=crop&w=1200&q=80",
      count: 6,
    },
    {
      title: "New York City Museum",
      category: "Business",
      image:
        "https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?auto=format&fit=crop&w=1200&q=80",
      count: 6,
    },
    {
      title: "Co-working Meeting",
      category: "Conference",
      image:
        "https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1200&q=80",
      count: 6,
    },

    // More items (for Load More)
    {
      title: "Summit Reception",
      category: "Government",
      image:
        "https://images.unsplash.com/photo-1521737604893-cfcf42c1c1c5?auto=format&fit=crop&w=1200&q=80",
      count: 8,
    },
    {
      title: "Conference Hall Setup",
      category: "Conference",
      image:
        "https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=1200&q=80",
      count: 5,
    },
    {
      title: "Cultural Experience",
      category: "Culture",
      image:
        "https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1200&q=80",
      count: 7,
    },
    {
      title: "Executive Briefing",
      category: "Business",
      image:
        "https://images.unsplash.com/photo-1521791055366-0d553872125f?auto=format&fit=crop&w=1200&q=80",
      count: 4,
    },
    {
      title: "Historic Venue Tour",
      category: "History Building",
      image:
        "https://images.unsplash.com/photo-1469474968028-56623f02e42e?auto=format&fit=crop&w=1200&q=80",
      count: 9,
    },
    {
      title: "Event Production",
      category: "Events",
      image:
        "https://images.unsplash.com/photo-1503428593586-e225b39bddfe?auto=format&fit=crop&w=1200&q=80",
      count: 6,
    },
    {
      title: "Protocol Arrival",
      category: "Government",
      image:
        "https://images.unsplash.com/photo-1526481280695-3c687fd643ed?auto=format&fit=crop&w=1200&q=80",
      count: 6,
    },
    {
      title: "Panel Discussion",
      category: "Conference",
      image:
        "https://images.unsplash.com/photo-1475721027785-f74eccf877e2?auto=format&fit=crop&w=1200&q=80",
      count: 6,
    },
    {
      title: "Heritage Exhibition",
      category: "History Building",
      image:
        "https://images.unsplash.com/photo-1491553895911-0055eca6402d?auto=format&fit=crop&w=1200&q=80",
      count: 6,
    },
    {
      title: "Brand Activation",
      category: "Business",
      image:
        "https://images.unsplash.com/photo-1515169067868-5387ec356754?auto=format&fit=crop&w=1200&q=80",
      count: 6,
    },
    {
      title: "Gala Night",
      category: "Events",
      image:
        "https://images.unsplash.com/photo-1522158637959-30385a09e0da?auto=format&fit=crop&w=1200&q=80",
      count: 6,
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
    a.href = "#";
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

    a.addEventListener("click", (e) => e.preventDefault());
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
