<?php

namespace App\Controllers;

use App\Models\TechnologyModel;
use CodeIgniter\HTTP\ResponseInterface;
use Dompdf\Dompdf;
use Dompdf\Options;

class Home extends BaseController
{
    protected TechnologyModel $techModel;

    public function __construct()
    {
        $this->techModel = new TechnologyModel();
    }

    /**
     * Main Single Page Landing Page (Medium Editorial Style)
     */
    public function index(): string
    {
        $data = [
            'page_title' => 'logicindia.tech — Frontier Technologies & The Next Era of Human Computing',
            'meta_description' => 'A Medium-style editorial dispatch revealing logicindia.tech upcoming innovations: micro-fluidic haptics, quantum-sync wireless, carbon-negative hardware, and ambient edge AI.',
            'technologies' => $this->techModel->getOngoingTechnologies(),
            'labs' => $this->techModel->getGlobalLabs(),
            'bio' => $this->techModel->getCompanyBio(),
            'launch_date' => '2026-11-28 09:00:00'
        ];

        return view('landing', $data);
    }

    /**
     * Dedicated Subscription Landing Page
     */
    public function subscribePage(): string
    {
        $data = [
            'page_title' => 'Subscribe to The Horizon Dispatch — logicindia.tech',
            'meta_description' => 'Join 45,800+ hardware architects, computational designers, and deep-tech pioneers receiving bi-weekly interface engineering dispatches.',
            'bio' => $this->techModel->getCompanyBio(),
            'labs' => $this->techModel->getGlobalLabs()
        ];

        return view('subscribe', $data);
    }

    /**
     * Handle Subscription POST and redirect to dedicated confirmation page
     */
    public function processSubscribe()
    {
        $email = trim((string) $this->request->getPost('email'));

        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->to(base_url('subscribe'))
                ->with('error', 'Please enter a valid academic or professional email address.');
        }

        $this->techModel->saveSubscriber($email);

