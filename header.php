<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Titre dynamique depuis config.php -->
    <title><?php echo isset($site_title) ? $site_title : 'Portfolio SISR'; ?></title>

    <!-- 1. Tailwind CSS (Framework principal) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- 2. Notre CSS personnalisé (Liaison vers style.css) -->
    <link rel="stylesheet" href="style.css">

    <!-- 3. FontAwesome (Icônes) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- 4. Polices Google (Inter & JetBrains Mono) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">

    <!-- Configuration Tailwind spécifique -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'tech-bg': '#0f172a',    // Bleu nuit fond
                        'tech-card': '#1e293b',  // Gris bleu cartes
                        'tech-accent': '#0ea5e9', // Cyan (Sky-500)
                        'tech-dim': '#94a3b8',   // Texte gris
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
<body class="bg-tech-bg text-slate-200 font-sans antialiased selection:bg-tech-accent selection:text-white">

<!-- Navigation -->
<nav class="fixed w-full top-0 z-50 glass-nav">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0 font-mono font-bold text-xl text-tech-accent">
                <a href="index.php"><span class="text-white">&lt;</span>Portfolio de Mwindjou<span class="text-white">/&gt;</span></a>
            </div>

            <!-- Menu Desktop -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8 font-mono text-sm">
                    <a href="index.php#home" class="hover:text-tech-accent transition-colors px-3 py-2">Accueil</a>
                    <a href="index.php#skills" class="hover:text-tech-accent transition-colors px-3 py-2">Compétences</a>
                    <a href="index.php#projects" class="hover:text-tech-accent transition-colors px-3 py-2">Projets</a>
                    <a href="index.php#contact" class="border border-tech-accent text-tech-accent hover:bg-tech-accent hover:text-white transition-all px-4 py-2 rounded">Contact</a>
                </div>
            </div>
        </div>
    </div>
</nav>