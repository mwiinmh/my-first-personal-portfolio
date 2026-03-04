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
        else $contact_error = "Erreur lors de l'envoi. Réessayez plus tard.";
    }
}

include 'header.php';

$skills_data = [
        'ticketing' => [
                'name'  => 'Ticketing',
                'icon'  => 'fa-solid fa-ticket',
                'color' => 'sky',
                'desc'  => "Utilisation quotidienne de GLPI en entreprise pour la gestion des incidents, des demandes et de l'inventaire. Maîtrise du cycle de vie d'un ticket : création, qualification, escalade, résolution.",
                'tools' => ['GLPI'],
        ],
        'virtualisation' => [
                'name'  => 'Virtualisation',
                'icon'  => 'fa-solid fa-cubes',
                'color' => 'purple',
                'desc'  => "Déploiement et administration de machines virtuelles sous VMware Workstation et Hyper-V. Gestion des snapshots, des réseaux virtuels (NAT, Bridge, Host-only) et optimisation des ressources.",
                'tools' => ['VMware', 'Hyper-V'],
        ],
        'ad' => [
                'name'  => 'Active Directory',
                'icon'  => 'fa-solid fa-users-gear',
                'color' => 'blue',
                'desc'  => "Mise en place d'un domaine Windows Server 2019 : création d'UO, gestion des comptes et groupes, déploiement de GPO de sécurité pour les postes du parc.",
                'tools' => ['Windows Server 2019', 'GPO', 'DNS'],
        ],
        'reseaux' => [
                'name'  => 'TCP/IP & Réseaux',
                'icon'  => 'fa-solid fa-network-wired',
                'color' => 'green',
                'desc'  => "Connaissance du modèle OSI et de la pile TCP/IP. Conception d'architectures réseau avec VLANs, configuration du routage inter-VLAN et mise en place de règles de filtrage.",
                'tools' => ['TCP/IP', 'VLAN', 'Firewalling'],
        ],
        'cisco' => [
                'name'  => 'Mikrotik',
                'icon'  => 'fa-solid fa-sitemap',
                'color' => 'orange',
                'desc'  => "Simulation et maquettage d'infrastructures réseau : routage statique/dynamique (RIP), VLANs. Utilisé pour préparer les ateliers de professionnalisation.",
                'tools' => ['RouterOS', 'SwitchOS'],
        ],
        'ia' => [
                'name'  => 'IA & Outils Assistants',
                'icon'  => 'fa-solid fa-brain',
                'color' => 'pink',
                'desc'  => "Utilisation des outils d'IA générative (ChatGPT, Claude, Copilot) pour optimiser les tâches d'administration : rédaction de scripts, génération de documentation et analyse de logs.",
                'tools' => ['ChatGPT', 'Claude', 'GitHub Copilot'],
        ],
        'windows' => [
                'name'  => 'Windows Server',
                'icon'  => 'fa-brands fa-windows',
                'color' => 'sky',
                'desc'  => "Administration de Windows Server 2019 & 2022 : installation des rôles (AD DS, DNS, DHCP, IIS, Print Server), gestion des mises à jour (WSUS) et monitoring via l'Observateur d'événements.",
                'tools' => ['Windows Server 2019 & 2022', 'WSUS', 'IIS', 'PowerShell'],
        ],
        'linux' => [
                'name'  => 'Linux (Ubuntu / Debian)',
                'icon'  => 'fa-brands fa-linux',
                'color' => 'yellow',
                'desc'  => "Administration Système (SAMBA AD), gestion des paquets (apt), des services (systemd), des droits (chmod/chown), configuration SSH, BIND9, isc-dhcp-server.",
                'tools' => ['Debian 12', 'Ubuntu', 'Bash', 'SSH'],
        ],
        'vscode' => [
                'name'  => 'VS Code & Scripting',
                'icon'  => 'fa-solid fa-code',
                'color' => 'blue',
                'desc'  => "Éditeur principal pour scripts Bash et PowerShell, documentation Markdown et pages web. Utilisation des extensions Git, Remote SSH et Prettier.",
                'tools' => ['VS Code', 'Bash', 'PowerShell', 'Git'],
        ],
];
?>

