<?php

namespace App\Controllers;

use App\Models\TechnologyModel;
use CodeIgniter\HTTP\ResponseInterface;

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
            'message' => 'You are now subscribed to logicindia.tech Horizon Dispatch. Expect our first research paper in your inbox soon.'
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
     * Download Bio PDF Route (Fallback or Direct Stream)
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
