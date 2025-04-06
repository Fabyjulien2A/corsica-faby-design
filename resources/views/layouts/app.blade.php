<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
<!-- ou -->
<link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">

    <meta charset="UTF-8">
    <title>@yield('title', 'Corsica Faby Design – Création de sites web en Corse')</title>
    <meta name="description" content="@yield('meta_description', 'Développeur web en Corse – Création de site vitrine et e-commerce sur mesure.')">

    <!-- Open Graph (réseaux sociaux) -->
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:image" content="{{ asset('image/photo.png') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/xxxxxxx.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AOS (animations au scroll) -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body class="font-sans text-gray-800">
    @include('partials.navbar')

    <main class="p-4">
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
