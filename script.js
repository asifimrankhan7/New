/* ===== DATA ===== */
// Data arrays (PROPERTIES, GALLERY_IMGS, etc) are now injected globally via PHP in header.php
      /* ===== RENDER: PROP CARD ===== */
      function propCard(p) {
        return `<div class="prop-card reveal" onclick="toast('Viewing: ${p.name}')">
    <div class="prop-thumb">
      <img src="${p.img}" alt="${p.name}" loading="lazy"/>
      <span class="prop-badge">${p.status}</span>
      <div class="prop-fav" onclick="toggleFav(event,this)">
        <i data-lucide="heart"></i>
      </div>
    </div>
    <div class="prop-body">
      <div class="prop-price serif">${p.price}</div>
      <div class="prop-name">${p.name}</div>
      <div class="prop-loc"><i data-lucide="map-pin" style="width: 11px; height: 11px; margin-right: 4px;"></i>${p.loc}</div>
      <div class="prop-meta">
        <span class="prop-meta-item"><i data-lucide="bed" style="width: 13px; height: 13px; margin-right: 4px;"></i>${p.beds} beds</span>
        <span class="prop-meta-item"><i data-lucide="bath" style="width: 13px; height: 13px; margin-right: 4px;"></i>${p.baths} baths</span>
        <span class="prop-meta-item"><i data-lucide="maximize-2" style="width: 13px; height: 13px; margin-right: 4px;"></i>${p.sqft} sq ft</span>
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
        // All props (dynamic filtering container)
        renderAllProps();
        // Testimonials (still client-side slider)
        initTes();
      }

      /* ===== PROPERTIES ===== */
      let propsShown = 6;
      function renderAllProps() {
        const el = document.getElementById("all-props");
        if (!el) return;

        const fStatus = document.getElementById("f-status")?.value || "";
        const fType = document.getElementById("f-type")?.value || "";
        
        let filteredProps = PROPERTIES;
        if (fStatus) {
            filteredProps = filteredProps.filter(p => p.status === fStatus);
        }
        if (fType) {
            filteredProps = filteredProps.filter(p => p.type === fType);
        }

        el.innerHTML = filteredProps.slice(0, propsShown).map(propCard).join("");
        document.getElementById("f-count").textContent =
          `Showing ${Math.min(propsShown, filteredProps.length)} of ${filteredProps.length} properties`;
        initReveal();
        if (window.lucide) lucide.createIcons();
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
        if (!track) return;
        const slides = track.querySelectorAll(".tes-slide");
        const dots = document.getElementById("tes-dots");
        if (!dots || !slides.length) return;
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
        window.location.href = "index.php?page=properties";
        if (loc) toast(`Searching for properties in "${loc}"`);
      }
      function closeMob() {
        document.getElementById("mobile-menu").classList.remove("on");
        document.body.style.overflow = ""; 
      }
      function openMob() {
        document.getElementById("mobile-menu").classList.add("on");
        document.body.style.overflow = "hidden";
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
        const e = document.getElementById("footer-nl-email") || document.getElementById("nl-email");
        if (!e || !e.value || !e.value.includes("@")) {
          toast("Please enter a valid email address");
          return;
        }
        toast("Subscribed! Welcome to Noble Estates luxury insights.");
        e.value = "";
      }

      /* ===== TOAST ===== */
      function toast(msg, duration = 3000) {
        const t = document.getElementById("toast");
        t.innerText = msg;
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

      /* ===== NAVBAR SCROLL & CLICK ===== */
      const navUnit = document.getElementById("main-nav-unit");
      window.addEventListener("scroll", () => {
        if (navUnit) navUnit.classList.toggle("scrolled", window.scrollY > 40);
        const btt = document.getElementById("btt");
        if (btt) btt.classList.toggle("show", window.scrollY > 400);
      });
      if (navUnit) {
        navUnit.addEventListener("click", function () {
          this.classList.toggle("visible");
        });
      }

      /* ===== COOKIE DIALOG LOGIC ===== */
      function setCookieModalVisible(visible) {
        const cookieEl = document.getElementById("cookie-dialog");
        if (!cookieEl) return;
        if (visible) {
          cookieEl.classList.add("show");
        } else {
          cookieEl.classList.remove("show");
        }
      }

      function initCookie() {
        // Clear legacy key to avoid conflicts
        localStorage.removeItem("ne-cookie");
        
        const saved = localStorage.getItem("ne-cookies-v2");
        if (!saved) {
          // Show with minimal delay after page is interactive
          setTimeout(() => setCookieModalVisible(true), 600);
        }

        const manageBtn = document.getElementById("cookie-manage");
        const settingsPanel = document.getElementById("cookie-settings");
        const acceptBtn = document.getElementById("cookie-accept");
        const declineBtn = document.getElementById("cookie-decline");
        const saveBtn = document.getElementById("cookie-save");

        if (manageBtn && settingsPanel) {
          manageBtn.onclick = () => {
            settingsPanel.classList.add("visible");
            manageBtn.style.display = "none";
            if (acceptBtn) acceptBtn.style.display = "none";
            if (declineBtn) declineBtn.style.display = "none";
            if (saveBtn) saveBtn.style.display = "inline-block";
          };
        }

        if (acceptBtn) {
          acceptBtn.onclick = () => {
            const prefs = { essential: true, analytics: true, marketing: true };
            localStorage.setItem("ne-cookies-v2", JSON.stringify(prefs));
            setCookieModalVisible(false);
            toast("All cookies accepted");
          };
        }

        if (declineBtn) {
          declineBtn.onclick = () => {
            const prefs = { essential: true, analytics: false, marketing: false };
            localStorage.setItem("ne-cookies-v2", JSON.stringify(prefs));
            setCookieModalVisible(false);
            toast("Only essential cookies accepted");
          };
        }

        if (saveBtn) {
          saveBtn.onclick = () => {
            const prefs = {
              essential: true,
              analytics: document.getElementById("cookie-analytics").checked,
              marketing: document.getElementById("cookie-marketing").checked
            };
            localStorage.setItem("ne-cookies-v2", JSON.stringify(prefs));
            setCookieModalVisible(false);
            toast("Preferences saved");
          };
        }
      }

      /* ===== LOADER ===== */
      window.addEventListener("load", () => {
        setTimeout(() => {
          const l = document.getElementById("loader");
          if (l) l.classList.add("hide");
          countUp();
          initReveal();
          initCookie();
          if (window.lucide) lucide.createIcons();
          setTimeout(() => {
            if (l) l.remove();
          }, 700);
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
  
