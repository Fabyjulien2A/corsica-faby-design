@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

@section('title', 'Accueil | Corsica Faby Design')
@section('meta_description', 'Développeur web en Corse – Création de sites internet modernes, vitrines et e-commerce, adaptés à vos besoins.')

<div class="h-4 bg-gradient-to-b from-black/10 to-transparent"></div>

<!-- HERO -->
<section class="relative h-[420px] sm:min-h-[650px] lg:min-h-[760px] w-full overflow-hidden">

    <img src="{{ asset('image/photo.png') }}"
         alt="Illustration développeur web"
         class="absolute inset-0 w-full h-full object-cover z-0
                object-[center_60%] sm:object-[center_60%] lg:object-[center_66%]">


    <div class="relative z-20 min-h-[560px] sm:min-h-[650px] lg:min-h-[760px] flex items-center justify-center px-4 text-white">
        <div class="w-full max-w-4xl text-center mx-auto">

            <h1 class="font-title text-2xl sm:text-4xl md:text-5xl font-extrabold leading-tight drop-shadow-md">
                Des <span id="typewriter" class="text-blue-400"></span>
                <span class="block">pour développer votre activité</span>
            </h1>

            <p class="mt-4 mx-auto text-sm sm:text-base md:text-lg max-w-2xl text-white/90 drop-shadow">
                Attirez plus de clients grâce à un site professionnel, moderne et performant.
            </p>

            <div class="mt-6 mx-auto w-full max-w-sm sm:max-w-md flex flex-col sm:flex-row justify-center gap-3">
                <a href="{{ route('contact') }}"
                   class="w-full sm:w-auto bg-blue-600 text-white px-6 py-3 rounded-lg text-base sm:text-lg font-medium shadow-md hover:bg-blue-700 hover:shadow-lg transition">
                    Obtenir un devis gratuit
                </a>

                <a href="{{ route('realisations') }}"
                   class="hidden lg:inline-block border border-white/70 text-white/90 px-6 py-3 rounded-lg text-lg font-medium hover:bg-white hover:text-blue-600 transition">
                    Découvrir mes réalisations
                </a>
            </div>

            <p class="mt-4 text-xs sm:text-sm text-gray-100 drop-shadow hidden sm:block">
                Ou appelez-moi :
                <a href="tel:+33669547877" class="underline font-semibold hover:text-blue-300">
                    06 69 54 78 77
                </a>
            </p>

        </div>
    </div>
</section>


<!-- TYPEWRITER -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const words = ["sites modernes", "sites sur mesure", "sites clés en main"];
    let i = 0;
    let j = 0;
    let currentWord = "";
    let isDeleting = false;

    function type() {
        currentWord = words[i];

        document.getElementById("typewriter").textContent = isDeleting
            ? currentWord.substring(0, j--)
            : currentWord.substring(0, j++);

        if (!isDeleting && j === currentWord.length + 1) {
            isDeleting = true;
            setTimeout(type, 1500);
        } else if (isDeleting && j === 0) {
            isDeleting = false;
            i = (i + 1) % words.length;
            setTimeout(type, 100);
        } else {
            setTimeout(type, isDeleting ? 50 : 100);
        }
    }

    type();
});
</script>


<!-- SERVICES -->
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4 text-center">

        <h2 class="font-title text-3xl md:text-4xl font-bold text-gray-800 mb-12">
            Des solutions digitales adaptées à vos besoins
        </h2>

        <div class="grid md:grid-cols-3 gap-8 text-left">

            <!-- Vitrine -->
            <div class="p-8 bg-blue-50 rounded-xl shadow-sm hover:shadow-xl hover:-translate-y-2 transition flex flex-col">
                <h3 class="font-title text-xl font-semibold text-blue-700 mb-2">Site vitrine</h3>
                <p class="text-lg font-bold text-blue-600 mb-4">Devis personnalisé</p>
                <p class="text-gray-700 mb-6">
                    Présentez votre activité avec un site moderne, clair et professionnel pour gagner en visibilité.
                </p>
                <a href="{{ route('contact') }}" class="mt-auto bg-blue-600 text-white px-5 py-2 rounded-lg text-center hover:bg-blue-700">
                    Demander un devis
                </a>
            </div>

            <!-- Ecommerce -->
            <div class="p-8 bg-green-50 rounded-xl shadow-sm hover:shadow-xl hover:-translate-y-2 transition flex flex-col">
                <h3 class="font-title text-xl font-semibold text-green-700 mb-2">E-commerce</h3>
                <p class="text-lg font-bold text-green-600 mb-4">Solution sur mesure</p>
                <p class="text-gray-700 mb-6">
                    Vendez en ligne avec une boutique performante et adaptée à votre activité.
                </p>
                <a href="{{ route('contact') }}" class="mt-auto bg-green-600 text-white px-5 py-2 rounded-lg text-center hover:bg-green-700">
                    Créer ma boutique
                </a>
            </div>

            <!-- Maintenance -->
            <div class="p-8 bg-yellow-50 rounded-xl shadow-sm hover:shadow-xl hover:-translate-y-2 transition flex flex-col">
                <h3 class="font-title text-xl font-semibold text-yellow-700 mb-2">Maintenance</h3>
                <p class="text-lg font-bold text-yellow-600 mb-4">Maintenance adaptée</p>
                <p class="text-gray-700 mb-6">
                    Je m’occupe de la sécurité, des mises à jour et du bon fonctionnement de votre site.
                </p>
                <a href="{{ route('contact') }}" class="mt-auto bg-yellow-600 text-white px-5 py-2 rounded-lg text-center hover:bg-yellow-700">
                    Souscrire
                </a>
            </div>

        </div>
    </div>
