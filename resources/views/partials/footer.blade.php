<footer class="bg-gradient-to-b from-gray-900 to-gray-800 text-gray-300 mt-16">
  <div class="max-w-6xl mx-auto px-4 py-12 flex flex-col items-center space-y-8">

    <!-- Logo -->
<a href="{{ route('home') }}" class="hover:opacity-90 transition">
  <div class="bg-white p-4 rounded-full shadow-lg">
    <img src="{{ asset('image/Logo-faby.png') }}" 
         alt="Logo Corsica Faby Design" 
         class="h-24 w-auto">
  </div>
</a>




    <!-- Liens de contact -->
    <div class="text-gray-400 text-center space-y-1 text-sm sm:text-base">
      <p>
        <a href="mailto:corsicafabydesign@gmail.com" class="hover:text-white transition">
          corsicafabydesign@gmail.com
        </a>
      </p>
      <p>
        <a href="tel:+33669547877" class="hover:text-white transition">
          06 69 54 78 77
        </a>
      </p>
    </div>

    <!-- Réseaux sociaux -->
    <div class="flex flex-wrap justify-center gap-4">
      <a href="https://www.facebook.com/profile.php?id=61576705104088" target="_blank" aria-label="Facebook"
         class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-700 text-gray-300 hover:bg-blue-600 hover:text-white transition">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#" aria-label="Instagram"
         class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-700 text-gray-300 hover:bg-pink-500 hover:text-white transition">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://www.linkedin.com/company/corsica-faby-design/?viewAsMember=true" target="_blank" aria-label="LinkedIn"
         class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-700 text-gray-300 hover:bg-blue-500 hover:text-white transition">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>

    <!-- Liens légaux -->
    <div class="flex flex-col sm:flex-row sm:flex-wrap justify-center gap-3 sm:gap-6 text-sm text-gray-400 text-center">
      <a href="{{ url('/mentions-legales') }}" class="hover:text-white transition">Mentions légales</a>
      <a href="{{ url('/confidentialite') }}" class="hover:text-white transition">Politique de confidentialité</a>
      <a href="{{ url('/cgv') }}" class="hover:text-white transition">CGV</a>
    </div>

    <!-- Copyright -->
    <p class="text-xs text-gray-500 text-center">
      &copy; {{ date('Y') }} Corsica Faby Design. Tous droits réservés.
    </p>
  </div>
</footer>
