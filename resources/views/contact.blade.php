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
                <div class="relative group">
                    <label for="nom" class="block mb-2 font-semibold text-gray-700">Nom</label>
                    <span class="absolute inset-y-0 left-3 top-7 flex items-center text-gray-400 group-focus-within:text-blue-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 1118.879 17.8M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </span>
                    <input type="text" id="nom" name="nom"
                           class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                           required value="{{ old('nom') }}">
                </div>

                <!-- Email -->
                <div class="relative group">
                    <label for="email" class="block mb-2 font-semibold text-gray-700">Email</label>
                    <span class="absolute inset-y-0 left-3 top-7 flex items-center text-gray-400 group-focus-within:text-blue-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m8 0l-8-6m8 6l-8 6"/>
                        </svg>
                    </span>
                    <input type="email" id="email" name="email"
                           class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                           required value="{{ old('email') }}">
                </div>

                <!-- Message -->
                <div class="relative group">
                    <label for="message" class="block mb-2 font-semibold text-gray-700">Message</label>
                    <span class="absolute top-12 left-3 text-gray-400 group-focus-within:text-blue-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8a9 9 0 100-18 9 9 0 000 18z"/>
                        </svg>
                    </span>
                    <textarea id="message" name="message" rows="5"
                              class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                              required>{{ old('message') }}</textarea>
                </div>

                <!-- Bouton -->
                <button id="submitBtn" type="submit"
                        class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition flex items-center justify-center gap-2 shadow">
                    ✉️ Envoyer le message
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
    btn.disabled = true;
    btn.innerHTML = "⏳ Envoi en cours...";
});
</script>
@endsection
