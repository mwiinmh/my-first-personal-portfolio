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
                Présentation détaillée des entreprises d'accueil et accès aux rapports de missions.
            </p>
        </div>
    </section>

    <!-- BLOC 1 : ALTERNANCE (REDVISE) -->
    <section id="alternance" class="py-16 border-b border-tech-border/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- En-tête Section -->
            <div class="flex items-center gap-4 mb-8">
                <div class="bg-purple-500/10 p-3 rounded-lg border border-purple-500/20 text-purple-400">
                    <i class="fa-solid fa-briefcase text-2xl"></i>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-tech-text">Alternance chez REDVISE</h2>
                    <p class="text-tech-dim font-mono text-sm">Administrateur Système & Réseau Junior</p>
                </div>
            </div>

            <!-- CARTE PRÉSENTATION ENTREPRISE -->
            <div class="bg-tech-card/50 rounded-2xl border border-tech-border p-6 md:p-8 mb-12 shadow-lg hover:shadow-purple-500/10 transition-all duration-500">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

                    <!-- Colonne Gauche : Logo & Info -->
                    <div class="lg:col-span-5 space-y-6">
                        <!-- Logo Entreprise -->
                        <div class="h-48 bg-white rounded-xl overflow-hidden relative border border-tech-border group flex items-center justify-center p-4">
                            <!-- Image locale : Assure-toi d'avoir l'image dans un dossier 'img' -->
                            <img src="img/logo_redvise.png" onerror="this.src='https://via.placeholder.com/600x400/ffffff/0f172a?text=Logo+REDVISE'" alt="Logo REDVISE" class="max-w-full max-h-full object-contain transition-transform group-hover:scale-105">
                        </div>

                        <!-- Fiche d'identité -->
                        <div class="grid grid-cols-2 gap-4 text-sm">
                            <div class="bg-tech-bg p-3 rounded border border-tech-border">
                                <span class="block text-tech-dim text-xs mb-1">Secteur</span>
                                <span class="text-tech-text font-semibold">Conseil & Services IT</span>
                            </div>
                            <div class="bg-tech-bg p-3 rounded border border-tech-border">
                                <span class="block text-tech-dim text-xs mb-1">Effectif</span>
                                <span class="text-tech-text font-semibold">~50 collaborateurs</span>
                            </div>
                        </div>
                    </div>

                    <!-- Colonne Droite : Activité & Organigramme -->
                    <div class="lg:col-span-7 flex flex-col justify-between space-y-6">
                        <div>
                            <h3 class="text-xl font-bold text-tech-text mb-3 flex items-center gap-2">
                                <i class="fa-regular fa-building text-purple-400"></i> L'Entreprise
                            </h3>
                            <p class="text-tech-dim leading-relaxed mb-4">
                                REDVISE est une entreprise spécialisée dans l'accompagnement numérique des PME. Elle propose des solutions d'infogérance, de cybersécurité et de déploiement d'infrastructures cloud.
                            </p>
                            <h4 class="font-bold text-tech-text mb-2 text-sm">Mon rôle :</h4>
                            <p class="text-tech-dim text-sm">
                                Intégré au pôle "Infra & Sécurité", je participe au maintien en condition opérationnelle (MCO) des serveurs clients et aux projets de migration.
                            </p>
                        </div>

                        <!-- Organigramme Simplifié -->
                        <div class="bg-tech-bg rounded-xl p-4 border border-tech-border">
                            <h3 class="text-sm font-bold text-tech-text mb-4 flex items-center gap-2">
                                <i class="fa-solid fa-sitemap text-purple-400"></i> Organigramme du service
                            </h3>
                            <div class="flex flex-col items-center text-xs font-mono">
                                <!-- Niveau 1 -->
                                <div class="bg-tech-card border border-purple-500/30 text-purple-300 px-4 py-2 rounded mb-2">DSI (Directeur Technique)</div>
                                <div class="h-4 w-0.5 bg-tech-border mb-2"></div>
                                <!-- Niveau 2 -->
                                <div class="flex gap-4">
                                    <div class="flex flex-col items-center">
                                        <div class="bg-tech-card border border-tech-border text-tech-dim px-3 py-1 rounded">Resp. Support</div>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="bg-tech-card border border-tech-border text-tech-text px-3 py-1 rounded font-bold border-purple-500/50">Admin Sys & Réseaux (Tuteur)</div>
                                        <div class="h-4 w-0.5 bg-tech-border my-1"></div>
                                        <div class="bg-purple-500/20 border border-purple-500 text-purple-300 px-3 py-1 rounded shadow-[0_0_10px_rgba(168,85,247,0.2)]">Moi (Alternant)</div>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="bg-tech-card border border-tech-border text-tech-dim px-3 py-1 rounded">Lead Dev</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bouton d'action -->
            <div class="text-center">
                <a href="details.php?id=redvise" class="inline-flex items-center gap-3 bg-purple-600/10 border border-purple-500 text-purple-400 font-bold py-3 px-8 rounded-full hover:bg-purple-600 hover:text-white transition-all shadow-lg hover:shadow-purple-500/30">
                    <i class="fa-solid fa-folder-open"></i>
                    Voir les missions & détails techniques
                </a>
            </div>
        </div>
    </section>

    <!-- BLOC 2 : STAGE (ITIC PARIS) -->
    <section id="stage" class="py-16 border-b border-tech-border/50 bg-tech-card/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex items-center gap-4 mb-8">
                <div class="bg-green-500/10 p-3 rounded-lg border border-green-500/20 text-green-400">
                    <i class="fa-solid fa-graduation-cap text-2xl"></i>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-tech-text">Stage chez ITIC Paris</h2>
                    <p class="text-tech-dim font-mono text-sm">Technicien Support & Réseau</p>
                </div>
            </div>

            <!-- CARTE PRÉSENTATION ENTREPRISE -->
            <div class="bg-tech-card/50 rounded-2xl border border-tech-border p-6 md:p-8 mb-12 shadow-lg hover:shadow-green-500/10 transition-all duration-500">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

                    <div class="lg:col-span-5 space-y-6">
                        <!-- Logo Entreprise -->
                        <div class="h-48 bg-white rounded-xl overflow-hidden relative border border-tech-border group flex items-center justify-center p-4">
                            <!-- Image locale -->
                            <img src="img/logo_itic.png" onerror="this.src='https://via.placeholder.com/600x400/ffffff/0f172a?text=Logo+ITIC'" alt="Logo ITIC Paris" class="max-w-full max-h-full object-contain transition-transform group-hover:scale-105">
                        </div>

                        <div class="grid grid-cols-2 gap-4 text-sm">
                            <div class="bg-tech-bg p-3 rounded border border-tech-border">
                                <span class="block text-tech-dim text-xs mb-1">Type</span>
                                <span class="text-tech-text font-semibold">Établissement d'Enseignement</span>
                            </div>
                            <div class="bg-tech-bg p-3 rounded border border-tech-border">
                                <span class="block text-tech-dim text-xs mb-1">Parc</span>
                                <span class="text-tech-text font-semibold">+200 Postes</span>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-7 flex flex-col justify-between space-y-6">
                        <div>
                            <h3 class="text-xl font-bold text-tech-text mb-3 flex items-center gap-2">
                                <i class="fa-regular fa-building text-green-400"></i> L'Organisation
                            </h3>
                            <p class="text-tech-dim leading-relaxed mb-4">
                                L'ITIC Paris est une école informatique et commerce. Le service informatique gère le parc pédagogique (salles de cours), le parc administratif et l'infrastructure réseau du campus (Wi-Fi, Serveurs de fichiers).
                            </p>
                            <h4 class="font-bold text-tech-text mb-2 text-sm">Mon rôle :</h4>
                            <p class="text-tech-dim text-sm">
                                Assurer le support de niveau 1 pour les étudiants et professeurs, et participer à la maintenance préventive du matériel pendant les inter-semestres.
                            </p>
                        </div>

                        <div class="bg-tech-bg rounded-xl p-4 border border-tech-border">
                            <h3 class="text-sm font-bold text-tech-text mb-4 flex items-center gap-2">
                                <i class="fa-solid fa-sitemap text-green-400"></i> Organigramme IT
                            </h3>
                            <div class="flex flex-col items-center text-xs font-mono">
                                <div class="bg-tech-card border border-green-500/30 text-green-300 px-4 py-2 rounded mb-2">Responsable Pédagogique</div>
                                <div class="h-4 w-0.5 bg-tech-border mb-2"></div>
                                <div class="flex flex-col items-center">
                                    <div class="bg-tech-card border border-tech-border text-tech-text px-3 py-1 rounded font-bold border-green-500/50">Responsable Parc Informatique</div>
                                    <div class="h-4 w-0.5 bg-tech-border my-1"></div>
                                    <div class="flex gap-4">
                                        <div class="bg-green-500/20 border border-green-500 text-green-300 px-3 py-1 rounded shadow-[0_0_10px_rgba(74,222,128,0.2)]">Moi (Stagiaire)</div>
                                        <div class="bg-tech-card border border-tech-border text-tech-dim px-3 py-1 rounded">Autres Stagiaires</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bouton d'action -->
            <div class="text-center">
                <a href="details.php?id=itic" class="inline-flex items-center gap-3 bg-green-600/10 border border-green-500 text-green-400 font-bold py-3 px-8 rounded-full hover:bg-green-600 hover:text-white transition-all shadow-lg hover:shadow-green-500/30">
                    <i class="fa-solid fa-folder-open"></i>
                    Voir les missions & détails techniques
                </a>
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
                    <h2 class="text-3xl font-bold text-tech-text">Formation</h2>
                    <p class="text-tech-dim font-mono text-sm">Parcours de formation durant les deux années de BTS</p>
                </div>
            </div>

            <!-- Grille Ateliers Systèmes & Réseaux -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">

                <!-- Carte Systèmes -->
                <div class="bg-tech-card/30 rounded-xl border border-tech-border p-6 hover:border-blue-500/50 transition-all group relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-4 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-brands fa-linux text-8xl"></i>
                    </div>
                    <div class="relative z-10">
                        <div class="w-12 h-12 bg-blue-500/10 rounded-lg flex items-center justify-center text-blue-400 mb-4 border border-blue-500/20">
                            <i class="fa-solid fa-server text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-tech-text mb-2">Ateliers Systèmes</h3>
                        <p class="text-tech-dim text-sm mb-6 leading-relaxed">
                            Administration Windows Server, Linux (Debian/Ubuntu), Scripting Bash/PowerShell et Services associés.
                        </p>
                        <a href="details.php?id=sio_sys" class="inline-flex items-center text-blue-400 font-bold text-sm hover:text-blue-300 transition-colors">
                            Voir les ateliers <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Carte Réseaux -->
                <div class="bg-tech-card/30 rounded-xl border border-tech-border p-6 hover:border-orange-500/50 transition-all group relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-4 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-network-wired text-8xl"></i>
                    </div>
                    <div class="relative z-10">
                        <div class="w-12 h-12 bg-orange-500/10 rounded-lg flex items-center justify-center text-orange-400 mb-4 border border-orange-500/20">
                            <i class="fa-solid fa-route text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-tech-text mb-2">Ateliers Réseaux</h3>
                        <p class="text-tech-dim text-sm mb-6 leading-relaxed">
                            Architecture Mikrotik (Switching/Routing), VLANs, Firewalling et protocoles réseaux.
                        </p>
                        <a href="details.php?id=sio_net" class="inline-flex items-center text-orange-400 font-bold text-sm hover:text-orange-300 transition-colors">
                            Voir les ateliers <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bloc Examens BTS (Nouveau) -->
            <div class="bg-gradient-to-br from-tech-card to-tech-bg rounded-2xl border border-tech-accent/30 p-8 md:p-10 shadow-lg relative overflow-hidden group">
                <!-- Déco fond -->
                <div class="absolute -right-10 -bottom-10 opacity-5 group-hover:opacity-10 transition-opacity">
                    <i class="fa-solid fa-file-signature text-9xl"></i>
                </div>

                <div class="relative z-10 flex flex-col md:flex-row items-center gap-8">
                    <div class="flex-1 text-center md:text-left">
                        <h3 class="text-2xl font-bold text-tech-text mb-3 flex items-center justify-center md:justify-start gap-3">
                            <i class="fa-solid fa-medal text-yellow-500"></i> Projets d'Examen (E4 / E6)
                        </h3>
                        <p class="text-tech-dim text-lg leading-relaxed">
                            Dossiers techniques officiels présentés au jury du BTS SIO.
                            Comprend les contextes, les réalisations et les documentations finales.
                        </p>
                    </div>
                    <div>
                        <a href="details.php?id=bts_exam" class="inline-flex items-center gap-3 bg-tech-accent text-white font-bold py-4 px-8 rounded-full hover:bg-sky-600 transition-all shadow-lg hover:shadow-tech-accent/30 hover:-translate-y-1">
                            <i class="fa-solid fa-folder-open"></i>
                            Accéder aux dossiers
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>