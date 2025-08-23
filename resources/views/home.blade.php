@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

@section('title', 'Accueil | Corsica Faby Design')
@section('meta_description', 'Développeur web en Corse – Création de sites internet modernes, vitrines et e-commerce, adaptés à vos besoins.')

<section class="relative h-[60vh] w-full overflow-hidden">
    <!-- Image -->
    <img src="{{ asset('image/photo.png') }}" alt="Illustration développeur web"
     class="absolute inset-0 w-full h-full object-cover z-0"
     style="object-position: center 61%;">

    <!-- Dégradé noir en bas -->
    <div class="absolute inset-0 z-10 bg-gradient-to-t from-black/60 to-transparent"></div>

    <!-- Contenu -->
    <div class="relative z-20 flex flex-col items-center justify-end h-full text-center px-4 pb-12 text-white">
        
        <!-- Titre impactant avec typewriter -->
        <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">
            Des <span id="typewriter" class="text-blue-400"></span> pour votre réussite
        </h1>

        <!-- Sous-titre -->
        <p class="mt-4 text-lg max-w-2xl">
            Je crée des sites vitrines et e-commerce sur mesure, optimisés pour attirer, convaincre et convertir vos visiteurs.
        </p>

        <!-- Boutons CTA -->
        <div class="mt-8 flex justify-center gap-4 flex-wrap">
            <a href="{{ route('contact') }}" 
               class="bg-blue-600 text-white px-6 py-3 rounded-lg text-lg font-medium shadow-md hover:bg-blue-700 hover:shadow-lg transition">
                Obtenir un devis gratuit
            </a>
            <a href="{{ route('realisations') }}" 
               class="border border-white text-white px-6 py-3 rounded-lg text-lg font-medium hover:bg-white hover:text-blue-600 transition">
                Découvrir mes réalisations
            </a>
        </div>

        <!-- Ligne de réassurance -->
        <p class="mt-6 text-sm text-gray-200">
            Réponse en moins de 24h · Tarifs accessibles · Sites clés en main
        </p>
    </div>
</section>

<!-- Typewriter Script -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const words = ["sites modernes", "sites performants", "sites sur mesure"];
    let i = 0;
    let j = 0;
    let currentWord = "";
    let isDeleting = false;
    const speed = 100; // vitesse d'écriture
    const eraseSpeed = 50; // vitesse d'effacement
    const delay = 1500; // pause entre les mots

    function type() {
        currentWord = words[i];
        if (isDeleting) {
            document.getElementById("typewriter").textContent = currentWord.substring(0, j--);
        } else {
            document.getElementById("typewriter").textContent = currentWord.substring(0, j++);
        }

        if (!isDeleting && j === currentWord.length + 1) {
            isDeleting = true;
            setTimeout(type, delay);
        } else if (isDeleting && j === 0) {
            isDeleting = false;
            i = (i + 1) % words.length;
            setTimeout(type, speed);
        } else {
            setTimeout(type, isDeleting ? eraseSpeed : speed);
        }
    }

    type();
});
</script>



<!--Section service -->
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4 text-center">
        
        <!-- Titre -->
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-12">
            Des solutions digitales adaptées à vos besoins
        </h2>

        <div class="grid md:grid-cols-3 gap-8 text-left">

            <!-- Site vitrine -->
            <div class="p-8 bg-blue-50 rounded-xl shadow-sm hover:shadow-xl hover:-translate-y-2 transition transform duration-300">
                <div class="mb-4 flex items-center justify-center w-14 h-14 rounded-full bg-blue-100">
                    <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9.75 3h4.5a.75.75 0 01.75.75v.75h2.25A2.25 2.25 0 0119.5 6.75v12A2.25 2.25 0 0117.25 21H6.75A2.25 2.25 0 014.5 18.75v-12A2.25 2.25 0 016.75 4.5h2.25V3.75a.75.75 0 01.75-.75z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-blue-700 mb-1">Site vitrine</h3>
                <p class="text-lg font-bold text-blue-600 mb-4">À partir de 499 €</p>
                <p class="text-gray-700 mb-6">
                    Un site moderne et responsive pour valoriser votre activité, vos services ou vos événements. 
                    Parfait pour développer votre visibilité locale ou professionnelle.
                </p>
                <a href="{{ route('contact') }}" 
                   class="inline-block bg-blue-600 text-white px-5 py-2 rounded-lg font-medium hover:bg-blue-700 transition">
                   Demander un devis
                </a>
            </div>

            <!-- E-commerce -->
            <div class="p-8 bg-green-50 rounded-xl shadow-sm hover:shadow-xl hover:-translate-y-2 transition transform duration-300">
                <div class="mb-4 flex items-center justify-center w-14 h-14 rounded-full bg-green-100">
                    <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.6 8h12.2M7 13L5.4 5M17 13l1.6 8M9 21a1 1 0 100-2 1 1 0 000 2zm6 0a1 1 0 100-2 1 1 0 000 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-green-700 mb-1">E-commerce</h3>
                <p class="text-lg font-bold text-green-600 mb-4">À partir de 899 €</p>
                <p class="text-gray-700 mb-6">
                    Je développe votre boutique en ligne avec paiement sécurisé, gestion de catalogue, 
                    page produit, panier et suivi des commandes.
                </p>
                <a href="{{ route('contact') }}" 
                   class="inline-block bg-green-600 text-white px-5 py-2 rounded-lg font-medium hover:bg-green-700 transition">
                   Créer ma boutique
                </a>
            </div>

            <!-- Maintenance -->
            <div class="p-8 bg-yellow-50 rounded-xl shadow-sm hover:shadow-xl hover:-translate-y-2 transition transform duration-300">
                <div class="mb-4 flex items-center justify-center w-14 h-14 rounded-full bg-yellow-100">
                    <svg class="w-7 h-7 text-yellow-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M11.25 3.75a.75.75 0 01.75 0l7.5 4.25a.75.75 0 010 1.3l-7.5 4.25a.75.75 0 01-.75 0l-7.5-4.25a.75.75 0 010-1.3L11.25 3.75zM4.5 10.5l6.75 3.825a.75.75 0 00.75 0L18.75 10.5M4.5 14.25l6.75 3.825a.75.75 0 00.75 0L18.75 14.25" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-yellow-700 mb-1">Maintenance</h3>
                <p class="text-lg font-bold text-yellow-600 mb-4">À partir de 29 €/mois</p>
                <p class="text-gray-700 mb-6">
                    Je m’occupe des mises à jour, sauvegardes, sécurité et de l’assistance technique 
                    pour garantir la stabilité de votre site.
                </p>
                <a href="{{ route('contact') }}" 
                   class="inline-block bg-yellow-600 text-white px-5 py-2 rounded-lg font-medium hover:bg-yellow-700 transition">
                   Souscrire à la maintenance
                </a>
            </div>
        </div>

    
    </div>
</section>




@endsection
