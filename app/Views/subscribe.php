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

  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300E59B' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><circle cx='12' cy='12' r='10'/><path d='m8 12 3 3 5-5'/></svg>">

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

  <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
</head>
<body class="editorial-paper text-stone-900 dark:text-stone-100 transition-colors duration-200 antialiased min-h-screen flex flex-col justify-between">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PK9VL82B"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Header -->
  <header class="border-b border-stone-200/80 dark:border-stone-800/80 bg-[#FAF8F5]/90 dark:bg-[#0E0E10]/90 backdrop-blur-md">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 h-16 flex items-center justify-between">
      <a href="<?= base_url() ?>" id="gtm-nav-home-logo" data-gtm-category="navigation" data-gtm-action="click" data-gtm-label="Home Logo" class="flex items-center gap-1 group">
        <span class="font-extrabold text-2xl tracking-tighter text-stone-950 dark:text-white font-sans">
          logicindia<span class="text-logi-teal font-black text-2xl">.tech</span>
        </span>
      </a>

      <div class="flex items-center gap-4">
        <!-- Download Bio PDF Anchor Tag (NO SVG) -->
        <a href="<?= base_url('download-bio-pdf') ?>" download="LogicIndia_Tech_Innovation_Bio_2026.pdf" id="gtm-nav-download-bio" data-gtm-category="downloads" data-gtm-action="click" data-gtm-label="Nav Bio PDF" class="px-3.5 py-1.5 rounded-full text-xs font-semibold tracking-wide border border-stone-300 dark:border-stone-700 hover:border-emerald-500 text-stone-700 dark:text-stone-300 hover:text-stone-900 dark:hover:text-white transition-all bg-white/60 dark:bg-stone-900/60 shadow-sm">
          Download Bio PDF
        </a>

        <a href="<?= base_url() ?>" id="gtm-nav-back-home" data-gtm-category="navigation" data-gtm-action="click" data-gtm-label="Back to Homepage" class="text-xs font-mono text-stone-600 dark:text-stone-400 hover:text-emerald-500">
          ← Back to Main
        </a>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <main class="flex-grow flex items-center justify-center py-16 px-4 sm:px-6">
    <div class="max-w-xl w-full bg-white dark:bg-[#121215] p-8 sm:p-12 rounded-3xl border border-stone-200 dark:border-stone-800 shadow-xl">
      
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 text-xs font-mono font-semibold mb-6">
        <span>BI-WEEKLY RESEARCH DISPATCH</span>
      </div>

      <h1 class="text-3xl sm:text-4xl font-serif font-bold text-stone-950 dark:text-white mb-4 leading-tight">
        Join The Horizon Dispatch
      </h1>

      <p class="text-stone-600 dark:text-stone-300 text-sm sm:text-base leading-relaxed mb-8">
        Subscribe to receive direct dispatches from logicindia.tech Advanced Technology Group in Bengaluru, Hyderabad, and Pune. We cover dynamic micro-fluidic haptics, quantum-sync telemetry, and carbon-negative materials.
      </p>

      <?php if (session()->getFlashdata('error')): ?>
        <div class="mb-6 p-4 rounded-xl bg-red-50 dark:bg-red-950/40 border border-red-200 dark:border-red-800 text-red-700 dark:text-red-300 text-xs font-mono">
          <?= esc(session()->getFlashdata('error')) ?>
        </div>
      <?php endif; ?>

      <!-- Subscription Form -->
      <form action="<?= base_url('subscribe') ?>" method="POST" id="gtm-page-subscribe-form" data-gtm-category="newsletter" data-gtm-action="submit" data-gtm-label="Subscribe Dedicated Page" class="space-y-4">
        <?= csrf_field() ?>
        <div>
          <label for="subscriber-email" class="block text-xs font-mono text-stone-500 mb-1.5 uppercase tracking-wider">Academic or Corporate Email Address</label>
          <input type="email" id="subscriber-email" name="email" required placeholder="your.name@institution.org" class="w-full px-4 py-3.5 rounded-xl bg-stone-50 dark:bg-stone-900 border border-stone-300 dark:border-stone-700 text-stone-900 dark:text-white text-sm focus:outline-none focus:border-logi-teal transition-colors">
        </div>

        <button type="submit" id="gtm-submit-subscription" data-gtm-category="newsletter" data-gtm-action="click" data-gtm-label="Confirm Subscription" class="w-full py-4 rounded-xl bg-stone-950 text-white dark:bg-white dark:text-stone-950 font-bold text-sm hover:scale-[1.01] transition-transform shadow-lg shadow-black/10">
          Confirm Subscription & Join 45,800+ Pioneers
        </button>
      </form>

      <div class="mt-8 pt-6 border-t border-stone-100 dark:border-stone-800 text-xs text-stone-500 font-mono flex items-center justify-between">
        <span>No spam · 100% engineering research</span>
        <!-- Download Bio PDF Anchor Tag (NO SVG) -->
        <a href="<?= base_url('download-bio-pdf') ?>" download="LogicIndia_Tech_Innovation_Bio_2026.pdf" id="gtm-page-sub-download-bio" data-gtm-category="downloads" data-gtm-action="click" data-gtm-label="Subscribe Page Download Bio" class="text-emerald-600 dark:text-emerald-400 hover:underline">
          Download Bio PDF
        </a>
      </div>

    </div>
  </main>

  <!-- Footer -->
  <footer class="border-t border-stone-200/80 dark:border-stone-800 bg-[#FAF8F5] dark:bg-[#0E0E10] py-6 text-center text-xs text-stone-400 font-mono">
    &copy; <?= date('Y') ?> logicindia.tech Technologies · Bengaluru & Hyderabad, India.
  </footer>

  <script src="<?= base_url('assets/js/app.js') ?>"></script>
</body>
</html>
