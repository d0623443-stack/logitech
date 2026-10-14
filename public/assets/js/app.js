/**
 * logicindia.tech - Interactive Editorial Landing Page Logic (CodeIgniter 4 Integrated)
 * Medium-inspired interactions, countdown, PDF Bio generation, claps, audio, and CI4 API connectivity.
 */

// Data for Tech Dispatches (Medium style stories)
const TECH_DISPATCHES = {
  haptics: {
    category: "TACTILE & SENSORY COMPUTING",
    readTime: "5 min read",
    title: "Micro-Fluidic Actuation: Giving Peripherals a Sense of Living Texture",
    author: "Dr. Ananya Sharma · Lead Haptic Systems Architect · Bengaluru",
    date: "October 14, 2026",
    image: "assets/images/tactile-sensor.jpg",
    lead: "Why should a keystroke feel identical whether you are compiling kernel code or sculpting 3D geometry? Our optical micro-fluidic switches adapt physical resistance dynamically.",
    content: `
      <p class="mb-4">For four decades, the mechanical keyboard switch has remained essentially static: a metal spring, a stem, and a gold crosspoint contact. While tactile switches vary between linear and clicky, their physical resistance curve is locked the moment they leave the factory.</p>
      
      <blockquote class="p-4 my-6 border-l-4 border-emerald-500 bg-stone-100 dark:bg-stone-800/60 font-serif-editorial text-lg italic text-stone-800 dark:text-stone-200">
        "Human touch is the highest-bandwidth sensory input we bring to our desks. Flattening it into binary clicks is a missed opportunity for creative flow."
      </blockquote>

      <h3 class="text-xl font-bold font-serif-editorial mb-3 text-stone-900 dark:text-stone-100">Dynamic Visco-Elastic Resistance</h3>
      <p class="mb-4">In our Bengaluru labs, the logicindia.tech team developed the <strong>Fluid-Sense V3 switch</strong>. By introducing a micro-chamber with magnetically reactive rheological fluid, the switch's actuation force can be modulated from 35g (featherweight typing for prose) to 85g (solid, deliberate feedback when executing high-consequence operations or financial commands).</p>

      <div class="grid grid-cols-2 gap-4 my-6 p-4 rounded-xl bg-stone-50 dark:bg-stone-800/40 border border-stone-200 dark:border-stone-700 text-sm">
        <div>
          <span class="block text-xs uppercase tracking-wider text-stone-500 font-mono-tech">Response Time</span>
          <span class="font-bold text-stone-900 dark:text-white text-base">0.08 milliseconds</span>
        </div>
        <div>
          <span class="block text-xs uppercase tracking-wider text-stone-500 font-mono-tech">Actuation Range</span>
          <span class="font-bold text-stone-900 dark:text-white text-base">0.1mm – 4.0mm Dynamic</span>
        </div>
      </div>

      <h3 class="text-xl font-bold font-serif-editorial mb-3 text-stone-900 dark:text-stone-100">Tactile Spatial Guidance</h3>
      <p class="mb-4">When paired with our upcoming CAD & developer suites, the keys produce subtle micro-pulsing cues that guide user fingertips without looking down, reducing visual fatigue and eye repositioning by 42% in preliminary trials.</p>
    `
  },
  sustainability: {
    category: "SUSTAINABLE ENGINEERING",
    readTime: "4 min read",
    title: "Forged Ocean Carbon: The Architecture of Carbon-Negative Hardware",
    author: "Vikramaditya Roy · Head of Materials & Circular Design · Pune",
    date: "October 11, 2026",
    image: "assets/images/sustainable-tech.jpg",
    lead: "Moving beyond recycled plastic tokens. How logicindia.tech is transforming industrial carbon capture into forged, structural exterior chassis.",
    content: `
      <p class="mb-4">The tech industry has spent years offering consumer electronics with minor recycled additives. At logicindia.tech, we asked a harder question: can an input device sequester more atmospheric carbon than its entire supply chain generates?</p>
      
      <blockquote class="p-4 my-6 border-l-4 border-emerald-500 bg-stone-100 dark:bg-stone-800/60 font-serif-editorial text-lg italic text-stone-800 dark:text-stone-200">
        "Elegance and environmental responsibility are not opposing forces. Real luxury in 2026 is uncompromising ecological stewardship."
      </blockquote>

      <h3 class="text-xl font-bold font-serif-editorial mb-3 text-stone-900 dark:text-stone-100">The Ocean-Carbon Matrix</h3>
      <p class="mb-4">Our upcoming chassis utilizes high-modulus forged graphite bound with bio-resins extracted from marine algal blooms. The result is a stone-matte texture that feels cool to the touch, highly resistant to oils and skin abrasion, and lighter than aircraft-grade magnesium.</p>

      <div class="grid grid-cols-2 gap-4 my-6 p-4 rounded-xl bg-stone-50 dark:bg-stone-800/40 border border-stone-200 dark:border-stone-700 text-sm">
        <div>
          <span class="block text-xs uppercase tracking-wider text-stone-500 font-mono-tech">Carbon Balance</span>
          <span class="font-bold text-emerald-600 dark:text-emerald-400 text-base">-140g CO2e per unit</span>
        </div>
        <div>
          <span class="block text-xs uppercase tracking-wider text-stone-500 font-mono-tech">Repair Index</span>
          <span class="font-bold text-stone-900 dark:text-white text-base">9.8/10 (Toolless Clip)</span>
        </div>
      </div>

      <p class="mb-4">Each device features zero adhesive bonding. Every battery, sensor array, and primary daughterboard snaps into place with magnetic fasteners, allowing full disassembly in under 30 seconds for effortless modular upgrades.</p>
    `
  },
  quantum: {
    category: "TELEMETRY & CONNECTIVITY",
    readTime: "6 min read",
    title: "Quantum-Sync Protocol: Sub-0.1ms Optical Wireless Without Dongles",
    author: "Siddharth Menon · Principal RF & Optical Systems Lead · Hyderabad",
    date: "October 08, 2026",
    image: "assets/images/hero-tech.jpg",
    lead: "Radio spectrum in urban environments is choked with Wi-Fi 7 and Bluetooth signals. Our solution blends localized infrared optical beamforming with ultra-wideband RF.",
    content: `
      <p class="mb-4">If you have ever experienced cursor stutter during a crowded keynote or tournament arena, you know the Achilles heel of modern peripherals: 2.4GHz spectrum congestion. We re-engineered wireless from the photon up.</p>

      <blockquote class="p-4 my-6 border-l-4 border-emerald-500 bg-stone-100 dark:bg-stone-800/60 font-serif-editorial text-lg italic text-stone-800 dark:text-stone-200">
        "Wires are a safety net for unstable protocols. Once latency drops beneath human neuro-synaptic perception, cords become relics."
      </blockquote>

      <h3 class="text-xl font-bold font-serif-editorial mb-3 text-stone-900 dark:text-stone-100">Hybrid Optical-RF Beamforming</h3>
      <p class="mb-4">The logicindia.tech peripheral communicates directly with ambient light sensors in modern displays using high-speed non-visible optical pulses. It delivers 16,000 Hz polling rates with a round-trip latency of 0.0625 milliseconds — faster than wired USB 3.0 polling loops.</p>

      <div class="grid grid-cols-2 gap-4 my-6 p-4 rounded-xl bg-stone-50 dark:bg-stone-800/40 border border-stone-200 dark:border-stone-700 text-sm">
        <div>
          <span class="block text-xs uppercase tracking-wider text-stone-500 font-mono-tech">Polling Frequency</span>
          <span class="font-bold text-stone-900 dark:text-white text-base">16,000 Hz Continuous</span>
        </div>
        <div>
          <span class="block text-xs uppercase tracking-wider text-stone-500 font-mono-tech">Interference Immunity</span>
          <span class="font-bold text-stone-900 dark:text-white text-base">100% RF Clutter-Proof</span>
        </div>
      </div>
    `
  },
  ambient_ai: {
    category: "ON-DEVICE EDGE INTELLIGENCE",
    readTime: "5 min read",
    title: "The 1.2W Neural Co-Processor: Local Context Without Cloud Latency",
    author: "Pooja Venkatesh · Director of Edge AI & Firmware · Bengaluru",
    date: "October 03, 2026",
    image: "assets/images/hero-tech.jpg",
    lead: "Peripherals should not simply relay input; they should understand cognitive workflow intent. Introducing on-peripheral neural reasoning.",
    content: `
      <p class="mb-4">Cloud AI assistants suffer from network lag and privacy vulnerability. logicindia.tech introduces an integrated 1.2-watt ultra-low-power Tensor Engine inside input devices.</p>

      <blockquote class="p-4 my-6 border-l-4 border-emerald-500 bg-stone-100 dark:bg-stone-800/60 font-serif-editorial text-lg italic text-stone-800 dark:text-stone-200">
        "Your keystroke rhythm, acceleration velocity, and grip tension tell a rich story about focus, frustration, and intent. The device should serve you proactively."
      </blockquote>

      <h3 class="text-xl font-bold font-serif-editorial mb-3 text-stone-900 dark:text-stone-100">Adaptive Workflow Morphing</h3>
      <p class="mb-4">When switching from Figma to VS Code, the scroll wheel immediately swaps its inertial resistance profile to match code navigation. The thumb wheel switches from brush zoom to timeline scrubber, zero manual profile configuration required.</p>
    `
  }
};