<!-- HERO -->
<section id="home" class="hero-wrapper">
    <canvas id="particle-canvas"></canvas>
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>

    <div class="hero-content w-full max-w-7xl mx-auto px-6 sm:px-10 lg:px-20 pt-32 pb-40">

        <h1 class="hero-title">
            Admin Sys<br>
            <span class="muted">&amp; Réseaux.</span>
        </h1>

        <p class="hero-sub">
            <?php echo $student_name; ?> Mhoumadi — étudiant BTS SIO SISR, alternant chez REDVISE.
            Passionné par l'infrastructure, la cybersécurité et l'automatisation.
        </p>

        <div class="flex flex-wrap gap-3 mt-10">
            <a href="#about" class="btn-primary">
                Découvrir mon profil <i class="fa-solid fa-arrow-right" style="font-size:.72rem"></i>
            </a>
            <a href="projects.php" class="btn-ghost">Mes projets</a>
            <a href="<?php echo $github_link ?? '#'; ?>" target="_blank" class="btn-ghost">
                <i class="fa-brands fa-github"></i> GitHub
            </a>
        </div>

        <div class="flex flex-wrap gap-10 mt-16 pt-10" style="border-top:1px solid var(--border-color)">
            <div>
                <p style="font-family:'Syne',sans-serif;font-size:1.6rem;font-weight:800;letter-spacing:-.04em;color:var(--text-main);line-height:1">2 ans</p>
                <p style="font-family:'JetBrains Mono',monospace;font-size:.6rem;letter-spacing:.1em;color:var(--text-dim);margin-top:.35rem">D'ALTERNANCE</p>
            </div>
            <div>
                <p style="font-family:'Syne',sans-serif;font-size:1.6rem;font-weight:800;letter-spacing:-.04em;color:var(--text-main);line-height:1">9+</p>
                <p style="font-family:'JetBrains Mono',monospace;font-size:.6rem;letter-spacing:.1em;color:var(--text-dim);margin-top:.35rem">MISSIONS</p>
            </div>
            <div>
                <p style="font-family:'Syne',sans-serif;font-size:1.6rem;font-weight:800;letter-spacing:-.04em;color:var(--text-main);line-height:1">2026</p>
                <p style="font-family:'JetBrains Mono',monospace;font-size:.6rem;letter-spacing:.1em;color:var(--text-dim);margin-top:.35rem">DIPLÔME BTS SIO</p>
            </div>
        </div>
    </div>

    <div class="scroll-hint">
        <span>Scroll</span>
        <div class="scroll-hint-line"></div>
    </div>
</section>

<script>
    (function(){
        var c=document.getElementById('particle-canvas'),ctx=c.getContext('2d'),W,H,pts=[];
        function resize(){ W=c.width=window.innerWidth; H=c.height=window.innerHeight; }
        function rnd(a,b){ return Math.random()*(b-a)+a; }
        function init(){ pts=[];
            var n=Math.min(75,Math.floor(W*H/16000));
            for(var i=0;i<n;i++) pts.push({x:rnd(0,W),y:rnd(0,H),vx:rnd(-.14,.14),vy:rnd(-.1,.1),r:rnd(.7,1.8),o:rnd(.1,.45)});
        }
        function tick(){ ctx.clearRect(0,0,W,H);
            for(var i=0;i<pts.length;i++){
                var p=pts[i]; p.x+=p.vx; p.y+=p.vy;
                if(p.x<0)p.x=W; if(p.x>W)p.x=0; if(p.y<0)p.y=H; if(p.y>H)p.y=0;
                ctx.beginPath(); ctx.arc(p.x,p.y,p.r,0,Math.PI*2);
                ctx.fillStyle='rgba(99,102,241,'+p.o+')'; ctx.fill();
            }
            for(var i=0;i<pts.length;i++) for(var j=i+1;j<pts.length;j++){
                var dx=pts[i].x-pts[j].x,dy=pts[i].y-pts[j].y,d=Math.sqrt(dx*dx+dy*dy);
                if(d<115){ ctx.beginPath(); ctx.moveTo(pts[i].x,pts[i].y); ctx.lineTo(pts[j].x,pts[j].y);
                    ctx.strokeStyle='rgba(99,102,241,'+(0.08*(1-d/115))+')'; ctx.lineWidth=.5; ctx.stroke(); }
            }
            requestAnimationFrame(tick);
        }
        window.addEventListener('resize',function(){ resize(); init(); });
        resize(); init(); tick();
    })();
</script>
<!-- ════════════════════════════════════════════════════════
     01. À PROPOS
