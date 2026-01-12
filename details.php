<?php
require_once 'config.php';
include 'header.php';

// Récupération de l'ID depuis l'URL (ex: details.php?id=redvise)
$id = isset($_GET['id']) ? $_GET['id'] : 'home';

// Définition des données (Simule une base de données)
$data = [
    'redvise' => [
        'title' => 'Alternance chez REDVISE',
        'subtitle' => 'Administrateur Système & Réseau',
        'color' => 'purple', // Pour le style CSS
        'website' => 'https://www.redvi.se',
        'description' => "REDVISE est une société de conseil et services IT. Durant mon alternance, j'ai eu la charge de maintenir l'infrastructure interne et celle de plusieurs clients PME.",
        'missions' => [
            [
                'title' => 'Sécurisation Firewall Fortinet',
                'desc' => 'Mise en place de règles de filtrage strictes et configuration d\'un VPN SSL pour les télétravailleurs.',
                'tags' => ['Fortinet', 'VPN SSL', 'Sécurité'],
                'icon' => 'fa-shield-halved'
            ],
            [
                'title' => 'Migration AD Windows 2019',
                'desc' => 'Migration d\'un contrôleur de domaine 2012 R2 vers 2019. Transfert des rôles FSMO sans interruption.',
                'tags' => ['Windows Server', 'Active Directory', 'Migration'],
                'icon' => 'fa-brands fa-windows'
            ],
            [
                'title' => 'Supervision Centreon',
                'desc' => 'Déploiement de sondes pour surveiller l\'état des serveurs critiques et alerter en cas de panne.',
                'tags' => ['Monitoring', 'Centreon', 'Linux'],
                'icon' => 'fa-solid fa-chart-line'
            ]
        ]
    ],
    'itic' => [
        'title' => 'Stage chez ITIC Paris',
        'subtitle' => 'Technicien Support & Réseau',
        'color' => 'green',
        'website' => 'https://www.iticparis.com',
        'description' => "L'ITIC Paris est un établissement d'enseignement supérieur. Le service informatique gère un parc de plus de 200 machines pour la pédagogie et l'administration.",
        'missions' => [
            [
                'title' => 'Support Utilisateur N1',
                'desc' => 'Assistance aux étudiants et professeurs. Résolution des problèmes de connexion et d\'impression via système de ticketing.',
                'tags' => ['Ticketing', 'Hardware', 'Support'],
                'icon' => 'fa-headset'
            ],
            [
                'title' => 'Gestion Parc Imprimantes',
                'desc' => 'Configuration du serveur d\'impression et déploiement des pilotes via GPO sur le parc pédagogique.',
                'tags' => ['Print Server', 'GPO', 'Windows'],
                'icon' => 'fa-print'
            ]
        ]
    ],
    'sio' => [
        'title' => 'Projets Scolaires (BTS SIO)',
        'subtitle' => 'Ateliers de Professionnalisation',
        'color' => 'blue', // Correspond à tech-accent (cyan/blue)
        'website' => '#',
        'description' => "Ensemble des projets techniques réalisés dans le cadre des ateliers de professionnalisation et des PPE au cours des deux années de BTS.",
        'missions' => [
            [
                'title' => 'Segmentation VLAN',
                'desc' => 'Architecture réseau sécurisée avec VLANs (Admin, Guest, VoIP) et routage inter-VLAN sur matériel Cisco.',
                'tags' => ['Cisco', 'Switching', 'VLAN'],
                'icon' => 'fa-network-wired'
            ],
            [
                'title' => 'Solution GLPI',
                'desc' => 'Déploiement complet d\'une solution de ticketing et d\'inventaire sur serveur Debian.',
                'tags' => ['Linux', 'ITIL', 'GLPI'],
                'icon' => 'fa-ticket'
            ],
            [
                'title' => 'Conteneurisation Web',
                'desc' => 'Mise en place d\'une stack web (Apache/MySQL) via Docker pour un site vitrine associatif.',
                'tags' => ['Docker', 'Web', 'DevOps'],
                'icon' => 'fa-brands fa-docker'
            ]
        ]
    ]
];

// Si l'ID n'existe pas, on redirige ou on affiche une erreur
if (!array_key_exists($id, $data)) {
    echo "<div class='pt-32 text-center text-white'>Expérience non trouvée. <a href='projects.php' class='text-tech-accent'>Retour</a></div>";
    include 'footer.php';
    exit;
}

$content = $data[$id];
$colorClass = "text-" . $content['color'] . "-400";
$bgClass = "bg-" . $content['color'] . "-500/10";
$borderClass = "border-" . $content['color'] . "-500/20";
$shadowClass = "hover:shadow-" . $content['color'] . "-500/10";
?>

    <!-- En-tête de la page de détails -->
    <section class="pt-32 pb-12 bg-tech-bg relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Bouton Retour -->
            <a href="projects.php" class="inline-flex items-center text-tech-dim hover:text-tech-accent transition-colors mb-8">
                <i class="fa-solid fa-arrow-left mr-2"></i> Retour aux projets
            </a>

            <div class="flex flex-col md:flex-row gap-8 items-start">
                <!-- Info Principale -->
                <div class="flex-1">
                    <h1 class="text-4xl font-bold text-tech-text mb-2"><?php echo $content['title']; ?></h1>
                    <p class="text-xl <?php echo $colorClass; ?> font-mono mb-6"><?php echo $content['subtitle']; ?></p>
                    <p class="text-tech-dim leading-relaxed text-lg mb-6">
                        <?php echo $content['description']; ?>
                    </p>

                    <?php if($content['website'] !== '#'): ?>
                        <a href="<?php echo $content['website']; ?>" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-tech-card border border-tech-border text-tech-text hover:border-tech-accent hover:text-tech-accent transition-all">
                            <i class="fa-solid fa-globe"></i> Visiter le site officiel
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Grille des Missions -->
    <section class="py-16 bg-tech-card/10 border-t border-tech-border/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-tech-text mb-8 pl-4 border-l-4 border-tech-accent">
                Détail des Missions Réalisées
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach($content['missions'] as $mission): ?>
                    <div class="bg-tech-card rounded-xl border border-tech-border overflow-hidden hover:shadow-2xl <?php echo $shadowClass; ?> transition-all duration-300 group">
                        <!-- Icone Mission -->
                        <div class="h-40 bg-slate-800/50 relative overflow-hidden flex items-center justify-center border-b border-tech-border/50">
                            <i class="<?php echo $mission['icon']; ?> text-5xl text-slate-600 group-hover:scale-110 group-hover:text-tech-text transition-all duration-500"></i>
                        </div>

                        <div class="p-6">
                            <h3 class="text-lg font-bold text-tech-text mb-3 group-hover:text-tech-accent transition-colors">
                                <?php echo $mission['title']; ?>
                            </h3>
                            <p class="text-tech-dim text-sm mb-4 leading-relaxed">
                                <?php echo $mission['desc']; ?>
                            </p>

                            <!-- Tags -->
                            <div class="flex flex-wrap gap-2 mt-auto">
                                <?php foreach($mission['tags'] as $tag): ?>
                                    <span class="text-xs font-mono <?php echo $colorClass . ' ' . $bgClass; ?> px-2 py-1 rounded border <?php echo $borderClass; ?>">
                            <?php echo $tag; ?>
                        </span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>