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

    <!-- Config Tailwind utilisant les variables CSS -->
    <script>
        tailwind.config = {
            darkMode: ['class', '[data-theme="dark"]'], // Support manuel du dark mode
            theme: {
                extend: {
                    colors: {
                        'tech-bg': 'var(--bg-color)',
                        'tech-card': 'var(--card-color)',
                        'tech-text': 'var(--text-main)',
                        'tech-dim': 'var(--text-dim)',
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

<!-- Navigation -->
<nav class="fixed w-full top-0 z-50 glass-nav transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0 font-mono font-bold text-xl text-tech-accent">
                <a href="index.php"><span class="text-tech-text">&lt;</span>Portfolio de Mwindjou<span class="text-tech-text">/&gt;</span></a>
            </div>

            <!-- Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <div class="flex items-baseline space-x-8 font-mono text-sm">
                    <a href="index.php#home" class="hover:text-tech-accent transition-colors">Accueil</a>
                    <a href="index.php#skills" class="hover:text-tech-accent transition-colors">Compétences</a>
                    <!-- Ajout du lien Expérience ici -->
                    <a href="index.php#experience" class="hover:text-tech-accent transition-colors">Expérience</a>
                    <a href="index.php#projects" class="hover:text-tech-accent transition-colors">Projets</a>
                    <a href="index.php#contact" class="hover:text-tech-accent transition-colors">Contact</a>
                </div>

                <!-- Bouton Dark/Light Mode -->
                <button id="theme-toggle" class="p-2 rounded-full border border-tech-border hover:border-tech-accent text-tech-accent transition-all w-10 h-10 flex items-center justify-center">
                    <i class="fa-solid fa-sun hidden" id="icon-light"></i>
                    <i class="fa-solid fa-moon" id="icon-dark"></i>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Script de gestion du thème -->
<script>
    const html = document.documentElement;
    const themeBtn = document.getElementById('theme-toggle');
    const iconSun = document.getElementById('icon-light');
    const iconMoon = document.getElementById('icon-dark');

    const savedTheme = localStorage.getItem('theme');
    const systemDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

    if (savedTheme === 'light' || (!savedTheme && !systemDark)) {
        html.setAttribute('data-theme', 'light');
        iconSun.classList.remove('hidden');
        iconMoon.classList.add('hidden');
    } else {
        html.setAttribute('data-theme', 'dark');
        iconSun.classList.add('hidden');
        iconMoon.classList.remove('hidden');
    }

    themeBtn.addEventListener('click', () => {
        const currentTheme = html.getAttribute('data-theme');
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';

        html.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);

        iconSun.classList.toggle('hidden');
        iconMoon.classList.toggle('hidden');
    });
</script>