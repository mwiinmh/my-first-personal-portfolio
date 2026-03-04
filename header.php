<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($site_title) ? $site_title : 'Portfolio · Mwindjou'; ?></title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Syne (logo/titres) · DM Sans (corps) · JetBrains Mono (code) -->
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            darkMode: ['class', '[data-theme="dark"]'],
            theme: {
                extend: {
                    colors: {
                        'tech-bg':     'var(--bg-color)',
                        'tech-card':   'var(--card-color)',
                        'tech-text':   'var(--text-main)',
                        'tech-dim':    'var(--text-dim)',
                        'tech-accent': 'var(--accent)',
                        'tech-border': 'var(--border-color)',
                    },
                    fontFamily: {
                        sans:    ['DM Sans', 'system-ui', 'sans-serif'],
                        display: ['Syne', 'sans-serif'],
                        mono:    ['JetBrains Mono', 'monospace'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-tech-bg text-tech-text font-sans antialiased">

<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="glass-nav fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-14">
        <div class="flex items-center justify-between" style="height:62px">

            <!-- Logo -->
            <a href="index.php" class="nav-logo">Mwindjou</a>

            <!-- Desktop links -->
            <div class="hidden md:flex items-center gap-0.5">
                <?php
                $nav = [
                        ['Accueil',     'index.php',    ''],
                        ['À propos',    'index.php',    '#about'],
                        ['Projets',     'projects.php', ''],
                        ['Veille',      'veille.php',   ''],
                        ['Contact',     'index.php',    '#contact'],
                ];
                foreach ($nav as [$label, $page, $anchor]):
                    $active = ($current_page === $page);
                    $href   = $page . $anchor;
                    $cls    = $active ? 'nav-item nav-item--active' : 'nav-item nav-item--idle';
                    ?>
                    <a href="<?php echo $href; ?>" class="<?php echo $cls; ?>"><?php echo $label; ?></a>
                <?php endforeach; ?>

                <div class="nav-sep"></div>

                <button id="theme-toggle" class="nav-icon-btn" aria-label="Thème">
                    <i class="fa-solid fa-sun hidden" id="icon-light"></i>
                    <i class="fa-solid fa-moon"       id="icon-dark"></i>
                </button>
            </div>

            <!-- Mobile -->
            <div class="md:hidden flex items-center gap-2">
                <button id="theme-toggle-mobile" class="nav-icon-btn" aria-label="Thème">
                    <i class="fa-solid fa-sun hidden" id="icon-light-mobile"></i>
                    <i class="fa-solid fa-moon"       id="icon-dark-mobile"></i>
                </button>
                <button id="mobile-menu-btn" class="nav-icon-btn" aria-label="Menu">
                    <i class="fa-solid fa-bars  text-base" id="hamburger-icon"></i>
                    <i class="fa-solid fa-xmark text-base hidden" id="close-icon"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Menu mobile -->
    <div id="mobile-menu" class="hidden md:hidden mobile-panel">
        <div class="px-5 py-4 space-y-0.5">
            <?php
            $mobile_nav = [
                    ['fa-house',       'Accueil',     'index.php',    ''],
                    ['fa-user',        'À propos',    'index.php',    '#about'],
                    ['fa-folder-open', 'Projets',     'projects.php', ''],
                    ['fa-rss',         'Veille',      'veille.php',   ''],
                    ['fa-envelope',    'Contact',     'index.php',    '#contact'],
            ];
            foreach ($mobile_nav as [$icon, $label, $page, $anchor]):
                $active = ($current_page === $page);
                $href   = $page . $anchor;
                $cls    = $active ? 'mobile-item mobile-item--active' : 'mobile-item';
                ?>
                <a href="<?php echo $href; ?>" class="<?php echo $cls; ?>">
                    <i class="fa-solid <?php echo $icon; ?> w-4 text-center" style="color:var(--accent)"></i>
                    <?php echo $label; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</nav>

<script>
    /* Thème */
    const html = document.documentElement;
    const saved = localStorage.getItem('theme');
    const sysDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

    function applyTheme(t) {
        html.setAttribute('data-theme', t);
        localStorage.setItem('theme', t);
        const d = t === 'dark';
        ['icon-light','icon-light-mobile'].forEach(id => document.getElementById(id)?.classList.toggle('hidden', d));
        ['icon-dark', 'icon-dark-mobile' ].forEach(id => document.getElementById(id)?.classList.toggle('hidden', !d));
    }
    applyTheme(saved ?? (sysDark ? 'dark' : 'light'));

    document.getElementById('theme-toggle')?.addEventListener('click',
        () => applyTheme(html.getAttribute('data-theme') === 'light' ? 'dark' : 'light'));
    document.getElementById('theme-toggle-mobile')?.addEventListener('click',
        () => applyTheme(html.getAttribute('data-theme') === 'light' ? 'dark' : 'light'));

    /* Hamburger */
    const menu    = document.getElementById('mobile-menu');
    const hamIcon = document.getElementById('hamburger-icon');
    const xIcon   = document.getElementById('close-icon');

    document.getElementById('mobile-menu-btn').addEventListener('click', () => {
        const open = !menu.classList.contains('hidden');
        menu.classList.toggle('hidden', open);
        hamIcon.classList.toggle('hidden', !open);
        xIcon.classList.toggle('hidden', open);
    });
    menu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
        menu.classList.add('hidden');
        hamIcon.classList.remove('hidden');
        xIcon.classList.add('hidden');
    }));

    /* Highlight nav au scroll (sections) */
    document.addEventListener('DOMContentLoaded', () => {
        const sections = document.querySelectorAll('section[id]');
        if (!sections.length) return;
        const links = [...document.querySelectorAll('a.nav-item')];

        const io = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (!e.isIntersecting) return;
                links.forEach(l => {
                    const href = l.getAttribute('href') || '';
                    const hit  = href.includes('#' + e.target.id);
                    l.classList.toggle('nav-item--active', hit);
                    l.classList.toggle('nav-item--idle',  !hit);
                });
            });
        }, { rootMargin: '-35% 0px -60% 0px' });

        sections.forEach(s => io.observe(s));
    });
</script>