        return redirect()->to(base_url('subscribed?email=' . urlencode($email)));
    }

    /**
     * Dedicated Subscription Confirmation / Thank-You Page with GTM Conversion Event
     */
    public function subscribedSuccess(): string
    {
        $email = $this->request->getGet('email') ?: 'pioneer@logicindia.tech';

        $data = [
            'page_title' => 'Subscription Confirmed — Welcome to logicindia.tech',
            'meta_description' => 'Your subscription to The Horizon Dispatch has been confirmed. Welcome aboard.',
            'subscriber_email' => esc($email),
            'technologies' => $this->techModel->getOngoingTechnologies(),
            'bio' => $this->techModel->getCompanyBio()
        ];

        return view('subscribed', $data);
    }

    /**
     * Direct PDF Bio Download via Anchor Tag (Generates real PDF using Dompdf)
     */
    public function downloadBioPdfFile()
    {
        $candidatePaths = [
            ROOTPATH . 'assets/docs/LogicIndia_Tech_Innovation_Bio_2026.pdf',
            ROOTPATH . 'public/assets/docs/LogicIndia_Tech_Innovation_Bio_2026.pdf',
            FCPATH . 'assets/docs/LogicIndia_Tech_Innovation_Bio_2026.pdf',
            FCPATH . 'public/assets/docs/LogicIndia_Tech_Innovation_Bio_2026.pdf'
        ];

        foreach ($candidatePaths as $path) {
            if (file_exists($path) && filesize($path) > 0) {
                return $this->response->download($path, null)
                    ->setFileName('LogicIndia_Tech_Innovation_Bio_2026.pdf')
                    ->setHeader('Content-Type', 'application/pdf');
            }
        }

        try {
            $options = new Options();
            $options->set('isHtml5ParserEnabled', true);
            $options->set('isRemoteEnabled', false);
            $options->set('defaultFont', 'Helvetica');

            $dompdf = new Dompdf($options);
            $dompdf->loadHtml($this->getExecutivePdfHtml());
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            $pdfOutput = $dompdf->output();

            // Save static file copies
            $dir1 = ROOTPATH . 'assets/docs/';
            $dir2 = ROOTPATH . 'public/assets/docs/';
            if (!is_dir($dir1)) { @mkdir($dir1, 0755, true); }
            if (!is_dir($dir2)) { @mkdir($dir2, 0755, true); }
            @file_put_contents($dir1 . 'LogicIndia_Tech_Innovation_Bio_2026.pdf', $pdfOutput);
            @file_put_contents($dir2 . 'LogicIndia_Tech_Innovation_Bio_2026.pdf', $pdfOutput);

            return $this->response
                ->setHeader('Content-Type', 'application/pdf')
                ->setHeader('Content-Disposition', 'attachment; filename="LogicIndia_Tech_Innovation_Bio_2026.pdf"')
                ->setHeader('Content-Length', (string) strlen($pdfOutput))
                ->setHeader('Accept-Ranges', 'bytes')
                ->setHeader('Cache-Control', 'private, max-age=0, must-revalidate')
                ->setHeader('Pragma', 'public')
                ->setBody($pdfOutput);
        } catch (\Throwable $e) {
            foreach ($candidatePaths as $path) {
                if (file_exists($path)) {
                    return $this->response->download($path, null)->setFileName('LogicIndia_Tech_Innovation_Bio_2026.pdf');
                }
            }
            return redirect()->to(base_url('download-bio'));
        }
    }

    /**
     * AJAX Endpoint: Newsletter Subscription ("The Horizon Dispatch")
     */
    public function subscribe(): ResponseInterface
    {
        $email = trim((string) $this->request->getPost('email'));

        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->response->setStatusCode(400)->setJSON([
                'status' => 'error',
                'message' => 'Please provide a valid corporate or academic email address.'
            ]);
        }

        $this->techModel->saveSubscriber($email);

        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'You are now subscribed to logicindia.tech Horizon Dispatch.',
            'redirect' => base_url('subscribed?email=' . urlencode($email))
        ]);
    }

    /**
     * AJAX Endpoint: Contact Inquiry Transmit
     */
    public function contact(): ResponseInterface
    {
        $name = trim((string) $this->request->getPost('name'));
        $email = trim((string) $this->request->getPost('email'));
        $topic = trim((string) $this->request->getPost('topic'));
        $organization = trim((string) $this->request->getPost('organization'));
        $message = trim((string) $this->request->getPost('message'));

        if (empty($name) || empty($email) || empty($message)) {
            return $this->response->setStatusCode(400)->setJSON([
                'status' => 'error',
                'message' => 'Name, email, and message are required fields.'
            ]);
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->response->setStatusCode(400)->setJSON([
                'status' => 'error',
                'message' => 'Please provide a valid email address.'
            ]);
        }

        $this->techModel->saveInquiry([
            'name' => $name,
            'email' => $email,
            'topic' => $topic ?: 'General Research',
            'organization' => $organization ?: 'Independent',
            'message' => $message
        ]);

        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Thank you, ' . esc($name) . '. Your dispatch has been transmitted to logicindia.tech ATG in Bengaluru & Hyderabad. Our liaison will follow up within 24 hours.'
        ]);
    }

    /**
     * API: Get single technology detail
     */
    public function getDispatch(string $id): ResponseInterface
    {
        $technologies = $this->techModel->getOngoingTechnologies();

        if (!isset($technologies[$id])) {
            return $this->response->setStatusCode(404)->setJSON([
                'status' => 'error',
                'message' => 'Dispatch not found.'
            ]);
        }

        return $this->response->setJSON([
            'status' => 'success',
            'data' => $technologies[$id]
        ]);
    }

    /**
     * Download Bio HTML / In-Browser Fallback Route
     */
    public function downloadBioPdf()
    {
        return $this->response
            ->setHeader('Content-Type', 'text/html')
            ->setBody($this->getExecutivePdfHtml());
    }

    /**
     * Helper to render the official single-page Executive Profile & Research Briefing
     */
    protected function getExecutivePdfHtml(): string
    {
        return '<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>LOGICINDIA.TECH — Executive Profile & Research Briefing</title>
  <style>
    @page {
      size: A4 portrait;
      margin: 30px 36px 26px 36px;
    }
    * {
      box-sizing: border-box;
    }
    body {
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      color: #1f2937;
      margin: 0;
      padding: 0;
      font-size: 9.5pt;
      line-height: 1.5;
    }
    
    /* Header Black Banner */
    .header-banner {
      background-color: #0d0d11;
      color: #ffffff;
      padding: 22px 28px 20px 28px;
    }
    .header-table {
      width: 100%;
      border-collapse: collapse;
    }
    .header-table td {
      vertical-align: middle;
      padding: 0;
    }
    .brand-title {
      font-size: 23pt;
      font-weight: 800;
      letter-spacing: -0.5px;
      color: #ffffff;
      margin: 0;
      line-height: 1;
    }
    .brand-subtitle {
      font-size: 7.8pt;
      font-weight: 600;
      color: #a1a1aa;
      letter-spacing: 0.6px;
      text-transform: uppercase;
      margin-top: 6px;
    }
    .meta-box {
      text-align: right;
      font-size: 8pt;
      line-height: 1.5;
      font-weight: 600;
      color: #d4d4d8;
    }
    .meta-edition {
      color: #a1a1aa;
      font-size: 7.6pt;
      font-weight: 500;
    }

    /* Green Accent Strip */
    .accent-strip {
      height: 4.5px;
      background-color: #00E59B;
      width: 100%;
      margin-bottom: 22px;
    }

    /* Section Headings */
    h2 {
      font-size: 12.5pt;
      font-weight: 800;
      color: #09090b;
      margin-top: 18px;
      margin-bottom: 8px;
      letter-spacing: -0.2px;
    }

    p.lead-text {
      color: #374151;
      font-size: 9.3pt;
      line-height: 1.5;
      margin: 0 0 10px 0;
    }

    /* Campus Footprint Card */
    .footprint-card {
      background-color: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 4px;
      padding: 12px 18px;
      margin: 14px 0 18px 0;
    }
    .footprint-title {
      font-size: 8.2pt;
      font-weight: 800;
      color: #09090b;
      text-transform: uppercase;
      letter-spacing: 0.6px;
      margin-bottom: 7px;
    }
    .footprint-item {
      font-size: 8.8pt;
      color: #475569;
      line-height: 1.55;
    }

    /* Technologies Table */
    .tech-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 6px;
      margin-bottom: 10px;
    }
    .tech-table td {
      padding: 5px 0 7px 0;
    }
    .bullet-col {
      width: 20px;
      vertical-align: top;
      padding-top: 4px;
    }
    .green-dot {
      width: 9px;
      height: 9px;
      background-color: #00E59B;
      border-radius: 5px;
    }
    .tech-col {
      vertical-align: top;
      padding-left: 2px;
    }
    .tech-name {
      font-size: 10.2pt;
      font-weight: 700;
      color: #09090b;
      margin-bottom: 2px;
    }
    .tech-desc {
      font-size: 8.9pt;
      color: #4b5563;
      line-height: 1.4;
    }

    /* Verification Coordinates */
    .contact-box {
      margin-top: 8px;
      margin-bottom: 18px;
      font-size: 9pt;
      color: #374151;
      line-height: 1.65;
    }
    .contact-line {
      margin-bottom: 2px;
    }
    .contact-label {
      font-weight: 600;
      color: #111827;
    }

    /* Footer */
    .footer-divider {
      border-top: 1px solid #e5e7eb;
      margin-top: 20px;
      padding-top: 10px;
    }
    .footer-table {
      width: 100%;
      border-collapse: collapse;
      font-size: 7.6pt;
      color: #6b7280;
    }
    .footer-left {
      text-align: left;
    }
    .footer-right {
      text-align: right;
    }
  </style>
