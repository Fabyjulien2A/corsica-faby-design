@extends('layouts.app')

@section('title', 'Contact | Corsica Faby Design')
@section('meta_description', 'Un projet web ? Contactez-moi pour un devis gratuit et personnalisé.')

@section('content')

<section class="py-20 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Titre -->
        <div class="text-center mb-14">
            <h1 class="text-4xl font-extrabold text-gray-800 mb-4">
                Parlons de votre projet 🚀
            </h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Décrivez-moi votre besoin et je vous réponds rapidement avec une solution adaptée.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-10 items-start">

            <!-- Bloc gauche (infos) -->
            <div class="space-y-8">

                <div class="bg-white p-8 rounded-2xl shadow-sm">
                    <h2 class="text-2xl font-bold mb-4 text-gray-800">
                        Contact rapide
                    </h2>

                    <p class="text-gray-600 mb-6">
                        Vous pouvez me contacter directement :
                    </p>

                    <div class="space-y-4 text-lg">
                        <a href="mailto:corsicafabydesign@gmail.com" class="block text-blue-600 hover:underline">
                            📧 corsicafabydesign@gmail.com
                        </a>

                        <a href="tel:+33669547877" class="block text-blue-600 hover:underline">
                            📞 06 69 54 78 77
                        </a>
                    </div>

                    <p class="mt-6 text-sm text-gray-500">
                        Réponse sous 24h garantie ✔️
                    </p>
                </div>

                <!-- Avantages -->
                <div class="bg-blue-600 text-white p-8 rounded-2xl shadow">
                    <h3 class="text-xl font-bold mb-4">
                        Pourquoi me contacter ?
                    </h3>

                    <ul class="space-y-3 text-white/90">
                        <li>✔️ Devis gratuit et rapide</li>
                        <li>✔️ Accompagnement personnalisé</li>
                        <li>✔️ Solutions adaptées à votre budget</li>
                    </ul>
                </div>

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

                <form id="contactForm" method="POST" action="{{ route('contact.send') }}" class="space-y-5">
                    @csrf

                    <!-- Nom -->
                    <input type="text" name="nom" placeholder="Votre nom"
                           class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500"
                           required value="{{ old('nom') }}">

                    <!-- Email -->
                    <input type="email" name="email" placeholder="Votre email"
                           class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500"
                           required value="{{ old('email') }}">

                    <!-- Téléphone -->
                    <input type="text" name="telephone" placeholder="Téléphone (optionnel)"
                           class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500"
                           value="{{ old('telephone') }}">

                    <!-- Type projet -->
                    <select name="type_projet"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500">
                        <option value="">Type de projet</option>
                        <option>Site vitrine</option>
                        <option>E-commerce</option>
                        <option>Maintenance</option>
                        <option>Autre</option>
                    </select>

                    <!-- Message -->
                    <textarea name="message" rows="5" placeholder="Décrivez votre projet..."
                              class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500"
                              required>{{ old('message') }}</textarea>

                    <!-- Bouton -->
                    <button id="submitBtn" type="submit"
                            class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition flex justify-center items-center gap-2 shadow">
                        <span id="btnText">Envoyer le message</span>
                    </button>

                    <p class="text-center text-sm text-gray-500">
                        Réponse rapide garantie ⏳
                    </p>

                </form>
            </div>

        </div>
    </div>
</section>

<script>
document.getElementById("contactForm").addEventListener("submit", function() {
    const btn = document.getElementById("submitBtn");
    const txt = document.getElementById("btnText");
    btn.disabled = true;
    txt.textContent = "Envoi en cours...";
});
</script>

@endsection