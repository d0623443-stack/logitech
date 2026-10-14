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
        $bio = $this->techModel->getCompanyBio();
        $labs = $this->techModel->getGlobalLabs();
        $techs = $this->techModel->getOngoingTechnologies();

        $html = '
        <!DOCTYPE html>
        <html>
        <head>
          <meta charset="utf-8">
          <title>logicindia.tech — Innovation Bio 2026</title>
          <style>
            body { font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; color: #1c1917; margin: 0; padding: 25px; line-height: 1.5; font-size: 11pt; }
            .header { background: #0c0a09; color: #ffffff; padding: 25px 30px; border-radius: 6px; margin-bottom: 25px; border-bottom: 4px solid #00E59B; }
            .brand { font-size: 24pt; font-weight: bold; letter-spacing: -0.5px; }
            .brand span { color: #00E59B; }
            .subheading { font-size: 9pt; text-transform: uppercase; letter-spacing: 1.5px; color: #a8a29e; margin-top: 4px; }
            .doc-id { font-size: 8pt; color: #78716c; margin-top: 8px; font-family: monospace; }
            h2 { font-size: 14pt; color: #0c0a09; border-bottom: 1px solid #e7e5e4; padding-bottom: 6px; margin-top: 22px; margin-bottom: 12px; }
            p { margin-bottom: 12px; color: #44403c; font-size: 10pt; }
            .stats-table { width: 100%; border-collapse: collapse; margin: 15px 0; }
            .stats-table td { padding: 10px; background: #fafaf9; border: 1px solid #e7e5e4; text-align: center; }
            .stats-val { font-size: 16pt; font-weight: bold; color: #0c0a09; font-family: monospace; }
            .stats-lbl { font-size: 8pt; color: #78716c; text-transform: uppercase; margin-top: 2px; }
            .card { background: #fafaf9; border: 1px solid #e7e5e4; border-radius: 4px; padding: 12px 14px; margin-bottom: 10px; }
            .card-title { font-weight: bold; color: #0c0a09; font-size: 10.5pt; margin-bottom: 4px; }
            .card-meta { font-size: 8.5pt; color: #059669; font-weight: bold; text-transform: uppercase; margin-bottom: 4px; }
            .card-desc { font-size: 9.5pt; color: #57534e; }
            .footer { margin-top: 35px; border-top: 1px solid #e7e5e4; padding-top: 12px; font-size: 8pt; color: #78716c; text-align: center; }
          </style>
        </head>
        <body>
          <div class="header">
            <div class="brand">logicindia<span>.tech</span></div>
            <div class="subheading">Advanced Technology Group (ATG) · Executive Research Profile</div>
            <div class="doc-id">DOC-ID: LOGICINDIA-ATG-2026-V4 · OCTOBER 2026 EDITION · AUTHORIZED PUBLIC BRIEFING</div>
          </div>

          <h2>1. Executive Charter & Heritage</h2>
          <p><strong>logicindia.tech</strong> was founded to pioneer next-generation computational hardware, precision physical interfaces, zero-latency optical telemetry, and circular sustainable materials engineered from India to the global frontier.</p>
          <p>Our multidisciplinary laboratories operate across Bengaluru, Hyderabad, and Pune. We combine high-modulus forged carbon architecture with dynamic micro-fluidic actuation to redefine how human intent interfaces with spatial computing and on-device neural edge models.</p>

          <table class="stats-table">
            <tr>
              <td>
                <div class="stats-val">84+</div>
                <div class="stats-lbl">Deep-Tech Patents Filed</div>
              </td>
              <td>
                <div class="stats-val">3 Hubs</div>
                <div class="stats-lbl">National R&D Campuses</div>
              </td>
              <td>
                <div class="stats-val">45,800+</div>
                <div class="stats-lbl">Engineers on Dispatch</div>
              </td>
              <td>
                <div class="stats-val">-140g CO2e</div>
                <div class="stats-lbl">Net Hardware Carbon</div>
              </td>
            </tr>
          </table>

          <h2>2. Core Ongoing Technologies (Under Active Prototyping)</h2>';

        foreach ($techs as $tech) {
            $html .= '
            <div class="card">
              <div class="card-meta">' . esc($tech['category']) . ' · ' . esc($tech['tag']) . '</div>
              <div class="card-title">' . esc($tech['title']) . '</div>
              <div class="card-desc">' . esc($tech['summary']) . '</div>
            </div>';
        }

        $html .= '
          <h2>3. National R&D Campuses & Facilities</h2>';
        foreach ($labs as $lab) {
            $html .= '
            <div class="card">
              <div class="card-title">' . esc($lab['city']) . ' — ' . esc($lab['name']) . '</div>
              <div class="card-desc"><strong>Location:</strong> ' . esc($lab['address']) . '<br><strong>Focus:</strong> ' . esc($lab['focus']) . '<br><strong>Inquiries:</strong> ' . esc($lab['contact_email']) . ' | ' . esc($lab['phone']) . '</div>
            </div>';
        }

        $html .= '
          <div class="footer">
            Certified by logicindia.tech Advanced Technology Group (ATG) · Bengaluru & Hyderabad, India · &copy; ' . date('Y') . ' logicindia.tech Technologies.
          </div>
        </body>
        </html>';

        try {
            $options = new Options();
            $options->set('isHtml5ParserEnabled', true);
            $options->set('isRemoteEnabled', false);
            $options->set('defaultFont', 'Helvetica');

            $dompdf = new Dompdf($options);
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            $pdfOutput = $dompdf->output();

            // Save static file copy for instant caching
            @file_put_contents(FCPATH . 'assets/docs/LogicIndia_Tech_Innovation_Bio_2026.pdf', $pdfOutput);
            @file_put_contents(FCPATH . 'public/assets/docs/LogicIndia_Tech_Innovation_Bio_2026.pdf', $pdfOutput);

            return $this->response
                ->setHeader('Content-Type', 'application/pdf')
                ->setHeader('Content-Disposition', 'attachment; filename="LogicIndia_Tech_Innovation_Bio_2026.pdf"')
                ->setHeader('Cache-Control', 'private, max-age=0, must-revalidate')
                ->setHeader('Pragma', 'public')
                ->setBody($pdfOutput);
        } catch (\Throwable $e) {
            // Fallback: send existing file if generated
            $staticPath = FCPATH . 'assets/docs/LogicIndia_Tech_Innovation_Bio_2026.pdf';
            if (file_exists($staticPath)) {
                return $this->response->download($staticPath, null)->setFileName('LogicIndia_Tech_Innovation_Bio_2026.pdf');
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
     * Download Bio HTML / Legacy Fallback Route
     */
    public function downloadBioPdf()
    {
        $bio = $this->techModel->getCompanyBio();
        $labs = $this->techModel->getGlobalLabs();
        $techs = $this->techModel->getOngoingTechnologies();

        $html = "<!DOCTYPE html><html><head><title>logicindia.tech — Innovation Bio 2026</title><style>body{font-family:sans-serif;padding:30px;line-height:1.6;color:#1a1a1a}h1{color:#00B878;border-bottom:2px solid #00B878;padding-bottom:10px}.meta{color:#666;font-size:12px;margin-bottom:20px}.card{background:#f8f8f8;padding:15px;border-radius:8px;margin-bottom:15px}</style></head><body>";
        $html .= "<h1>LOGICINDIA.TECH — CORPORATE & INNOVATION BIO</h1>";
        $html .= "<div class='meta'>Document Ref: ATG-2026-BIO · logicindia.tech Technologies · " . date('F Y') . "</div>";
        $html .= "<h2>Executive Summary</h2><p>{$bio['mission']}</p>";
        $html .= "<h3>R&D Centers & Innovation Labs</h3>";
        foreach ($labs as $lab) {
            $html .= "<div class='card'><strong>{$lab['city']} — {$lab['name']}</strong><br>{$lab['address']}<br><em>Focus: {$lab['focus']}</em></div>";
        }
        $html .= "<h3>Pioneering Technologies</h3>";
        foreach ($techs as $tech) {
            $html .= "<div class='card'><strong>{$tech['title']}</strong><br>{$tech['summary']}</div>";
        }
        $html .= "<hr><p style='font-size:11px;color:#888'>Authorized release by logicindia.tech Advanced Technology Group (ATG). &copy; " . date('Y') . " logicindia.tech.</p>";
        $html .= "</body></html>";

        return $this->response
            ->setHeader('Content-Type', 'text/html')
            ->setBody($html);
    }
}