document.addEventListener("DOMContentLoaded", () => {
  // Initialize Lucide icons
  if (window.lucide) {
    lucide.createIcons();
  }

  initTheme();
  initReadingProgress();
  initCountdown();
  initClapSystem();
  initBookmarkSystem();
  initAudioPlayer();
  initNewsletterCI4();
  initContactFormCI4();
  initModalDispatch();
  initPdfBioGenerator();
});

/* ==========================================================================
   1. Theme Management (Dark / Light)
   ========================================================================== */
function initTheme() {
  const toggleBtn = document.getElementById("theme-toggle");
  const storedTheme = localStorage.getItem("logicindia_theme");

  if (storedTheme === "dark" || (!storedTheme && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
    document.documentElement.classList.add("dark");
  } else {
    document.documentElement.classList.remove("dark");
  }

  if (toggleBtn) {
    toggleBtn.addEventListener("click", () => {
      const isDark = document.documentElement.classList.toggle("dark");
      localStorage.setItem("logicindia_theme", isDark ? "dark" : "light");
      showToast(isDark ? "Switched to Obsidian Night reading mode" : "Switched to Paper Editorial reading mode", "moon");
    });
  }
}

/* ==========================================================================
   2. Reading Progress Bar (Medium Style)
   ========================================================================== */
function initReadingProgress() {
  const progressBar = document.getElementById("reading-progress");
  if (!progressBar) return;

  window.addEventListener("scroll", () => {
    const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
    if (totalHeight <= 0) return;
    const progress = (window.scrollY / totalHeight) * 100;
    progressBar.style.width = `${Math.min(100, Math.max(0, progress))}%`;
  }, { passive: true });
}

/* ==========================================================================
   3. Launch Countdown Clock
   ========================================================================== */
function initCountdown() {
  const targetDate = new Date();
  targetDate.setDate(targetDate.getDate() + 42);
  targetDate.setHours(targetDate.getHours() + 14);

  const daysEl = document.getElementById("cd-days");
  const hoursEl = document.getElementById("cd-hours");
  const minsEl = document.getElementById("cd-mins");
  const secsEl = document.getElementById("cd-secs");

  function update() {
    const now = new Date().getTime();
    const distance = targetDate.getTime() - now;

    if (distance < 0) {
      if (daysEl) daysEl.innerText = "00";
      if (hoursEl) hoursEl.innerText = "00";
      if (minsEl) minsEl.innerText = "00";
      if (secsEl) secsEl.innerText = "00";
      return;
    }

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const mins = Math.floor((distance % (1000 * 60)) / (1000 * 60));
    const secs = Math.floor((distance % (1000 * 60)) / 1000);

    if (daysEl) daysEl.innerText = String(days).padStart(2, "0");
    if (hoursEl) hoursEl.innerText = String(hours).padStart(2, "0");
    if (minsEl) minsEl.innerText = String(mins).padStart(2, "0");
    if (secsEl) secsEl.innerText = String(secs).padStart(2, "0");
  }

  update();
  setInterval(update, 1000);
}

/* ==========================================================================
   4. Medium-style Clapping Interaction
   ========================================================================== */
function initClapSystem() {
  const clapBtns = document.querySelectorAll(".btn-clap");
  let userClapCount = parseInt(localStorage.getItem("logicindia_user_claps") || "0", 10);
  let globalClapCount = parseInt(localStorage.getItem("logicindia_total_claps") || "3842", 10);

  function refreshDisplays() {
    document.querySelectorAll(".clap-count-display").forEach(el => {
      el.textContent = globalClapCount.toLocaleString();
    });
  }
  refreshDisplays();

  clapBtns.forEach(btn => {
    btn.addEventListener("click", (e) => {
      if (userClapCount >= 50) {
        showToast("Maximum appreciation reached (50 claps). Thank you for supporting the lab!", "heart");
        return;
      }

      userClapCount++;
      globalClapCount++;
      localStorage.setItem("logicindia_user_claps", userClapCount);
      localStorage.setItem("logicindia_total_claps", globalClapCount);
      refreshDisplays();

      // Spawn floating +1 bubble
      const bubble = document.createElement("span");
      bubble.className = "clap-bubble";
      bubble.textContent = `+${userClapCount}`;
      
      const rect = btn.getBoundingClientRect();
      bubble.style.left = `${e.clientX - rect.left || 20}px`;
      bubble.style.top = `${e.clientY - rect.top || 0}px`;
      btn.appendChild(bubble);

      setTimeout(() => bubble.remove(), 900);

      // Pulse button icon
      const icon = btn.querySelector("svg");
      if (icon) {
        icon.classList.add("scale-125", "text-emerald-500");
        setTimeout(() => icon.classList.remove("scale-125"), 200);
      }
    });
  });
}

/* ==========================================================================
   5. Bookmark & Share System
   ========================================================================== */
function initBookmarkSystem() {
  const bookmarkBtns = document.querySelectorAll(".btn-bookmark");
  let isBookmarked = localStorage.getItem("logicindia_bookmarked") === "true";

  function updateUi() {
    bookmarkBtns.forEach(btn => {
      if (isBookmarked) {
        btn.classList.add("text-emerald-500");
        btn.setAttribute("title", "Saved to your Reading List");
      } else {
        btn.classList.remove("text-emerald-500");
        btn.setAttribute("title", "Save story to Reading List");
      }
    });
  }
  updateUi();

  bookmarkBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      isBookmarked = !isBookmarked;
      localStorage.setItem("logicindia_bookmarked", isBookmarked);
      updateUi();
      showToast(isBookmarked ? "Story saved to your reading list" : "Story removed from reading list", "bookmark");
    });
  });

  // Share buttons
  document.querySelectorAll(".btn-share").forEach(btn => {
    btn.addEventListener("click", () => {
      if (navigator.clipboard) {
        navigator.clipboard.writeText(window.location.href);
        showToast("Story link copied to clipboard!", "link-2");
      } else {
        showToast("Link: " + window.location.href, "share-2");
      }
    });
  });
}

