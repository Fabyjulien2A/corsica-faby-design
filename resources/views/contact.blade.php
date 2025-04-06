@extends('layouts.app')

@section('title', 'Contact – Création de site internet en Corse')
@section('meta_description', 'Contactez Corsica Faby Design pour votre projet web en Corse. Création de site internet vitrine ou e-commerce, maintenance, conseils personnalisés.')

@section('content')
    <section class="py-16 bg-white">
        <div class="max-w-2xl mx-auto px-4">
            <h1 class="text-4xl font-bold text-gray-800 mb-6 text-center">Me contacter</h1>

            <p class="text-gray-600 text-center mb-10">
                Une idée, un projet, une question ? Remplissez le formulaire ci-dessous ou contactez-moi directement.
            </p>

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

            <form method="POST" action="{{ route('contact.send') }}" class="space-y-6">
                @csrf

                <div>
                    <label for="nom" class="block mb-1 font-medium">Nom</label>
                    <input type="text" id="nom" name="nom" class="w-full border border-gray-300 rounded px-4 py-2" required value="{{ old('nom') }}">
                </div>

                <div>
                    <label for="email" class="block mb-1 font-medium">Email</label>
                    <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded px-4 py-2" required value="{{ old('email') }}">
                </div>

                <div>
                    <label for="message" class="block mb-1 font-medium">Message</label>
                    <textarea id="message" name="message" rows="5" class="w-full border border-gray-300 rounded px-4 py-2" required>{{ old('message') }}</textarea>
                </div>

                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 transition">
                    Envoyer
                </button>
            </form>

            <div class="mt-12 text-center text-sm text-gray-600">
                📧 <a href="mailto:contact@corsicafabydesign.fr" class="text-blue-600 hover:underline">corsicafabydesign@gmail.com</a><br>
                📱 06 69 54 78 77 
            </div>
        </div>
    </section>
@endsection
