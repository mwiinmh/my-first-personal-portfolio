<?php
require_once 'config.php';
include 'header.php';
?>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center pt-16 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(var(--text-dim) 1px, transparent 1px); background-size: 32px 32px;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <div>
                <p class="text-tech-accent font-mono mb-4 min-h-[24px]">
                    <span id="hero-typing"></span><span class="typing-cursor"></span>
                </p>

                <h1 class="text-5xl md:text-7xl font-bold text-tech-text mb-6">
                    Admin Sys &<br>
                    <span class="text-tech-dim">Réseaux</span>
                </h1>
                <p class="text-xl text-tech-dim mb-8 max-w-lg leading-relaxed">
                    Étudiant en BTS SIO option SISR. Passionné par l'infrastructure, la cybersécurité et l'automatisation.
                </p>
                <div class="flex gap-4">
                    <a href="projects.php" class="bg-tech-accent text-white font-semibold px-6 py-3 rounded hover:bg-sky-600 transition-colors shadow-lg shadow-tech-accent/20">
                        Voir mes projets
                    </a>
                    <a href="<?php echo $github_link; ?>" target="_blank" class="px-6 py-3 border border-tech-border text-tech-text rounded hover:border-tech-accent transition-colors flex items-center gap-2">
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
                        <p class="text-tech-accent"><?php echo $student_name; ?></p>
                        <br>
                        <p><span class="text-green-400">user@debian:~$</span> cat skills.txt</p>
                        <p>> Linux (Debian, Ubuntu)</p>
                        <p>> Windows Server (AD, DNS, DHCP, GPO)</p>
                        <p>> Réseaux (Mikrotik, VLAN, RIP)</p>
                        <br>
                        <p><span class="text-green-400">user@debian:~$</span> ./start_portfolio.sh<span class="typing-cursor"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Script Animation Titre -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const textToType = "Bonjour, je suis <?php echo $student_name; ?>";
            const typingElement = document.getElementById('hero-typing');
            let typeIndex = 0;

            function typeWriter() {
                if (typeIndex < textToType.length) {
                    typingElement.textContent += textToType.charAt(typeIndex);
                    typeIndex++;
                    setTimeout(typeWriter, 100);
                }
            }
            setTimeout(typeWriter, 500);
        });
    </script>

    <!-- Skills Section -->
    <section id="skills" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12 flex items-center gap-3 text-tech-text">
                <span class="text-tech-accent font-mono">01.</span> Compétences Techniques
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-tech-card p-6 rounded-lg border border-tech-border hover:border-tech-accent transition-all group shadow-sm">
                    <div class="w-12 h-12 bg-tech-bg rounded flex items-center justify-center text-tech-accent text-2xl mb-4 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-server"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-tech-text">Admin Sys</h3>
                    <ul class="space-y-2 text-tech-dim font-mono text-sm">
                        <li><i class="fa-brands fa-linux mr-2"></i>Linux / Bash</li>
                        <li><i class="fa-brands fa-windows mr-2"></i>Windows Server</li>
                        <li><i class="fa-solid fa-layer-group mr-2"></i>AD & GPO</li>
                    </ul>
                </div>

                <!-- Card 2 -->
                <div class="bg-tech-card p-6 rounded-lg border border-tech-border hover:border-tech-accent transition-all group shadow-sm">
                    <div class="w-12 h-12 bg-tech-bg rounded flex items-center justify-center text-tech-accent text-2xl mb-4 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-network-wired"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-tech-text">Réseau</h3>
                    <ul class="space-y-2 text-tech-dim font-mono text-sm">
                        <li><i class="fa-solid fa-route mr-2"></i>Cisco / VLAN</li>
                        <li><i class="fa-solid fa-shield-halved mr-2"></i>Firewalling</li>
                        <li><i class="fa-solid fa-wifi mr-2"></i>VPN / Routage</li>
                    </ul>
                </div>

                <!-- Card 3 -->
                <div class="bg-tech-card p-6 rounded-lg border border-tech-border hover:border-tech-accent transition-all group shadow-sm">
                    <div class="w-12 h-12 bg-tech-bg rounded flex items-center justify-center text-tech-accent text-2xl mb-4 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-tech-text">Web & Outils</h3>
                    <ul class="space-y-2 text-tech-dim font-mono text-sm">
                        <li><i class="fa-brands fa-docker mr-2"></i>Docker</li>
                        <li><i class="fa-brands fa-php mr-2"></i>LAMP Stack</li>
                        <li><i class="fa-solid fa-database mr-2"></i>MySQL / GLPI</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Expérience Pro (Arbre avec Slide) -->
    <section id="experience" class="py-20 bg-tech-card/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12 flex items-center gap-3 text-tech-text">
                <span class="text-tech-accent font-mono">02.</span> Expériences Professionnelles
            </h2>

            <div class="relative">
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-tech-border"></div>

                <!-- Branche 1 : REDVISE -->
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
                                <p class="text-sm text-tech-dim font-mono mb-3"><i class="fa-regular fa-calendar mr-2"></i>Septembre 2025 - En cours</p>
                                <p class="text-tech-dim text-sm leading-relaxed mb-4 group-hover:opacity-20 transition-opacity duration-300">
                                    Apprentissage et mise en pratique des architectures réseaux et systèmes.
                                </p>
                            </div>
                            <div class="absolute inset-0 flex flex-col justify-end items-center pb-6 bg-gradient-to-t from-tech-card via-tech-card/90 to-transparent translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                                <a href="projects.php#alternance" class="bg-tech-accent text-white px-5 py-2 rounded-full font-bold text-sm hover:bg-sky-600 transition-colors shadow-lg transform translate-y-4 group-hover:translate-y-0 duration-500 delay-100">
                                    Voir les missions <i class="fa-solid fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Branche 2 : ITIC Paris -->
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
                                <p class="text-sm text-tech-dim font-mono mb-3"><i class="fa-regular fa-calendar mr-2"></i>Mai 2025 - Juillet 2025</p>
                                <p class="text-tech-dim text-sm leading-relaxed mb-4 group-hover:opacity-20 transition-opacity duration-300">
                                    Maintenance du parc informatique pédagogique et assistance utilisateurs.
                                </p>
                            </div>
                            <div class="absolute inset-0 flex flex-col justify-end items-center pb-6 bg-gradient-to-t from-tech-card via-tech-card/90 to-transparent translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                                <a href="projects.php#stage" class="bg-tech-dim text-white px-5 py-2 rounded-full font-bold text-sm hover:bg-slate-600 transition-colors shadow-lg transform translate-y-4 group-hover:translate-y-0 duration-500 delay-100">
                                    Voir les missions <i class="fa-solid fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- NOUVELLE SECTION : TEASER PROJETS -->
    <section id="projects-teaser" class="py-24 bg-tech-bg">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6 flex justify-center items-center gap-3 text-tech-text">
                <span class="text-tech-accent font-mono">03.</span> Projets & Missions
            </h2>
            <p class="text-tech-dim text-lg mb-10">
                J'ai regroupé l'ensemble de mes documentations techniques, projets d'école et missions d'entreprise sur une page dédiée.
                Accédez à tous les détails de mes réalisations.
            </p>

            <a href="projects.php" class="inline-flex items-center gap-3 bg-tech-accent text-white font-bold py-4 px-8 rounded-full hover:bg-sky-600 transition-all shadow-lg hover:shadow-tech-accent/30 hover:-translate-y-1">
                <i class="fa-solid fa-folder-open"></i>
                Accéder au Portfolio des Projets
            </a>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-tech-card/30">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-6 flex justify-center items-center gap-3 text-tech-text">
                <span class="text-tech-accent font-mono">04.</span> Contact
            </h2>

            <form class="space-y-4 text-left max-w-md mx-auto">
                <div>
                    <label class="block text-sm font-mono text-tech-dim mb-1">Email</label>
                    <input type="email" class="w-full bg-tech-card border border-tech-border rounded p-3 text-tech-text focus:outline-none focus:border-tech-accent transition-colors" placeholder="votre@email.com">
                </div>
                <div>
                    <label class="block text-sm font-mono text-tech-dim mb-1">Message</label>
                    <textarea rows="4" class="w-full bg-tech-card border border-tech-border rounded p-3 text-tech-text focus:outline-none focus:border-tech-accent transition-colors" placeholder="Votre message..."></textarea>
                </div>
                <button type="button" class="w-full bg-tech-accent text-white font-bold py-3 rounded hover:bg-sky-600 transition-colors shadow-lg shadow-tech-accent/20">
                    Envoyer
                </button>
            </form>
        </div>
    </section>

<?php include 'footer.php'; ?>