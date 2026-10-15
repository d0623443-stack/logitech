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

  <!-- GTM DataLayer Conversion Event Push -->
  <script>
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
      'event': 'subscription_confirmed',
      'conversion_type': 'newsletter_signup',
      'page_type': 'thank_you_page',
      'subscriber_email': '<?= esc($subscriber_email) ?>',
      'conversion_timestamp': new Date().toISOString()
    });
  </script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= esc($page_title) ?></title>
  <meta name="description" content="<?= esc($meta_description) ?>">
  <meta name="theme-color" content="#121212">

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

  <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
</head>
<body class="editorial-paper text-stone-900 dark:text-stone-100 transition-colors duration-200 antialiased min-h-screen flex flex-col justify-between">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PK9VL82B"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Top Bar -->
  <header class="border-b border-stone-200/80 dark:border-stone-800/80 bg-[#FAF8F5]/90 dark:bg-[#0E0E10]/90 backdrop-blur-md">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 h-16 flex items-center justify-between">
      <a href="<?= base_url() ?>" id="gtm-confirmed-home-logo" data-gtm-category="navigation" data-gtm-action="click" data-gtm-label="Confirmed Page Logo" class="flex items-center gap-1 group">
        <span class="font-extrabold text-2xl tracking-tighter text-stone-950 dark:text-white font-sans">
          logicindia<span class="text-logi-teal font-black text-2xl">.tech</span>
        </span>
      </a>

      <!-- Download Bio PDF Anchor Tag (NO SVG) -->
      <a href="<?= base_url('download-bio-pdf') ?>" download="LogicIndia_Tech_Innovation_Bio_2026.pdf" id="gtm-confirmed-nav-download-bio" data-gtm-category="downloads" data-gtm-action="click" data-gtm-label="Confirmed Nav Download Bio" class="px-3.5 py-1.5 rounded-full text-xs font-semibold tracking-wide border border-stone-300 dark:border-stone-700 hover:border-emerald-500 text-stone-700 dark:text-stone-300 hover:text-stone-900 dark:hover:text-white transition-all bg-white/60 dark:bg-stone-900/60 shadow-sm">
        Download Bio PDF
      </a>
    </div>
  </header>

  <!-- Main Conversion Confirmation Screen -->
  <main class="flex-grow flex items-center justify-center py-16 px-4 sm:px-6">
    <div class="max-w-xl w-full bg-white dark:bg-[#121215] p-8 sm:p-12 rounded-3xl border border-stone-200 dark:border-stone-800 shadow-2xl text-center">
      
      <!-- Verified Badge -->
      <div class="w-16 h-16 rounded-full bg-emerald-100 dark:bg-emerald-950/80 text-emerald-600 dark:text-emerald-400 mx-auto flex items-center justify-center text-2xl font-bold mb-6 ring-8 ring-emerald-50 dark:ring-emerald-950/30">
        ✓
      </div>

      <div class="text-xs font-mono font-semibold text-emerald-600 dark:text-emerald-400 uppercase tracking-widest mb-2">
        SUBSCRIPTION VERIFIED & CONFIRMED
      </div>

      <h1 class="text-3xl sm:text-4xl font-serif font-bold text-stone-950 dark:text-white mb-4 leading-tight">
        You're on the Dispatch List.
      </h1>

      <p class="text-stone-600 dark:text-stone-300 text-sm sm:text-base leading-relaxed mb-6">
        Welcome aboard. We have registered <strong class="text-stone-900 dark:text-white font-mono text-xs px-2 py-0.5 rounded bg-stone-100 dark:bg-stone-800"><?= esc($subscriber_email) ?></strong> for priority transmissions from logicindia.tech Advanced Technology Group.
      </p>

      <div class="p-5 rounded-2xl bg-stone-50 dark:bg-stone-900/60 border border-stone-200 dark:border-stone-800 text-left mb-8 space-y-2 text-xs font-mono text-stone-600 dark:text-stone-400">
        <div class="font-bold text-stone-900 dark:text-stone-100 uppercase tracking-wider text-[11px] mb-1">What to expect next:</div>
        <div>• Bi-weekly research briefs directly from Bengaluru & Hyderabad labs</div>
        <div>• Early developer access passes to the upcoming Hardware Keynote</div>
        <div>• Peer-reviewed interface physics papers and open CAD specifications</div>
      </div>

      <!-- Action Cluster -->
      <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
        <!-- Download Bio PDF Anchor Tag (NO SVG) -->
        <a href="<?= base_url('download-bio-pdf') ?>" download="LogicIndia_Tech_Innovation_Bio_2026.pdf" id="gtm-confirmed-cta-download-bio" data-gtm-category="downloads" data-gtm-action="click" data-gtm-label="Confirmed CTA Download Bio" class="w-full sm:w-auto px-6 py-3.5 rounded-xl bg-stone-950 text-white dark:bg-white dark:text-stone-950 font-bold text-sm hover:scale-[1.01] transition-transform shadow-md">
          Download Bio PDF
        </a>

        <!-- Return to Homepage -->
        <a href="<?= base_url() ?>" id="gtm-confirmed-return-home" data-gtm-category="navigation" data-gtm-action="click" data-gtm-label="Return to Homepage" class="w-full sm:w-auto px-6 py-3.5 rounded-xl border border-stone-300 dark:border-stone-700 text-stone-700 dark:text-stone-300 hover:bg-stone-100 dark:hover:bg-stone-800 font-semibold text-sm transition-colors">
          Return to Homepage
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