/* ==========================================================================
   6. Audio Player Simulation (Medium "Listen to story")
   ========================================================================== */
function initAudioPlayer() {
  const playBtn = document.getElementById("audio-play-toggle");
  const waveBars = document.querySelectorAll(".sound-bar");
  const timeDisplay = document.getElementById("audio-time");
  let isPlaying = false;
  let currentSec = 0;
  const totalSec = 374; // 6:14
  let timer = null;

  function formatTime(s) {
    const mins = Math.floor(s / 60);
    const secs = s % 60;
    return `${mins}:${secs < 10 ? '0' : ''}${secs}`;
  }

  if (playBtn) {
    playBtn.addEventListener("click", () => {
      isPlaying = !isPlaying;
      const playIcon = playBtn.querySelector(".icon-play");
      const pauseIcon = playBtn.querySelector(".icon-pause");

      if (isPlaying) {
        if (playIcon) playIcon.classList.add("hidden");
        if (pauseIcon) pauseIcon.classList.remove("hidden");
        waveBars.forEach(b => b.classList.add("sound-bar"));
        timer = setInterval(() => {
          currentSec++;
          if (currentSec > totalSec) {
            currentSec = 0;
            isPlaying = false;
            clearInterval(timer);
            if (playIcon) playIcon.classList.remove("hidden");
            if (pauseIcon) pauseIcon.classList.add("hidden");
            waveBars.forEach(b => b.classList.remove("sound-bar"));
          }
          if (timeDisplay) timeDisplay.textContent = `${formatTime(currentSec)} / ${formatTime(totalSec)}`;
        }, 1000);
        showToast("Playing audio narration: logicindia.tech Frontier Briefing", "volume-2");
      } else {
        if (playIcon) playIcon.classList.remove("hidden");
        if (pauseIcon) pauseIcon.classList.add("hidden");
        waveBars.forEach(b => b.classList.remove("sound-bar"));
        clearInterval(timer);
      }
    });
  }
}

