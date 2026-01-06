<?php
// 1. On charge la configuration (Variables)
require_once 'config.php';

// 2. On inclut l'en-tête (HTML start + Menu)
include 'header.php';
?>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center pt-16 relative overflow-hidden">
        <!-- Fond quadrillé subtil -->
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#64748b 1px, transparent 1px); background-size: 32px 32px;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Texte Intro -->
            <div>
                <p class="text-tech-accent font-mono mb-4">Bonjour, je suis Mwindjou</p>
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6">
                    Admin Sys &<br>
                    <span class="text-slate-400">Réseaux</span>
                </h1>
                <p class="text-xl text-tech-dim mb-8 max-w-lg leading-relaxed">
                    Étudiant en BTS SIO option SISR. Passionné par l'infrastructure, la cybersécurité et l'automatisation.
                </p>
                <div class="flex gap-4">
                    <a href="#projects" class="bg-tech-accent text-white font-semibold px-6 py-3 rounded hover:bg-sky-600 transition-colors">
                        Voir mes projets
                    </a>
                    <a href="https://github.com/mwiinmh" target="_blank" class="px-6 py-3 border border-slate-600 rounded hover:border-slate-400 transition-colors flex items-center gap-2">
                        <i class="fa-brands fa-github"></i> GitHub
                    </a>
                </div>
            </div>

            <!-- Terminal Mockup -->
            <div class="hidden lg:block">
                <div class="bg-tech-card rounded-lg border border-slate-700 shadow-2xl overflow-hidden font-mono text-sm">
                    <div class="bg-slate-800 px-4 py-2 flex items-center gap-2 border-b border-slate-700">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        <span class="ml-2 text-xs text-slate-400">user@debian-server:~</span>
                    </div>
                    <div class="p-6 text-slate-300 space-y-2">
                        <p><span class="text-green-400">user@debian:~$</span> whoami</p>
                        <p class="text-tech-accent">Mwindjou</p>
                        <br>
                        <p><span class="text-green-400">user@debian:~$</span> cat skills.txt</p>
                        <p>> Linux (Debian, CentOS)</p>
                        <p>> Windows Server (AD, DNS, DHCP)</p>
                        <p>> Réseaux (Cisco, VLAN, OSPF)</p>
                        <br>
                        <p><span class="text-green-400">user@debian:~$</span> ./start_portfolio.sh<span class="typing-cursor"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-slate-900/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12 flex items-center gap-3">
                <span class="text-tech-accent font-mono">01.</span> Compétences Techniques
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-tech-card p-6 rounded-lg border border-slate-800 hover:border-tech-accent transition-colors group">
                    <div class="w-12 h-12 bg-slate-800 rounded flex items-center justify-center text-tech-accent text-2xl mb-4 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-server"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Administration Système</h3>
                    <ul class="space-y-2 text-tech-dim font-mono text-sm">
                        <li><i class="fa-brands fa-linux mr-2"></i>Linux / Bash Scripting</li>
                        <li><i class="fa-brands fa-windows mr-2"></i>Windows Server / PowerShell</li>
                        <li><i class="fa-solid fa-layer-group mr-2"></i>Active Directory & GPO</li>
                    </ul>
                </div>

                <!-- Card 2 -->
                <div class="bg-tech-card p-6 rounded-lg border border-slate-800 hover:border-tech-accent transition-colors group">
                    <div class="w-12 h-12 bg-slate-800 rounded flex items-center justify-center text-tech-accent text-2xl mb-4 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-network-wired"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Réseau & Infra</h3>
                    <ul class="space-y-2 text-tech-dim font-mono text-sm">
                        <li><i class="fa-solid fa-route mr-2"></i>Cisco Packet Tracer</li>
                        <li><i class="fa-solid fa-shield-halved mr-2"></i>Firewalling (PFSense)</li>
                        <li><i class="fa-solid fa-wifi mr-2"></i>VLAN / Routage / VPN</li>
                    </ul>
                </div>

                <!-- Card 3 -->
                <div class="bg-tech-card p-6 rounded-lg border border-slate-800 hover:border-tech-accent transition-colors group">
                    <div class="w-12 h-12 bg-slate-800 rounded flex items-center justify-center text-tech-accent text-2xl mb-4 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Services & Web</h3>
                    <ul class="space-y-2 text-tech-dim font-mono text-sm">
                        <li><i class="fa-brands fa-docker mr-2"></i>Docker & Conteneurs</li>
                        <li><i class="fa-brands fa-php mr-2"></i>LAMP / WAMP Stack</li>
                        <li><i class="fa-solid fa-database mr-2"></i>MySQL / GLPI</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12 flex items-center gap-3">
                <span class="text-tech-accent font-mono">02.</span> Projets & Missions
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Project 1 -->
                <div class="bg-tech-card rounded-xl overflow-hidden border border-slate-800 hover:shadow-xl hover:shadow-tech-accent/10 transition-all">
                    <div class="h-48 bg-slate-800 flex items-center justify-center border-b border-slate-700">
                        <i class="fa-solid fa-sitemap text-4xl text-slate-600"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold mb-2 text-white">Refonte Infra Réseau</h3>
                        <p class="text-tech-dim text-sm mb-4">Mise en place de VLANs et sécurisation des accès switchs.</p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="text-xs font-mono bg-slate-800 text-tech-accent px-2 py-1 rounded">Cisco</span>
                            <span class="text-xs font-mono bg-slate-800 text-tech-accent px-2 py-1 rounded">VLAN</span>
                        </div>
                        <a href="#" class="text-sm font-semibold hover:text-tech-accent flex items-center gap-2">
                            Voir détails <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-tech-card rounded-xl overflow-hidden border border-slate-800 hover:shadow-xl hover:shadow-tech-accent/10 transition-all">
                    <div class="h-48 bg-slate-800 flex items-center justify-center border-b border-slate-700">
                        <i class="fa-solid fa-ticket text-4xl text-slate-600"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold mb-2 text-white">Déploiement GLPI</h3>
                        <p class="text-tech-dim text-sm mb-4">Installation serveur GLPI sur Debian 11 pour gestion de parc.</p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="text-xs font-mono bg-slate-800 text-tech-accent px-2 py-1 rounded">Linux</span>
                            <span class="text-xs font-mono bg-slate-800 text-tech-accent px-2 py-1 rounded">GLPI</span>
                        </div>
                        <a href="#" class="text-sm font-semibold hover:text-tech-accent flex items-center gap-2">
                            Voir détails <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-tech-card rounded-xl overflow-hidden border border-slate-800 hover:shadow-xl hover:shadow-tech-accent/10 transition-all">
                    <div class="h-48 bg-slate-800 flex items-center justify-center border-b border-slate-700">
                        <i class="fa-solid fa-users-gear text-4xl text-slate-600"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold mb-2 text-white">Active Directory</h3>
                        <p class="text-tech-dim text-sm mb-4">Configuration contrôleur de domaine et GPO.</p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="text-xs font-mono bg-slate-800 text-tech-accent px-2 py-1 rounded">Windows</span>
                            <span class="text-xs font-mono bg-slate-800 text-tech-accent px-2 py-1 rounded">AD</span>
                        </div>
                        <a href="#" class="text-sm font-semibold hover:text-tech-accent flex items-center gap-2">
                            Voir détails <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-slate-900/50">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-6 flex justify-center items-center gap-3">
                <span class="text-tech-accent font-mono">03.</span> Contact
            </h2>
            <form class="space-y-4 text-left max-w-md mx-auto">
                <div>
                    <label class="block text-sm font-mono text-slate-400 mb-1">Email</label>
                    <input type="email" class="w-full bg-tech-card border border-slate-700 rounded p-3 text-white focus:outline-none focus:border-tech-accent transition-colors" placeholder="votre@email.com">
                </div>
                <div>
                    <label class="block text-sm font-mono text-slate-400 mb-1">Message</label>
                    <textarea rows="4" class="w-full bg-tech-card border border-slate-700 rounded p-3 text-white focus:outline-none focus:border-tech-accent transition-colors" placeholder="Votre message..."></textarea>
                </div>
                <button type="button" class="w-full bg-tech-accent text-white font-bold py-3 rounded hover:bg-sky-600 transition-colors">
                    Envoyer
                </button>
            </form>
        </div>
    </section>

<?php
// 3. On inclut le pied de page (Scripts & Copyright)
include 'footer.php';
?>