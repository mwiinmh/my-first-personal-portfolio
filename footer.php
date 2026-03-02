<!-- ═══════════════════════════════════════════════════════════
     FOOTER — 3 colonnes : présentation · liens rapides · contact
════════════════════════════════════════════════════════════ -->
<footer class="bg-tech-bg border-t border-tech-border transition-colors">

    <!-- Bloc principal -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            <!-- ── COL 1 : Présentation ───────────────────────────── -->
            <div class="space-y-4">
                <a href="index.php" class="font-mono font-bold text-lg text-tech-accent inline-block">
                    <span class="text-tech-text">&lt;</span><?php echo isset($student_name) ? $student_name : 'Portfolio'; ?><span class="text-tech-text">/&gt;</span>
                </a>
                <p class="text-tech-dim text-sm leading-relaxed">
                    Étudiant passionné en BTS SIO SISR, spécialisé en administration système, réseaux et cybersécurité. Je construis des infrastructures solides et sécurisées.
                </p>
                <div class="flex gap-3 pt-1">
                    <a href="<?php echo isset($linkedin_link) ? $linkedin_link : '#'; ?>" target="_blank"
                       class="w-9 h-9 rounded-lg bg-tech-card border border-tech-border flex items-center justify-center text-tech-dim hover:text-tech-accent hover:border-tech-accent transition-all hover:-translate-y-0.5"
                       aria-label="LinkedIn">
                        <i class="fa-brands fa-linkedin text-base"></i>
                    </a>
                    <a href="<?php echo isset($github_link) ? $github_link : '#'; ?>" target="_blank"
                       class="w-9 h-9 rounded-lg bg-tech-card border border-tech-border flex items-center justify-center text-tech-dim hover:text-tech-accent hover:border-tech-accent transition-all hover:-translate-y-0.5"
                       aria-label="GitHub">
                        <i class="fa-brands fa-github text-base"></i>
                    </a>
                    <a href="assets/CV_Mwindjou.pdf" download
                       class="w-9 h-9 rounded-lg bg-tech-card border border-tech-border flex items-center justify-center text-tech-dim hover:text-tech-accent hover:border-tech-accent transition-all hover:-translate-y-0.5"
                       aria-label="Télécharger le CV">
                        <i class="fa-solid fa-file-arrow-down text-base"></i>
                    </a>
                </div>
            </div>

            <!-- ── COL 2 : Liens Rapides ──────────────────────────── -->
            <div>
                <h4 class="text-tech-text font-bold text-sm font-mono mb-5 flex items-center gap-2">
                    <i class="fa-solid fa-link text-tech-accent text-xs"></i> Liens Rapides
                </h4>
                <ul class="space-y-2.5">
                    <?php
                    $nav_links = [
                            ['href' => 'index.php#home',       'icon' => 'fa-solid fa-house',         'label' => 'Accueil'],
                            ['href' => 'index.php#about',      'icon' => 'fa-solid fa-user',          'label' => 'À propos'],
                            ['href' => 'index.php#experience', 'icon' => 'fa-solid fa-briefcase',     'label' => 'Expérience'],
                            ['href' => 'index.php#education',  'icon' => 'fa-solid fa-graduation-cap','label' => 'Parcours'],
                            ['href' => 'projects.php',         'icon' => 'fa-solid fa-folder-open',   'label' => 'Projets & Missions'],
                            ['href' => 'index.php#contact',    'icon' => 'fa-solid fa-envelope',      'label' => 'Contact'],
                    ];
                    foreach ($nav_links as $link):
                        ?>
                        <li>
                            <a href="<?php echo $link['href']; ?>"
                               class="flex items-center gap-2.5 text-tech-dim text-sm hover:text-tech-accent transition-colors group">
                                <i class="<?php echo $link['icon']; ?> w-3.5 text-center text-tech-accent/50 group-hover:text-tech-accent transition-colors text-xs"></i>
                                <?php echo $link['label']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- ── COL 3 : Infos de contact ──────────────────────── -->
            <div>
                <h4 class="text-tech-text font-bold text-sm font-mono mb-5 flex items-center gap-2">
                    <i class="fa-solid fa-address-card text-tech-accent text-xs"></i> Contact
                </h4>
                <ul class="space-y-3">
                    <li>
                        <a href="mailto:mwindjou@email.com"
                           class="flex items-start gap-3 text-tech-dim text-sm hover:text-tech-accent transition-colors group">
                            <span class="w-7 h-7 rounded-lg bg-tech-card border border-tech-border flex items-center justify-center flex-shrink-0 mt-0.5 group-hover:border-tech-accent transition-colors">
                                <i class="fa-solid fa-envelope text-tech-accent text-xs"></i>
                            </span>
                            <span class="break-all">mwindjou@email.com</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo isset($linkedin_link) ? $linkedin_link : '#'; ?>" target="_blank"
                           class="flex items-start gap-3 text-tech-dim text-sm hover:text-tech-accent transition-colors group">
                            <span class="w-7 h-7 rounded-lg bg-tech-card border border-tech-border flex items-center justify-center flex-shrink-0 mt-0.5 group-hover:border-tech-accent transition-colors">
                                <i class="fa-brands fa-linkedin text-tech-accent text-xs"></i>
                            </span>
                            <span>linkedin.com/in/mwindjou</span>
                        </a>
                    </li>
                    <li>
                        <div class="flex items-start gap-3 text-tech-dim text-sm">
                            <span class="w-7 h-7 rounded-lg bg-tech-card border border-tech-border flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="fa-solid fa-location-dot text-tech-accent text-xs"></i>
                            </span>
                            <span>Paris, France</span>
                        </div>
                    </li>
                    <li class="pt-1">
                        <span class="inline-flex items-center gap-1.5 text-xs font-mono bg-green-500/10 border border-green-500/30 text-green-400 px-2.5 py-1 rounded-full">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></span>
                            Disponible en alternance
                        </span>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <!-- Barre de bas de page -->
    <div class="border-t border-tech-border">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex flex-col sm:flex-row items-center justify-between gap-2">
            <p class="text-tech-dim font-mono text-xs">
                © <?php echo isset($current_year) ? $current_year : '2026'; ?> — Designé &amp; Développé par
                <span class="text-tech-accent"><?php echo isset($student_name) ? $student_name : 'Étudiant'; ?></span>
            </p>
            <p class="text-tech-dim font-mono text-xs flex items-center gap-1.5">
                Fait avec <i class="fa-solid fa-heart text-red-400 text-[10px] mx-0.5"></i>
                &amp; <i class="fa-brands fa-php text-tech-accent mx-0.5"></i> PHP ·
                <i class="fa-solid fa-wind text-sky-400 mx-0.5"></i> Tailwind
            </p>
        </div>
    </div>

</footer>

</body>
</html>
