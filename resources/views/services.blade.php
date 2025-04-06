@extends('layouts.app')

@section('title', 'Services web – Création de sites internet en Corse (vitrine, e-commerce, maintenance)')
@section('meta_description', 'Découvrez mes services de création de site internet en Corse : site vitrine, boutique en ligne, maintenance et accompagnement personnalisé.')

@section('content')
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-4" data-aos="fade-up">Mes services</h1>
        <p class="text-lg text-gray-600 mb-12" data-aos="fade-up" data-aos-delay="100">
            Je vous accompagne dans la création, l’évolution et la gestion de votre présence en ligne.
            Chaque service est pensé pour répondre à vos besoins avec efficacité.
        </p>

        <div class="grid md:grid-cols-3 gap-8 text-left">
            <!-- Site vitrine -->
            <div class="p-6 bg-blue-50 rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="200">
                <div class="mb-4">
                    <svg class="w-12 h-12 text-blue-600 mx-auto" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9.75 3h4.5a.75.75 0 01.75.75v.75h2.25A2.25 2.25 0 0119.5 6.75v12A2.25 2.25 0 0117.25 21H6.75A2.25 2.25 0 014.5 18.75v-12A2.25 2.25 0 016.75 4.5h2.25V3.75a.75.75 0 01.75-.75z" />
                    </svg>
                </div>
                <h2 class="text-xl font-semibold text-blue-700 mb-2">Site vitrine</h2>
                <p class="text-gray-700 mb-3">
                    Un site professionnel et responsive pour valoriser votre activité et attirer vos visiteurs.
                </p>
                <ul class="text-gray-600 text-sm list-disc pl-5">
                    <li>Design personnalisé</li>
                    <li>Contenu optimisé</li>
                    <li>Navigation intuitive</li>
                </ul>
            </div>

            <!-- Site e-commerce -->
            <div class="p-6 bg-green-50 rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="300">
                <div class="mb-4">
                    <svg class="w-12 h-12 text-green-600 mx-auto" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.6 8h12.2M7 13L5.4 5M17 13l1.6 8M9 21a1 1 0 100-2 1 1 0 000 2zm6 0a1 1 0 100-2 1 1 0 000 2z" />
                    </svg>
                </div>
                <h2 class="text-xl font-semibold text-green-700 mb-2">Site e-commerce</h2>
                <p class="text-gray-700 mb-3">
                    Une boutique en ligne sur mesure pour vendre efficacement vos produits ou services.
                </p>
                <ul class="text-gray-600 text-sm list-disc pl-5">
                    <li>Catalogue & panier</li>
                    <li>Paiement sécurisé</li>
                    <li>Statistiques & gestion</li>
                </ul>
            </div>

            <!-- Maintenance -->
            <div class="p-6 bg-yellow-50 rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="400">
                <div class="mb-4">
                    <svg class="w-12 h-12 text-yellow-500 mx-auto" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M11.25 3.75a.75.75 0 01.75 0l7.5 4.25a.75.75 0 010 1.3l-7.5 4.25a.75.75 0 01-.75 0l-7.5-4.25a.75.75 0 010-1.3L11.25 3.75zM4.5 10.5l6.75 3.825a.75.75 0 00.75 0L18.75 10.5M4.5 14.25l6.75 3.825a.75.75 0 00.75 0L18.75 14.25" />
                    </svg>
                </div>
                <h2 class="text-xl font-semibold text-yellow-600 mb-2">Maintenance</h2>
                <p class="text-gray-700 mb-3">
                    Votre site reste sécurisé, à jour et performant grâce à une maintenance continue.
                </p>
                <ul class="text-gray-600 text-sm list-disc pl-5">
                    <li>Sauvegardes régulières</li>
                    <li>Surveillance & sécurité</li>
                    <li>Support technique</li>
                </ul>
            </div>
        </div>

        <!-- CTA -->
        <div class="mt-16" data-aos="fade-up" data-aos-delay="500">
            <a href="{{ route('contact') }}"
               class="inline-block bg-blue-600 text-white text-lg font-medium px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                Discutons de votre projet
            </a>
        </div>
    </div>
</section>
@endsection
