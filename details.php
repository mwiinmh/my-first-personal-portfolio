<?php
require_once 'config.php';
include 'header.php';

$id = isset($_GET['id']) ? $_GET['id'] : 'home';

$data = [

    // ── ALTERNANCE REDVISE ────────────────────────────────────────────────────
        'redvise' => [
                'title'       => 'Alternance chez REDVISE',
                'subtitle'    => 'Administrateur Système & Réseau',
                'color'       => 'purple',
                'website'     => 'https://www.redvi.se',
                'description' => "REDVISE est une société de conseil et services IT. Durant mon alternance, j'ai eu la charge de maintenir l'infrastructure interne et celle de plusieurs clients PME.",
                'missions'    => [
                        [
                                'title' => 'Sécurisation Firewall Fortinet',
                                'desc'  => 'Mise en place de règles de filtrage strictes et configuration d\'un VPN SSL pour les télétravailleurs.',
                                'tags'  => ['Fortinet', 'VPN SSL', 'Sécurité'],
                                'icon'  => 'fa-solid fa-shield-halved'
                        ],
                        [
                                'title' => 'Migration AD Windows 2019',
                                'desc'  => 'Migration d\'un contrôleur de domaine 2012 R2 vers 2019. Transfert des rôles FSMO sans interruption.',
                                'tags'  => ['Windows Server', 'Active Directory', 'Migration'],
                                'icon'  => 'fa-brands fa-windows'
                        ],
                        [
                                'title' => 'Supervision Centreon',
                                'desc'  => 'Déploiement de sondes pour surveiller l\'état des serveurs critiques et alerter en cas de panne.',
                                'tags'  => ['Monitoring', 'Centreon', 'Linux'],
                                'icon'  => 'fa-solid fa-chart-line'
                        ],
                ]
        ],

    // ── STAGE ITIC ───────────────────────────────────────────────────────────
        'itic' => [
                'title'       => 'Stage chez ITIC Paris',
                'subtitle'    => 'Technicien Support & Réseau',
                'color'       => 'green',
                'website'     => 'https://www.iticparis.com',
                'description' => "L'ITIC Paris est un établissement d'enseignement supérieur. Le service informatique gère un parc de plus de 200 machines pour la pédagogie et l'administration.",
                'missions'    => [
                        [
                                'title' => 'Support Utilisateur N1',
                                'desc'  => 'Assistance aux étudiants et professeurs. Résolution des problèmes de connexion et d\'impression via système de ticketing.',
                                'tags'  => ['Ticketing', 'Hardware', 'Support'],
                                'icon'  => 'fa-solid fa-headset'
                        ],
                        [
                                'title' => 'Gestion Parc Imprimantes',
                                'desc'  => 'Configuration du serveur d\'impression et déploiement des pilotes via GPO sur le parc pédagogique.',
                                'tags'  => ['Print Server', 'GPO', 'Windows'],
                                'icon'  => 'fa-solid fa-print'
                        ],
                ]
        ],

    // ── PROJETS SCOLAIRES (ancien ID conservé pour rétrocompatibilité) ────────
        'sio' => [
                'title'       => 'Projets Scolaires (BTS SIO)',
                'subtitle'    => 'Ateliers de Professionnalisation',
                'color'       => 'blue',
                'website'     => '#',
                'description' => "Ensemble des projets techniques réalisés dans le cadre des ateliers de professionnalisation et des PPE au cours des deux années de BTS.",
                'missions'    => [
                        [
                                'title' => 'Segmentation VLAN',
                                'desc'  => 'Architecture réseau sécurisée avec VLANs (Admin, Guest, VoIP) et routage inter-VLAN sur matériel Cisco.',
                                'tags'  => ['Cisco', 'Switching', 'VLAN'],
                                'icon'  => 'fa-solid fa-network-wired'
                        ],
                        [
                                'title' => 'Solution GLPI',
                                'desc'  => 'Déploiement complet d\'une solution de ticketing et d\'inventaire sur serveur Debian.',
                                'tags'  => ['Linux', 'ITIL', 'GLPI'],
                                'icon'  => 'fa-solid fa-ticket'
                        ],
                        [
                                'title' => 'Conteneurisation Web',
                                'desc'  => 'Mise en place d\'une stack web (Apache/MySQL) via Docker pour un site vitrine associatif.',
                                'tags'  => ['Docker', 'Web', 'DevOps'],
                                'icon'  => 'fa-brands fa-docker'
                        ],
                ]
        ],

    // ── ATELIERS SYSTÈMES ─────────────────────────────────────────────────────
        'sio_sys' => [
                'title'       => 'Ateliers Systèmes',
                'subtitle'    => 'Administration Windows Server & Linux',
                'color'       => 'blue',
                'website'     => '#',
                'description' => "Ateliers de professionnalisation portant sur l'administration système : Windows Server, Linux Debian/Ubuntu, scripting et services associés.",
                'missions'    => [
                        [
                                'title' => 'Active Directory & GPO',
                                'desc'  => 'Mise en place d\'un domaine Windows Server 2019, création d\'UO, comptes utilisateurs et déploiement de GPO de sécurité.',
                                'tags'  => ['Windows Server', 'Active Directory', 'GPO'],
                                'icon'  => 'fa-brands fa-windows'
                        ],
                        [
                                'title' => 'Serveur DHCP/DNS sous Debian',
                                'desc'  => 'Installation et configuration des services DHCP (isc-dhcp-server) et DNS (BIND9) sur Debian 12.',
                                'tags'  => ['Linux', 'DHCP', 'DNS'],
                                'icon'  => 'fa-solid fa-server'
                        ],
                        [
                                'title' => 'Scripting Bash',
                                'desc'  => 'Automatisation de tâches d\'administration : sauvegarde, création de comptes utilisateurs en masse, monitoring basique.',
                                'tags'  => ['Bash', 'Automatisation', 'Linux'],
                                'icon'  => 'fa-solid fa-terminal'
                        ],
                        [
                                'title' => 'Solution GLPI',
                                'desc'  => 'Déploiement complet d\'une solution ITSM/ticketing et d\'inventaire sur serveur Debian avec intégration LDAP.',
                                'tags'  => ['GLPI', 'ITIL', 'Linux'],
                                'icon'  => 'fa-solid fa-ticket'
                        ],
                ]
        ],

    // ── ATELIERS RÉSEAUX ──────────────────────────────────────────────────────
        'sio_net' => [
                'title'       => 'Ateliers Réseaux',
                'subtitle'    => 'Architecture Mikrotik, VLANs & Firewalling',
                'color'       => 'orange',
                'website'     => '#',
                'description' => "Ateliers de professionnalisation portant sur la conception et l'administration d'architectures réseau : switching, routing, VLANs et sécurité périmétrique.",
                'missions'    => [
                        [
                                'title' => 'Segmentation VLAN Mikrotik',
                                'desc'  => 'Création d\'une architecture segmentée (Admin, Guest, VoIP) avec routage inter-VLAN sur switch Mikrotik CSS.',
                                'tags'  => ['Mikrotik', 'VLAN', 'Switching'],
                                'icon'  => 'fa-solid fa-network-wired'
                        ],
                        [
                                'title' => 'Firewall & Filtrage',
                                'desc'  => 'Configuration de règles de pare-feu (iptables / Mikrotik Filter Rules) pour sécuriser les flux entre VLANs.',
                                'tags'  => ['Firewall', 'Sécurité', 'Mikrotik'],
                                'icon'  => 'fa-solid fa-shield-halved'
                        ],
                        [
                                'title' => 'VPN Site-à-Site',
                                'desc'  => 'Mise en place d\'un tunnel VPN IPsec entre deux sites simulés sous GNS3.',
                                'tags'  => ['VPN', 'IPsec', 'GNS3'],
                                'icon'  => 'fa-solid fa-lock'
                        ],
                        [
                                'title' => 'Routage Dynamique OSPF',
                                'desc'  => 'Configuration du protocole OSPF sur topologie multi-routeurs pour assurer la convergence automatique des routes.',
                                'tags'  => ['OSPF', 'Routage', 'GNS3'],
                                'icon'  => 'fa-solid fa-route'
                        ],
                ]
        ],

    // ── PROJETS D'EXAMEN BTS (E4 / E6) ───────────────────────────────────────
        'bts_exam' => [
                'title'       => 'Projets d\'Examen (E4 / E6)',
                'subtitle'    => 'Dossiers techniques officiels BTS SIO',
                'color'       => 'yellow',
                'website'     => '#',
                'description' => "Dossiers techniques présentés au jury lors des épreuves E4 (support et mise à disposition de services) et E6 (cybersécurité des services informatiques) du BTS SIO SISR.",
                'missions'    => [
                        [
                                'title' => 'E4 — Déploiement GLPI',
                                'desc'  => 'Déploiement d\'une solution de ticketing et inventaire GLPI sur serveur Debian avec intégration LDAP.',
                                'tags'  => ['GLPI', 'Linux', 'ITIL', 'E4'],
                                'icon'  => 'fa-solid fa-ticket'
                        ],
                        [
                                'title' => 'E4 — Conteneurisation Web',
                                'desc'  => 'Mise en conteneur d\'une application web (Apache/MySQL) via Docker Compose pour un site associatif.',
                                'tags'  => ['Docker', 'Apache', 'MySQL', 'E4'],
                                'icon'  => 'fa-brands fa-docker'
                        ],
                        [
                                'title' => 'E6 — Audit de Sécurité',
                                'desc'  => 'Réalisation d\'un audit de sécurité d\'un SI simulé : scan Nessus, analyse des vulnérabilités et plan de remédiation.',
                                'tags'  => ['Nessus', 'Audit', 'Cybersécurité', 'E6'],
                                'icon'  => 'fa-solid fa-magnifying-glass-chart'
                        ],
                ]
        ],

];