════════════════════════════════════════════════════════ -->
<section id="about" class="py-28">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-20">

        <!-- En-tête section -->
        <div class="mb-16">
            <span class="section-label">01. Profil</span>
            <h2 class="section-title">À propos de moi</h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-16 items-start">

            <!-- Bio gauche -->
            <div class="lg:col-span-2 space-y-7">

                <!-- Avatar -->
                <div class="flex flex-col items-center text-center">
                    <div class="relative mb-5">
                        <div class="w-24 h-24 rounded-2xl flex items-center justify-center text-white text-3xl font-bold font-mono"
                             style="background:linear-gradient(135deg,var(--accent),rgba(139,92,246,.8));box-shadow:0 0 40px rgba(var(--accent-rgb),.25)">
                            M
                        </div>
                        <span class="absolute -bottom-1 -right-1 w-4 h-4 bg-green-400 rounded-full border-2" style="border-color:var(--bg-color)"></span>
                    </div>
                    <h3 class="text-lg font-bold" style="color:var(--text-main)"><?php echo $student_name; ?> Mhoumadi</h3>
                    <p style="font-family:'JetBrains Mono',monospace;font-size:.72rem;color:var(--accent);margin-top:.3rem">Étudiant BTS SIO SISR</p>
                    <p style="font-family:'JetBrains Mono',monospace;font-size:.65rem;color:var(--text-dim);margin-top:.15rem">Alternant @ REDVISE · Paris</p>
                </div>

                <!-- Texte bio -->
                <p style="color:var(--text-dim);line-height:1.78;font-size:.9rem">
                    Passionné par les systèmes d'information, je prépare un <span style="color:var(--text-main);font-weight:600">BTS SIO option SISR</span> à l'ITIC Paris en alternance. Cette double casquette me permet de confronter chaque jour la théorie aux réalités du terrain.
                </p>
                <p style="color:var(--text-dim);line-height:1.78;font-size:.9rem">
                    Chez <span style="color:var(--text-main);font-weight:600">REDVISE</span>, j'interviens sur le MCO de serveurs clients, la sécurisation d'infrastructures réseau (Fortinet) et la supervision via Centreon.
                </p>
                <p style="color:var(--text-dim);line-height:1.78;font-size:.9rem">
                    Mon objectif : me spécialiser en <span style="color:var(--text-main);font-weight:600">cybersécurité et architecture réseau</span>. En dehors du travail, j'explore le scripting Bash et les usages de l'IA dans l'IT.
                </p>

                <!-- CTA -->
                <div class="flex flex-col sm:flex-row gap-3 pt-1">
                    <a href="assets/CV_Mwindjou.pdf" download class="btn-primary" style="justify-content:center">
                        <i class="fa-solid fa-file-arrow-down"></i> Télécharger mon CV
                    </a>
                    <a href="#contact" class="btn-ghost" style="justify-content:center">
                        <i class="fa-solid fa-envelope"></i> Me contacter
                    </a>
                </div>

                <!-- Badges infos -->
                <div class="grid grid-cols-2 gap-2 pt-1">
                    <div class="glass rounded-xl px-3 py-2.5 flex items-center gap-2" style="font-family:'JetBrains Mono',monospace;font-size:.72rem;color:var(--text-dim)">
                        <i class="fa-solid fa-location-dot" style="color:var(--accent);width:.75rem"></i> Paris, France
                    </div>
                    <div class="glass rounded-xl px-3 py-2.5 flex items-center gap-2" style="font-family:'JetBrains Mono',monospace;font-size:.72rem;color:var(--text-dim)">
                        <i class="fa-solid fa-language" style="color:var(--accent);width:.75rem"></i> FR · EN · AR
                    </div>
                    <div class="glass rounded-xl px-3 py-2.5 flex items-center gap-2 col-span-2" style="font-family:'JetBrains Mono',monospace;font-size:.72rem;color:var(--text-dim)">
                        <span class="w-2 h-2 rounded-full bg-green-400 flex-shrink-0" style="box-shadow:0 0 6px #4ade80"></span>
                        Disponible en alternance jusqu'en 2026
                    </div>
                </div>
            </div>

            <!-- Skill Cards droite -->
            <div class="lg:col-span-3">
                <p style="font-family:'JetBrains Mono',monospace;font-size:.7rem;color:var(--text-dim);margin-bottom:1.25rem;display:flex;align-items:center;gap:.5rem">
                    <i class="fa-solid fa-microchip" style="color:var(--accent)"></i>
                    Compétences — cliquez pour en savoir plus
                </p>

                <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                    <?php
                    $card_colors = [
                            'sky'    => ['text'=>'#38bdf8','bg'=>'rgba(56,189,248,.1)', 'bd'=>'rgba(56,189,248,.22)', 'glow'=>'rgba(56,189,248,.12)'],
                            'purple' => ['text'=>'#c084fc','bg'=>'rgba(192,132,252,.1)','bd'=>'rgba(192,132,252,.22)','glow'=>'rgba(192,132,252,.12)'],
                            'blue'   => ['text'=>'#60a5fa','bg'=>'rgba(96,165,250,.1)', 'bd'=>'rgba(96,165,250,.22)', 'glow'=>'rgba(96,165,250,.12)'],
                            'green'  => ['text'=>'#4ade80','bg'=>'rgba(74,222,128,.1)', 'bd'=>'rgba(74,222,128,.22)', 'glow'=>'rgba(74,222,128,.12)'],
                            'orange' => ['text'=>'#fb923c','bg'=>'rgba(251,146,60,.1)', 'bd'=>'rgba(251,146,60,.22)', 'glow'=>'rgba(251,146,60,.12)'],
                            'pink'   => ['text'=>'#f472b6','bg'=>'rgba(244,114,182,.1)','bd'=>'rgba(244,114,182,.22)','glow'=>'rgba(244,114,182,.12)'],
                            'yellow' => ['text'=>'#facc15','bg'=>'rgba(250,204,21,.1)', 'bd'=>'rgba(250,204,21,.22)', 'glow'=>'rgba(250,204,21,.12)'],
                    ];
                    foreach ($skills_data as $key => $skill):
                        $c = $card_colors[$skill['color']];
                        ?>
                        <button
                                onclick="openSkillModal('<?php echo $key; ?>')"
                                class="skill-card-glass group"
                                data-glow="<?php echo $c['glow']; ?>"
                                data-bd="<?php echo $c['bd']; ?>"
                                style="text-align:center">

                            <div style="width:46px;height:46px;border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:1.15rem;color:<?php echo $c['text']; ?>;background:<?php echo $c['bg']; ?>;border:1px solid <?php echo $c['bd']; ?>;transition:transform .2s ease;flex-shrink:0" class="group-hover:scale-110">
                                <i class="<?php echo $skill['icon']; ?>"></i>
                            </div>

                            <span style="font-size:.82rem;font-weight:600;color:var(--text-main);line-height:1.3">
                            <?php echo $skill['name']; ?>
                        </span>

                            <span style="font-family:'JetBrains Mono',monospace;font-size:.65rem;color:<?php echo $c['text']; ?>;opacity:.7;display:flex;align-items:center;gap:.3rem" class="group-hover:opacity-100">
                            En savoir plus <i class="fa-solid fa-arrow-right" style="font-size:.55rem"></i>
                        </span>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MODAL COMPÉTENCE -->
