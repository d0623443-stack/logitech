<?php

namespace App\Models;

use CodeIgniter\Model;

class TechnologyModel extends Model
{
    /**
     * Featured and Ongoing Technologies Data
     */
    public function getOngoingTechnologies(): array
    {
        return [
            'haptics' => [
                'id' => 'haptics',
                'category' => 'TACTILE & SENSORY COMPUTING',
                'tag' => 'HARDWARE LAB',
                'read_time' => '5 min read',
                'title' => 'Micro-Fluidic Actuation: Giving Peripherals a Sense of Living Texture',
                'author' => 'Dr. Ananya Sharma',
                'author_role' => 'Lead Haptic Systems Architect · Bengaluru Lab',
                'author_avatar' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=120&q=80',
                'date' => 'October 14, 2026',
                'image' => 'assets/images/tactile-sensor.jpg',
                'summary' => 'Why should a switch feel identical whether compiling kernel code or sculpting 3D geometry? Our optical micro-fluidic switches adapt physical resistance dynamically from 35g to 85g.',
                'lead' => 'For four decades, the mechanical keyboard switch has remained essentially static. At logicindia.tech, we re-engineered the contact layer from the ground up using magnetically reactive rheological fluids.',
                'specs' => [
                    ['label' => 'Response Latency', 'val' => '0.08 ms'],
                    ['label' => 'Actuation Travel', 'val' => '0.1mm – 4.0mm Dynamic'],
                    ['label' => 'Switch Lifespan', 'val' => '150 Million Cycles'],
                    ['label' => 'Energy Draw', 'val' => '< 18 mW per key']
                ]
            ],
            'sustainability' => [
                'id' => 'sustainability',
                'category' => 'SUSTAINABLE ENGINEERING',
                'tag' => 'CIRCULAR DESIGN',
                'read_time' => '4 min read',
                'title' => 'Forged Ocean Carbon: The Architecture of Carbon-Negative Hardware',
                'author' => 'Vikramaditya Roy',
                'author_role' => 'Head of Materials & Circular Design · Pune Hub',
                'author_avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=120&q=80',
                'date' => 'October 11, 2026',
                'image' => 'assets/images/sustainable-tech.jpg',
                'summary' => 'Moving beyond recycled plastic tokens. How logicindia.tech transforms industrial carbon capture into forged, structural exterior chassis with negative lifecycle footprint.',
                'lead' => 'The technology industry has spent years offering consumer electronics with minor recycled additives. We asked a harder question: can hardware sequester more atmospheric carbon than its supply chain creates?',
                'specs' => [
                    ['label' => 'Net Carbon Impact', 'val' => '-140g CO2e sequestered'],
                    ['label' => 'Repair Index', 'val' => '9.8 / 10 Toolless Clip'],
                    ['label' => 'Ocean Polymer Ratio', 'val' => '85% Post-Consumer Marine'],
                    ['label' => 'Recyclability Rate', 'val' => '100% Cradle-to-Cradle']
                ]
            ],
            'quantum' => [
                'id' => 'quantum',
                'category' => 'TELEMETRY & CONNECTIVITY',
                'tag' => 'PROTOCOL V4',
                'read_time' => '6 min read',
                'title' => 'Quantum-Sync Protocol: Sub-0.1ms Optical Wireless Without Dongles',
                'author' => 'Siddharth Menon',
                'author_role' => 'Principal RF & Optical Systems Lead · Hyderabad Campus',
                'author_avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=120&q=80',
                'date' => 'October 08, 2026',
                'image' => 'assets/images/hero-tech.jpg',
                'summary' => 'Radio spectrum in dense workspaces is congested with Wi-Fi 7 and Bluetooth. Our solution blends localized infrared optical beamforming with ultra-wideband RF.',
                'lead' => 'Wires are a safety net for unstable protocols. Once latency drops beneath human neuro-synaptic perception, cords become relics of early computing.',
                'specs' => [
                    ['label' => 'Polling Rate', 'val' => '16,000 Hz Continuous'],
                    ['label' => 'Round-Trip Delay', 'val' => '0.0625 milliseconds'],
                    ['label' => 'Interference Resistance', 'val' => '100% RF Clutter-Proof'],
                    ['label' => 'Multi-Device Handshake', 'val' => 'Instantaneous < 2ms']
                ]
            ],
            'ambient_ai' => [
                'id' => 'ambient_ai',
                'category' => 'EDGE INTELLIGENCE',
                'tag' => 'NEURAL HARDWARE',
                'read_time' => '5 min read',
                'title' => 'The 1.2W Neural Co-Processor: Local Context Without Cloud Latency',
                'author' => 'Pooja Venkatesh',
                'author_role' => 'Director of Edge AI & Firmware · Bengaluru',
                'author_avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&q=80',
                'date' => 'October 03, 2026',
                'image' => 'assets/images/hero-tech.jpg',
                'summary' => 'Peripherals should not simply relay raw coordinate streams; they should anticipate cognitive workflow intent. Introducing on-peripheral neural reasoning.',
                'lead' => 'Cloud AI assistants suffer from network round-trips and privacy vulnerability. logicindia.tech introduces an ultra-low-power Tensor Engine embedded inside input devices.',
                'specs' => [
                    ['label' => 'NPU Power Budget', 'val' => '1.2 Watts TDP'],
                    ['label' => 'On-Device Parameters', 'val' => '450M Quantized Int4'],
                    ['label' => 'App Context Latency', 'val' => 'Sub-1ms Mode Transition'],
                    ['label' => 'Data Privacy', 'val' => '100% On-Chip Zero Cloud']
                ]
            ]
        ];
    }

