<?php
require_once 'config.php';
include 'header.php';
?>

<!-- Hero Section Projets -->
<section class="pt-32 pb-12 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(var(--text-dim) 1px, transparent 1px); background-size: 24px 24px;"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-tech-text mb-6">
            Projets & <span class="text-tech-accent">Missions</span>
        </h1>
        <p class="text-xl text-tech-dim max-w-2xl mx-auto">
            Retrouvez ici l'ensemble des missions réalisées en entreprise et les projets développés durant ma formation BTS SIO.
        </p>
    </div>
</section>

<!-- BLOC 1 : ALTERNANCE (REDVISE) -->
<section id="alternance" class="py-16 border-b border-tech-border/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-4 mb-10">
            <div class="bg-purple-500/10 p-3 rounded-lg border border-purple-500/20 text-purple-400">
                <i class="fa-solid fa-briefcase text-2xl"></i>
            </div>
            <div>
                <h2 class="text-3xl font-bold text-tech-text">REDVISE  (Alternance)</h2>
                <p class="text-tech-dim font-mono text-sm">Administrateur Système & Réseau Junior</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Mission 1 -->
            <div class="bg-tech-card rounded-xl border border-tech-border overflow-hidden hover:shadow-2xl hover:shadow-purple-500/10 transition-all duration-300 group">
                <div class="h-48 bg-slate-800 relative overflow-hidden flex items-center justify-center">
                    <i class="fa-solid fa-shield-halved text-5xl text-purple-400/50 group-hover:scale-110 transition-transform duration-500"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-tech-text mb-2 group-hover:text-purple-400 transition-colors">Sécurisation Firewall Fortinet</h3>
                    <p class="text-tech-dim text-sm mb-4">
                        Mise en place de règles de filtrage strictes et configuration d'un VPN SSL pour les télétravailleurs.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs font-mono text-purple-300 bg-purple-500/10 px-2 py-1 rounded">Fortinet</span>
                        <span class="text-xs font-mono text-purple-300 bg-purple-500/10 px-2 py-1 rounded">VPN SSL</span>
                    </div>
                    <a href="#" class="text-sm font-bold text-tech-text hover:text-purple-400 flex items-center gap-2">
                        Voir la fiche <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Mission 2 -->
            <div class="bg-tech-card rounded-xl border border-tech-border overflow-hidden hover:shadow-2xl hover:shadow-purple-500/10 transition-all duration-300 group">
                <div class="h-48 bg-slate-800 relative overflow-hidden flex items-center justify-center">
                    <i class="fa-brands fa-windows text-5xl text-purple-400/50 group-hover:scale-110 transition-transform duration-500"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-tech-text mb-2 group-hover:text-purple-400 transition-colors">Migration AD Windows 2019</h3>
                    <p class="text-tech-dim text-sm mb-4">
                        Migration d'un contrôleur de domaine 2012 R2 vers 2019. Transfert des rôles FSMO sans interruption.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs font-mono text-purple-300 bg-purple-500/10 px-2 py-1 rounded">Windows Server</span>
                        <span class="text-xs font-mono text-purple-300 bg-purple-500/10 px-2 py-1 rounded">Active Directory</span>
                    </div>
                    <a href="#" class="text-sm font-bold text-tech-text hover:text-purple-400 flex items-center gap-2">
                        Voir la fiche <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BLOC 2 : STAGE (ITIC PARIS) -->
<section id="stage" class="py-16 border-b border-tech-border/50 bg-tech-card/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-4 mb-10">
            <div class="bg-green-500/10 p-3 rounded-lg border border-green-500/20 text-green-400">
                <i class="fa-solid fa-graduation-cap text-2xl"></i>
            </div>
            <div>
                <h2 class="text-3xl font-bold text-tech-text">Stage chez ITIC Paris</h2>
                <p class="text-tech-dim font-mono text-sm">Technicien Support & Réseau</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Mission 1 -->
            <div class="bg-tech-card rounded-xl border border-tech-border overflow-hidden hover:shadow-2xl hover:shadow-green-500/10 transition-all duration-300 group">
                <div class="h-48 bg-slate-800 relative overflow-hidden flex items-center justify-center">
                    <i class="fa-solid fa-headset text-5xl text-green-400/50 group-hover:scale-110 transition-transform duration-500"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-tech-text mb-2 group-hover:text-green-400 transition-colors">Support Utilisateur N1</h3>
                    <p class="text-tech-dim text-sm mb-4">
                        Assistance aux étudiants et professeurs. Résolution des problèmes de connexion et d'impression.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs font-mono text-green-300 bg-green-500/10 px-2 py-1 rounded">Ticketing</span>
                        <span class="text-xs font-mono text-green-300 bg-green-500/10 px-2 py-1 rounded">Hardware</span>
                    </div>
                    <a href="#" class="text-sm font-bold text-tech-text hover:text-green-400 flex items-center gap-2">
                        Voir la fiche <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Mission 2 -->
            <div class="bg-tech-card rounded-xl border border-tech-border overflow-hidden hover:shadow-2xl hover:shadow-green-500/10 transition-all duration-300 group">
                <div class="h-48 bg-slate-800 relative overflow-hidden flex items-center justify-center">
                    <i class="fa-solid fa-print text-5xl text-green-400/50 group-hover:scale-110 transition-transform duration-500"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-tech-text mb-2 group-hover:text-green-400 transition-colors">Gestion Parc Imprimantes</h3>
                    <p class="text-tech-dim text-sm mb-4">
                        Configuration du serveur d'impression et déploiement des pilotes via GPO sur le parc pédagogique.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs font-mono text-green-300 bg-green-500/10 px-2 py-1 rounded">Print Server</span>
                        <span class="text-xs font-mono text-green-300 bg-green-500/10 px-2 py-1 rounded">GPO</span>
                    </div>
                    <a href="#" class="text-sm font-bold text-tech-text hover:text-green-400 flex items-center gap-2">
                        Voir la fiche <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BLOC 3 : FORMATION (BTS SIO) -->