</section>


<!-- Section avantages premium -->
<section class="py-24 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">

        <div class="text-center mb-14">
            <span class="inline-block text-blue-600 font-semibold mb-3">
                Un accompagnement simple et efficace
            </span>

            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                Pourquoi travailler avec moi ?
            </h2>

            <p class="mt-4 max-w-2xl mx-auto text-gray-600">
                Je vous accompagne dans la création d’un site clair, professionnel et pensé pour développer votre visibilité.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition">
                <div class="w-12 h-12 mb-5 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center">
                    ✓
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">
                    Accompagnement complet
                </h3>
                <p class="text-gray-600 leading-relaxed">
                    De l’idée à la mise en ligne, je vous guide à chaque étape pour créer un site adapté à votre activité.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition">
                <div class="w-12 h-12 mb-5 rounded-xl bg-green-100 text-green-600 flex items-center justify-center">
                    ⚡
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">
                    Site moderne et efficace
                </h3>
                <p class="text-gray-600 leading-relaxed">
                    Un design soigné, responsive et orienté client pour donner une image professionnelle à votre entreprise.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition">
                <div class="w-12 h-12 mb-5 rounded-xl bg-yellow-100 text-yellow-600 flex items-center justify-center">
                    ★
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">
                    Solution adaptée
                </h3>
                <p class="text-gray-600 leading-relaxed">
                    Chaque projet est différent : je propose une solution personnalisée selon vos besoins, vos objectifs et votre budget.
                </p>
            </div>

        </div>

    </div>
</section>


<!-- Section à propos premium -->
<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-4 grid lg:grid-cols-2 gap-12 items-center">

        <div>
            <span class="inline-block text-blue-600 font-semibold mb-3">
                À propos
            </span>

            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                Un développeur web à votre écoute
            </h2>

            <p class="text-gray-700 leading-relaxed mb-5">
                Je m’appelle Julien, développeur web basé en Corse. Avec Corsica Faby Design, j’aide les entrepreneurs, artisans et petites entreprises à créer une présence en ligne claire, moderne et professionnelle.
            </p>

            <p class="text-gray-700 leading-relaxed mb-8">
                Mon objectif est simple : vous proposer un site qui reflète votre activité, inspire confiance et vous aide à attirer de nouveaux clients.
            </p>

            <a href="{{ route('contact') }}"
               class="inline-block bg-blue-600 text-white px-7 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                Me contacter
            </a>
        </div>

        <div class="bg-gray-50 rounded-3xl p-8 shadow-sm">
            <h3 class="text-xl font-bold text-gray-900 mb-6">
                Ce que je privilégie dans chaque projet
            </h3>

            <ul class="space-y-4 text-gray-700">
                <li class="flex gap-3">
                    <span class="text-blue-600 font-bold">✓</span>
                    Une communication simple et transparente
                </li>
                <li class="flex gap-3">
                    <span class="text-blue-600 font-bold">✓</span>
                    Un site adapté aux mobiles et facile à utiliser
                </li>
                <li class="flex gap-3">
                    <span class="text-blue-600 font-bold">✓</span>
                    Un accompagnement même après la mise en ligne
                </li>
                <li class="flex gap-3">
                    <span class="text-blue-600 font-bold">✓</span>
                    Une solution pensée selon votre activité
                </li>
            </ul>
        </div>

    </div>
</section>

@endsection