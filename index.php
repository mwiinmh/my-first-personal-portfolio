<?php
require_once 'config.php';

$contact_success = false;
$contact_error   = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    $email   = filter_var(trim($_POST['email']   ?? ''), FILTER_VALIDATE_EMAIL);
    $message = trim($_POST['message'] ?? '');
    if (!$email) {
        $contact_error = 'Adresse email invalide.';
    } elseif (strlen($message) < 10) {
        $contact_error = 'Le message est trop court (10 caractères minimum).';
    } else {
        $to      = 'votre@email.com';
        $subject = 'Contact Portfolio — ' . $email;
        $body    = "Message de : $email\n\n" . $message;
        $headers = "From: noreply@votredomaine.com\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";
        if (mail($to, $subject, $body, $headers)) $contact_success = true;
        else $contact_error = 'Erreur lors de l\'envoi. Réessayez plus tard.';
    }
}

include 'header.php';

$skills_data = [
        'ticketing' => [
                'name'  => 'Ticketing',
                'icon'  => 'fa-solid fa-ticket',
                'color' => 'sky',
                'desc'  => 'Utilisation quotidienne de GLPI en entreprise pour la gestion des incidents, des demandes et de l\'inventaire. Maîtrise du cycle de vie d\'un ticket : création, qualification, escalade, résolution.',
                'tools' => ['GLPI', 'ITSM', 'ITIL'],
        ],
        'virtualisation' => [
                'name'  => 'Virtualisation',
                'icon'  => 'fa-solid fa-cubes',
                'color' => 'purple',
                'desc'  => 'Déploiement et administration de machines virtuelles sous VMware Workstation et VirtualBox. Gestion des snapshots, des réseaux virtuels (NAT, Bridge, Host-only) et optimisation des ressources.',
                'tools' => ['VMware', 'VirtualBox', 'Hyper-V'],
        ],
        'ad' => [
                'name'  => 'Active Directory',
                'icon'  => 'fa-solid fa-users-gear',
                'color' => 'blue',
                'desc'  => 'Mise en place d\'un domaine Windows Server 2019 : création d\'UO, gestion des comptes et groupes, déploiement de GPO de sécurité pour les postes du parc.',
                'tools' => ['Windows Server 2019', 'GPO', 'DNS', 'DHCP'],
        ],
        'reseaux' => [
                'name'  => 'TCP/IP & Réseaux',
                'icon'  => 'fa-solid fa-network-wired',
                'color' => 'green',
                'desc'  => 'Connaissance du modèle OSI et de la pile TCP/IP. Conception d\'architectures réseau avec VLANs, configuration du routage inter-VLAN et mise en place de règles de filtrage.',
                'tools' => ['TCP/IP', 'VLAN', 'Mikrotik', 'Firewalling'],
        ],
        'cisco' => [
                'name'  => 'Cisco Packet Tracer',
                'icon'  => 'fa-solid fa-sitemap',
                'color' => 'orange',
                'desc'  => 'Simulation et maquettage d\'infrastructures réseau : routage statique/dynamique (OSPF, RIP), spanning-tree, VLANs et ACL. Utilisé pour préparer les ateliers de professionnalisation.',
                'tools' => ['Cisco IOS', 'OSPF', 'STP', 'ACL'],
        ],
        'ia' => [
                'name'  => 'IA & Outils Assistants',
                'icon'  => 'fa-solid fa-brain',
                'color' => 'pink',
                'desc'  => 'Utilisation des outils d\'IA générative (ChatGPT, Claude, Copilot) pour optimiser les tâches d\'administration : rédaction de scripts, génération de documentation et analyse de logs.',
                'tools' => ['ChatGPT', 'Claude', 'GitHub Copilot'],
        ],
        'windows' => [
                'name'  => 'Windows Server',
                'icon'  => 'fa-brands fa-windows',
                'color' => 'sky',
                'desc'  => 'Administration de Windows Server 2019 : installation des rôles (AD DS, DNS, DHCP, IIS, Print Server), gestion des mises à jour (WSUS) et monitoring via l\'Observateur d\'événements.',
                'tools' => ['Windows Server 2019', 'WSUS', 'IIS', 'PowerShell'],
        ],
        'linux' => [
                'name'  => 'Linux (Ubuntu / Debian)',
                'icon'  => 'fa-brands fa-linux',
                'color' => 'yellow',
                'desc'  => 'Administration en ligne de commande : gestion des paquets (apt), des services (systemd), des droits (chmod/chown), configuration SSH, Apache, BIND9, isc-dhcp-server et scripting Bash.',
                'tools' => ['Debian 12', 'Ubuntu', 'Bash', 'SSH', 'Apache'],
        ],
        'vscode' => [
                'name'  => 'VS Code & Scripting',
                'icon'  => 'fa-solid fa-code',
                'color' => 'blue',
                'desc'  => 'Éditeur principal pour scripts Bash et PowerShell, documentation Markdown et pages web. Utilisation des extensions Git, Remote SSH et Prettier.',
                'tools' => ['VS Code', 'Bash', 'PowerShell', 'Git'],
        ],
];
?>

    <!-- HERO -->
    <section id="home" class="min-h-screen flex items-center pt-16 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(var(--text-dim) 1px, transparent 1px); background-size: 32px 32px;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <p class="text-tech-accent font-mono mb-4 min-h-[24px]">
                    <span id="hero-typing"></span><span class="typing-cursor"></span>
                </p>
                <h1 class="text-5xl md:text-7xl font-bold text-tech-text mb-6">
                    Admin Sys &amp;<br><span class="text-tech-dim">Réseaux</span>
                </h1>
                <p class="text-xl text-tech-dim mb-8 max-w-lg leading-relaxed">
                    Étudiant en BTS SIO option SISR. Passionné par l'infrastructure, la cybersécurité et l'automatisation.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#about" class="bg-tech-accent text-white font-semibold px-6 py-3 rounded-lg hover:bg-sky-600 transition-colors shadow-lg shadow-tech-accent/20">
                        Découvrir mon profil
                    </a>
                    <a href="projects.php" class="px-6 py-3 border border-tech-border text-tech-text rounded-lg hover:border-tech-accent hover:text-tech-accent transition-colors">
                        Mes projets
                    </a>
                    <a href="<?php echo $github_link; ?>" target="_blank" class="px-6 py-3 border border-tech-border text-tech-text rounded-lg hover:border-tech-accent transition-colors flex items-center gap-2">
                        <i class="fa-brands fa-github"></i> GitHub
                    </a>
                </div>
            </div>
            <div class="hidden lg:block">
                <div class="bg-[#1e293b] rounded-lg border border-slate-700 shadow-2xl overflow-hidden font-mono text-sm">
                    <div class="bg-slate-800 px-4 py-2 flex items-center gap-2 border-b border-slate-700">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        <span class="ml-2 text-xs text-slate-400">user@debian-server:~</span>
                    </div>
                    <div class="p-6 text-slate-300 space-y-2">
                        <p><span class="text-green-400">user@debian:~$</span> whoami</p>
                        <p class="text-tech-accent"><?php echo $student_name; ?></p><br>
                        <p><span class="text-green-400">user@debian:~$</span> ./show_experience.sh --tree</p>
                        <p>&gt; Chargement de l'arbre professionnel...</p>
                        <p>&gt; [SUCCESS] 2 expériences trouvées.</p><br>
                        <p><span class="text-green-400">user@debian:~$</span> <span class="typing-cursor"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const text = "Bonjour, je suis <?php echo $student_name; ?>";
            const el = document.getElementById('hero-typing');
            let i = 0;
            function type() { if (i < text.length) { el.textContent += text.charAt(i++); setTimeout(type, 100); } }
            setTimeout(type, 500);
        });
    </script>

    <!-- ═══════════════════════════════
         01. À PROPOS
    ════════════════════════════════ -->
    <section id="about" class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <h2 class="text-3xl font-bold mb-14 flex items-center gap-3 text-tech-text">
                <span class="text-tech-accent font-mono">01.</span> À propos de moi
            </h2>

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-14 items-start">

                <!-- Bio -->
                <div class="lg:col-span-2 space-y-6">
                    <div class="flex flex-col items-center text-center mb-4">
                        <div class="relative mb-4">
                            <div class="w-28 h-28 rounded-full bg-gradient-to-br from-tech-accent to-sky-800 flex items-center justify-center text-white text-4xl font-bold font-mono shadow-xl shadow-tech-accent/20 ring-4 ring-tech-border">
                                M
                            </div>
                            <span class="absolute bottom-1 right-1 w-5 h-5 bg-green-400 rounded-full border-2 border-tech-bg"></span>
                        </div>
                        <h3 class="text-xl font-bold text-tech-text"><?php echo $student_name; ?> Mhoumadi</h3>
                        <p class="text-tech-accent font-mono text-sm mt-1">Étudiant BTS SIO SISR</p>
                        <p class="text-tech-dim font-mono text-xs mt-0.5">Alternant @ REDVISE · Paris</p>
                    </div>

                    <p class="text-tech-dim leading-relaxed text-sm">
                        Passionné par les systèmes d'information, je prépare un <span class="text-tech-text font-semibold">BTS SIO option SISR</span> à l'ITIC Paris en alternance. Cette double casquette me permet de confronter chaque jour la théorie aux réalités du terrain.
                    </p>
                    <p class="text-tech-dim leading-relaxed text-sm">
                        Chez <span class="text-tech-text font-semibold">REDVISE</span>, j'interviens sur le maintien en condition opérationnelle de serveurs clients, la sécurisation d'infrastructures réseau (Fortinet) et la supervision via Centreon.
                    </p>
                    <p class="text-tech-dim leading-relaxed text-sm">
                        Mon objectif est de me spécialiser en <span class="text-tech-text font-semibold">cybersécurité et architecture réseau</span>. En dehors du travail, j'explore le scripting Bash et les nouveaux usages de l'IA dans l'IT.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-3 pt-2">
                        <a href="assets/CV_Mwindjou.pdf" download class="flex items-center justify-center gap-2 bg-tech-accent text-white font-semibold px-5 py-2.5 rounded-lg hover:bg-sky-600 transition-colors text-sm shadow-lg shadow-tech-accent/20">
                            <i class="fa-solid fa-file-arrow-down"></i> Télécharger mon CV
                        </a>
                        <a href="#contact" class="flex items-center justify-center gap-2 border border-tech-border text-tech-text font-semibold px-5 py-2.5 rounded-lg hover:border-tech-accent hover:text-tech-accent transition-colors text-sm">
                            <i class="fa-solid fa-envelope"></i> Me contacter
                        </a>
                    </div>

                    <div class="grid grid-cols-2 gap-2 pt-1">
                        <div class="flex items-center gap-2 text-xs text-tech-dim font-mono bg-tech-card border border-tech-border rounded-lg px-3 py-2">
                            <i class="fa-solid fa-location-dot text-tech-accent w-3"></i> Paris, France
                        </div>
                        <div class="flex items-center gap-2 text-xs text-tech-dim font-mono bg-tech-card border border-tech-border rounded-lg px-3 py-2">
                            <i class="fa-solid fa-language text-tech-accent w-3"></i> FR · EN · AR
                        </div>
                        <div class="flex items-center gap-2 text-xs text-tech-dim font-mono bg-tech-card border border-tech-border rounded-lg px-3 py-2 col-span-2">
                            <i class="fa-solid fa-circle text-green-400 text-[8px]"></i> Disponible en alternance jusqu'en 2026
                        </div>
                    </div>
                </div>

                <!-- Skill Cards -->
                <div class="lg:col-span-3">
                    <p class="text-tech-dim font-mono text-xs mb-5 flex items-center gap-2">
                        <i class="fa-solid fa-microchip text-tech-accent"></i>
                        Mes Compétences — cliquez sur une carte pour en savoir plus
                    </p>

                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                        <?php
                        $card_hover = [
                                'sky'    => ['border'=>'rgba(56,189,248,.6)',  'shadow'=>'rgba(56,189,248,.12)',  'text'=>'#38bdf8', 'bg'=>'rgba(56,189,248,.1)',  'bd2'=>'rgba(56,189,248,.25)'],
                                'purple' => ['border'=>'rgba(192,132,252,.6)', 'shadow'=>'rgba(192,132,252,.12)', 'text'=>'#c084fc', 'bg'=>'rgba(192,132,252,.1)', 'bd2'=>'rgba(192,132,252,.25)'],
                                'blue'   => ['border'=>'rgba(96,165,250,.6)',  'shadow'=>'rgba(96,165,250,.12)',  'text'=>'#60a5fa', 'bg'=>'rgba(96,165,250,.1)',  'bd2'=>'rgba(96,165,250,.25)'],
                                'green'  => ['border'=>'rgba(74,222,128,.6)',  'shadow'=>'rgba(74,222,128,.12)',  'text'=>'#4ade80', 'bg'=>'rgba(74,222,128,.1)',  'bd2'=>'rgba(74,222,128,.25)'],
                                'orange' => ['border'=>'rgba(251,146,60,.6)',  'shadow'=>'rgba(251,146,60,.12)',  'text'=>'#fb923c', 'bg'=>'rgba(251,146,60,.1)',  'bd2'=>'rgba(251,146,60,.25)'],
                                'pink'   => ['border'=>'rgba(244,114,182,.6)', 'shadow'=>'rgba(244,114,182,.12)', 'text'=>'#f472b6', 'bg'=>'rgba(244,114,182,.1)', 'bd2'=>'rgba(244,114,182,.25)'],
                                'yellow' => ['border'=>'rgba(250,204,21,.6)',  'shadow'=>'rgba(250,204,21,.12)',  'text'=>'#facc15', 'bg'=>'rgba(250,204,21,.1)',  'bd2'=>'rgba(250,204,21,.25)'],
                        ];

                        foreach ($skills_data as $key => $skill):
                            $c = $card_hover[$skill['color']];
                            ?>
                            <button
                                    onclick="openSkillModal('<?php echo $key; ?>')"
                                    data-border="<?php echo $c['border']; ?>"
                                    data-shadow="<?php echo $c['shadow']; ?>"
                                    data-text="<?php echo $c['text']; ?>"
                                    data-bg="<?php echo $c['bg']; ?>"
                                    data-bd2="<?php echo $c['bd2']; ?>"
                                    class="skill-card group bg-tech-card border border-tech-border rounded-xl p-5 flex flex-col items-center text-center gap-3 cursor-pointer transition-all duration-300"
                                    style="">

                                <div class="skill-card-icon w-12 h-12 rounded-xl border flex items-center justify-center text-xl transition-transform duration-300 group-hover:scale-110"
                                     style="color:<?php echo $c['text']; ?>; background:<?php echo $c['bg']; ?>; border-color:<?php echo $c['bd2']; ?>">
                                    <i class="<?php echo $skill['icon']; ?>"></i>
                                </div>

                                <span class="text-tech-text text-sm font-semibold leading-tight group-hover:text-tech-accent transition-colors">
                                <?php echo $skill['name']; ?>
                            </span>

                                <span class="font-mono text-xs opacity-60 group-hover:opacity-100 transition-opacity flex items-center gap-1"
                                      style="color:<?php echo $c['text']; ?>">
                                En savoir plus... <i class="fa-solid fa-arrow-right text-[9px]"></i>
                            </span>
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MODAL -->
    <div id="skill-modal" class="fixed inset-0 z-[100] flex items-center justify-center p-4 hidden">
        <div id="modal-backdrop" class="absolute inset-0 bg-black/70 backdrop-blur-sm" onclick="closeSkillModal()"></div>
        <div id="modal-box" class="relative bg-tech-card border border-tech-border rounded-2xl shadow-2xl w-full max-w-md p-8 z-10" style="animation:modalIn .22s cubic-bezier(.4,0,.2,1) both">
            <button onclick="closeSkillModal()" class="absolute top-4 right-4 text-tech-dim hover:text-tech-text w-8 h-8 flex items-center justify-center rounded-full hover:bg-tech-bg transition-all">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>
            <div class="flex items-center gap-4 mb-5">
                <div id="modal-icon-wrap" class="w-14 h-14 rounded-xl border-2 flex items-center justify-center text-2xl flex-shrink-0">
                    <i id="modal-icon-i"></i>
                </div>
                <div>
                    <h3 id="modal-title" class="text-xl font-bold text-tech-text"></h3>
                    <p class="text-tech-accent font-mono text-xs mt-0.5">Compétence technique</p>
                </div>
            </div>
            <p id="modal-desc" class="text-tech-dim leading-relaxed text-sm mb-6"></p>
            <p class="text-tech-dim font-mono text-xs mb-2">Outils &amp; technologies :</p>
            <div id="modal-tools" class="flex flex-wrap gap-2"></div>
        </div>
    </div>

    <style>
        @keyframes modalIn { from { opacity:0; transform:scale(.95) translateY(6px); } to { opacity:1; transform:none; } }
        .skill-card:hover { transform: translateY(-2px); }
    </style>

