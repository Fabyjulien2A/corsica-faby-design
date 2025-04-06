@extends('layouts.app')

@section('title', 'Mes réalisations – Sites vitrines & e-commerce en Corse')
@section('meta_description', 'Découvrez mes réalisations web : sites vitrines et e-commerce conçus sur mesure pour des clients en Corse et ailleurs.')

@section('content')
<section class="py-16 bg-white pb-20">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Mes réalisations</h1>
        <p class="text-lg text-gray-600 mb-12">
            Voici quelques projets que j’ai réalisés récemment. Cliquez pour en savoir plus.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-left">
            <!-- Projet 1 -->
            <div class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                <a href="https://paleturquoise-flamingo-491373.hostingersite.com/" target="_blank" class="block">
                    <img src="{{ asset('image/projet-1.png') }}" alt="Projet 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-blue-600">Nom du projet 1</h2>
                        <p class="text-gray-600 text-sm mb-2">Site vitrine</p>
                        <p class="text-gray-700 text-sm">Petit résumé du projet, outils utilisés, etc.</p>
                    </div>
                </a>
            </div>

            <!-- Projet 2 -->
            <div class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                <a href="https://firebrick-cattle-888553.hostingersite.com/" target="_blank" class="block">
                    <img src="{{ asset('image/projet-2.png') }}" alt="Projet 2" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-blue-600">Nom du projet 2</h2>
                        <p class="text-gray-600 text-sm mb-2">Site e-commerce</p>
                        <p class="text-gray-700 text-sm">Un petit texte ici aussi pour le contexte du projet.</p>
                    </div>
                </a>
            </div>

                <!-- Projet 3 -->
                <div class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                    <a href="https://lightgrey-quetzal-815688.hostingersite.com/" target="_blank" class="block">
                        <img src="{{ asset('image/projet-3.png') }}" alt="Projet 3" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold text-blue-600">Nom du projet 2</h2>
                            <p class="text-gray-600 text-sm mb-2">Site e-commerce</p>
                            <p class="text-gray-700 text-sm">Un petit texte ici aussi pour le contexte du projet.</p>
                        </div>
                    </a>
                </div>

                                <!-- Projet 4 -->
                                <div class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                                    <a href="https://skyblue-alligator-346835.hostingersite.com/" target="_blank" class="block">
                                        <img src="{{ asset('image/projet-4.png') }}" alt="Projet 4" class="w-full h-48 object-cover">
                                        <div class="p-4">
                                            <h2 class="text-xl font-semibold text-blue-600">Nom du projet 2</h2>
                                            <p class="text-gray-600 text-sm mb-2">Site e-commerce</p>
                                            <p class="text-gray-700 text-sm">Un petit texte ici aussi pour le contexte du projet.</p>
                                        </div>
                                    </a>
                                </div>

                                                <!-- Projet 5 -->
                <div class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                    <a href="https://yellowgreen-porcupine-662594.hostingersite.com/" target="_blank" class="block">
                        <img src="{{ asset('image/projet-5.png') }}" alt="Projet 5" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold text-blue-600">Nom du projet 2</h2>
                            <p class="text-gray-600 text-sm mb-2">Site e-commerce</p>
                            <p class="text-gray-700 text-sm">Un petit texte ici aussi pour le contexte du projet.</p>
                        </div>
                    </a>
                </div>


                <div class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                    <a href="https://grey-ant-565986.hostingersite.com/" target="_blank" class="block">
                        <img src="{{ asset('image/projet-6.png') }}" alt="Projet 6" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold text-blue-600">Nom du projet 2</h2>
                            <p class="text-gray-600 text-sm mb-2">Site e-commerce</p>
                            <p class="text-gray-700 text-sm">Un petit texte ici aussi pour le contexte du projet.</p>
                        </div>
                    </a>
                </div>

                <div class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                    <a href="https://darkgoldenrod-caribou-346632.hostingersite.com/" target="_blank" class="block">
                        <img src="{{ asset('image/projet-7.png') }}" alt="Projet 7" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold text-blue-600">Nom du projet 2</h2>
                            <p class="text-gray-600 text-sm mb-2">Site e-commerce</p>
                            <p class="text-gray-700 text-sm">Un petit texte ici aussi pour le contexte du projet.</p>
                        </div>
                    </a>
                </div>

                <div class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                    <a href="https://blanchedalmond-flamingo-515787.hostingersite.com/" target="_blank" class="block">
                        <img src="{{ asset('image/projet-8.png') }}" alt="Projet 8" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold text-blue-600">Nom du projet 2</h2>
                            <p class="text-gray-600 text-sm mb-2">Site e-commerce</p>
                            <p class="text-gray-700 text-sm">Un petit texte ici aussi pour le contexte du projet.</p>
                        </div>
                    </a>
                </div>

                <div class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                    <a href="https://lightslategrey-rat-675736.hostingersite.com/" target="_blank" class="block">
                        <img src="{{ asset('image/projet-9.png') }}" alt="Projet 9" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold text-blue-600">Nom du projet 2</h2>
                            <p class="text-gray-600 text-sm mb-2">Site e-commerce</p>
                            <p class="text-gray-700 text-sm">Un petit texte ici aussi pour le contexte du projet.</p>
                        </div>
                    </a>
                </div>

                <div class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                    <a href="https://orchid-nightingale-571151.hostingersite.com/" target="_blank" class="block">
                        <img src="{{ asset('image/projet-10.png') }}" alt="Projet 10" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold text-blue-600">Nom du projet 2</h2>
                            <p class="text-gray-600 text-sm mb-2">Site e-commerce</p>
                            <p class="text-gray-700 text-sm">Un petit texte ici aussi pour le contexte du projet.</p>
                        </div>
                    </a>
                </div>

                <div class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                    <a href="https://darkblue-chinchilla-582008.hostingersite.com/" target="_blank" class="block">
                        <img src="{{ asset('image/projet-11.png') }}" alt="Projet 11" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold text-blue-600">Nom du projet 2</h2>
                            <p class="text-gray-600 text-sm mb-2">Site e-commerce</p>
                            <p class="text-gray-700 text-sm">Un petit texte ici aussi pour le contexte du projet.</p>
                        </div>
                    </a>
                </div>

                <div class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                    <a href="https://springgreen-starling-598938.hostingersite.com/" target="_blank" class="block">
                        <img src="{{ asset('image/projet-12.png') }}" alt="Projet 12" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold text-blue-600">Nom du projet 2</h2>
                            <p class="text-gray-600 text-sm mb-2">Site e-commerce</p>
                            <p class="text-gray-700 text-sm">Un petit texte ici aussi pour le contexte du projet.</p>
                        </div>
                    </a>
                </div>


                

            
        </div>
    </div>
</section>
@endsection