    /**
     * Global & National Innovation Lab Addresses
     */
    public function getGlobalLabs(): array
    {
        return [
            [
                'city' => 'Bengaluru',
                'country' => 'India',
                'name' => 'Bengaluru Advanced Computing & Haptics Center',
                'address' => 'Plot 42, Electronic City Phase 1, Hosur Road, Bengaluru, Karnataka 560100',
                'focus' => 'Micro-fluidic Haptics, Precision Biomechanics & Acoustic Ergonomics',
                'contact_email' => 'bangalore-lab@logicindia.tech',
                'phone' => '+91 (080) 4920-8800'
            ],
            [
                'city' => 'Hyderabad',
                'country' => 'India',
                'name' => 'Hyderabad Semiconductor & Telemetry R&D Campus',
                'address' => 'WaveRock Building, Financial District, HITEC City, Hyderabad, Telangana 500081',
                'focus' => 'Optical Telemetry, Nanoscale Sensor Silicon & Quantum-Sync Protocols',
                'contact_email' => 'hyderabad-rd@logicindia.tech',
                'phone' => '+91 (040) 6740-5500'
            ],
            [
                'city' => 'Pune',
                'country' => 'India',
                'name' => 'Pune Materials & Circular Hardware Design Hub',
                'address' => 'Rajiv Gandhi Infotech Park, Phase 2, Hinjawadi, Pune, Maharashtra 411057',
                'focus' => 'Forged Ocean Carbon, Bio-resins & Cradle-to-Cradle Manufacturing',
                'contact_email' => 'pune-materials@logicindia.tech',
                'phone' => '+91 (020) 6680-3300'
            ]
        ];
    }

    /**
     * Corporate & Innovation Bio Overview
     */
    public function getCompanyBio(): array
    {
        return [
            'name' => 'logicindia.tech (LogicIndia Technologies)',
            'founded' => 'Founded with the mission to pioneer next-generation human-machine symbiosis from India to the world.',
            'hq' => 'Bengaluru & Hyderabad, India',
            'mission' => 'Empowering computational creators, engineers, and researchers through deep-tech physical hardware, zero-latency wireless, and carbon-negative materials.',
            'milestones' => [
                ['year' => '2021', 'event' => 'Inception of LogicIndia Advanced Technology Group (ATG) focusing on sensor physics.'],
                ['year' => '2023', 'event' => 'Patented the dynamic rheological micro-fluidic switch architecture.'],
                ['year' => '2024', 'event' => 'First live demonstration of sub-0.1ms optical beamforming telemetry.'],
                ['year' => '2025', 'event' => 'Partnered with indigenous semiconductor foundries for on-device 1.2W NPU.'],
                ['year' => '2026', 'event' => 'Announcing logicindia.tech public unveiling and global developer access program.']
            ],
            'stats' => [
                ['label' => 'Deep-Tech Patents Filed', 'value' => '84+'],
                ['label' => 'Subscribers on Dispatch', 'value' => '45,800+'],
                ['label' => 'R&D Labs in India', 'value' => '3 Hubs'],
                ['label' => 'Net Hardware Carbon', 'value' => '-140g CO2e']
            ]
        ];
    }

    /**
     * Save newsletter subscriber to file storage
     */
    public function saveSubscriber(string $email): bool
    {
        $file = WRITEPATH . 'subscribers.json';
        $subscribers = [];
        if (file_exists($file)) {
            $data = json_decode(file_get_contents($file), true);
            if (is_array($data)) {
                $subscribers = $data;
            }
        }

        if (!in_array($email, $subscribers, true)) {
            $subscribers[] = [
                'email' => $email,
                'subscribed_at' => date('Y-m-d H:i:s'),
                'ip' => $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1'
            ];
            file_put_contents($file, json_encode($subscribers, JSON_PRETTY_PRINT));
        }

        return true;
    }

    /**
     * Save inquiry to file storage
     */
    public function saveInquiry(array $data): bool
    {
        $file = WRITEPATH . 'inquiries.json';
        $inquiries = [];
        if (file_exists($file)) {
            $existing = json_decode(file_get_contents($file), true);
            if (is_array($existing)) {
                $inquiries = $existing;
            }
        }

        $data['created_at'] = date('Y-m-d H:i:s');
        $inquiries[] = $data;

        file_put_contents($file, json_encode($inquiries, JSON_PRETTY_PRINT));
        return true;
    }
}