<div id="skill-modal" class="fixed inset-0 z-[100] flex items-center justify-center p-4 hidden" role="dialog" aria-modal="true">
    <div class="absolute inset-0 bg-black/60 backdrop-blur-md" onclick="closeSkillModal()"></div>
    <div id="modal-box" class="modal-glass modal-animate relative w-full max-w-md p-8 z-10 shadow-2xl">
        <button onclick="closeSkillModal()" style="position:absolute;top:1rem;right:1rem;width:32px;height:32px;display:flex;align-items:center;justify-content:center;border-radius:8px;border:1px solid var(--border-color);color:var(--text-dim);background:transparent;cursor:pointer;transition:all .15s" onmouseenter="this.style.color='var(--text-main)'" onmouseleave="this.style.color='var(--text-dim)'">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="flex items-center gap-4 mb-5">
            <div id="modal-icon-wrap" style="width:52px;height:52px;border-radius:14px;border:1px solid;display:flex;align-items:center;justify-content:center;font-size:1.4rem;flex-shrink:0">
                <i id="modal-icon-i"></i>
            </div>
            <div>
                <h3 id="modal-title" style="font-size:1.1rem;font-weight:700;color:var(--text-main)"></h3>
                <p style="font-family:'JetBrains Mono',monospace;font-size:.65rem;color:var(--accent);margin-top:.2rem">Compétence technique</p>
            </div>
        </div>
        <p id="modal-desc" style="color:var(--text-dim);line-height:1.75;font-size:.875rem;margin-bottom:1.25rem"></p>
        <p style="font-family:'JetBrains Mono',monospace;font-size:.65rem;color:var(--text-dim);margin-bottom:.6rem">Outils &amp; technologies :</p>
        <div id="modal-tools" class="flex flex-wrap gap-2"></div>
    </div>
</div>

<?php echo '<script>const SKILLS_DATA = ' . json_encode($skills_data) . ';</script>'; ?>