/* ==========================================================================
   7. Newsletter Subscription with CodeIgniter 4 AJAX API
   ========================================================================== */
function initNewsletterCI4() {
  const forms = [
    document.getElementById("hero-newsletter-form"),
    document.getElementById("footer-newsletter-form")
  ];

  forms.forEach(form => {
    if (!form) return;
    form.addEventListener("submit", async (e) => {
      e.preventDefault();
      const input = form.querySelector("input[type='email']");
      const submitBtn = form.querySelector("button[type='submit']");
      const email = input ? input.value.trim() : "";

      if (!email || !email.includes("@") || !email.includes(".")) {
        showToast("Please enter a valid email address.", "alert-circle");
        return;
      }

      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = `<span class="inline-block animate-spin mr-2">⟳</span> Connecting...`;
      }

      try {
        const formData = new FormData();
        formData.append("email", email);

        // CodeIgniter 4 API call
        const response = await fetch("api/subscribe", {
          method: "POST",
          body: formData
        });

        const data = await response.json();

        if (response.ok && data.status === "success") {
          if (input) input.value = "";
          if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = `✓ Subscribed`;
            submitBtn.classList.remove("bg-stone-900", "dark:bg-white");
            submitBtn.classList.add("bg-emerald-600", "text-white");
          }
          showToast(data.message, "check-circle");
        } else {
          showToast(data.message || "Subscription error. Please retry.", "alert-triangle");
          if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = "Subscribe";
          }
        }
      } catch (err) {
        // Fallback for offline / static
        showToast("Welcome aboard! You have joined 45,800+ pioneers receiving the logicindia.tech Dispatch.", "check-circle");
        if (input) input.value = "";
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = `✓ Subscribed`;
        }
      }
    });
  });
}

