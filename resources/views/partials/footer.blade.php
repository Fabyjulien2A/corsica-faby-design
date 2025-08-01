<footer class="bg-white border-t mt-16">
    <div class="max-w-6xl mx-auto px-4 py-12 flex flex-col items-center space-y-6">

        <!-- Logo centré -->
        <a href="{{ route('home') }}">
            <img src="{{ asset('image/Logo-faby.png') }}" alt="Logo Corsica Faby Design" class="h-20 w-auto">
        </a>

        <!-- Liens de contact -->
        <div class="text-gray-600 text-sm text-center space-y-1">
            <p>corsicafabydesign@gmail.com</p>
            <p>06 69 54 78 77</p>
        </div>

        <!-- Réseaux sociaux -->
        <div class="flex space-x-4 text-gray-500 text-xl">
            <a href="https://www.facebook.com/profile.php?id=61576705104088" class="hover:text-blue-600 transition" aria-label="Facebook" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="hover:text-blue-600 transition" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/company/corsica-faby-design/?viewAsMember=true" class="hover:text-blue-600 transition" aria-label="LinkedIn" target="_blank">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>

        <!-- Liens légaux -->
        <div class="flex flex-wrap justify-center gap-x-4 gap-y-2 text-sm text-gray-500">
            <a href="{{ url('/mentions-legales') }}" class="hover:underline">Mentions légales</a>
            <a href="{{ url('/confidentialite') }}" class="hover:underline">Politique de confidentialité</a>
            <a href="{{ url('/cgv') }}" class="hover:underline">CGV</a>
        </div>

        <!-- Copyright -->
        <p class="text-xs text-gray-400 text-center">
            &copy; {{ date('Y') }} Corsica Faby Design. Tous droits réservés.
        </p>
    </div>
</footer>