<section id="formation" class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-4 mb-10">
            <div class="bg-tech-accent/10 p-3 rounded-lg border border-tech-accent/20 text-tech-accent">
                <i class="fa-solid fa-school text-2xl"></i>
            </div>
            <div>
                <h2 class="text-3xl font-bold text-tech-text">Projets réalisés lors de ma formation (BTS SIO)</h2>
                <p class="text-tech-dim font-mono text-sm">Ateliers de Professionnalisation & PPE</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Projet 1 -->
            <div class="bg-tech-card rounded-xl border border-tech-border overflow-hidden hover:shadow-2xl hover:shadow-tech-accent/10 transition-all duration-300 group">
                <div class="h-48 bg-slate-800 relative overflow-hidden flex items-center justify-center">
                    <i class="fa-solid fa-network-wired text-5xl text-tech-dim group-hover:text-tech-accent transition-colors duration-500"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-tech-text mb-2 group-hover:text-tech-accent transition-colors">Segmentation VLAN</h3>
                    <p class="text-tech-dim text-sm mb-4">
                        Architecture réseau sécurisée avec VLANs (Admin, Guest, VoIP) et routage inter-VLAN sur matériel Cisco.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs font-mono text-tech-accent bg-tech-accent/10 px-2 py-1 rounded">Cisco</span>
                        <span class="text-xs font-mono text-tech-accent bg-tech-accent/10 px-2 py-1 rounded">Switching</span>
                    </div>
                    <a href="#" class="text-sm font-bold text-tech-text hover:text-tech-accent flex items-center gap-2">
                        Voir le projet <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Projet 2 -->
            <div class="bg-tech-card rounded-xl border border-tech-border overflow-hidden hover:shadow-2xl hover:shadow-tech-accent/10 transition-all duration-300 group">
                <div class="h-48 bg-slate-800 relative overflow-hidden flex items-center justify-center">
                    <i class="fa-solid fa-ticket text-5xl text-tech-dim group-hover:text-tech-accent transition-colors duration-500"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-tech-text mb-2 group-hover:text-tech-accent transition-colors">Solution GLPI</h3>
                    <p class="text-tech-dim text-sm mb-4">
                        Déploiement complet d'une solution de ticketing et d'inventaire sur serveur Debian.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs font-mono text-tech-accent bg-tech-accent/10 px-2 py-1 rounded">Linux</span>
                        <span class="text-xs font-mono text-tech-accent bg-tech-accent/10 px-2 py-1 rounded">ITIL</span>
                    </div>
                    <a href="#" class="text-sm font-bold text-tech-text hover:text-tech-accent flex items-center gap-2">
                        Voir le projet <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <!-- Projet 3 -->
            <div class="bg-tech-card rounded-xl border border-tech-border overflow-hidden hover:shadow-2xl hover:shadow-tech-accent/10 transition-all duration-300 group">
                <div class="h-48 bg-slate-800 relative overflow-hidden flex items-center justify-center">
                    <i class="fa-brands fa-docker text-5xl text-tech-dim group-hover:text-tech-accent transition-colors duration-500"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-tech-text mb-2 group-hover:text-tech-accent transition-colors">Conteneurisation Web</h3>
                    <p class="text-tech-dim text-sm mb-4">
                        Mise en place d'une stack web (Apache/MySQL) via Docker pour un site vitrine associatif.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs font-mono text-tech-accent bg-tech-accent/10 px-2 py-1 rounded">Docker</span>
                        <span class="text-xs font-mono text-tech-accent bg-tech-accent/10 px-2 py-1 rounded">Web</span>
                    </div>
                    <a href="#" class="text-sm font-bold text-tech-text hover:text-tech-accent flex items-center gap-2">
                        Voir le projet <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