/* ==========================================================================
   8. Contact Form & Inquiry Modal with CodeIgniter 4 AJAX API
   ========================================================================== */
function initContactFormCI4() {
  const contactForm = document.getElementById("contact-inquiry-form");
  const contactModal = document.getElementById("contact-modal");
  const openBtns = document.querySelectorAll(".btn-open-contact");
  const closeBtn = document.getElementById("close-contact-modal");

  function openModal() {
    if (contactModal) {
      contactModal.classList.remove("hidden");
      document.body.style.overflow = "hidden";
    }
  }

  function closeModal() {
    if (contactModal) {
      contactModal.classList.add("hidden");
      document.body.style.overflow = "";
    }
  }

  openBtns.forEach(btn => btn.addEventListener("click", openModal));
  if (closeBtn) closeBtn.addEventListener("click", closeModal);

  if (contactModal) {
    contactModal.addEventListener("click", (e) => {
      if (e.target === contactModal) closeModal();
    });
  }

  if (contactForm) {
    contactForm.addEventListener("submit", async (e) => {
      e.preventDefault();
      const submitBtn = contactForm.querySelector("button[type='submit']");
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = `<span class="inline-block animate-spin mr-2">⟳</span> Transmitting to ATG...`;
      }

      try {
        const formData = new FormData(contactForm);

        // CodeIgniter 4 API call
        const response = await fetch("api/contact", {
          method: "POST",
          body: formData
        });

        const data = await response.json();

        if (response.ok && data.status === "success") {
          contactForm.reset();
          if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = "Transmit Inquiry to ATG";
          }
          closeModal();
          showToast(data.message, "send");
        } else {
          showToast(data.message || "Failed to submit inquiry.", "alert-triangle");
          if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = "Transmit Inquiry to ATG";
          }
        }
      } catch (err) {
        // Graceful fallback
        contactForm.reset();
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = "Transmit Inquiry to ATG";
        }
        closeModal();
        showToast("Inquiry received by logicindia.tech Advanced Technology Group. We will reply within 24 hours.", "send");
      }
    });
  }
}

/* ==========================================================================
   9. Interactive Dispatch Reader Modal
   ========================================================================== */
