<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Corsica Faby Design – Création de sites web en Corse')</title>
    <meta name="description" content="@yield('meta_description', 'Développeur web en Corse – Création de site vitrine et e-commerce sur mesure.')">

    <!-- Open Graph (réseaux sociaux) -->
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:image" content="{{ asset('image/photo.png') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Anti-flash Tailwind CDN -->
    <style>
      html { visibility: hidden; }
    </style>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      document.documentElement.style.visibility = 'visible';
    </script>

    <!-- Google Fonts (Inter + Sora) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Sora:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Styles globaux typographie -->
    <style>
        :root{
            --font-body: 'Inter', system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
            --font-title: 'Sora', system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
        }
        body{ font-family: var(--font-body); }
        .font-title{ font-family: var(--font-title); }
        html{ -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
    </style>

    <!-- Font Awesome (garder seulement 1 source, ici le CSS CDN) -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AOS (animations au scroll) -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body class="text-gray-800">
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- AOS Init -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