<script>
    // Hover dynamique skill cards
    document.querySelectorAll('.skill-card-glass').forEach(card => {
        const glow = card.dataset.glow, bd = card.dataset.bd;
        if(!glow) return;
        card.addEventListener('mouseenter', () => {
            card.style.boxShadow = '0 20px 50px ' + glow;
        });
        card.addEventListener('mouseleave', () => {
            card.style.boxShadow = '';
        });
    });

    function openSkillModal(key) {
        const sk = SKILLS_DATA[key];
        const colors = { sky:'#38bdf8',purple:'#c084fc',blue:'#60a5fa',green:'#4ade80',orange:'#fb923c',pink:'#f472b6',yellow:'#facc15' };
        const bgs    = { sky:'rgba(56,189,248,.1)',purple:'rgba(192,132,252,.1)',blue:'rgba(96,165,250,.1)',green:'rgba(74,222,128,.1)',orange:'rgba(251,146,60,.1)',pink:'rgba(244,114,182,.1)',yellow:'rgba(250,204,21,.1)' };
        const col = colors[sk.color], bg = bgs[sk.color];

        document.getElementById('modal-title').textContent = sk.name;
        document.getElementById('modal-desc').textContent  = sk.desc;
        document.getElementById('modal-icon-i').className  = sk.icon;
        document.getElementById('modal-icon-i').style.color = col;
        const wrap = document.getElementById('modal-icon-wrap');
        wrap.style.background  = bg;
        wrap.style.borderColor = col + '60';

        document.getElementById('modal-tools').innerHTML = sk.tools.map(t =>
            `<span style="font-family:'JetBrains Mono',monospace;font-size:.68rem;padding:3px 10px;border-radius:6px;color:${col};background:${bg};border:1px solid ${col}35">${t}</span>`
        ).join('');

        const box = document.getElementById('modal-box');
        box.style.animation = 'none'; box.offsetHeight; box.style.animation = '';
        document.getElementById('skill-modal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }
    function closeSkillModal() {
        document.getElementById('skill-modal').classList.add('hidden');
        document.body.style.overflow = '';
    }
    document.addEventListener('keydown', e => { if(e.key==='Escape') closeSkillModal(); });
</script>

<!-- ════════════════════════════════════════════════════════
     02. EXPÉRIENCE PROFESSIONNELLE
════════════════════════════════════════════════════════ -->
<section id="experience" class="py-28" style="background:rgba(255,255,255,0.015)">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-16">
            <span class="section-label">02. Carrière</span>
            <h2 class="section-title">Expérience Professionnelle</h2>
        </div>

        <div class="relative">
            <!-- Ligne verticale desktop -->
            <div class="hidden md:block absolute left-1/2 -translate-x-1/2 top-0 bottom-0 w-px" style="background:var(--border-color)"></div>

            <!-- REDVISE -->
            <div class="mb-10 flex justify-between items-center w-full">
                <div class="hidden md:block order-1 w-5/12"></div>
                <div class="z-20 order-1 w-3 h-3 rounded-full flex-shrink-0" style="background:var(--accent);box-shadow:0 0 0 4px var(--bg-color),0 0 0 5px var(--border-color)"></div>
                <div class="order-1 w-full md:w-5/12 glass rounded-2xl overflow-hidden group relative" style="min-height:130px">
                    <div class="relative px-6 py-5 transition-transform duration-500 group-hover:-translate-y-1.5">
                        <div class="flex justify-between items-start mb-2">
                            <h3 style="font-size:1.05rem;font-weight:700;color:var(--text-main)">REDVISE</h3>
                            <span style="font-family:'JetBrains Mono',monospace;font-size:.65rem;padding:3px 10px;border-radius:100px;background:var(--accent-soft);color:var(--accent);border:1px solid rgba(var(--accent-rgb),.2)">Alternance</span>
                        </div>
                        <p style="font-family:'JetBrains Mono',monospace;font-size:.72rem;color:var(--text-dim);margin-bottom:.75rem">
                            <i class="fa-regular fa-calendar" style="margin-right:.4rem"></i>Septembre 2025 — En cours
                        </p>
                        <p style="font-size:.875rem;color:var(--text-dim);line-height:1.7;transition:opacity .4s" class="group-hover:opacity-20">
                            Apprentissage et mise en pratique des architectures réseaux et systèmes.
                        </p>
                    </div>
                    <div class="absolute inset-0 flex items-end justify-center pb-5 opacity-0 group-hover:opacity-100 transition-opacity duration-400" style="background:linear-gradient(to top,var(--card-color) 60%,transparent)">
                        <a href="projects.php#alternance" class="btn-primary" style="font-size:.78rem;padding:8px 20px">
                            Voir les missions <i class="fa-solid fa-arrow-right" style="font-size:.65rem"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- ITIC Paris -->
            <div class="mb-4 flex justify-between items-center w-full flex-row-reverse">
                <div class="hidden md:block order-1 w-5/12"></div>
                <div class="z-20 order-1 w-3 h-3 rounded-full flex-shrink-0" style="background:var(--text-dim);box-shadow:0 0 0 4px var(--bg-color),0 0 0 5px var(--border-color)"></div>
                <div class="order-1 w-full md:w-5/12 glass rounded-2xl overflow-hidden group relative" style="min-height:130px">
                    <div class="relative px-6 py-5 transition-transform duration-500 group-hover:-translate-y-1.5">
                        <div class="flex justify-between items-start mb-2">
                            <h3 style="font-size:1.05rem;font-weight:700;color:var(--text-main)">ITIC Paris</h3>
                            <span style="font-family:'JetBrains Mono',monospace;font-size:.65rem;padding:3px 10px;border-radius:100px;background:rgba(255,255,255,.05);color:var(--text-dim);border:1px solid var(--border-color)">Stage</span>
                        </div>
                        <p style="font-family:'JetBrains Mono',monospace;font-size:.72rem;color:var(--text-dim);margin-bottom:.75rem">
                            <i class="fa-regular fa-calendar" style="margin-right:.4rem"></i>Mai 2025 — Juillet 2025
                        </p>
                        <p style="font-size:.875rem;color:var(--text-dim);line-height:1.7;transition:opacity .4s" class="group-hover:opacity-20">
                            Maintenance du parc informatique pédagogique et assistance utilisateurs.
                        </p>
                    </div>
                    <div class="absolute inset-0 flex items-end justify-center pb-5 opacity-0 group-hover:opacity-100 transition-opacity duration-400" style="background:linear-gradient(to top,var(--card-color) 60%,transparent)">
                        <a href="projects.php#stage" class="btn-ghost" style="font-size:.78rem;padding:8px 20px">
                            Voir les missions <i class="fa-solid fa-arrow-right" style="font-size:.65rem"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════════════════════
     03. PARCOURS SCOLAIRE
════════════════════════════════════════════════════════ -->
<section id="education" class="py-28 overflow-hidden">
    <div class="max-w-4xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-16 text-center">
            <span class="section-label" style="text-align:center;display:block">03. Formation</span>
            <h2 class="section-title">Parcours Scolaire</h2>
        </div>

        <!-- Timeline -->
        <div class="relative" style="padding-left:2rem;border-left:1px solid var(--border-color)">

            <!-- BTS SIO -->
            <div class="relative mb-12 reveal">
                <span class="absolute" style="left:-2.6rem;top:0;width:20px;height:20px;border-radius:50%;background:var(--bg-color);border:2px solid var(--accent);box-shadow:0 0 10px rgba(var(--accent-rgb),.3)"></span>
                <div class="flex flex-col md:flex-row md:items-center justify-between mb-2 gap-2">
                    <h3 style="font-size:1.05rem;font-weight:700;color:var(--text-main)">BTS SIO option SISR</h3>
                    <span style="font-family:'JetBrains Mono',monospace;font-size:.68rem;padding:3px 12px;border-radius:100px;background:var(--accent-soft);color:var(--accent);border:1px solid rgba(var(--accent-rgb),.2);white-space:nowrap">2024 — 2026 · En cours</span>
                </div>
                <p style="font-size:.875rem;font-weight:600;color:var(--text-main);margin-bottom:.4rem">ITIC Paris, France</p>
                <p style="font-size:.875rem;color:var(--text-dim);line-height:1.72">Solutions d'Infrastructure, Systèmes et Réseaux. Spécialisation en administration systèmes sécurisés et architecture réseau.</p>
            </div>

            <!-- Bachelor -->
            <div class="relative mb-12 reveal" style="transition-delay:.1s">
                <span class="absolute" style="left:-2.6rem;top:0;width:20px;height:20px;border-radius:50%;background:var(--bg-color);border:2px solid var(--border-color)"></span>
                <div class="flex flex-col md:flex-row md:items-center justify-between mb-2 gap-2">
                    <h3 style="font-size:1.05rem;font-weight:700;color:var(--text-main)">Bachelor Génie Électrique &amp; Électronique</h3>
                    <span style="font-family:'JetBrains Mono',monospace;font-size:.68rem;padding:3px 12px;border-radius:100px;background:var(--card-color);color:var(--text-dim);border:1px solid var(--border-color);white-space:nowrap">2022</span>
                </div>
                <p style="font-size:.875rem;font-weight:600;color:var(--text-main);margin-bottom:.4rem">Mahsa University, Malaisie</p>
                <p style="font-size:.875rem;color:var(--text-dim);line-height:1.72">Formation internationale technique axée sur l'électronique embarquée et les systèmes électriques.</p>
            </div>

            <!-- Bac -->
            <div class="relative reveal" style="transition-delay:.2s">
                <span class="absolute" style="left:-2.6rem;top:0;width:20px;height:20px;border-radius:50%;background:var(--bg-color);border:2px solid var(--border-color)"></span>
                <div class="flex flex-col md:flex-row md:items-center justify-between mb-2 gap-2">
                    <h3 style="font-size:1.05rem;font-weight:700;color:var(--text-main)">Bac Scientifique (Série D)</h3>
                    <span style="font-family:'JetBrains Mono',monospace;font-size:.68rem;padding:3px 12px;border-radius:100px;background:var(--card-color);color:var(--text-dim);border:1px solid var(--border-color);white-space:nowrap">2019</span>
                </div>
                <p style="font-size:.875rem;font-weight:600;color:var(--text-main);margin-bottom:.4rem">Groupe Scolaire L'Olivier, Comores</p>
                <p style="font-size:.875rem;color:var(--text-dim);line-height:1.72">Obtention du baccalauréat scientifique.</p>
            </div>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════════════════════
     04. TEASER PROJETS
════════════════════════════════════════════════════════ -->
<section id="projects-teaser" class="py-28" style="background:rgba(255,255,255,0.015)">
    <div class="max-w-3xl mx-auto px-6 text-center">

        <span class="section-label" style="display:block;text-align:center">04. Portfolio</span>
        <h2 class="section-title" style="margin-bottom:1.25rem">Projets &amp; Missions</h2>

        <p style="font-size:1rem;color:var(--text-dim);line-height:1.75;margin-bottom:2.5rem;max-width:480px;margin-left:auto;margin-right:auto">
            Toutes mes documentations techniques, projets d'école et missions d'entreprise sont regroupés sur une page dédiée.
        </p>

        <a href="projects.php" class="btn-primary" style="display:inline-flex;font-size:.95rem;padding:14px 32px">
            <i class="fa-solid fa-folder-open"></i>
            Accéder au Portfolio
        </a>
    </div>
</section>

<!-- ════════════════════════════════════════════════════════
     05. CONTACT
════════════════════════════════════════════════════════ -->
<section id="contact" class="py-28">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-16">
            <span class="section-label">05. Contact</span>
            <h2 class="section-title">Me Contacter</h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 items-start">

            <!-- Infos gauche -->
            <div class="lg:col-span-2 space-y-5">

                <p style="font-size:.9rem;color:var(--text-dim);line-height:1.78">
                    Vous avez un projet, une question ou souhaitez échanger ? Contactez-moi via le formulaire ou directement par l'un des canaux ci-dessous.
                </p>

                <!-- Cartes contact -->
                <?php
                $contacts = [
                        ['href'=>'mailto:mwindjou@email.com', 'icon'=>'fa-solid fa-envelope',    'col'=>'var(--accent)',  'label'=>'Email',        'val'=>'mwindjou@email.com',         'target'=>''],
                        ['href'=>$linkedin_link ?? '#',        'icon'=>'fa-brands fa-linkedin',   'col'=>'#60a5fa',        'label'=>'LinkedIn',     'val'=>'linkedin.com/in/mwindjou',   'target'=>'_blank'],
                        ['href'=>$github_link ?? '#',          'icon'=>'fa-brands fa-github',     'col'=>'#c084fc',        'label'=>'GitHub',       'val'=>'github.com/mwiinmh',         'target'=>'_blank'],
                ];
                foreach($contacts as $ct): ?>
                    <a href="<?php echo $ct['href']; ?>" <?php if($ct['target']) echo 'target="'.$ct['target'].'"'; ?>
                       class="glass rounded-xl flex items-center gap-4 p-4 group"
                       style="display:flex;text-decoration:none;transition:transform .2s,border-color .2s"
                       onmouseenter="this.style.transform='translateY(-2px)';this.style.borderColor='<?php echo $ct['col']; ?>40'"
                       onmouseleave="this.style.transform='';this.style.borderColor=''">
                        <div style="width:42px;height:42px;border-radius:10px;background:<?php echo $ct['col']; ?>15;border:1px solid <?php echo $ct['col']; ?>30;display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:transform .2s" class="group-hover:scale-110">
                            <i class="<?php echo $ct['icon']; ?>" style="color:<?php echo $ct['col']; ?>"></i>
                        </div>
                        <div>
                            <p style="font-family:'JetBrains Mono',monospace;font-size:.65rem;color:var(--text-dim);margin-bottom:.15rem"><?php echo $ct['label']; ?></p>
                            <p style="font-size:.875rem;font-weight:600;color:var(--text-main)"><?php echo $ct['val']; ?></p>
                        </div>
                        <i class="fa-solid fa-arrow-right ml-auto" style="font-size:.75rem;color:<?php echo $ct['col']; ?>;opacity:0;transition:opacity .2s" class="group-hover:opacity-100"></i>
                    </a>
                <?php endforeach; ?>

                <!-- Localisation (non cliquable) -->
                <div class="glass rounded-xl flex items-center gap-4 p-4">
                    <div style="width:42px;height:42px;border-radius:10px;background:rgba(74,222,128,.1);border:1px solid rgba(74,222,128,.25);display:flex;align-items:center;justify-content:center;flex-shrink:0">
                        <i class="fa-solid fa-location-dot" style="color:#4ade80"></i>
                    </div>
                    <div>
                        <p style="font-family:'JetBrains Mono',monospace;font-size:.65rem;color:var(--text-dim);margin-bottom:.15rem">Localisation</p>
                        <p style="font-size:.875rem;font-weight:600;color:var(--text-main)">Paris, France</p>
                    </div>
                </div>

                <!-- Disponibilité -->
                <div class="glass rounded-xl p-4 flex items-center gap-3">
                    <div class="relative flex-shrink-0">
                        <div style="width:10px;height:10px;border-radius:50%;background:#4ade80"></div>
                        <div style="position:absolute;inset:0;width:10px;height:10px;border-radius:50%;background:#4ade80;animation:ping 1s cubic-bezier(0,0,.2,1) infinite;opacity:.4"></div>
                    </div>
                    <div>
                        <p style="font-size:.875rem;font-weight:600;color:var(--text-main)">Disponible en alternance</p>
                        <p style="font-family:'JetBrains Mono',monospace;font-size:.65rem;color:var(--text-dim)">Jusqu'en juin 2026 · Île-de-France</p>
                    </div>
                </div>
            </div>

            <!-- Formulaire droite -->
            <div class="lg:col-span-3">
                <div class="glass rounded-2xl p-8">

                    <div class="flex items-center gap-3 mb-7">
                        <div style="width:40px;height:40px;border-radius:10px;background:var(--accent-soft);border:1px solid rgba(var(--accent-rgb),.2);display:flex;align-items:center;justify-content:center">
                            <i class="fa-solid fa-paper-plane" style="color:var(--accent)"></i>
                        </div>
                        <div>
                            <h3 style="font-weight:700;color:var(--text-main)">Envoyer un message</h3>
                            <p style="font-family:'JetBrains Mono',monospace;font-size:.65rem;color:var(--text-dim)">Je réponds sous 24–48h</p>
                        </div>
                    </div>

                    <?php if ($contact_success): ?>
                        <div style="margin-bottom:1.5rem;padding:1rem;background:rgba(74,222,128,.08);border:1px solid rgba(74,222,128,.25);border-radius:12px;color:#4ade80;font-family:'JetBrains Mono',monospace;font-size:.8rem;display:flex;align-items:center;gap:.75rem">
                            <i class="fa-solid fa-circle-check fa-lg flex-shrink-0"></i>
                            <div><p style="font-weight:700">Message envoyé !</p><p style="opacity:.8;font-size:.72rem;margin-top:.2rem">Je vous répondrai dans les meilleurs délais.</p></div>
                        </div>
                    <?php elseif ($contact_error): ?>
                        <div style="margin-bottom:1.5rem;padding:1rem;background:rgba(248,113,113,.08);border:1px solid rgba(248,113,113,.25);border-radius:12px;color:#f87171;font-family:'JetBrains Mono',monospace;font-size:.8rem;display:flex;align-items:center;gap:.75rem">
                            <i class="fa-solid fa-triangle-exclamation fa-lg flex-shrink-0"></i>
                            <?php echo htmlspecialchars($contact_error); ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="#contact" style="display:flex;flex-direction:column;gap:1.1rem">

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label style="display:block;font-family:'JetBrains Mono',monospace;font-size:.65rem;color:var(--text-dim);margin-bottom:.4rem">
                                    <i class="fa-solid fa-user" style="color:var(--accent);margin-right:.3rem"></i> Votre nom
                                </label>
                                <input type="text" name="name" class="input-glass" placeholder="Jean Dupont"
                                       value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
                            </div>
                            <div>
                                <label style="display:block;font-family:'JetBrains Mono',monospace;font-size:.65rem;color:var(--text-dim);margin-bottom:.4rem">
                                    <i class="fa-solid fa-envelope" style="color:var(--accent);margin-right:.3rem"></i> Email <span style="color:#f87171">*</span>
                                </label>
                                <input type="email" name="email" required class="input-glass" placeholder="votre@email.com"
                                       value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                            </div>
                        </div>

                        <div>
                            <label style="display:block;font-family:'JetBrains Mono',monospace;font-size:.65rem;color:var(--text-dim);margin-bottom:.4rem">
                                <i class="fa-solid fa-tag" style="color:var(--accent);margin-right:.3rem"></i> Sujet
                            </label>
                            <input type="text" name="subject" class="input-glass" placeholder="Opportunité d'alternance, question technique..."
                                   value="<?php echo htmlspecialchars($_POST['subject'] ?? ''); ?>">
                        </div>

                        <div>
                            <label style="display:block;font-family:'JetBrains Mono',monospace;font-size:.65rem;color:var(--text-dim);margin-bottom:.4rem">
                                <i class="fa-solid fa-message" style="color:var(--accent);margin-right:.3rem"></i> Message <span style="color:#f87171">*</span>
                            </label>
                            <textarea rows="5" name="message" required class="input-glass"
                                      placeholder="Bonjour, je souhaite..."><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                            <p id="char-count" style="font-family:'JetBrains Mono',monospace;font-size:.65rem;color:var(--text-dim);text-align:right;margin-top:.3rem">0 caractère</p>
                        </div>

                        <button type="submit" name="contact_submit" class="btn-primary" style="width:100%;justify-content:center;padding:13px">
                            <i class="fa-solid fa-paper-plane"></i>
                            Envoyer le message
                        </button>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    // Compteur caractères
    const ta = document.querySelector('textarea[name="message"]');
    const cc = document.getElementById('char-count');
    if(ta && cc){
        const upd = () => {
            const n = ta.value.length;
            cc.textContent = n + ' caractère' + (n > 1 ? 's' : '');
            cc.style.color = n < 10 ? 'var(--accent)' : 'var(--text-dim)';
        };
        ta.addEventListener('input', upd); upd();
    }

    // Reveal au scroll
    document.addEventListener('DOMContentLoaded', () => {
        const io = new IntersectionObserver((entries, obs) => {
            entries.forEach(e => {
                if(e.isIntersecting){ e.target.classList.add('visible'); obs.unobserve(e.target); }
            });
        }, { threshold: 0.12 });
        document.querySelectorAll('.reveal').forEach(el => io.observe(el));
    });
</script>

<?php include 'footer.php'; ?>