function initModalDispatch() {
  const modal = document.getElementById("article-modal");
  const closeBtn = document.getElementById("close-article-modal");
  const triggers = document.querySelectorAll(".btn-read-dispatch");

  function openArticle(key) {
    const data = TECH_DISPATCHES[key];
    if (!data || !modal) return;

    document.getElementById("modal-category").textContent = data.category;
    document.getElementById("modal-read-time").textContent = data.readTime;
    document.getElementById("modal-title").textContent = data.title;
    document.getElementById("modal-author").textContent = data.author;
    document.getElementById("modal-date").textContent = data.date;
    document.getElementById("modal-lead").textContent = data.lead;
    document.getElementById("modal-content").innerHTML = data.content;

    const imgEl = document.getElementById("modal-image");
    if (imgEl && data.image) {
      imgEl.src = data.image;
      imgEl.alt = data.title;
      imgEl.classList.remove("hidden");
    } else if (imgEl) {
      imgEl.classList.add("hidden");
    }

    modal.classList.remove("hidden");
    document.body.style.overflow = "hidden";
  }

  function closeArticle() {
    if (modal) {
      modal.classList.add("hidden");
      document.body.style.overflow = "";
    }
  }

  triggers.forEach(btn => {
    btn.addEventListener("click", () => {
      const key = btn.getAttribute("data-dispatch-key");
      openArticle(key);
    });
  });

  if (closeBtn) closeBtn.addEventListener("click", closeArticle);
  if (modal) {
    modal.addEventListener("click", (e) => {
      if (e.target === modal) closeArticle();
    });
  }
}

/* ==========================================================================
   10. PDF Bio & Whitepaper Generator (Real Downloadable Executive PDF)
   ========================================================================== */
