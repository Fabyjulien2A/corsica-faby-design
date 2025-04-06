<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-6 flex justify-between items-center">
        <a href="{{ route('home') }}" class="block">
            <img src="{{ asset('image/Logo-faby.png') }}" alt="Corsica Faby Design" class="h-32 w-auto">
        </a>

        <ul class="hidden md:flex space-x-6 text-gray-700 font-medium text-lg">
            <li><a href="{{ route('home') }}" class="hover:text-blue-600">Accueil</a></li>
            <li><a href="{{ route('services') }}" class="hover:text-blue-600">Services</a></li>
            <li><a href="{{ route('realisations') }}" class="hover:text-blue-600">Réalisations</a></li>
            <li><a href="{{ route('contact') }}" class="hover:text-blue-600">Contact</a></li>
        </ul>
    </div>
</nav>