<?php echo '<script>const SKILLS_DATA = ' . json_encode($skills_data) . ';</script>'; ?>

    <script>
        // Hover effect dynamique sur les cards
        document.querySelectorAll('.skill-card').forEach(card => {
            const b = card.dataset.border, s = card.dataset.shadow;
            card.addEventListener('mouseenter', () => {
                card.style.borderColor = b;
                card.style.boxShadow   = `0 10px 30px -5px ${s}`;
            });
            card.addEventListener('mouseleave', () => {
                card.style.borderColor = '';
                card.style.boxShadow   = '';
            });
        });

        function openSkillModal(key) {
            const sk = SKILLS_DATA[key];
            const colors = {
                sky:'#38bdf8', purple:'#c084fc', blue:'#60a5fa',
                green:'#4ade80', orange:'#fb923c', pink:'#f472b6', yellow:'#facc15'
            };
            const bgs = {
                sky:'rgba(56,189,248,.12)', purple:'rgba(192,132,252,.12)', blue:'rgba(96,165,250,.12)',
                green:'rgba(74,222,128,.12)', orange:'rgba(251,146,60,.12)', pink:'rgba(244,114,182,.12)', yellow:'rgba(250,204,21,.12)'
            };
            const col = colors[sk.color], bg = bgs[sk.color];

            document.getElementById('modal-title').textContent    = sk.name;
            document.getElementById('modal-desc').textContent     = sk.desc;
            document.getElementById('modal-icon-i').className     = sk.icon;
            document.getElementById('modal-icon-i').style.color   = col;
            const wrap = document.getElementById('modal-icon-wrap');
            wrap.style.background   = bg;
            wrap.style.borderColor  = col;

            document.getElementById('modal-tools').innerHTML = sk.tools.map(t =>
                `<span class="text-xs font-mono px-2.5 py-1 rounded-full" style="color:${col};background:${bg};border:1px solid ${col}40">${t}</span>`
            ).join('');

            // Relancer l'animation
            const box = document.getElementById('modal-box');
            box.style.animation = 'none';
            box.offsetHeight; // reflow
            box.style.animation = '';

            document.getElementById('skill-modal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeSkillModal() {
            document.getElementById('skill-modal').classList.add('hidden');
            document.body.style.overflow = '';
        }

        document.addEventListener('keydown', e => { if (e.key === 'Escape') closeSkillModal(); });
    </script>

    <!-- 02. EXPÉRIENCE -->
    <section id="experience" class="py-20 bg-tech-card/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12 flex items-center gap-3 text-tech-text">
                <span class="text-tech-accent font-mono">02.</span> Expérience Professionnelle
            </h2>
            <div class="relative">
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-tech-border"></div>
                <!-- REDVISE -->
                <div class="mb-12 flex justify-between items-center w-full right-timeline">
                    <div class="hidden md:block order-1 w-5/12"></div>
                    <div class="z-20 flex items-center order-1 bg-tech-accent shadow-xl w-4 h-4 rounded-full ring-4 ring-tech-bg hover:scale-125 transition-transform duration-300"></div>
                    <div class="order-1 bg-tech-card rounded-lg shadow-xl w-full md:w-5/12 border border-tech-border hover:border-tech-accent transition-colors relative group">
                        <div class="hidden md:block absolute top-1/2 -left-2 w-4 h-4 bg-tech-card border-l border-b border-tech-border group-hover:border-tech-accent transform rotate-45 -translate-y-1/2 transition-colors z-10"></div>
                        <div class="relative overflow-hidden rounded-lg px-6 py-4 h-full">
                            <div class="transition-transform duration-500 group-hover:-translate-y-2">
                                <div class="flex justify-between items-center mb-2">
                                    <h3 class="font-bold text-tech-text text-xl">REDVISE</h3>
                                    <span class="bg-tech-accent/10 text-tech-accent text-xs font-mono px-2 py-1 rounded">Alternance</span>
                                </div>
                                <p class="text-sm text-tech-dim font-mono mb-3"><i class="fa-regular fa-calendar mr-2"></i>Septembre 2025 — En cours</p>
                                <p class="text-tech-dim text-sm leading-relaxed mb-4 group-hover:opacity-20 transition-opacity duration-300">Apprentissage et mise en pratique des architectures réseaux et systèmes.</p>
                            </div>
                            <div class="absolute inset-0 flex flex-col justify-end items-center pb-6 bg-gradient-to-t from-tech-card via-tech-card/90 to-transparent translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                                <a href="projects.php#alternance" class="bg-tech-accent text-white px-5 py-2 rounded-full font-bold text-sm hover:bg-sky-600 transition-colors shadow-lg">Voir les missions <i class="fa-solid fa-arrow-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ITIC Paris -->
                <div class="mb-8 flex justify-between items-center w-full flex-row-reverse left-timeline">
                    <div class="hidden md:block order-1 w-5/12"></div>
                    <div class="z-20 flex items-center order-1 bg-tech-dim shadow-xl w-4 h-4 rounded-full ring-4 ring-tech-bg hover:scale-125 transition-transform duration-300"></div>
                    <div class="order-1 bg-tech-card rounded-lg shadow-xl w-full md:w-5/12 border border-tech-border hover:border-tech-accent transition-colors relative group">
                        <div class="hidden md:block absolute top-1/2 -right-2 w-4 h-4 bg-tech-card border-r border-t border-tech-border group-hover:border-tech-accent transform rotate-45 -translate-y-1/2 transition-colors z-10"></div>
                        <div class="relative overflow-hidden rounded-lg px-6 py-4 h-full">
                            <div class="transition-transform duration-500 group-hover:-translate-y-2">
                                <div class="flex justify-between items-center mb-2">
                                    <h3 class="font-bold text-tech-text text-xl">ITIC Paris</h3>
                                    <span class="bg-tech-dim/10 text-tech-dim text-xs font-mono px-2 py-1 rounded">Stage</span>
                                </div>
                                <p class="text-sm text-tech-dim font-mono mb-3"><i class="fa-regular fa-calendar mr-2"></i>Mai 2025 — Juillet 2025</p>
                                <p class="text-tech-dim text-sm leading-relaxed mb-4 group-hover:opacity-20 transition-opacity duration-300">Maintenance du parc informatique pédagogique et assistance utilisateurs.</p>
                            </div>
                            <div class="absolute inset-0 flex flex-col justify-end items-center pb-6 bg-gradient-to-t from-tech-card via-tech-card/90 to-transparent translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                                <a href="projects.php#stage" class="bg-tech-dim text-white px-5 py-2 rounded-full font-bold text-sm hover:bg-slate-600 transition-colors shadow-lg">Voir les missions <i class="fa-solid fa-arrow-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 03. PARCOURS SCOLAIRE -->
    <section id="education" class="py-20 overflow-hidden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-16 flex items-center justify-center gap-3 text-tech-text scroll-animate opacity-0 translate-y-10 transition-all duration-700">
                <span class="text-tech-accent font-mono">03.</span> Parcours Scolaire
            </h2>
            <div class="relative border-l-2 border-tech-border ml-3 md:ml-6 space-y-12">
                <div class="relative pl-8 md:pl-12 scroll-animate opacity-0 translate-y-10 transition-all duration-700 delay-100">
                    <span class="absolute -left-[9px] md:-left-[11px] top-0 bg-tech-bg border-2 border-tech-accent w-5 h-5 md:w-6 md:h-6 rounded-full"></span>
                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-2">
                        <h3 class="text-xl font-bold text-tech-text">BTS SIO option SISR</h3>
                        <span class="text-tech-accent font-mono text-sm bg-tech-accent/10 px-2 py-1 rounded w-fit mt-1 md:mt-0">2024 — 2026 (En cours)</span>
                    </div>
                    <p class="text-tech-text font-semibold mb-2">ITIC Paris, France</p>
                    <p class="text-tech-dim text-sm leading-relaxed">Solutions d'Infrastructure, Systèmes et Réseaux. Spécialisation en administration systèmes sécurisés et architecture réseau.</p>
                </div>
                <div class="relative pl-8 md:pl-12 scroll-animate opacity-0 translate-y-10 transition-all duration-700 delay-200">
                    <span class="absolute -left-[9px] md:-left-[11px] top-0 bg-tech-bg border-2 border-tech-dim w-5 h-5 md:w-6 md:h-6 rounded-full"></span>
                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-2">
                        <h3 class="text-xl font-bold text-tech-text">Bachelor Génie Électrique &amp; Électronique</h3>
                        <span class="text-tech-dim font-mono text-sm bg-tech-card px-2 py-1 rounded w-fit mt-1 md:mt-0">2022</span>
                    </div>
                    <p class="text-tech-text font-semibold mb-2">Mahsa University, Malaisie</p>
                    <p class="text-tech-dim text-sm leading-relaxed">Formation internationale technique axée sur l'électronique embarquée et les systèmes électriques.</p>
                </div>
                <div class="relative pl-8 md:pl-12 scroll-animate opacity-0 translate-y-10 transition-all duration-700 delay-300">
                    <span class="absolute -left-[9px] md:-left-[11px] top-0 bg-tech-bg border-2 border-tech-dim w-5 h-5 md:w-6 md:h-6 rounded-full"></span>
                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-2">
                        <h3 class="text-xl font-bold text-tech-text">Bac Scientifique (Série D)</h3>
                        <span class="text-tech-dim font-mono text-sm bg-tech-card px-2 py-1 rounded w-fit mt-1 md:mt-0">2019</span>
                    </div>
                    <p class="text-tech-text font-semibold mb-2">Groupe Scolaire L'Olivier, Comores</p>
                    <p class="text-tech-dim text-sm leading-relaxed">Obtention du baccalauréat scientifique.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 04. TEASER PROJETS -->
    <section id="projects-teaser" class="py-24 bg-tech-bg">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6 flex justify-center items-center gap-3 text-tech-text">
                <span class="text-tech-accent font-mono">04.</span> Projets &amp; Missions
            </h2>
            <p class="text-tech-dim text-lg mb-10">J'ai regroupé l'ensemble de mes documentations techniques, projets d'école et missions d'entreprise sur une page dédiée.</p>
            <a href="projects.php" class="inline-flex items-center gap-3 bg-tech-accent text-white font-bold py-4 px-8 rounded-full hover:bg-sky-600 transition-all shadow-lg hover:shadow-tech-accent/30 hover:-translate-y-1">
                <i class="fa-solid fa-folder-open"></i> Accéder au Portfolio des Projets
            </a>
        </div>
    </section>
<!-- ══════════════════════════════════════════════════════════════
         05. CONTACT — Infos à gauche · Formulaire à droite
    ═══════════════════════════════════════════════════════════════ -->
<section id="contact" class="py-24 bg-tech-card/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <h2 class="text-3xl font-bold mb-14 flex items-center gap-3 text-tech-text">
            <span class="text-tech-accent font-mono">05.</span> Me Contacter
        </h2>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 items-start">

            <!-- ── GAUCHE (2/5) : Infos de contact ─────────────────── -->
            <div class="lg:col-span-2 space-y-6">

                <p class="text-tech-dim leading-relaxed text-sm">
                    Vous avez un projet, une question ou souhaitez simplement échanger ? N'hésitez pas à me contacter via le formulaire ou directement par l'un des canaux ci-dessous.
                </p>

                <!-- Cartes de contact -->
                <div class="space-y-3">

                    <a href="mailto:mwindjou@email.com"
                       class="flex items-center gap-4 p-4 bg-tech-card border border-tech-border rounded-xl hover:border-tech-accent transition-all group hover:-translate-y-0.5">
                        <div class="w-11 h-11 rounded-xl bg-tech-accent/10 border border-tech-accent/20 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-envelope text-tech-accent"></i>
                        </div>
                        <div>
                            <p class="text-tech-dim text-xs font-mono mb-0.5">Email</p>
                            <p class="text-tech-text text-sm font-semibold">mwindjou@email.com</p>
                        </div>
                        <i class="fa-solid fa-arrow-right ml-auto text-tech-accent opacity-0 group-hover:opacity-100 transition-opacity text-sm"></i>
                    </a>

                    <a href="<?php echo isset($linkedin_link) ? $linkedin_link : '#'; ?>" target="_blank"
                       class="flex items-center gap-4 p-4 bg-tech-card border border-tech-border rounded-xl hover:border-blue-400/60 transition-all group hover:-translate-y-0.5">
                        <div class="w-11 h-11 rounded-xl bg-blue-400/10 border border-blue-400/20 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                            <i class="fa-brands fa-linkedin text-blue-400"></i>
                        </div>
                        <div>
                            <p class="text-tech-dim text-xs font-mono mb-0.5">LinkedIn</p>
                            <p class="text-tech-text text-sm font-semibold">linkedin.com/in/mwindjou</p>
                        </div>
                        <i class="fa-solid fa-arrow-right ml-auto text-blue-400 opacity-0 group-hover:opacity-100 transition-opacity text-sm"></i>
                    </a>

                    <a href="<?php echo isset($github_link) ? $github_link : '#'; ?>" target="_blank"
                       class="flex items-center gap-4 p-4 bg-tech-card border border-tech-border rounded-xl hover:border-purple-400/60 transition-all group hover:-translate-y-0.5">
                        <div class="w-11 h-11 rounded-xl bg-purple-400/10 border border-purple-400/20 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                            <i class="fa-brands fa-github text-purple-400"></i>
                        </div>
                        <div>
                            <p class="text-tech-dim text-xs font-mono mb-0.5">GitHub</p>
                            <p class="text-tech-text text-sm font-semibold">github.com/mwiinmh</p>
                        </div>
                        <i class="fa-solid fa-arrow-right ml-auto text-purple-400 opacity-0 group-hover:opacity-100 transition-opacity text-sm"></i>
                    </a>

                    <div class="flex items-center gap-4 p-4 bg-tech-card border border-tech-border rounded-xl">
                        <div class="w-11 h-11 rounded-xl bg-green-400/10 border border-green-400/20 flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-location-dot text-green-400"></i>
                        </div>
                        <div>
                            <p class="text-tech-dim text-xs font-mono mb-0.5">Localisation</p>
                            <p class="text-tech-text text-sm font-semibold">Paris, France</p>
                        </div>
                    </div>
                </div>

                <!-- Disponibilité -->
                <div class="bg-tech-card border border-tech-border rounded-xl p-4 flex items-center gap-3">
                    <div class="relative flex-shrink-0">
                        <div class="w-3 h-3 rounded-full bg-green-400"></div>
                        <div class="absolute inset-0 w-3 h-3 rounded-full bg-green-400 animate-ping opacity-50"></div>
                    </div>
                    <div>
                        <p class="text-tech-text text-sm font-semibold">Disponible en alternance</p>
                        <p class="text-tech-dim text-xs font-mono">Jusqu'en juin 2026 · Île-de-France</p>
                    </div>
                </div>

            </div>

            <!-- ── DROITE (3/5) : Formulaire ───────────────────────── -->
            <div class="lg:col-span-3">
                <div class="bg-tech-card border border-tech-border rounded-2xl p-8 shadow-xl">

                    <!-- Titre formulaire -->
                    <div class="flex items-center gap-3 mb-7">
                        <div class="w-10 h-10 rounded-xl bg-tech-accent/10 border border-tech-accent/20 flex items-center justify-center">
                            <i class="fa-solid fa-paper-plane text-tech-accent"></i>
                        </div>
                        <div>
                            <h3 class="text-tech-text font-bold">Envoyer un message</h3>
                            <p class="text-tech-dim text-xs font-mono">Je réponds sous 24–48h</p>
                        </div>
                    </div>
                    <!-- Feedback -->
                    <?php if ($contact_success): ?>
                        <div class="mb-6 p-4 bg-green-500/10 border border-green-500/30 rounded-xl text-green-400 font-mono text-sm flex items-center gap-3">
                            <i class="fa-solid fa-circle-check text-lg flex-shrink-0"></i>
                            <div>
                                <p class="font-bold">Message envoyé !</p>
                                <p class="text-xs opacity-80 mt-0.5">Je vous répondrai dans les meilleurs délais.</p>
                            </div>
                        </div>
                    <?php elseif ($contact_error): ?>
                        <div class="mb-6 p-4 bg-red-500/10 border border-red-500/30 rounded-xl text-red-400 font-mono text-sm flex items-center gap-3">
                            <i class="fa-solid fa-triangle-exclamation text-lg flex-shrink-0"></i>
                            <?php echo htmlspecialchars($contact_error); ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="#contact" class="space-y-5">

                        <!-- Ligne Nom + Email -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-mono text-tech-dim mb-1.5">
                                    <i class="fa-solid fa-user mr-1 text-tech-accent"></i> Votre nom
                                </label>
                                <input type="text" name="name"
                                       class="w-full bg-tech-bg border border-tech-border rounded-lg px-4 py-2.5 text-tech-text text-sm focus:outline-none focus:border-tech-accent focus:ring-1 focus:ring-tech-accent/20 transition-all placeholder:text-tech-dim/50"
                                       placeholder="Jean Dupont"
                                       value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
                            </div>
                            <div>
                                <label class="block text-xs font-mono text-tech-dim mb-1.5">
                                    <i class="fa-solid fa-envelope mr-1 text-tech-accent"></i> Email <span class="text-red-400">*</span>
                                </label>
                                <input type="email" name="email" required
                                       class="w-full bg-tech-bg border border-tech-border rounded-lg px-4 py-2.5 text-tech-text text-sm focus:outline-none focus:border-tech-accent focus:ring-1 focus:ring-tech-accent/20 transition-all placeholder:text-tech-dim/50"
                                       placeholder="votre@email.com"
                                       value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                            </div>
                        </div>

                        <!-- Sujet -->
                        <div>
                            <label class="block text-xs font-mono text-tech-dim mb-1.5">
                                <i class="fa-solid fa-tag mr-1 text-tech-accent"></i> Sujet
                            </label>
                            <input type="text" name="subject"
                                   class="w-full bg-tech-bg border border-tech-border rounded-lg px-4 py-2.5 text-tech-text text-sm focus:outline-none focus:border-tech-accent focus:ring-1 focus:ring-tech-accent/20 transition-all placeholder:text-tech-dim/50"
                                   placeholder="Opportunité d'alternance, question technique..."
                                   value="<?php echo htmlspecialchars($_POST['subject'] ?? ''); ?>">
                        </div>

                        <!-- Message -->
                        <div>
                            <label class="block text-xs font-mono text-tech-dim mb-1.5">
                                <i class="fa-solid fa-message mr-1 text-tech-accent"></i> Message <span class="text-red-400">*</span>
                            </label>
                            <textarea rows="5" name="message" required
                                      class="w-full bg-tech-bg border border-tech-border rounded-lg px-4 py-2.5 text-tech-text text-sm focus:outline-none focus:border-tech-accent focus:ring-1 focus:ring-tech-accent/20 transition-all resize-none placeholder:text-tech-dim/50"
                                      placeholder="Bonjour, je souhaite..."><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                            <p class="text-tech-dim font-mono text-xs mt-1 text-right" id="char-count">0 caractères</p>
                        </div>

                        <!-- Bouton -->
                        <button type="submit" name="contact_submit"
                                class="w-full bg-tech-accent text-white font-bold py-3 rounded-lg hover:bg-sky-600 active:scale-[.98] transition-all shadow-lg shadow-tech-accent/20 flex items-center justify-center gap-2 group">
                            <i class="fa-solid fa-paper-plane group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"></i>
                            Envoyer le message
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Compteur de caractères
    const textarea = document.querySelector('textarea[name="message"]');
    const counter  = document.getElementById('char-count');
    if (textarea && counter) {
        const update = () => {
            const n = textarea.value.length;
            counter.textContent = n + ' caractère' + (n > 1 ? 's' : '');
            counter.style.color = n < 10 ? 'var(--accent)' : 'var(--text-dim)';
        };
        textarea.addEventListener('input', update);
        update();
    }
</script>

<!-- Animation au Scroll -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.scroll-animate').forEach(el => observer.observe(el));
    });
</script>

<?php include 'footer.php'; ?>