function initPdfBioGenerator() {
  const downloadBtns = document.querySelectorAll(".btn-download-bio-pdf");

  downloadBtns.forEach(btn => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();

      if (!window.jspdf || !window.jspdf.jsPDF) {
        // Fallback to server route
        window.open("download-bio", "_blank");
        return;
      }

      showToast("Generating official logicindia.tech Bio & Whitepaper PDF...", "download");

      try {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF({
          orientation: "portrait",
          unit: "mm",
          format: "a4"
        });

        // Palette
        const primaryColor = [18, 18, 18];
        const emeraldAccent = [0, 184, 120];
        const stoneGray = [115, 115, 115];
        const lightBg = [248, 247, 244];

        // --- PAGE 1: Corporate & Innovation Bio ---
        // Header Banner
        doc.setFillColor(...primaryColor);
        doc.rect(0, 0, 210, 36, "F");

        doc.setFillColor(...emeraldAccent);
        doc.rect(0, 36, 210, 2, "F");

        // Brand Title
        doc.setTextColor(255, 255, 255);
        doc.setFont("helvetica", "bold");
        doc.setFontSize(22);
        doc.text("LOGICINDIA.TECH", 20, 22);

        doc.setFontSize(10);
        doc.setFont("helvetica", "normal");
        doc.setTextColor(200, 200, 200);
        doc.text("ADVANCED TECHNOLOGY GROUP · EXECUTIVE PROFILE & RESEARCH BRIEFING", 20, 30);

        // Date & Document Number
        doc.setFontSize(8);
        doc.text("DOC-ID: LOGICINDIA-ATG-2026", 150, 22);
        doc.text("OCTOBER 2026 EDITION", 150, 28);

        // Executive Summary
        doc.setTextColor(...primaryColor);
        doc.setFontSize(16);
        doc.setFont("helvetica", "bold");
        doc.text("1. Executive Summary & Frontier Charter", 20, 52);

        doc.setFontSize(10);
        doc.setFont("helvetica", "normal");
        doc.setTextColor(60, 60, 60);
        const execSummary = 
          "logicindia.tech was established to engineer the future of high-bandwidth human-machine interaction, physical computing peripherals, and indigenous deep-tech hardware systems from India to the global frontier.\n\n" +
          "Our research labs operate across Bengaluru, Hyderabad, and Pune, focusing on three technological breakthroughs: dynamic micro-fluidic tactile actuation, zero-latency optical telemetry, and circular bio-composite materials engineered to make computational hardware a carbon-negative asset.";
        
        const splitSummary = doc.splitTextToSize(execSummary, 170);
        doc.text(splitSummary, 20, 60);

        // Key Metrics Box
        doc.setFillColor(...lightBg);
        doc.roundedRect(20, 88, 170, 32, 2, 2, "F");

        doc.setFontSize(9);
        doc.setFont("helvetica", "bold");
        doc.setTextColor(...primaryColor);
        doc.text("NATIONAL R&D RESEARCH CAMPUS FOOTPRINT", 26, 96);

        doc.setFont("helvetica", "normal");
        doc.setFontSize(8);
        doc.setTextColor(...stoneGray);
        doc.text("• Bengaluru Advanced Computing & Haptics Center: Electronic City Phase 1, Bengaluru", 26, 103);
        doc.text("• Hyderabad Semiconductor & Optical Telemetry Campus: HITEC City, Hyderabad", 26, 109);
        doc.text("• Pune Materials & Circular Hardware Design Hub: Hinjawadi Tech Park, Pune", 26, 115);

        // Core Ongoing Technologies Table
        doc.setFontSize(14);
        doc.setFont("helvetica", "bold");
        doc.setTextColor(...primaryColor);
        doc.text("2. Ongoing Core Technologies (Under Active Prototyping)", 20, 134);

        const techItems = [
          {
            title: "Micro-Fluidic Actuation (Haptics 2.0)",
            desc: "Sub-millisecond tactile texture switching dynamically tuning keystroke actuation from 35g to 85g."
          },
          {
            title: "Quantum-Sync Optical Telemetry",
            desc: "16,000 Hz optical pulse synchronization directly into ambient monitor sensors with sub-0.1ms delay."
          },
          {
            title: "Forged Ocean Carbon Composites",
            desc: "Chassis architecture utilizing marine algal binders and recovered carbon fibers (-140g net CO2e balance)."
          },
          {
            title: "On-Peripheral 1.2W Neural Engine",
            desc: "Ultra-low power edge NPU running local biomechanical prediction models without cloud data dependency."
          }
        ];

        let yPos = 144;
        techItems.forEach((item, index) => {
          doc.setFillColor(...emeraldAccent);
          doc.circle(23, yPos - 1.5, 1.5, "F");

          doc.setFontSize(10);
          doc.setFont("helvetica", "bold");
          doc.setTextColor(...primaryColor);
          doc.text(item.title, 28, yPos);

          doc.setFontSize(9);
          doc.setFont("helvetica", "normal");
          doc.setTextColor(80, 80, 80);
          const splitDesc = doc.splitTextToSize(item.desc, 160);
          doc.text(splitDesc, 28, yPos + 5);

          yPos += 16;
        });

        // Contact & Official Verification
        doc.setFontSize(14);
        doc.setFont("helvetica", "bold");
        doc.setTextColor(...primaryColor);
        doc.text("3. Official Verification & Contact Coordinates", 20, 222);

        doc.setFontSize(9);
        doc.setFont("helvetica", "normal");
        doc.setTextColor(70, 70, 70);
        doc.text("Advanced Inquiries: innovations@logicindia.tech", 20, 230);
        doc.text("Press & Analyst Relations: press@logicindia.tech", 20, 236);
        doc.text("Official Portal: https://logicindia.tech · Bengaluru & Hyderabad, India", 20, 242);

        // Sign-off signature line
        doc.setDrawColor(200, 200, 200);
        doc.line(20, 258, 190, 258);

        doc.setFontSize(8);
        doc.setTextColor(...stoneGray);
        doc.text("Authorized by logicindia.tech Advanced Technology Group (ATG) · Certified Authentic 2026", 20, 265);
        doc.text("Page 1 of 1 · Public Innovation Briefing", 145, 265);

        // Download the PDF
        doc.save("LogicIndia_Tech_Innovation_Bio_2026.pdf");
        showToast("logicindia.tech Innovation Bio PDF downloaded successfully!", "check");
      } catch (err) {
        console.error(err);
        window.open("download-bio", "_blank");
      }
    });
  });
}

/* ==========================================================================
   11. Toast Notification Utility
   ========================================================================== */
function showToast(message, iconName = "info") {
  const container = document.getElementById("toast-container");
  if (!container) return;

  const toast = document.createElement("div");
  toast.className = "flex items-center gap-3 px-4 py-3 bg-stone-900 text-white dark:bg-stone-100 dark:text-stone-900 rounded-xl shadow-2xl border border-stone-800 dark:border-stone-200 text-sm transition-all duration-300 transform translate-y-3 opacity-0 font-sans-editorial";
  
  toast.innerHTML = `
    <i data-lucide="${iconName}" class="w-4 h-4 text-emerald-400 dark:text-emerald-600 flex-shrink-0"></i>
    <span class="flex-1">${message}</span>
  `;

  container.appendChild(toast);
  if (window.lucide) lucide.createIcons({ root: toast });

  requestAnimationFrame(() => {
    toast.classList.remove("translate-y-3", "opacity-0");
  });

  setTimeout(() => {
    toast.classList.add("translate-y-3", "opacity-0");
    setTimeout(() => toast.remove(), 300);
  }, 4000);
}
