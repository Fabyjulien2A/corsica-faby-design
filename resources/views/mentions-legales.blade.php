@extends('layouts.app') {{-- ou adapte selon ton layout --}}
@section('title', 'Mentions légales')

@section('title', 'Mentions légales | Corsica Faby Design')
@section('meta_description', 'Consultez les informations légales concernant le site Corsica Faby Design et son éditeur.')


@section('content')
<section class="max-w-4xl mx-auto px-4 py-12 text-gray-800">
    <h1 class="text-3xl font-bold mb-8">Mentions légales</h1>

    <h2 class="text-xl font-semibold mt-6 mb-2">1. Éditeur du site</h2>
    <p>
        Le présent site est édité par <strong>Corsica Faby Design</strong>, micro-entreprise immatriculée sous le numéro <br> <strong>SIRET : 89821686600027</strong>, dont le siège social est situé à <strong>20169 Bonifacio</strong>.
    </p>
    <p>
        Responsable de la publication : Julien Faby<br>
        Contact : <a href="mailto:corsicafabydesign@gmail.com" class="text-blue-600 hover:underline">corsicafabydesign@gmail.com</a>
    </p>

    <h2 class="text-xl font-semibold mt-6 mb-2">2. Hébergement</h2>
    <p>
        Le site est hébergé par :<br>
        <strong>Hostinger International Ltd.</strong><br>
        61 Lordou Vironos Street, 6023 Larnaca, Chypre<br>
        <a href="https://www.hostinger.fr" target="_blank" class="text-blue-600 hover:underline">www.hostinger.fr</a>
    </p>

    <h2 class="text-xl font-semibold mt-6 mb-2">3. Propriété intellectuelle</h2>
    <p>
        L’ensemble du contenu du site (textes, images, logo, graphismes) est la propriété exclusive de Corsica Faby Design, sauf mention contraire.
        Toute reproduction, représentation, modification, publication ou adaptation, totale ou partielle, est interdite sans l’autorisation écrite préalable.
    </p>

    <h2 class="text-xl font-semibold mt-6 mb-2">4. Données personnelles</h2>
    <p>
        Les informations personnelles collectées via le formulaire de contact sont uniquement destinées à la prise de contact et ne sont jamais transmises à des tiers.
        Conformément à la loi « Informatique et Libertés » et au RGPD, vous disposez d’un droit d’accès, de rectification ou de suppression de vos données.
        Pour exercer ce droit, contactez : <a href="mailto:corsicafabydesign@gmail.com" class="text-blue-600 hover:underline">corsicafabydesign@gmail.com</a>.
    </p>

    <h2 class="text-xl font-semibold mt-6 mb-2">5. Cookies</h2>
    <p>
        Ce site utilise des cookies à des fins de mesure d’audience (par exemple Google Analytics). Vous pouvez désactiver les cookies depuis les paramètres de votre navigateur.
    </p>

    <h2 class="text-xl font-semibold mt-6 mb-2">6. Limitation de responsabilité</h2>
    <p>
        Corsica Faby Design ne saurait être tenue pour responsable d’un dommage direct ou indirect résultant de l’accès ou de l’utilisation du site.
    </p>

</section>
@endsection
