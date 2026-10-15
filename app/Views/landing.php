<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-PK9VL82B');</script>
  <!-- End Google Tag Manager -->

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= esc($page_title) ?></title>
  <meta name="description" content="<?= esc($meta_description) ?>">
  <meta name="theme-color" content="#121212">

  <!-- Favicon SVG -->
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300E59B' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><circle cx='12' cy='12' r='10'/><path d='m8 12 3 3 5-5'/></svg>">

  <!-- Uniform Base URL Global Definition -->
  <script>
    window.BASE_URL = "<?= base_url() ?>";
  </script>

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            logi: {
              teal: '#00E59B',
              darkteal: '#00B878',
              obsidian: '#0E0E10',
              paper: '#FAF8F5',
              border: '#E8E5DF',
              darkborder: '#232328'
            }
          },
          fontFamily: {
            serif: ['Newsreader', 'Georgia', 'serif'],
            sans: ['"Plus Jakarta Sans"', '-apple-system', 'BlinkMacSystemFont', 'sans-serif'],
            mono: ['"JetBrains Mono"', 'monospace']
          }
        }
      }
    }
  </script>

  <!-- Google Fonts & Custom CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="editorial-paper text-stone-900 dark:text-stone-100 transition-colors duration-200 antialiased selection:bg-logi-teal selection:text-black min-h-screen flex flex-col justify-between">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PK9VL82B"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Reading Progress Bar (Medium Style) -->
  <div class="fixed top-0 left-0 w-full z-50">
    <div id="reading-progress"></div>
  </div>

  <!-- Toast Notification Container -->
  <div id="toast-container" class="fixed bottom-6 right-6 flex flex-col gap-2 pointer-events-none z-50"></div>

  <!-- Editorial Top Bar -->
  <header class="sticky top-0 z-40 bg-[#FAF8F5]/90 dark:bg-[#0E0E10]/90 backdrop-blur-md border-b border-stone-200/80 dark:border-stone-800/80 transition-colors">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 h-16 flex items-center justify-between">
      
      <!-- Brand / Logo: logicindia.tech -->
      <a href="<?= base_url() ?>" id="gtm-nav-logo" data-gtm-category="navigation" data-gtm-action="click" data-gtm-label="Home Logo" class="flex items-center gap-1 group">
        <span class="font-extrabold text-2xl tracking-tighter text-stone-950 dark:text-white font-sans transition-transform group-hover:scale-105">
          logicindia<span class="text-logi-teal font-black text-2xl">.tech</span>
        </span>
      </a>

      <!-- Center Nav Links -->
      <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-stone-600 dark:text-stone-400">
        <a href="<?= base_url('#unveil') ?>" id="gtm-nav-unveil" data-gtm-category="navigation" data-gtm-action="click" data-gtm-label="The Unveil" class="hover:text-stone-950 dark:hover:text-white transition-colors">The Unveil</a>
        <a href="<?= base_url('#ongoing-tech') ?>" id="gtm-nav-tech" data-gtm-category="navigation" data-gtm-action="click" data-gtm-label="Ongoing Tech" class="hover:text-stone-950 dark:hover:text-white transition-colors">Ongoing Tech</a>
        <a href="<?= base_url('#bio-whitepaper') ?>" id="gtm-nav-bio" data-gtm-category="navigation" data-gtm-action="click" data-gtm-label="Bio and R&D" class="hover:text-stone-950 dark:hover:text-white transition-colors">Bio & R&D</a>
        <a href="<?= base_url('subscribe') ?>" id="gtm-nav-newsletter-link" data-gtm-category="navigation" data-gtm-action="click" data-gtm-label="Newsletter Page" class="hover:text-stone-950 dark:hover:text-white transition-colors">Dispatch</a>
        <a href="<?= base_url('#laboratories') ?>" id="gtm-nav-labs" data-gtm-category="navigation" data-gtm-action="click" data-gtm-label="R&D Labs" class="hover:text-stone-950 dark:hover:text-white transition-colors">R&D Labs</a>
      </nav>

      <!-- Action Cluster -->
      <div class="flex items-center gap-3">
        <!-- Download Bio PDF Anchor Tag (NO SVG) -->
        <a href="<?= base_url('download-bio-pdf') ?>" download="LogicIndia_Tech_Innovation_Bio_2026.pdf" id="gtm-nav-download-bio" data-gtm-category="downloads" data-gtm-action="click" data-gtm-label="Nav Download Bio PDF" class="hidden sm:inline-flex items-center px-3.5 py-1.5 rounded-full text-xs font-semibold tracking-wide border border-stone-300 dark:border-stone-700 hover:border-emerald-500 text-stone-700 dark:text-stone-300 hover:text-stone-900 dark:hover:text-white transition-all bg-white/60 dark:bg-stone-900/60 shadow-sm" title="Download Official logicindia.tech Innovation Bio PDF">
          Download Bio PDF
        </a>

        <!-- Direct Contact Modal Opener -->
        <button id="gtm-nav-btn-contact" data-gtm-category="lead" data-gtm-action="click" data-gtm-label="Nav Inquire Button" class="btn-open-contact hidden lg:inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-xs font-semibold tracking-wide bg-stone-900 text-white dark:bg-white dark:text-stone-900 hover:bg-stone-800 dark:hover:bg-stone-100 transition-all shadow-sm">
          <span>Inquire</span>
        </button>

        <!-- Dark / Paper Mode Switcher -->
        <button id="gtm-theme-toggle" aria-label="Toggle Theme" data-gtm-category="settings" data-gtm-action="click" data-gtm-label="Theme Switcher" class="p-2 rounded-full border border-stone-200 dark:border-stone-800 text-stone-600 dark:text-stone-300 hover:bg-stone-100 dark:hover:bg-stone-800 transition-colors">
          <i data-lucide="moon" class="w-4 h-4 hidden dark:block"></i>
          <i data-lucide="sun" class="w-4 h-4 block dark:hidden"></i>
        </button>
      </div>

    </div>
  </header>

  <!-- Main Editorial Container -->
  <main class="flex-grow">

    <!-- HERO SECTION: Medium Cover Story & Coming Soon Unveil -->
    <article id="unveil" class="max-w-4xl mx-auto px-4 sm:px-6 pt-12 pb-16">
      
      <!-- Editorial Kicker / Meta Category -->
      <div class="flex items-center gap-3 text-xs font-semibold tracking-widest uppercase text-stone-500 dark:text-stone-400 mb-6 font-mono">
        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-stone-100 dark:bg-stone-800 border border-stone-200 dark:border-stone-700">
          <span class="w-2 h-2 rounded-full bg-logi-teal animate-pulse"></span>
          AUTUMN 2026 DISPATCH
        </span>
        <span>·</span>
        <span>LOGICINDIA ATG SPECIAL REPORT</span>
        <span>·</span>
        <span class="text-stone-400 dark:text-stone-500">6 MIN READ</span>
      </div>

      <!-- Main Headline (Medium Style Serif Display) -->
      <h1 class="font-serif font-normal text-4xl sm:text-5xl md:text-6xl tracking-tight leading-[1.12] text-stone-950 dark:text-stone-50 mb-6 font-serif-editorial">
        The Next Era of Human-Computer Symbiosis is Arriving.
      </h1>

      <!-- Subtitle / Lede -->
      <p class="font-sans text-lg sm:text-xl text-stone-600 dark:text-stone-300 font-normal leading-relaxed mb-8 max-w-3xl">
        Pioneering deep-tech hardware from India to the world. <strong class="text-stone-900 dark:text-white font-semibold">logicindia.tech</strong> is unveiling a unified computing ecosystem engineered for micro-fluidic tactile feedback, quantum-sync optical wireless, and carbon-negative physical materials.
      </p>

      <!-- Byline Row (Medium Author Profile) -->
      <div class="flex flex-wrap items-center justify-between gap-4 py-4 border-y border-stone-200 dark:border-stone-800/80 mb-8">
        <div class="flex items-center gap-3">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=120&q=80" alt="Dr. Ananya Sharma" class="w-11 h-11 rounded-full object-cover ring-2 ring-stone-200 dark:ring-stone-700">
          <div>
            <div class="flex items-center gap-2">
              <span class="font-semibold text-sm text-stone-900 dark:text-white">Dr. Ananya Sharma</span>
              <span class="text-xs px-2 py-0.5 rounded-full bg-emerald-100 dark:bg-emerald-950/60 text-emerald-800 dark:text-emerald-400 font-medium">Chief Scientist</span>
            </div>
            <p class="text-xs text-stone-500 dark:text-stone-400">logicindia.tech Advanced Technology Group · Bengaluru & Hyderabad</p>
          </div>
        </div>

        <!-- Social / Medium Action Buttons -->
        <div class="flex items-center gap-3 text-stone-600 dark:text-stone-400">
          <!-- Clap Button -->
          <button id="gtm-btn-clap" data-gtm-category="engagement" data-gtm-action="click" data-gtm-label="Story Clap" class="btn-clap relative flex items-center gap-2 px-3 py-1.5 rounded-full border border-stone-200 dark:border-stone-800 hover:border-emerald-500 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors bg-white/40 dark:bg-stone-900/40 text-xs font-medium" title="Clap to show appreciation (up to 50 times)">
            <i data-lucide="heart" class="w-4 h-4 transition-transform"></i>
            <span class="clap-count-display font-mono">3,842</span>
          </button>

          <!-- Bookmark Button -->
          <button id="gtm-btn-bookmark" data-gtm-category="engagement" data-gtm-action="click" data-gtm-label="Story Bookmark" class="btn-bookmark p-2 rounded-full border border-stone-200 dark:border-stone-800 hover:text-emerald-500 transition-colors bg-white/40 dark:bg-stone-900/40" title="Save story">
            <i data-lucide="bookmark" class="w-4 h-4"></i>
          </button>

          <!-- Share Button -->
          <button id="gtm-btn-share" data-gtm-category="engagement" data-gtm-action="click" data-gtm-label="Story Share" class="btn-share p-2 rounded-full border border-stone-200 dark:border-stone-800 hover:text-emerald-500 transition-colors bg-white/40 dark:bg-stone-900/40" title="Copy story link">
            <i data-lucide="share-2" class="w-4 h-4"></i>
          </button>
        </div>
      </div>

      <!-- Medium Audio Narration Player Bar -->
      <div class="mb-10 p-4 rounded-2xl bg-stone-100/80 dark:bg-stone-900/60 border border-stone-200/80 dark:border-stone-800 flex items-center justify-between gap-4">
        <div class="flex items-center gap-3">
          <button id="audio-play-toggle" data-gtm-category="media" data-gtm-action="click" data-gtm-label="Audio Narration Play" aria-label="Play audio narration" class="w-10 h-10 rounded-full bg-stone-900 text-white dark:bg-stone-100 dark:text-stone-900 flex items-center justify-center hover:scale-105 transition-transform flex-shrink-0 shadow">
            <i data-lucide="play" class="w-4 h-4 icon-play ml-0.5"></i>
            <i data-lucide="pause" class="w-4 h-4 icon-pause hidden"></i>
          </button>
          <div>
            <div class="text-xs font-semibold tracking-wide uppercase text-stone-500 dark:text-stone-400 font-mono">Audio Dispatch · AI Voice</div>
            <div class="text-sm font-medium text-stone-900 dark:text-stone-100">Listen to Dr. Sharma narrate the logicindia.tech briefing</div>
          </div>
        </div>

        <!-- Simulated sound wave bars -->
        <div class="hidden sm:flex items-center gap-1">
          <span class="w-1 bg-logi-teal rounded-full h-2 sound-bar"></span>
          <span class="w-1 bg-logi-teal rounded-full h-4 sound-bar"></span>
          <span class="w-1 bg-logi-teal rounded-full h-5 sound-bar"></span>
          <span class="w-1 bg-logi-teal rounded-full h-3 sound-bar"></span>
          <span class="w-1 bg-logi-teal rounded-full h-4 sound-bar"></span>
          <span class="w-1 bg-logi-teal rounded-full h-2 sound-bar"></span>
          <span id="audio-time" class="text-xs font-mono text-stone-500 dark:text-stone-400 ml-3">0:00 / 6:14</span>
        </div>
      </div>

      <!-- COMING SOON COUNTDOWN CARD -->
      <div class="p-6 sm:p-8 rounded-2xl bg-gradient-to-br from-stone-900 to-stone-950 text-white shadow-2xl border border-stone-800 mb-12 relative overflow-hidden">
        <!-- Ambient Glow -->
        <div class="absolute -right-16 -top-16 w-64 h-64 bg-logi-teal/15 rounded-full blur-3xl pointer-events-none"></div>

        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 relative z-10">
          <div>
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-xs font-mono font-medium mb-3">
              <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
              GLOBAL REVEAL COUNTDOWN
            </div>
            <h2 class="text-2xl sm:text-3xl font-bold tracking-tight font-sans">logicindia.tech Hardware Keynote</h2>
            <p class="text-stone-400 text-sm mt-1 max-w-md">Synchronized broadcast across Bengaluru, San Francisco, and Singapore. Reserve early developer access.</p>
          </div>

          <!-- Digital Countdown Digits -->
          <div class="grid grid-cols-4 gap-2 sm:gap-3 text-center">
            <div class="bg-stone-800/80 border border-stone-700/60 rounded-xl p-3 sm:px-4 min-w-[64px]">
              <span id="cd-days" class="block font-mono text-2xl sm:text-3xl font-extrabold text-white">42</span>
              <span class="text-[10px] font-mono text-stone-400 uppercase tracking-widest">Days</span>
            </div>
            <div class="bg-stone-800/80 border border-stone-700/60 rounded-xl p-3 sm:px-4 min-w-[64px]">
              <span id="cd-hours" class="block font-mono text-2xl sm:text-3xl font-extrabold text-white">14</span>
              <span class="text-[10px] font-mono text-stone-400 uppercase tracking-widest">Hours</span>
            </div>
            <div class="bg-stone-800/80 border border-stone-700/60 rounded-xl p-3 sm:px-4 min-w-[64px]">
              <span id="cd-mins" class="block font-mono text-2xl sm:text-3xl font-extrabold text-white">28</span>
              <span class="text-[10px] font-mono text-stone-400 uppercase tracking-widest">Mins</span>
            </div>
            <div class="bg-stone-800/80 border border-stone-700/60 rounded-xl p-3 sm:px-4 min-w-[64px]">
              <span id="cd-secs" class="block font-mono text-2xl sm:text-3xl font-extrabold text-logi-teal">50</span>
              <span class="text-[10px] font-mono text-stone-400 uppercase tracking-widest">Secs</span>
            </div>
          </div>
        </div>

        <!-- Early Access Direct Inline Input (Submits to Dedicated Page) -->
        <div class="mt-8 pt-6 border-t border-stone-800/80 flex flex-col sm:flex-row items-center gap-3">
          <form id="hero-newsletter-form" action="<?= base_url('subscribe') ?>" method="POST" data-gtm-category="newsletter" data-gtm-action="submit" data-gtm-label="Hero Early Access Form" class="w-full flex flex-col sm:flex-row gap-2">
            <?= csrf_field() ?>
            <div class="relative flex-1">
              <i data-lucide="mail" class="w-4 h-4 absolute left-3.5 top-1/2 -translate-y-1/2 text-stone-400"></i>
              <input type="email" name="email" id="gtm-hero-email-input" required placeholder="Enter your work email for priority developer access..." class="w-full pl-10 pr-4 py-3 rounded-xl bg-stone-800/90 border border-stone-700 text-white placeholder-stone-400 text-sm focus:outline-none focus:border-logi-teal transition-colors">
            </div>
            <button type="submit" id="gtm-hero-submit-btn" data-gtm-category="newsletter" data-gtm-action="click" data-gtm-label="Reserve Early Access Button" class="px-6 py-3 rounded-xl bg-logi-teal text-stone-950 font-bold text-sm hover:bg-emerald-400 transition-colors shadow-lg shadow-emerald-500/20 whitespace-nowrap">
              Reserve Early Access
            </button>
          </form>
        </div>
      </div>

      <!-- Feature Image with Medium Caption -->
      <figure class="my-10">
        <div class="rounded-2xl overflow-hidden border border-stone-200 dark:border-stone-800 shadow-xl bg-stone-100 dark:bg-stone-900 group">
          <img src="<?= base_url('assets/images/hero-tech.jpg') ?>" alt="logicindia.tech Concept Peripherals" class="w-full h-auto object-cover transform group-hover:scale-[1.01] transition-transform duration-700">
        </div>
        <figcaption class="mt-3 text-center text-xs font-mono text-stone-500 dark:text-stone-400">
          Fig. 1.0 — logicindia.tech Horizon Concept M-1 & Spatial 6DoF Neural Controller. Precision engineering test unit, Bengaluru ATG Campus.
        </figcaption>
      </figure>

      <!-- Editorial Narrative Section (Medium Style Prose) -->
      <div class="prose dark:prose-invert max-w-none text-stone-800 dark:text-stone-200 leading-relaxed font-sans text-base sm:text-lg">
        <p class="mb-6 font-serif-editorial text-xl sm:text-2xl text-stone-900 dark:text-stone-100 leading-normal">
          "Computers compute at trillions of instructions per second, yet the physical bridge between user intention and software execution has remained tethered to basic mechanical micro-switches and rigid chassis."
        </p>

        <p class="mb-6">
          Over the past four years, the <strong class="text-stone-900 dark:text-white font-semibold">logicindia.tech</strong> Advanced Technology Group (ATG) across Bengaluru, Hyderabad, and Pune set aside incremental refreshes to pursue fundamental interface physics. We asked three foundational questions:
        </p>

        <ul class="list-none space-y-4 my-8 pl-0">
          <li class="flex items-start gap-3">
            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-emerald-100 dark:bg-emerald-950/80 text-emerald-800 dark:text-emerald-400 font-mono text-xs flex items-center justify-center font-bold mt-0.5">01</span>
            <div><strong class="text-stone-950 dark:text-white">What if tactile resistance adapted in real time?</strong> A mechanical switch that feels crisp and feathery while typing, yet morphs into a firm, resistive trigger when executing irreversible operations.</div>
          </li>
          <li class="flex items-start gap-3">
            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-emerald-100 dark:bg-emerald-950/80 text-emerald-800 dark:text-emerald-400 font-mono text-xs flex items-center justify-center font-bold mt-0.5">02</span>
            <div><strong class="text-stone-950 dark:text-white">What if wireless surpassed optical wire latency?</strong> Moving beyond congested 2.4GHz bands to localized optical beamforming with sub-0.1 millisecond polling.</div>
          </li>
          <li class="flex items-start gap-3">
            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-emerald-100 dark:bg-emerald-950/80 text-emerald-800 dark:text-emerald-400 font-mono text-xs flex items-center justify-center font-bold mt-0.5">03</span>
            <div><strong class="text-stone-950 dark:text-white">What if every device actively healed the biosphere?</strong> Utilizing forged ocean carbon matrices that sequester more atmospheric CO2e than their entire production footprint consumes.</div>
          </li>
        </ul>
      </div>

    </article>


    <!-- SECTION: ONGOING & NEW TECHNOLOGIES (Medium Story Cards) -->
    <section id="ongoing-tech" class="py-16 border-t border-stone-200/80 dark:border-stone-800 bg-white/50 dark:bg-[#0c0c0e]/50">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        
        <!-- Section Header -->
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12 gap-4 pb-4 border-b border-stone-200 dark:border-stone-800">
          <div>
            <div class="text-xs font-mono uppercase tracking-widest text-emerald-600 dark:text-emerald-400 font-semibold mb-2">RESEARCH PIPELINE 2026–2027</div>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-stone-950 dark:text-white tracking-tight">Ongoing Technologies</h2>
          </div>
          <p class="text-stone-500 dark:text-stone-400 text-sm max-w-sm">
            Deep technical investigations currently under active prototyping in our Bengaluru, Hyderabad, and Pune research centers.
          </p>
        </div>

        <!-- Medium Grid Feed -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
          
          <?php foreach ($technologies as $key => $tech): ?>
          <article class="flex flex-col justify-between p-6 sm:p-7 rounded-2xl bg-[#FAF8F5] dark:bg-[#121215] border border-stone-200 dark:border-stone-800/80 shadow-sm hover:shadow-xl transition-all duration-300 group">
            
            <div>
              <!-- Card Image -->
              <div class="relative rounded-xl overflow-hidden mb-5 bg-stone-200 dark:bg-stone-800 aspect-video">
                <img src="<?= base_url($tech['image']) ?>" alt="<?= esc($tech['title']) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <span class="absolute top-3 left-3 px-2.5 py-1 rounded bg-stone-950/80 backdrop-blur-md text-white text-[11px] font-mono tracking-wider uppercase">
                  <?= esc($tech['tag']) ?>
                </span>
              </div>

              <!-- Meta info -->
              <div class="flex items-center gap-2 text-xs font-mono text-stone-500 dark:text-stone-400 mb-2">
                <span><?= esc($tech['category']) ?></span>
                <span>·</span>
                <span><?= esc($tech['read_time']) ?></span>
              </div>

              <!-- Title -->
              <h3 class="text-xl sm:text-2xl font-serif font-bold text-stone-900 dark:text-white group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors leading-snug mb-3">
                <?= esc($tech['title']) ?>
              </h3>

              <!-- Excerpt -->
              <p class="text-stone-600 dark:text-stone-300 text-sm leading-relaxed mb-6">
                <?= esc($tech['summary']) ?>
              </p>
            </div>

            <!-- Specs Grid & Author Bar -->
            <div class="pt-4 border-t border-stone-200 dark:border-stone-800">
              <div class="grid grid-cols-2 gap-2 mb-4 text-xs font-mono">
                <?php foreach (array_slice($tech['specs'], 0, 2) as $spec): ?>
                <div class="p-2 rounded bg-stone-100 dark:bg-stone-800/50">
                  <div class="text-stone-500 dark:text-stone-400 text-[10px] uppercase"><?= esc($spec['label']) ?></div>
                  <div class="font-bold text-stone-900 dark:text-stone-100"><?= esc($spec['val']) ?></div>
                </div>
                <?php endforeach; ?>
              </div>

              <div class="flex items-center justify-between">
                <div class="flex items-center gap-2.5">
                  <img src="<?= esc($tech['author_avatar']) ?>" alt="<?= esc($tech['author']) ?>" class="w-8 h-8 rounded-full object-cover ring-1 ring-stone-300 dark:ring-stone-700">
                  <div class="text-left">
                    <div class="text-xs font-semibold text-stone-900 dark:text-stone-100"><?= esc($tech['author']) ?></div>
                    <div class="text-[10px] text-stone-500 dark:text-stone-400"><?= esc($tech['author_role']) ?></div>
                  </div>
                </div>

                <button id="gtm-read-story-<?= esc($key) ?>" data-gtm-category="stories" data-gtm-action="click" data-gtm-label="<?= esc($tech['title']) ?>" class="btn-read-dispatch inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-bold text-emerald-700 dark:text-emerald-400 hover:bg-emerald-50 dark:hover:bg-emerald-950/40 transition-colors" data-dispatch-key="<?= esc($key) ?>">
                  <span>Read Story</span>
                  <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                </button>
              </div>
            </div>

          </article>
          <?php endforeach; ?>

        </div>

      </div>
    </section>


    <!-- SECTION: CORPORATE & INNOVATION BIO + DOWNLOAD PDF (ANCHOR TAG, NO SVG) -->
    <section id="bio-whitepaper" class="py-16 border-t border-stone-200/80 dark:border-stone-800">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        
        <div class="p-8 sm:p-12 rounded-3xl bg-stone-100 dark:bg-stone-900/90 border border-stone-200 dark:border-stone-800 shadow-xl relative overflow-hidden">
          
          <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-700 dark:text-emerald-400 text-xs font-mono font-semibold mb-4">
              <span>OFFICIAL CORPORATE & RESEARCH PROFILE</span>
            </div>

            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-stone-950 dark:text-white tracking-tight mb-4">
              logicindia.tech: Innovation Bio & Whitepaper
            </h2>

            <p class="text-stone-600 dark:text-stone-300 text-base leading-relaxed mb-8">
              At <strong class="text-stone-950 dark:text-white">logicindia.tech</strong>, our mission is to build foundational computational hardware, tactile interfaces, and zero-latency communication architectures engineered in India. Our 2026 Corporate Bio details our patent portfolio, multi-city R&D campus infrastructure, and sustainability charter.
            </p>

            <!-- Stats Bar -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-8">
              <?php foreach ($bio['stats'] as $stat): ?>
              <div class="p-4 rounded-2xl bg-white dark:bg-stone-800/80 border border-stone-200 dark:border-stone-700">
                <div class="text-2xl sm:text-3xl font-extrabold text-stone-900 dark:text-white font-mono"><?= esc($stat['value']) ?></div>
                <div class="text-xs text-stone-500 dark:text-stone-400 mt-1"><?= esc($stat['label']) ?></div>
              </div>
              <?php endforeach; ?>
            </div>

            <!-- Download Anchor Tag Row (NO SVG) -->
            <div class="flex flex-wrap items-center gap-4">
              <!-- Direct PDF Download Anchor Tag (NO SVG) -->
              <a href="<?= base_url('download-bio-pdf') ?>" download="LogicIndia_Tech_Innovation_Bio_2026.pdf" id="gtm-bio-section-download-pdf" data-gtm-category="downloads" data-gtm-action="click" data-gtm-label="Bio Section Download PDF" class="inline-flex items-center px-6 py-3.5 rounded-xl bg-stone-950 text-white dark:bg-white dark:text-stone-950 font-bold text-sm hover:scale-[1.02] transition-transform shadow-lg shadow-black/10">
                Download Bio PDF (Executive Briefing)
              </a>

              <!-- Dedicated Subscription Link -->
              <a href="<?= base_url('subscribe') ?>" id="gtm-bio-to-subscribe-page" data-gtm-category="navigation" data-gtm-action="click" data-gtm-label="Bio Section to Subscribe Page" class="inline-flex items-center px-5 py-3.5 rounded-xl border border-stone-300 dark:border-stone-700 text-stone-700 dark:text-stone-300 hover:bg-stone-200 dark:hover:bg-stone-800 font-semibold text-sm transition-colors">
                <span>Subscribe to Dispatch Page</span>
              </a>
            </div>

            <p class="text-xs font-mono text-stone-500 dark:text-stone-400 mt-4">
              * Document certified by logicindia.tech Advanced Technology Group (ATG). Includes patent index and leadership charter.
            </p>
          </div>

        </div>

      </div>
    </section>


    <!-- SECTION: NEWSLETTER SUBSCRIPTION (The Horizon Dispatch - SUBMITS TO DEDICATED PAGE) -->
    <section id="newsletter" class="py-16 border-t border-stone-200/80 dark:border-stone-800 bg-[#FAF8F5] dark:bg-[#0E0E10]">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center">
        
        <div class="w-12 h-12 rounded-2xl bg-emerald-100 dark:bg-emerald-950/60 text-emerald-600 dark:text-emerald-400 mx-auto flex items-center justify-center mb-6">
          <i data-lucide="newspaper" class="w-6 h-6"></i>
        </div>

        <h2 class="text-3xl sm:text-4xl font-serif font-bold text-stone-950 dark:text-white tracking-tight mb-4">
          Subscribe to logicindia.tech Dispatch
        </h2>

        <p class="text-stone-600 dark:text-stone-300 text-base max-w-xl mx-auto mb-8 leading-relaxed">
          Join 45,800+ hardware architects, computational designers, and engineers receiving our bi-weekly deep dives into interface physics and private prototype invitations.
        </p>

        <!-- Newsletter Form Submits to Dedicated Page -->
        <form id="footer-newsletter-form" action="<?= base_url('subscribe') ?>" method="POST" data-gtm-category="newsletter" data-gtm-action="submit" data-gtm-label="Footer Newsletter Form" class="max-w-xl mx-auto flex flex-col sm:flex-row gap-3">
          <?= csrf_field() ?>
          <div class="relative flex-1">
            <i data-lucide="mail" class="w-4 h-4 absolute left-3.5 top-1/2 -translate-y-1/2 text-stone-400"></i>
            <input type="email" name="email" id="gtm-footer-email-input" required placeholder="Enter your work email address..." class="w-full pl-10 pr-4 py-3.5 rounded-xl bg-white dark:bg-stone-900 border border-stone-300 dark:border-stone-700 text-stone-900 dark:text-white placeholder-stone-400 text-sm focus:outline-none focus:border-logi-teal transition-colors shadow-sm">
          </div>
          <button type="submit" id="gtm-footer-submit-btn" data-gtm-category="newsletter" data-gtm-action="click" data-gtm-label="Footer Subscribe Button" class="px-7 py-3.5 rounded-xl bg-stone-900 text-white dark:bg-white dark:text-stone-900 font-bold text-sm hover:bg-stone-800 dark:hover:bg-stone-100 transition-all shadow-md flex items-center justify-center gap-2">
            <span>Subscribe</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </button>
        </form>

        <div class="flex flex-wrap items-center justify-center gap-6 mt-6 text-xs text-stone-500 dark:text-stone-400 font-mono">
          <span class="flex items-center gap-1.5"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-500"></i> No Spam Ever</span>
          <span class="flex items-center gap-1.5"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-500"></i> Bi-weekly Cadence</span>
          <a href="<?= base_url('subscribe') ?>" id="gtm-footer-dedicated-subscribe-link" data-gtm-category="navigation" data-gtm-action="click" data-gtm-label="Footer Dedicated Subscribe Link" class="text-emerald-600 dark:text-emerald-400 hover:underline">
            Visit Dedicated Subscription Page →
          </a>
        </div>

      </div>
    </section>


    <!-- SECTION: GLOBAL LABS & ADDRESS CONTACT -->
    <section id="laboratories" class="py-16 border-t border-stone-200/80 dark:border-stone-800 bg-white dark:bg-[#0c0c0e]">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12 gap-4 pb-4 border-b border-stone-200 dark:border-stone-800">
          <div>
            <div class="text-xs font-mono uppercase tracking-widest text-emerald-600 dark:text-emerald-400 font-semibold mb-2">RESEARCH CENTERS</div>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-stone-950 dark:text-white tracking-tight">National R&D Facilities</h2>
          </div>
          
          <button id="gtm-labs-open-contact" data-gtm-category="lead" data-gtm-action="click" data-gtm-label="Labs Open Contact Modal" class="btn-open-contact inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-stone-100 dark:bg-stone-800 text-stone-900 dark:text-white hover:bg-stone-200 dark:hover:bg-stone-700 text-sm font-semibold transition-colors">
            <i data-lucide="send" class="w-4 h-4 text-emerald-500"></i>
            <span>Send Direct Lab Inquiry</span>
          </button>
        </div>

        <!-- Address Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          
          <?php foreach ($labs as $lab): ?>
          <div class="p-6 rounded-2xl bg-[#FAF8F5] dark:bg-[#141417] border border-stone-200 dark:border-stone-800/80 flex flex-col justify-between hover:border-emerald-500/50 transition-colors">
            <div>
              <div class="flex items-center justify-between mb-3">
                <span class="text-xs font-bold font-mono tracking-wider uppercase text-emerald-600 dark:text-emerald-400">
                  <?= esc($lab['city']) ?> R&D
                </span>
                <span class="text-xs text-stone-400 font-mono"><?= esc($lab['country']) ?></span>
              </div>

              <h3 class="text-lg font-bold text-stone-900 dark:text-white mb-2 leading-snug">
                <?= esc($lab['name']) ?>
              </h3>

              <p class="text-stone-600 dark:text-stone-400 text-xs leading-relaxed mb-4">
                <i data-lucide="map-pin" class="w-3.5 h-3.5 inline mr-1 text-stone-400"></i>
                <?= esc($lab['address']) ?>
              </p>

              <div class="p-3 rounded-xl bg-white dark:bg-stone-900 border border-stone-200/60 dark:border-stone-800 text-xs text-stone-700 dark:text-stone-300 mb-4">
                <span class="font-bold block text-stone-500 text-[10px] uppercase font-mono mb-0.5">Focus Areas:</span>
                <?= esc($lab['focus']) ?>
              </div>
            </div>

            <div class="pt-4 border-t border-stone-200 dark:border-stone-800/80 text-xs space-y-1 font-mono text-stone-600 dark:text-stone-400">
              <div class="flex items-center justify-between">
                <span>Inquiries:</span>
                <a href="mailto:<?= esc($lab['contact_email']) ?>" id="gtm-lab-mail-<?= strtolower(esc($lab['city'])) ?>" data-gtm-category="contact" data-gtm-action="click" data-gtm-label="Email <?= esc($lab['city']) ?>" class="text-emerald-600 dark:text-emerald-400 hover:underline"><?= esc($lab['contact_email']) ?></a>
              </div>
              <div class="flex items-center justify-between">
                <span>Telephone:</span>
                <a href="tel:<?= esc($lab['phone']) ?>" id="gtm-lab-tel-<?= strtolower(esc($lab['city'])) ?>" data-gtm-category="contact" data-gtm-action="click" data-gtm-label="Tel <?= esc($lab['city']) ?>" class="hover:underline"><?= esc($lab['phone']) ?></a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

        </div>

      </div>
    </section>

  </main>


  <!-- FOOTER: Medium Style Minimalist Footer -->
  <footer class="border-t border-stone-200 dark:border-stone-800 bg-[#FAF8F5] dark:bg-[#0E0E10] py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
      
      <div class="flex flex-col md:flex-row items-center justify-between gap-6 pb-8 border-b border-stone-200 dark:border-stone-800 text-sm">
        
        <div class="flex items-center gap-3">
          <span class="font-extrabold text-xl tracking-tighter text-stone-950 dark:text-white">logicindia<span class="text-logi-teal">.tech</span></span>
          <span class="text-xs font-mono text-stone-400">Frontier Technologies & Ergonomic Computing</span>
        </div>

        <div class="flex flex-wrap items-center gap-6 text-xs text-stone-500 dark:text-stone-400">
          <a href="<?= base_url('#unveil') ?>" id="gtm-footer-unveil" data-gtm-category="navigation" data-gtm-action="click" data-gtm-label="Footer Unveil" class="hover:underline">The Unveil</a>
          <a href="<?= base_url('#ongoing-tech') ?>" id="gtm-footer-tech" data-gtm-category="navigation" data-gtm-action="click" data-gtm-label="Footer Tech" class="hover:underline">Research Papers</a>
          <a href="<?= base_url('#bio-whitepaper') ?>" id="gtm-footer-bio" data-gtm-category="navigation" data-gtm-action="click" data-gtm-label="Footer Bio" class="hover:underline">Corporate Bio</a>
          
          <!-- Download Bio PDF Anchor Tag (NO SVG) -->
          <a href="<?= base_url('download-bio-pdf') ?>" download="LogicIndia_Tech_Innovation_Bio_2026.pdf" id="gtm-footer-download-bio" data-gtm-category="downloads" data-gtm-action="click" data-gtm-label="Footer Download Bio PDF" class="hover:underline text-stone-700 dark:text-stone-300 font-semibold">
            Download Bio PDF
          </a>

          <a href="<?= base_url('subscribe') ?>" id="gtm-footer-subscribe-link" data-gtm-category="navigation" data-gtm-action="click" data-gtm-label="Footer Subscribe Page" class="hover:underline">Subscribe Page</a>
          <a href="<?= base_url('#laboratories') ?>" id="gtm-footer-locations" data-gtm-category="navigation" data-gtm-action="click" data-gtm-label="Footer Locations" class="hover:underline">Locations</a>
          <button id="gtm-footer-contact" data-gtm-category="lead" data-gtm-action="click" data-gtm-label="Footer Contact ATG" class="btn-open-contact hover:underline text-emerald-600 dark:text-emerald-400">Contact ATG</button>
        </div>

      </div>

      <div class="pt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-stone-400 dark:text-stone-500 font-mono">
        <div>
          &copy; <?= date('Y') ?> logicindia.tech Technologies. All rights reserved.
        </div>
        <div class="flex items-center gap-4">
          <span>Built with CodeIgniter 4</span>
          <span>·</span>
          <span>Status: All Labs Online</span>
        </div>
      </div>

    </div>
  </footer>


  <!-- MODAL: Full Article Dispatch Reader (Medium Style Reader Drawer) -->
  <div id="article-modal" class="fixed inset-0 z-50 bg-black/60 backdrop-blur-sm hidden flex items-center justify-center p-4 sm:p-6 overflow-y-auto">
    <div class="relative w-full max-w-3xl bg-[#FAF8F5] dark:bg-[#121215] rounded-3xl border border-stone-200 dark:border-stone-800 shadow-2xl p-6 sm:p-10 my-8 max-h-[90vh] overflow-y-auto">
      
      <!-- Close button -->
      <button id="close-article-modal" data-gtm-category="modal" data-gtm-action="click" data-gtm-label="Close Article Reader" class="absolute top-6 right-6 p-2 rounded-full hover:bg-stone-200 dark:hover:bg-stone-800 text-stone-500 transition-colors" aria-label="Close reader">
        <i data-lucide="x" class="w-5 h-5"></i>
      </button>

      <!-- Category & Read time -->
      <div class="flex items-center gap-2 text-xs font-mono text-emerald-600 dark:text-emerald-400 font-semibold mb-3">
        <span id="modal-category">CATEGORY</span>
        <span>·</span>
        <span id="modal-read-time">5 min read</span>
      </div>

      <!-- Headline -->
      <h2 id="modal-title" class="text-2xl sm:text-3xl md:text-4xl font-serif font-bold text-stone-950 dark:text-white mb-4 leading-tight">
        Article Title
      </h2>

      <!-- Byline -->
      <div class="flex items-center gap-3 pb-6 border-b border-stone-200 dark:border-stone-800 mb-6 text-xs text-stone-500 font-mono">
        <span id="modal-author" class="font-bold text-stone-800 dark:text-stone-200">Author Name</span>
        <span>·</span>
        <span id="modal-date">Date</span>
      </div>

      <!-- Featured Image -->
      <img id="modal-image" src="" alt="" class="w-full h-64 object-cover rounded-2xl mb-6 shadow">

      <!-- Lead paragraph -->
      <p id="modal-lead" class="font-serif-editorial text-lg text-stone-700 dark:text-stone-300 italic mb-6 leading-relaxed"></p>

      <!-- Full Body HTML -->
      <div id="modal-content" class="prose dark:prose-invert max-w-none text-stone-800 dark:text-stone-200 text-sm sm:text-base leading-relaxed"></div>

      <!-- Footer of Modal with Anchor Tag Download (NO SVG) -->
      <div class="mt-8 pt-6 border-t border-stone-200 dark:border-stone-800 flex items-center justify-between">
        <!-- Anchor Download (NO SVG) -->
        <a href="<?= base_url('download-bio-pdf') ?>" download="LogicIndia_Tech_Innovation_Bio_2026.pdf" id="gtm-modal-download-bio" data-gtm-category="downloads" data-gtm-action="click" data-gtm-label="Modal Download Bio PDF" class="text-xs font-bold text-emerald-600 dark:text-emerald-400 hover:underline">
          Download Bio & Patents PDF
        </a>

        <button id="gtm-modal-close-btn" data-gtm-category="modal" data-gtm-action="click" data-gtm-label="Modal Bottom Close Button" onclick="document.getElementById('article-modal').classList.add('hidden'); document.body.style.overflow='';" class="px-4 py-2 rounded-xl bg-stone-900 text-white dark:bg-white dark:text-stone-900 text-xs font-bold">
          Close Dispatch
        </button>
      </div>

    </div>
  </div>


  <!-- MODAL: Direct Contact & Inquiry Modal -->
  <div id="contact-modal" class="fixed inset-0 z-50 bg-black/60 backdrop-blur-sm hidden flex items-center justify-center p-4 overflow-y-auto">
    <div class="relative w-full max-w-lg bg-[#FAF8F5] dark:bg-[#141418] rounded-3xl border border-stone-200 dark:border-stone-800 shadow-2xl p-6 sm:p-8 my-8">
      
      <!-- Close button -->
      <button id="close-contact-modal" data-gtm-category="modal" data-gtm-action="click" data-gtm-label="Close Contact Modal" class="absolute top-6 right-6 p-2 rounded-full hover:bg-stone-200 dark:hover:bg-stone-800 text-stone-500 transition-colors" aria-label="Close inquiry">
        <i data-lucide="x" class="w-5 h-5"></i>
      </button>

      <div class="mb-6">
        <div class="text-xs font-mono font-semibold text-emerald-600 dark:text-emerald-400 uppercase tracking-widest mb-1">LOGICINDIA ATG DIRECT LINE</div>
        <h3 class="text-2xl font-serif font-bold text-stone-950 dark:text-white">Transmit an Inquiry</h3>
        <p class="text-stone-500 text-xs mt-1">Direct channel to research directors in Bengaluru and Hyderabad.</p>
      </div>

      <form id="contact-inquiry-form" data-gtm-category="lead" data-gtm-action="submit" data-gtm-label="Contact Modal Inquiry Form" class="space-y-4">
        <div>
          <label class="block text-xs font-mono text-stone-500 mb-1">Your Full Name *</label>
          <input type="text" name="name" id="gtm-contact-name" required placeholder="e.g. Dr. Raghav Rao" class="w-full px-3.5 py-2.5 rounded-xl bg-white dark:bg-stone-900 border border-stone-300 dark:border-stone-700 text-stone-900 dark:text-white text-sm focus:outline-none focus:border-emerald-500">
        </div>

        <div>
          <label class="block text-xs font-mono text-stone-500 mb-1">Professional / Academic Email *</label>
          <input type="email" name="email" id="gtm-contact-email" required placeholder="name@institution.com" class="w-full px-3.5 py-2.5 rounded-xl bg-white dark:bg-stone-900 border border-stone-300 dark:border-stone-700 text-stone-900 dark:text-white text-sm focus:outline-none focus:border-emerald-500">
        </div>

        <div class="grid grid-cols-2 gap-3">
          <div>
            <label class="block text-xs font-mono text-stone-500 mb-1">Organization</label>
            <input type="text" name="organization" id="gtm-contact-org" placeholder="Lab / Enterprise" class="w-full px-3.5 py-2.5 rounded-xl bg-white dark:bg-stone-900 border border-stone-300 dark:border-stone-700 text-stone-900 dark:text-white text-sm focus:outline-none focus:border-emerald-500">
          </div>
          <div>
            <label class="block text-xs font-mono text-stone-500 mb-1">Topic</label>
            <select name="topic" id="gtm-contact-topic" class="w-full px-3.5 py-2.5 rounded-xl bg-white dark:bg-stone-900 border border-stone-300 dark:border-stone-700 text-stone-900 dark:text-white text-sm focus:outline-none focus:border-emerald-500">
              <option value="Haptics Research">Haptics Research</option>
              <option value="Developer Kit Early Access">DevKit Early Access</option>
              <option value="Press / Analyst Briefing">Press & Analyst</option>
              <option value="Circular Materials Collab">Sustainable Materials</option>
              <option value="Other">General Inquiries</option>
            </select>
          </div>
        </div>

        <div>
          <label class="block text-xs font-mono text-stone-500 mb-1">Message / Collaboration Scope *</label>
          <textarea name="message" id="gtm-contact-msg" rows="3" required placeholder="Describe your question, partnership proposal, or test requirements..." class="w-full px-3.5 py-2.5 rounded-xl bg-white dark:bg-stone-900 border border-stone-300 dark:border-stone-700 text-stone-900 dark:text-white text-sm focus:outline-none focus:border-emerald-500"></textarea>
        </div>

        <button type="submit" id="gtm-contact-submit-btn" data-gtm-category="lead" data-gtm-action="click" data-gtm-label="Submit Contact Inquiry" class="w-full py-3.5 rounded-xl bg-stone-900 text-white dark:bg-white dark:text-stone-900 font-bold text-sm hover:bg-stone-800 dark:hover:bg-stone-100 transition-all shadow-md">
          Transmit Inquiry to ATG
        </button>
      </form>

    </div>
  </div>

  <!-- Application Logic -->
  <script src="<?= base_url('assets/js/app.js') ?>"></script>
</body>
</html>
