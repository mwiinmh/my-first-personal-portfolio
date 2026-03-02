<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($site_title) ? $site_title : 'Portfolio SISR'; ?></title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">

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
                        sans: ['Inter', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-tech-bg text-tech-text font-sans antialiased selection:bg-tech-accent selection:text-white transition-colors duration-300">

<?php
$current_page = basename($_SERVER['PHP_SELF']);
function nav_link_class(string $page, string $current): string {
    return $current === $page
            ? 'text-tech-accent font-semibold transition-colors'
            : 'text-tech-dim hover:text-tech-accent transition-colors';
}
?>

<nav class="fixed w-full top-0 z-50 glass-nav transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            <!-- Logo -->
            <div class="flex-shrink-0 font-mono font-bold text-xl text-tech-accent">
                <a href="index.php">
                    <span class="text-tech-text">&lt;</span>Portfolio de Mwindjou<span class="text-tech-text">/&gt;</span>
                </a>
            </div>

            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center space-x-8">
                <div class="flex items-baseline space-x-8 font-mono text-sm">
                    <a href="index.php#home"       class="<?php echo nav_link_class('index.php',    $current_page); ?>">Accueil</a>
                    <a href="index.php#skills"     class="<?php echo nav_link_class('index.php',    $current_page); ?>">Compétences</a>
                    <a href="index.php#experience" class="<?php echo nav_link_class('index.php',    $current_page); ?>">Expérience</a>
                    <a href="projects.php"         class="<?php echo nav_link_class('projects.php', $current_page); ?>">Projets</a>
                    <a href="index.php#contact"    class="<?php echo nav_link_class('index.php',    $current_page); ?>">Contact</a>
                </div>
                <button id="theme-toggle" class="p-2 rounded-full border border-tech-border hover:border-tech-accent text-tech-accent transition-all w-10 h-10 flex items-center justify-center">
                    <i class="fa-solid fa-sun hidden" id="icon-light"></i>
                    <i class="fa-solid fa-moon"       id="icon-dark"></i>
                </button>
            </div>

            <!-- Mobile : thème + hamburger -->
            <div class="md:hidden flex items-center gap-3">
                <button id="theme-toggle-mobile" class="p-2 rounded-full border border-tech-border hover:border-tech-accent text-tech-accent w-9 h-9 flex items-center justify-center">
                    <i class="fa-solid fa-sun hidden" id="icon-light-mobile"></i>
                    <i class="fa-solid fa-moon"       id="icon-dark-mobile"></i>
                </button>
                <button id="mobile-menu-btn" class="p-2 rounded text-tech-text hover:text-tech-accent transition-colors" aria-label="Menu">
                    <i class="fa-solid fa-bars  text-xl"        id="hamburger-icon"></i>
                    <i class="fa-solid fa-xmark text-xl hidden" id="close-icon"></i>
                </button>
            </div>

        </div>
    </div>

    <!-- Menu Mobile Déroulant -->
    <div id="mobile-menu" class="hidden md:hidden border-t border-tech-border bg-tech-bg/95 backdrop-blur-md">
        <div class="px-4 py-4 space-y-1 font-mono text-sm">
            <a href="index.php#home"       class="flex items-center gap-3 px-3 py-2 rounded hover:bg-tech-card <?php echo nav_link_class('index.php',    $current_page); ?>">
                <i class="fa-solid fa-house         w-4 text-center text-tech-accent"></i> Accueil
            </a>
            <a href="index.php#skills"     class="flex items-center gap-3 px-3 py-2 rounded hover:bg-tech-card <?php echo nav_link_class('index.php',    $current_page); ?>">
                <i class="fa-solid fa-microchip     w-4 text-center text-tech-accent"></i> Compétences
            </a>
            <a href="index.php#experience" class="flex items-center gap-3 px-3 py-2 rounded hover:bg-tech-card <?php echo nav_link_class('index.php',    $current_page); ?>">
                <i class="fa-solid fa-briefcase     w-4 text-center text-tech-accent"></i> Expérience
            </a>
            <a href="projects.php"         class="flex items-center gap-3 px-3 py-2 rounded hover:bg-tech-card <?php echo nav_link_class('projects.php', $current_page); ?>">
                <i class="fa-solid fa-folder-open   w-4 text-center text-tech-accent"></i> Projets
            </a>
            <a href="index.php#contact"    class="flex items-center gap-3 px-3 py-2 rounded hover:bg-tech-card <?php echo nav_link_class('index.php',    $current_page); ?>">
                <i class="fa-solid fa-envelope      w-4 text-center text-tech-accent"></i> Contact
            </a>
        </div>
    </div>
</nav>

<script>
    // ─── Thème ───────────────────────────────────────────────────────────────
    const html       = document.documentElement;
    const savedTheme = localStorage.getItem('theme');
    const systemDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

    function applyTheme(theme) {
        html.setAttribute('data-theme', theme);
        localStorage.setItem('theme', theme);
        const isDark = theme === 'dark';
        document.getElementById('icon-light')?.classList.toggle('hidden', isDark);
        document.getElementById('icon-dark')?.classList.toggle('hidden', !isDark);
        document.getElementById('icon-light-mobile')?.classList.toggle('hidden', isDark);
        document.getElementById('icon-dark-mobile')?.classList.toggle('hidden', !isDark);
    }

    applyTheme(savedTheme ?? (systemDark ? 'dark' : 'light'));

    document.getElementById('theme-toggle')?.addEventListener('click', () =>
        applyTheme(html.getAttribute('data-theme') === 'light' ? 'dark' : 'light'));
    document.getElementById('theme-toggle-mobile')?.addEventListener('click', () =>
        applyTheme(html.getAttribute('data-theme') === 'light' ? 'dark' : 'light'));

    // ─── Menu Hamburger ──────────────────────────────────────────────────────
    const mobileMenu    = document.getElementById('mobile-menu');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon     = document.getElementById('close-icon');

    document.getElementById('mobile-menu-btn').addEventListener('click', () => {
        const isOpen = !mobileMenu.classList.contains('hidden');
        mobileMenu.classList.toggle('hidden', isOpen);
        hamburgerIcon.classList.toggle('hidden', !isOpen);
        closeIcon.classList.toggle('hidden', isOpen);
    });

    // Fermer au clic sur un lien mobile
    mobileMenu.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
        hamburgerIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
    }));

</script>
