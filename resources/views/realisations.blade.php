@extends('layouts.app')

@section('title', 'Réalisations | Corsica Faby Design')
@section('meta_description', 'Exemples de projets réalisés : sites vitrines et e-commerce modernes pour entreprises, artisans et associations.')

@section('content')
<section class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-4 text-center">

    <h1 class="text-4xl font-bold text-gray-800 mb-3">Mes réalisations</h1>
    <p class="text-lg text-gray-600 mb-12">
      Voici quelques projets que j’ai réalisés récemment. Cliquez pour en savoir plus.
    </p>

    @php
      // Déclare tes projets ici (titre, type, image, url)
      $projects = [
        //['title'=>'Amélia Bijoux','type'=>'E-commerce','img'=>'image/amelia-bijoux.png','url'=>'https://ameliabijoux.com/'],
        ['title'=>'Projet vitrine #1','type'=>'Vitrine','img'=>'image/projet-1.png','url'=>'https://paleturquoise-flamingo-491373.hostingersite.com/'],
        ['title'=>'Projet #2','type'=>'Vitrine','img'=>'image/projet-2.png','url'=>'https://firebrick-cattle-888553.hostingersite.com/'],
        ['title'=>'Projet #3','type'=>'Vitrine','img'=>'image/projet-3.png','url'=>'https://lightgrey-quetzal-815688.hostingersite.com/'],
        ['title'=>'Projet #4','type'=>'E-commerce','img'=>'image/projet-4.png','url'=>'https://skyblue-alligator-346835.hostingersite.com/'],
        ['title'=>'Projet #5','type'=>'Vitrine','img'=>'image/projet-5.png','url'=>'https://yellowgreen-porcupine-662594.hostingersite.com/'],
        ['title'=>'Projet #6','type'=>'Vitrine','img'=>'image/projet-6.png','url'=>'https://grey-ant-565986.hostingersite.com/'],
        ['title'=>'Projet #7','type'=>'Vitrine','img'=>'image/projet-7.png','url'=>'https://darkgoldenrod-caribou-346632.hostingersite.com/'],
        ['title'=>'Projet #8','type'=>'Vitrine','img'=>'image/projet-8.png','url'=>'https://blanchedalmond-flamingo-515787.hostingersite.com/'],
        ['title'=>'Projet #9','type'=>'Vitrine','img'=>'image/projet-9.png','url'=>'https://lightslategrey-rat-675736.hostingersite.com/'],
        ['title'=>'Projet #10','type'=>'Vitrine','img'=>'image/projet-10.png','url'=>'https://orchid-nightingale-571151.hostingersite.com/'],
        ['title'=>'Projet #11','type'=>'E-commerce','img'=>'image/projet-11.png','url'=>'https://darkblue-chinchilla-582008.hostingersite.com/'],
        ['title'=>'Projet #12','type'=>'Vitrine','img'=>'image/projet-12.png','url'=>'https://springgreen-starling-598938.hostingersite.com/'],
      ];

      // Couleurs de badge selon le type
      $badge = fn($type) => $type === 'E-commerce'
        ? 'bg-green-100 text-green-700 ring-1 ring-green-200'
        : 'bg-blue-100 text-blue-700 ring-1 ring-blue-200';
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-left">
      @foreach ($projects as $p)
        <article class="group rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition">
          <a href="{{ $p['url'] }}" target="_blank" rel="noopener" aria-label="Voir {{ $p['title'] }}" class="block">
            <!-- Mockup / image -->
            <div class="relative aspect-[16/9] bg-gray-100 overflow-hidden">
              <img 
                src="{{ asset($p['img']) }}" 
                alt="{{ $p['title'] }} — {{ $p['type'] }}" 
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                loading="lazy">
              <!-- Overlay -->
              <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-90"></div>

              <!-- Contenu sur l'image -->
              <div class="absolute inset-x-0 bottom-0 p-5">
                <div class="flex items-center justify-between gap-3">
                  <h3 class="text-white font-semibold text-lg">
                    {{ $p['title'] }}
                  </h3>
                  <span class="text-xs px-2.5 py-1 rounded-full {{ $badge($p['type']) }}">
                    {{ $p['type'] }}
                  </span>
                </div>

                <!-- Bouton "Voir le site" -->
                <div class="mt-3">
                  <span class="inline-flex items-center gap-2 text-sm font-medium text-white/90 bg-white/10 backdrop-blur px-3 py-1.5 rounded-lg ring-1 ring-white/20 group-hover:bg-white group-hover:text-blue-700 transition">
                    Voir le site
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 3h7m0 0v7m0-7L10 14"/>
                    </svg>
                  </span>
                </div>
              </div>
            </div>
          </a>
        </article>
      @endforeach
    </div>

  </div>
</section>
@endsection