</head>
<body>

  <!-- Header Black Banner -->
  <div class="header-banner">
    <table class="header-table">
      <tr>
        <td>
          <div class="brand-title">LOGICINDIA.TECH</div>
          <div class="brand-subtitle">ADVANCED TECHNOLOGY GROUP &middot; EXECUTIVE PROFILE &amp; RESEARCH BRIEFING</div>
        </td>
        <td class="meta-box" style="width: 220px;">
          <div>DOC-ID: LOGICINDIA-ATG-2026</div>
          <div class="meta-edition">OCTOBER 2026 EDITION</div>
        </td>
      </tr>
    </table>
  </div>
  
  <!-- Green Accent Strip -->
  <div class="accent-strip"></div>

  <!-- 1. Executive Summary & Frontier Charter -->
  <h2>1. Executive Summary &amp; Frontier Charter</h2>
  <p class="lead-text">
    logicindia.tech was established to engineer the future of high-bandwidth human-machine interaction, physical computing peripherals, and indigenous deep-tech hardware systems from India to the global frontier.
  </p>
  <p class="lead-text">
    Our research labs operate across Bengaluru, Hyderabad, and Pune, focusing on three technological breakthroughs: dynamic micro-fluidic tactile actuation, zero-latency optical telemetry, and circular bio-composite materials engineered to make computational hardware a carbon-negative asset.
  </p>

  <!-- Campus Footprint Card -->
  <div class="footprint-card">
    <div class="footprint-title">NATIONAL R&amp;D RESEARCH CAMPUS FOOTPRINT</div>
    <div class="footprint-item">&bull; <strong>Bengaluru Advanced Computing &amp; Haptics Center:</strong> Electronic City Phase 1, Bengaluru</div>
    <div class="footprint-item">&bull; <strong>Hyderabad Semiconductor &amp; Optical Telemetry Campus:</strong> HITEC City, Hyderabad</div>
    <div class="footprint-item">&bull; <strong>Pune Materials &amp; Circular Hardware Design Hub:</strong> Hinjawadi Tech Park, Pune</div>
  </div>

  <!-- 2. Ongoing Core Technologies (Under Active Prototyping) -->
  <h2>2. Ongoing Core Technologies (Under Active Prototyping)</h2>

  <table class="tech-table">
    <tr>
      <td class="bullet-col"><div class="green-dot"></div></td>
      <td class="tech-col">
        <div class="tech-name">Micro-Fluidic Actuation (Haptics 2.0)</div>
        <div class="tech-desc">Sub-millisecond tactile texture switching dynamically tuning keystroke actuation from 35g to 85g.</div>
      </td>
    </tr>
    <tr>
      <td class="bullet-col"><div class="green-dot"></div></td>
      <td class="tech-col">
        <div class="tech-name">Quantum-Sync Optical Telemetry</div>
        <div class="tech-desc">16,000 Hz optical pulse synchronization directly into ambient monitor sensors with sub-0.1ms delay.</div>
      </td>
    </tr>
    <tr>
      <td class="bullet-col"><div class="green-dot"></div></td>
      <td class="tech-col">
        <div class="tech-name">Forged Ocean Carbon Composites</div>
        <div class="tech-desc">Chassis architecture utilizing marine algal binders and recovered carbon fibers (-140g net CO2e balance).</div>
      </td>
    </tr>
    <tr>
      <td class="bullet-col"><div class="green-dot"></div></td>
      <td class="tech-col">
        <div class="tech-name">On-Peripheral 1.2W Neural Engine</div>
        <div class="tech-desc">Ultra-low power edge NPU running local biomechanical prediction models without cloud data dependency.</div>
      </td>
    </tr>
  </table>

  <!-- 3. Official Verification & Contact Coordinates -->
  <h2>3. Official Verification &amp; Contact Coordinates</h2>
  <div class="contact-box">
    <div class="contact-line"><span class="contact-label">Advanced Inquiries:</span> innovations@logicindia.tech</div>
    <div class="contact-line"><span class="contact-label">Press &amp; Analyst Relations:</span> press@logicindia.tech</div>
    <div class="contact-line"><span class="contact-label">Official Portal:</span> https://logicindia.tech &middot; Bengaluru &amp; Hyderabad, India</div>
  </div>

  <!-- Footer -->
  <div class="footer-divider">
    <table class="footer-table">
      <tr>
        <td class="footer-left">Authorized by logicindia.tech Advanced Technology Group (ATG) &middot; Certified Authentic 2026</td>
        <td class="footer-right">Page 1 of 1 &middot; Public Innovation Briefing</td>
      </tr>
    </table>
  </div>

</body>
</html>';
    }
}
