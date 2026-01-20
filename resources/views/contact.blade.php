@extends('layouts.app')

@section('title', 'Contact | Corsica Faby Design')
@section('meta_description', 'Un projet web ? Contactez-moi pour un devis gratuit et personnalisé. Je vous réponds rapidement.')

@section('content')
<section class="py-20 bg-gray-50">
    <div class="max-w-2xl mx-auto px-6">

        <!-- Titre -->
        <div class="text-center mb-10">
            <h1 class="text-4xl font-extrabold text-gray-800 mb-4">Me contacter</h1>
            <p class="text-lg text-gray-600">
                Une idée, un projet, une question ? Remplissez le formulaire ci-dessous ou contactez-moi directement.
            </p>
        </div>

        <!-- Formulaire -->
        <div class="bg-white shadow-xl rounded-2xl p-8">
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 text-green-800 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="mb-6 p-4 bg-red-100 text-red-800 rounded">
                    <ul class="list-disc pl-5">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form id="contactForm" method="POST" action="{{ route('contact.send') }}" class="space-y-6">
                @csrf

                <!-- Nom -->
                <div>
    <label for="nom" class="block mb-2 font-semibold text-gray-700">Nom</label>

    <div class="relative">
        <span class="pointer-events-none absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 1118.879 17.8M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
        </span>

        <input type="text" id="nom" name="nom"
               class="w-full border border-gray-300 rounded-lg pl-11 pr-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
               required value="{{ old('nom') }}">
    </div>
</div>


                <!-- Email -->
                <div>
    <label for="email" class="block mb-2 font-semibold text-gray-700">Email</label>

    <div class="relative">
        <span class="pointer-events-none absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 8l9 6 9-6M4 6h16a1 1 0 011 1v10a1 1 0 01-1 1H4a1 1 0 01-1-1V7a1 1 0 011-1z"/>
            </svg>
        </span>

        <input type="email" id="email" name="email"
               class="w-full border border-gray-300 rounded-lg pl-11 pr-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
               required value="{{ old('email') }}">
    </div>
</div>


                <!-- Message -->
                <div>
    <label for="message" class="block mb-2 font-semibold text-gray-700">Message</label>

    <div class="relative">
        <span class="pointer-events-none absolute left-3 top-4 text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M7 8h10M7 12h7M5 20l2-2h12a2 2 0 002-2V6a2 2 0 00-2-2H7a2 2 0 00-2 2v14z"/>
            </svg>
        </span>

        <textarea id="message" name="message" rows="5"
                  class="w-full border border-gray-300 rounded-lg pl-11 pr-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                  required>{{ old('message') }}</textarea>
    </div>
</div>

                <!-- Bouton -->
                <button id="submitBtn" type="submit"
        class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition flex items-center justify-center gap-2 shadow">
    <span aria-hidden="true">✉️</span>
    <span id="btnText">Envoyer le message</span>
</button>


                <p class="text-center text-sm text-gray-500 mt-3">
                    Je réponds généralement sous 24h ⏳
                </p>
            </form>
        </div>

        <!-- Coordonnées sous le formulaire -->
        <div class="mt-12 text-center space-y-4">
            <a href="mailto:corsicafabydesign@gmail.com" class="block text-blue-600 hover:underline text-lg">
                📧 corsicafabydesign@gmail.com
            </a>
            <a href="tel:+33669547877" class="block text-blue-600 hover:underline text-lg">
                📱 06 69 54 78 77
            </a>
        </div>
    </div>
</section>

<!-- Script pour loader -->
<script>
document.getElementById("contactForm").addEventListener("submit", function() {
    const btn = document.getElementById("submitBtn");
    const txt = document.getElementById("btnText");
    btn.disabled = true;
    txt.textContent = "Envoi en cours...";
});
</script>

@endsection
