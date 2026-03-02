<?php

$site_title    = "Portfolio | Mwindjou";
$student_name  = "Mwindjou";
$current_year  = date("Y");

// Liens réseaux sociaux
$github_link   = "https://github.com/mwiinmh";
$linkedin_link = "https://linkedin.com/in/mwindjou-mhoumadi-08a2141b5/";


// Liste de tes compétences classées par catégories
$skills_data = [
    [
        'title' => 'Admin Sys',
        'main_icon' => 'fa-solid fa-server',
        'technos' => [
            ['name' => 'Linux / Bash', 'icon' => 'fa-brands fa-linux'],
            ['name' => 'Windows Server', 'icon' => 'fa-brands fa-windows'],
            ['name' => 'AD & GPO', 'icon' => 'fa-solid fa-layer-group']
        ]
    ],
    [
        'title' => 'Réseau',
        'main_icon' => 'fa-solid fa-network-wired',
        'technos' => [
            ['name' => 'Cisco / VLAN', 'icon' => 'fa-solid fa-route'],
            ['name' => 'Firewalling', 'icon' => 'fa-solid fa-shield-halved'],
            ['name' => 'VPN / Routage', 'icon' => 'fa-solid fa-wifi']
        ]
    ],
    [
        'title' => 'Web & Outils',
        'main_icon' => 'fa-solid fa-code',
        'technos' => [
            ['name' => 'Docker', 'icon' => 'fa-brands fa-docker'],
            ['name' => 'LAMP Stack', 'icon' => 'fa-brands fa-php'],
            ['name' => 'MySQL / GLPI', 'icon' => 'fa-solid fa-database']
        ]
    ]
];