// Redirection si ID inconnu
if (!array_key_exists($id, $data)) {
    echo "<div class='pt-32 text-center text-white'>Expérience non trouvée. <a href='projects.php' class='text-tech-accent'>Retour</a></div>";
    include 'footer.php';
    exit;
}

$content     = $data[$id];
$colorClass  = 'text-'    . $content['color'] . '-400';
$bgClass     = 'bg-'      . $content['color'] . '-500/10';
$borderClass = 'border-'  . $content['color'] . '-500/20';
$shadowClass = 'hover:shadow-' . $content['color'] . '-500/10';
?>

    <!-- En-tête -->
    <section class="pt-32 pb-12 bg-tech-bg relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <a href="projects.php" class="inline-flex items-center text-tech-dim hover:text-tech-accent transition-colors mb-8">
                <i class="fa-solid fa-arrow-left mr-2"></i> Retour aux projets
            </a>

            <div class="flex flex-col md:flex-row gap-8 items-start">
                <div class="flex-1">
                    <h1 class="text-4xl font-bold text-tech-text mb-2"><?php echo $content['title']; ?></h1>
                    <p class="text-xl <?php echo $colorClass; ?> font-mono mb-6"><?php echo $content['subtitle']; ?></p>
                    <p class="text-tech-dim leading-relaxed text-lg mb-6"><?php echo $content['description']; ?></p>

                    <?php if ($content['website'] !== '#'): ?>
                        <a href="<?php echo $content['website']; ?>" target="_blank"
                           class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-tech-card border border-tech-border text-tech-text hover:border-tech-accent hover:text-tech-accent transition-all">
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
                <?php foreach ($content['missions'] as $mission): ?>
                    <div class="bg-tech-card rounded-xl border border-tech-border overflow-hidden hover:shadow-2xl <?php echo $shadowClass; ?> transition-all duration-300 group">

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
                            <div class="flex flex-wrap gap-2">
                                <?php foreach ($mission['tags'] as $tag): ?>
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