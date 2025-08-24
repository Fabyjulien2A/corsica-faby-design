<!-- Bandeau supérieur défilant avec fondu -->
<div class="relative bg-blue-600 text-white text-sm overflow-hidden">
  <!-- Masques de fondu gauche/droite -->
  <div class="absolute top-0 left-0 h-full w-16 bg-gradient-to-r from-blue-600 to-transparent z-10"></div>
  <div class="absolute top-0 right-0 h-full w-16 bg-gradient-to-l from-blue-600 to-transparent z-10"></div>

  <div class="max-w-7xl mx-auto px-0">
    <div class="marquee flex">
      <!-- Piste 1 -->
      <div class="min-w-full flex items-center justify-center gap-8 py-2">
        <span class="font-medium">🚀 Devis gratuit sous 24h</span>
        <a href="mailto:corsicafabydesign@gmail.com" class="underline-offset-2 hover:underline">✉️ corsicafabydesign@gmail.com</a>
        <a href="tel:+33669547877" class="underline-offset-2 hover:underline">📞 06 69 54 78 77</a>
      </div>
      <!-- Piste 2 -->
      <div class="min-w-full flex items-center justify-center gap-8 py-2">
        <span class="font-medium">🚀 Devis gratuit sous 24h</span>
        <a href="mailto:corsicafabydesign@gmail.com" class="underline-offset-2 hover:underline">✉️ corsicafabydesign@gmail.com</a>
        <a href="tel:+33669547877" class="underline-offset-2 hover:underline">📞 06 69 54 78 77</a>
      </div>
    </div>
  </div>
</div>

<!-- Navigation principale -->
<nav class="bg-gradient-to-r from-gray-900 to-gray-800 shadow-md">
  <div class="max-w-7xl mx-auto px-6 py-4 md:py-5 flex items-center justify-between">

    <!-- Logo avec fond rond blanc -->
    <a href="{{ route('home') }}" class="block">
      <div class="bg-white rounded-full p-2 flex items-center justify-center shadow">
        <img src="{{ asset('image/Logo-faby.png') }}" alt="Corsica Faby Design"
             class="h-24 md:h-28 w-auto">
      </div>
    </a>

    <!-- Menu desktop -->
    <ul class="hidden md:flex items-center space-x-10 text-white font-medium text-lg">
      <li><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a></li>
      <li><a href="{{ route('realisations') }}" class="nav-link {{ request()->routeIs('realisations') ? 'active' : '' }}">Réalisations</a></li>
      <li><a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
    </ul>

    <!-- Menu burger mobile -->
    <button id="menu-btn" class="md:hidden p-2 -mr-2 text-white" aria-label="Ouvrir le menu">
      <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>
  </div>

  <!-- Menu mobile -->
  <div id="mobile-menu" class="hidden md:hidden border-t bg-gray-900 text-white">
    <ul class="px-6 py-6 space-y-4 font-medium text-lg">
      <li><a href="{{ route('home') }}" class="block hover:text-blue-400">Accueil</a></li>
      <li><a href="{{ route('services') }}" class="block hover:text-blue-400">Services</a></li>
      <li><a href="{{ route('realisations') }}" class="block hover:text-blue-400">Réalisations</a></li>
      <li><a href="{{ route('contact') }}" class="block hover:text-blue-400">Contact</a></li>
    </ul>
  </div>
</nav>


<style>
/* Style du menu avec soulignement animé */
.nav-link {
  position: relative;
  padding-bottom: 4px;
  transition: color 0.3s ease;
}
.nav-link::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 0%;
  height: 2px;
  background-color: #3b82f6; /* bleu clair */
  transition: width 0.3s ease;
}
.nav-link:hover::after,
.nav-link.active::after {
  width: 100%;
}
.nav-link.active {
  color: #3b82f6; /* texte bleu si actif */
}
</style>










<script>
  document.getElementById('menu-btn').addEventListener('click', () => {
    document.getElementById('mobile-menu').classList.toggle('hidden');
  });
</script>

<style>
@keyframes marqueeX {
  from { transform: translateX(0); }
  to   { transform: translateX(-100%); }
}
.marquee {
  width: 200%;
  animation: marqueeX 20s linear infinite;
  will-change: transform;
}
.marquee:hover { animation-play-state: paused; }
@media (prefers-reduced-motion: reduce) {
  .marquee { animation: none; transform: none; }
}
</style>
