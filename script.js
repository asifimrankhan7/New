/* =====================================================
   Aaron Holmes Residential — main script
   GALLERY_IMGS is injected as a global JS variable
   by PHP in header.php (used by the lightbox).
   ===================================================== */

document.addEventListener("DOMContentLoaded", () => {

  /* ===== LOADER PERCENTAGE COUNTER ===== */
  (function animatePct() {
    const el = document.getElementById("loader-pct");
    if (!el) return;
    const duration = 1700; // match CSS animation duration
    const start    = performance.now();
    function tick(now) {
      const p = Math.min((now - start) / duration, 1);
      // ease-in-out curve matching the CSS cubic-bezier
      const eased = p < 0.5 ? 2 * p * p : -1 + (4 - 2 * p) * p;
      el.textContent = Math.round(eased * 100) + "%";
      if (p < 1) requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);
  })();

  /* ===== LIGHTBOX ===== */
  let lbIdx = 0;

  window.openLightbox = function (i) {
    lbIdx = i;
    document.getElementById("lightbox").classList.add("on");
    document.getElementById("lb-img").src = GALLERY_IMGS[i].url;
  };

  window.closeLightbox = function () {
    document.getElementById("lightbox").classList.remove("on");
  };

  window.lbNext = function () {
    lbIdx = (lbIdx + 1) % GALLERY_IMGS.length;
    document.getElementById("lb-img").src = GALLERY_IMGS[lbIdx].url;
  };

  window.lbPrev = function () {
    lbIdx = (lbIdx - 1 + GALLERY_IMGS.length) % GALLERY_IMGS.length;
    document.getElementById("lb-img").src = GALLERY_IMGS[lbIdx].url;
  };

  document.addEventListener("keydown", e => {
    if (e.key === "Escape")     window.closeLightbox();
    if (e.key === "ArrowRight") window.lbNext();
    if (e.key === "ArrowLeft")  window.lbPrev();
  });

  /* ===== TESTIMONIALS ===== */
  let tesIdx = 0;

  function initTes() {
    const track = document.getElementById("tes-track");
    if (!track) return;
    const slides = track.querySelectorAll(".tes-slide");
    const dots   = document.getElementById("tes-dots");
    if (!dots || !slides.length) return;

    slides.forEach((_, i) => {
      const d = document.createElement("div");
      d.className = "tes-dot" + (i === 0 ? " on" : "");
      d.onclick = () => window.goTes(i);
      dots.appendChild(d);
    });

    setInterval(() => window.tesNext(), 5000);
  }

  window.goTes = function (i) {
    tesIdx = i;
    const track = document.getElementById("tes-track");
    if (!track) return;
    track.style.transform = `translateX(-${i * 100}%)`;
    document.querySelectorAll(".tes-dot").forEach((d, j) => d.classList.toggle("on", j === i));
  };

  window.tesNext = function () {
    const slides = document.querySelectorAll(".tes-slide");
    window.goTes((tesIdx + 1) % slides.length);
  };

  window.tesPrev = function () {
    const slides = document.querySelectorAll(".tes-slide");
    window.goTes((tesIdx - 1 + slides.length) % slides.length);
  };

  /* ===== SEARCH TABS ===== */
  document.querySelectorAll(".stab").forEach(t => {
    t.addEventListener("click", function () {
      document.querySelectorAll(".stab").forEach(s => s.classList.remove("on"));
      this.classList.add("on");
    });
  });

  /* ===== SEARCH / NAV ACTIONS ===== */
  window.doSearch = function () {
    const loc = document.getElementById("search-loc")?.value;
    window.location.href = "index.php?page=properties";
    if (loc) toast(`Searching for properties in "${loc}"`);
  };

  window.openMob = function () {
    document.getElementById("mobile-menu").classList.add("on");
    document.body.style.overflow = "hidden";
  };

  window.closeMob = function () {
    document.getElementById("mobile-menu").classList.remove("on");
    document.body.style.overflow = "";
  };

  /* ===== FAVOURITES ===== */
  window.toggleFav = function (e, el) {
    e.stopPropagation();
    el.classList.toggle("on");
    toast(el.classList.contains("on") ? "Added to favourites" : "Removed from favourites");
  };

  /* ===== CONTACT FORM ===== */
  window.submitForm = function () {
    const fn      = document.getElementById("cf-fn")?.value;
    const email   = document.getElementById("cf-email")?.value;
    const consent = document.getElementById("cf-consent")?.checked;
    if (!fn || !email)  { toast("Please fill in all required fields"); return; }
    if (!consent)        { toast("Please accept the privacy policy"); return; }
    toast("Thank you! We'll be in touch shortly.");
    ["cf-fn", "cf-ln", "cf-email", "cf-ph", "cf-msg"].forEach(id => {
      const el = document.getElementById(id);
      if (el) el.value = "";
    });
    const c = document.getElementById("cf-consent");
    if (c) c.checked = false;
  };

  /* ===== NEWSLETTER ===== */
  window.subscribe = function () {
    const e = document.getElementById("footer-nl-email") || document.getElementById("nl-email");
    if (!e || !e.value || !e.value.includes("@")) {
      toast("Please enter a valid email address");
      return;
    }
    toast("Subscribed! Welcome to Aaron Holmes Residential insights.");
    e.value = "";
  };

  /* ===== TOAST ===== */
  window.toast = function (msg, duration = 3000) {
    const t = document.getElementById("toast");
    if (!t) return;
    t.innerText = msg;
    t.classList.add("show");
    setTimeout(() => t.classList.remove("show"), duration);
  };

  /* ===== SCROLL REVEAL ===== */
  function initReveal() {
    const obs = new IntersectionObserver(
      entries => entries.forEach(e => {
        if (e.isIntersecting) { e.target.classList.add("in"); obs.unobserve(e.target); }
      }),
      { threshold: 0.12 }
    );
    document.querySelectorAll(".reveal,.reveal-l,.reveal-r").forEach(el => {
      if (!el.classList.contains("in")) obs.observe(el);
    });
  }

  /* ===== COUNT UP ===== */
  function countUp() {
    document.querySelectorAll("[data-count]").forEach(el => {
      const target = parseInt(el.dataset.count);
      const inc    = target / (1800 / 16);
      let cur      = 0;
      const t = setInterval(() => {
        cur = Math.min(cur + inc, target);
        el.textContent = target > 999
          ? Math.round(cur).toLocaleString() + "+"
          : Math.round(cur) + "+";
        if (cur >= target) {
          el.textContent = target > 999 ? target.toLocaleString() + "+" : target + "+";
          clearInterval(t);
        }
      }, 16);
    });
  }

  /* ===== NAVBAR SCROLL ===== */
  const navUnit = document.getElementById("main-nav-unit");
  window.addEventListener("scroll", () => {
    if (navUnit) navUnit.classList.toggle("scrolled", window.scrollY > 40);
    const btt = document.getElementById("btt");
    if (btt) btt.classList.toggle("show", window.scrollY > 400);
  });

  /* ===== COOKIE DIALOG ===== */
  function initCookie() {
    const dialog = document.getElementById("cookie-dialog");
    if (!dialog) return;

    // Show dialog after a short delay
    setTimeout(() => dialog.classList.add("show"), 1200);

    const close = (msg) => {
      dialog.classList.remove("show");
      if (msg) window.toast(msg);
    };

    document.getElementById("cookie-accept")?.addEventListener("click", () => close("Cookies accepted"));
    document.getElementById("cookie-decline")?.addEventListener("click", () => close("Cookies declined"));
  }

  /* ===== LIGHTBOX HTML ===== */
  document.body.insertAdjacentHTML("beforeend", `
<div id="lightbox">
  <span id="lightbox-close" onclick="closeLightbox()">&#x2715;</span>
  <div id="lightbox-prev" onclick="lbPrev()">&#x2039;</div>
  <img id="lb-img" src="" alt="Gallery image"/>
  <div id="lightbox-next" onclick="lbNext()">&#x203A;</div>
</div>`);

  /* ===== BOOT ===== */
  initTes();

  window.addEventListener("load", () => {
    setTimeout(() => {
      const l = document.getElementById("loader");
      if (l) l.classList.add("hide");
      countUp();
      initReveal();
      initCookie();
      if (window.lucide) lucide.createIcons({
          attrs: {
    'stroke-width': 1.5 // default is 2
  }
      });
      setTimeout(() => { if (l) l.remove(); }, 700);
    }, 1800);
  });

}); // end DOMContentLoaded
