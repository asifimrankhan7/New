
      /* ===== DATA ===== */
      const PROPERTIES = [
        {
          id: 1,
          price: "£4,950,000",
          name: "Belgravia Townhouse",
          loc: "Belgravia, London SW1",
          beds: 5,
          baths: 4,
          sqft: "4,200",
          status: "For Sale",
          type: "House",
          img: "https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=600&q=75",
        },
        {
          id: 2,
          price: "£2,750,000",
          name: "Kensington Garden Apartment",
          loc: "Kensington, London W8",
          beds: 3,
          baths: 2,
          sqft: "2,100",
          status: "For Sale",
          type: "Apartment",
          img: "https://images.unsplash.com/photo-1580587771525-78b9dba3b914?w=600&q=75",
        },
        {
          id: 3,
          price: "£12,500 pcm",
          name: "Chelsea Mews House",
          loc: "Chelsea, London SW3",
          beds: 4,
          baths: 3,
          sqft: "2,800",
          status: "To Rent",
          type: "House",
          img: "https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=600&q=75",
        },
        {
          id: 4,
          price: "£8,200,000",
          name: "Cotswold Manor House",
          loc: "Chipping Norton, Oxfordshire",
          beds: 7,
          baths: 6,
          sqft: "9,500",
          status: "For Sale",
          type: "Country house",
          img: "https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=600&q=75",
        },
        {
          id: 5,
          price: "£1,850,000",
          name: "Clifton Victorian Villa",
          loc: "Clifton, Bristol",
          beds: 5,
          baths: 3,
          sqft: "3,100",
          status: "For Sale",
          type: "House",
          img: "https://images.unsplash.com/photo-1568605114967-8130f3a36994?w=600&q=75",
        },
        {
          id: 6,
          price: "£5,800 pcm",
          name: "Notting Hill Terrace",
          loc: "Notting Hill, London W11",
          beds: 3,
          baths: 2,
          sqft: "1,800",
          status: "To Rent",
          type: "House",
          img: "https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&q=75",
        },
        {
          id: 7,
          price: "£3,400,000",
          name: "Hampstead Heath Detached",
          loc: "Hampstead, London NW3",
          beds: 6,
          baths: 4,
          sqft: "4,800",
          status: "For Sale",
          type: "House",
          img: "https://images.unsplash.com/photo-1600047509358-9dc75507daeb?w=600&q=75",
        },
        {
          id: 8,
          price: "£695,000",
          name: "Canary Wharf Penthouse",
          loc: "Canary Wharf, London E14",
          beds: 2,
          baths: 2,
          sqft: "1,050",
          status: "New Homes",
          type: "Penthouse",
          img: "https://images.unsplash.com/photo-1613977257363-707ba9348227?w=600&q=75",
        },
        {
          id: 9,
          price: "£5,600,000",
          name: "Cornwall Coastal Estate",
          loc: "Rock, Cornwall",
          beds: 8,
          baths: 6,
          sqft: "7,200",
          status: "For Sale",
          type: "Country house",
          img: "https://images.unsplash.com/photo-1499793983690-e29da59ef1c2?w=600&q=75",
        },
        {
          id: 10,
          price: "£975,000",
          name: "Bath Georgian Townhouse",
          loc: "Bath, Somerset",
          beds: 4,
          baths: 3,
          sqft: "2,600",
          status: "For Sale",
          type: "House",
          img: "https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=600&q=75",
        },
        {
          id: 11,
          price: "£3,200 pcm",
          name: "Shoreditch Loft Apartment",
          loc: "Shoreditch, London E1",
          beds: 1,
          baths: 1,
          sqft: "900",
          status: "To Rent",
          type: "Apartment",
          img: "https://images.unsplash.com/photo-1567767292278-a4f21aa2d36e?w=600&q=75",
        },
        {
          id: 12,
          price: "£14,800,000",
          name: "Wiltshire Country Estate",
          loc: "Marlborough, Wiltshire",
          beds: 10,
          baths: 8,
          sqft: "12,000",
          status: "For Sale",
          type: "Country house",
          img: "https://images.unsplash.com/photo-1560185007-c5ca9d2c014d?w=600&q=75",
        },
      ];

      const GALLERY_IMGS = [
        {
          url: "https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=900&q=80",
          label: "Luxury living room",
        },
        {
          url: "https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=600&q=80",
          label: "Modern kitchen",
        },
        {
          url: "https://images.unsplash.com/photo-1600210492493-0946911123ea?w=600&q=80",
          label: "Master bedroom",
        },
        {
          url: "https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&q=80",
          label: "Countryside villa",
        },
        {
          url: "https://images.unsplash.com/photo-1613490493576-7fde63acd811?w=600&q=80",
          label: "Penthouse terrace",
        },
      ];

      const INSIGHTS = [
        {
          tag: "Research",
          title: "UK House Prices: Spring Market Outlook 2025",
          date: "14 March 2025",
          read: "5 min",
          img: "https://images.unsplash.com/photo-1486325212027-8081e485255e?w=600&q=70",
        },
        {
          tag: "Wealth Report",
          title: "Where UHNW Buyers Are Investing in 2025",
          date: "1 March 2025",
          read: "8 min",
          img: "https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=600&q=70",
        },
        {
          tag: "Perspectives",
          title: "The Rise of Country Living Continues Post-Pandemic",
          date: "24 Feb 2025",
          read: "6 min",
          img: "https://images.unsplash.com/photo-1460317442991-0ec209397118?w=600&q=70",
        },
        {
          tag: "Research",
          title: "London Prime Market: A Quarterly Review",
          date: "18 Feb 2025",
          read: "7 min",
          img: "https://images.unsplash.com/photo-1444653614773-995cb1ef9efa?w=600&q=70",
        },
        {
          tag: "Alpine Report",
          title: "Alpine Property: Ski Season Demand Rises Again",
          date: "10 Feb 2025",
          read: "4 min",
          img: "https://images.unsplash.com/photo-1519999482648-25049ddd37b1?w=600&q=70",
        },
        {
          tag: "Rural Report",
          title: "Farmland Values Reach Record High in 2025",
          date: "3 Feb 2025",
          read: "5 min",
          img: "https://images.unsplash.com/photo-1460472178825-e5240623afd5?w=600&q=70",
        },
      ];

      const TEAM = [
        {
          name: "James Whitfield",
          role: "Chief Executive",
          img: "https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400&q=80",
          email: "j.whitfield@nobleestates.co.uk",
        },
        {
          name: "Sarah Ellison",
          role: "Head of Residential",
          img: "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&q=80",
          email: "s.ellison@nobleestates.co.uk",
        },
        {
          name: "Marcus Pemberton",
          role: "Head of Country",
          img: "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&q=80",
          email: "m.pemberton@nobleestates.co.uk",
        },
        {
          name: "Dr. Priya Nair",
          role: "Head of Research",
          img: "https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&q=80",
          email: "p.nair@nobleestates.co.uk",
        },
      ];

      const LONDON_OFFICES = [
        {
          name: "Battersea",
          addr: "246 Battersea Park Rd, London SW11 3BP",
          ph: "+44 20 7223 1234",
        },
        {
          name: "Chelsea",
          addr: "239 King's Road, London SW3 5EL",
          ph: "+44 20 7730 2345",
        },
        {
          name: "Fulham",
          addr: "776 Fulham Road, London SW6 5SL",
          ph: "+44 20 7386 3456",
        },
        {
          name: "Islington",
          addr: "102 Upper Street, London N1 1QN",
          ph: "+44 20 7354 4567",
        },
        {
          name: "Kensington",
          addr: "14 Abingdon Road, London W8 6AF",
          ph: "+44 20 7937 5678",
        },
        {
          name: "Notting Hill",
          addr: "41 Pembridge Road, London W11 3HG",
          ph: "+44 20 7727 6789",
        },
        {
          name: "Richmond",
          addr: "11 The Quadrant, Richmond TW9 1BP",
          ph: "+44 20 8948 7890",
        },
        {
          name: "Wandsworth",
          addr: "44 Bellevue Road, London SW17 7EF",
          ph: "+44 20 8767 8901",
        },
      ];

      const COUNTRY_OFFICES = [
        {
          name: "Bath",
          addr: "6 George Street, Bath BA1 2EH",
          ph: "+44 1225 101 234",
        },
        {
          name: "Cambridge",
          addr: "1 Peas Hill, Cambridge CB2 3PN",
          ph: "+44 1223 202 345",
        },
        {
          name: "Cheltenham",
          addr: "16 Rodney Road, Cheltenham GL50 1JJ",
          ph: "+44 1242 303 456",
        },
        {
          name: "Oxford",
          addr: "256 Banbury Road, Oxford OX2 7DE",
          ph: "+44 1865 404 567",
        },
        {
          name: "Windsor",
          addr: "3 Thames Street, Windsor SL4 1PL",
          ph: "+44 1753 505 678",
        },
        {
          name: "Guildford",
          addr: "8 North Street, Guildford GU1 4AB",
          ph: "+44 1483 606 789",
        },
        {
          name: "Exeter",
          addr: "14 Southernhay East, Exeter EX1 1PG",
          ph: "+44 1392 707 890",
        },
        {
          name: "Yorkshire",
          addr: "3 Princes Square, Harrogate HG1 1LX",
          ph: "+44 1423 808 901",
        },
      ];

      /* ===== RENDER: PROP CARD ===== */
      function propCard(p) {
        return `<div class="prop-card reveal" onclick="toast('Viewing: ${p.name}')">
    <div class="prop-thumb">
      <img src="${p.img}" alt="${p.name}" loading="lazy"/>
      <span class="prop-badge">${p.status}</span>
      <div class="prop-fav" onclick="toggleFav(event,this)">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
      </div>
    </div>
    <div class="prop-body">
      <div class="prop-price serif">${p.price}</div>
      <div class="prop-name">${p.name}</div>
      <div class="prop-loc"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>${p.loc}</div>
      <div class="prop-meta">
        <span class="prop-meta-item"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 22V12a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v10"/><path d="M2 22h20"/><rect x="9" y="11" width="6" height="11"/></svg>${p.beds} beds</span>
        <span class="prop-meta-item"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 12h16v6a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-6zM4 12V5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v7"/></svg>${p.baths} baths</span>
        <span class="prop-meta-item"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="1"/><path d="M3 9h18M9 21V9"/></svg>${p.sqft} sq ft</span>
      </div>
    </div>
  </div>`;
      }

      /* ===== RENDER: INSIGHT CARD ===== */
      function insightCard(i) {
        return `<div class="insight-card reveal" onclick="toast('Opening: ${i.title.substring(0, 30)}…')">
    <div class="insight-thumb"><img src="${i.img}" alt="${i.title}" loading="lazy"/></div>
    <div class="insight-body">
      <p class="insight-tag">${i.tag}</p>
      <h3 class="insight-title serif">${i.title}</h3>
      <p class="insight-meta">${i.date} · ${i.read} read</p>
    </div>
  </div>`;
      }

      /* ===== INIT RENDERS ===== */
      function init() {
        // Featured (first 3)
        document.getElementById("featured-props").innerHTML = PROPERTIES.slice(
          0,
          3,
        )
          .map(propCard)
          .join("");
        // Gallery
        const g = document.getElementById("gallery-grid");
        if (g)
          g.innerHTML = GALLERY_IMGS.map(
            (img, i) => `
    <div class="gallery-item ${i === 0 ? "" : ""}">
      <img src="${img.url}" alt="${img.label}" loading="lazy" onclick="openLightbox(${i})"/>
      <div class="gallery-caption"><span>${img.label}</span></div>
    </div>`,
          ).join("");
        // Home insights (3)
        document.getElementById("home-insights").innerHTML = INSIGHTS.slice(
          0,
          3,
        )
          .map(insightCard)
          .join("");
        // All insights
        document.getElementById("all-insights").innerHTML =
          INSIGHTS.map(insightCard).join("");
        // All props
        renderAllProps();
        // Team
        document.getElementById("team-grid").innerHTML = TEAM.map(
          (t) => `
    <div class="team-card reveal">
      <div class="team-avatar"><img src="${t.img}" alt="${t.name}" loading="lazy"/></div>
      <div class="team-name">${t.name}</div>
      <div class="team-role">${t.role}</div>
      <div class="team-email">${t.email}</div>
    </div>`,
        ).join("");
        // Offices
        document.getElementById("london-offices").innerHTML =
          LONDON_OFFICES.map(
            (o) => `
    <div class="office-cell"><div class="office-name">${o.name}</div><div class="office-addr">${o.addr}</div><div class="office-ph">${o.ph}</div></div>`,
          ).join("");
        document.getElementById("country-offices").innerHTML =
          COUNTRY_OFFICES.map(
            (o) => `
    <div class="office-cell"><div class="office-name">${o.name}</div><div class="office-addr">${o.addr}</div><div class="office-ph">${o.ph}</div></div>`,
          ).join("");
        // Testimonials
        initTes();
      }

      /* ===== PROPERTIES ===== */
      let propsShown = 6;
      function renderAllProps() {
        const el = document.getElementById("all-props");
        if (!el) return;
        el.innerHTML = PROPERTIES.slice(0, propsShown).map(propCard).join("");
        document.getElementById("f-count").textContent =
          `Showing ${Math.min(propsShown, PROPERTIES.length)} of ${PROPERTIES.length} properties`;
        initReveal();
      }
      function loadMore() {
        propsShown = Math.min(propsShown + 3, PROPERTIES.length);
        renderAllProps();
        if (propsShown >= PROPERTIES.length)
          document.getElementById("load-more").style.display = "none";
      }

      /* ===== LIGHTBOX ===== */
      let lbIdx = 0;
      function openLightbox(i) {
        lbIdx = i;
        const lb = document.getElementById("lightbox");
        lb.classList.add("on");
        document.getElementById("lb-img").src = GALLERY_IMGS[i].url;
      }
      document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") closeLightbox();
        if (e.key === "ArrowRight") lbNext();
        if (e.key === "ArrowLeft") lbPrev();
      });
      function closeLightbox() {
        document.getElementById("lightbox").classList.remove("on");
      }
      function lbNext() {
        lbIdx = (lbIdx + 1) % GALLERY_IMGS.length;
        document.getElementById("lb-img").src = GALLERY_IMGS[lbIdx].url;
      }
      function lbPrev() {
        lbIdx = (lbIdx - 1 + GALLERY_IMGS.length) % GALLERY_IMGS.length;
        document.getElementById("lb-img").src = GALLERY_IMGS[lbIdx].url;
      }

      /* ===== TESTIMONIALS ===== */
      let tesIdx = 0;
      function initTes() {
        const track = document.getElementById("tes-track");
        const slides = track.querySelectorAll(".tes-slide");
        const dots = document.getElementById("tes-dots");
        slides.forEach((_, i) => {
          const d = document.createElement("div");
          d.className = "tes-dot" + (i === 0 ? " on" : "");
          d.onclick = () => goTes(i);
          dots.appendChild(d);
        });
        setInterval(() => tesNext(), 5000);
      }
      function goTes(i) {
        tesIdx = i;
        const track = document.getElementById("tes-track");
        const slides = track.querySelectorAll(".tes-slide");
        track.style.transform = `translateX(-${i * 100}%)`;
        document
          .querySelectorAll(".tes-dot")
          .forEach((d, j) => d.classList.toggle("on", j === i));
      }
      function tesNext() {
        goTes((tesIdx + 1) % document.querySelectorAll(".tes-slide").length);
      }
      function tesPrev() {
        goTes(
          (tesIdx - 1 + document.querySelectorAll(".tes-slide").length) %
            document.querySelectorAll(".tes-slide").length,
        );
      }

      /* ===== SEARCH TABS ===== */
      document.querySelectorAll(".stab").forEach((t) => {
        t.addEventListener("click", function () {
          document
            .querySelectorAll(".stab")
            .forEach((s) => s.classList.remove("on"));
          this.classList.add("on");
        });
      });

      /* ===== SEARCH ACTION ===== */
      function doSearch() {
        const loc = document.getElementById("search-loc").value;
        nav("properties");
        if (loc) toast(`Searching for properties in "${loc}"`);
      }

      /* ===== NAV ===== */
      function nav(page) {
        document
          .querySelectorAll(".page")
          .forEach((p) => p.classList.remove("on"));
        const el = document.getElementById("page-" + page);
        if (el) {
          el.classList.add("on");
        }
        window.scrollTo({ top: 0, behavior: "smooth" });
        if (page === "properties") {
          propsShown = 6;
          renderAllProps();
        }
        setTimeout(initReveal, 100);
      }
      function closeMob() {
        document.getElementById("mobile-menu").classList.remove("on");
      }

      /* ===== FAVOURITES ===== */
      function toggleFav(e, el) {
        e.stopPropagation();
        el.classList.toggle("on");
        toast(
          el.classList.contains("on")
            ? "Added to favourites"
            : "Removed from favourites",
        );
      }

      /* ===== CONTACT FORM ===== */
      function submitForm() {
        const fn = document.getElementById("cf-fn").value;
        const email = document.getElementById("cf-email").value;
        const consent = document.getElementById("cf-consent").checked;
        if (!fn || !email) {
          toast("Please fill in all required fields");
          return;
        }
        if (!consent) {
          toast("Please accept the privacy policy");
          return;
        }
        toast("Thank you! We'll be in touch shortly.");
        ["cf-fn", "cf-ln", "cf-email", "cf-ph", "cf-msg"].forEach((id) => {
          const el = document.getElementById(id);
          if (el) el.value = "";
        });
        document.getElementById("cf-consent").checked = false;
      }

      /* ===== SUBSCRIBE ===== */
      function subscribe() {
        const e = document.getElementById("nl-email");
        if (!e.value || !e.value.includes("@")) {
          toast("Please enter a valid email address");
          return;
        }
        toast("Subscribed! Welcome to Noble Estates insights.");
        e.value = "";
      }

      /* ===== TOAST ===== */
      function toast(msg, duration = 3000) {
        const t = document.getElementById("toast");
        t.textContent = msg;
        t.classList.add("show");
        setTimeout(() => t.classList.remove("show"), duration);
      }

      /* ===== SCROLL REVEAL ===== */
      function initReveal() {
        const obs = new IntersectionObserver(
          (entries) => {
            entries.forEach((e) => {
              if (e.isIntersecting) {
                e.target.classList.add("in");
                obs.unobserve(e.target);
              }
            });
          },
          { threshold: 0.12 },
        );
        document
          .querySelectorAll(".reveal,.reveal-l,.reveal-r")
          .forEach((el) => {
            if (!el.classList.contains("in")) obs.observe(el);
          });
      }

      /* ===== COUNT UP ===== */
      function countUp() {
        document.querySelectorAll("[data-count]").forEach((el) => {
          const target = parseInt(el.dataset.count);
          const dur = 1800;
          const step = 16;
          const inc = target / (dur / step);
          let cur = 0;
          const t = setInterval(() => {
            cur = Math.min(cur + inc, target);
            el.textContent =
              target > 999
                ? Math.round(cur).toLocaleString() + "+"
                : target === 52
                  ? Math.round(cur)
                  : Math.round(cur) + "+";
            if (cur >= target) {
              el.textContent =
                target > 999
                  ? target.toLocaleString() + "+"
                  : target + "+" + (target === 52 ? "" : "");
              clearInterval(t);
            }
          }, step);
        });
      }

      /* ===== NAVBAR SCROLL ===== */
      window.addEventListener("scroll", () => {
        const nav = document.getElementById("nav");
        nav.classList.toggle("scrolled", window.scrollY > 40);
        document
          .getElementById("btt")
          .classList.toggle("show", window.scrollY > 400);
      });

      /* ===== COOKIE ===== */
      function initCookie() {
        if (!localStorage.getItem("ne-cookie")) {
          setTimeout(
            () => document.getElementById("cookie").classList.add("show"),
            2500,
          );
        }
      }
      document.getElementById("cookie-accept").onclick = () => {
        localStorage.setItem("ne-cookie", "accepted");
        document.getElementById("cookie").classList.remove("show");
        toast("Cookie preferences saved");
      };
      document.getElementById("cookie-decline").onclick = () => {
        document.getElementById("cookie").classList.remove("show");
      };

      /* ===== LOADER ===== */
      window.addEventListener("load", () => {
        setTimeout(() => {
          document.getElementById("loader").classList.add("hide");
          countUp();
          initReveal();
          initCookie();
          setTimeout(() => document.getElementById("loader").remove(), 700);
        }, 1800);
      });

      /* ===== INIT ===== */
      init();

      /* ===== LIGHTBOX HTML INSERT ===== */
      document.body.insertAdjacentHTML(
        "beforeend",
        `
<div id="lightbox">
  <span id="lightbox-close" onclick="closeLightbox()">✕</span>
  <div id="lightbox-prev" onclick="lbPrev()">‹</div>
  <img id="lb-img" src="" alt="Gallery image"/>
  <div id="lightbox-next" onclick="lbNext()">›</div>
</div>`,
      );
  
