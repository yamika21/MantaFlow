<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Threats to Oceans | MantaFlow</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
 
  <style>
    body { font-family: 'Inter', sans-serif; }
    .bg-ocean-gradient {
      background: linear-gradient(135deg, #0a3d62 0%, #1e6b9a 30%, #3c9bc4 60%, #6dd5ed 100%);
    }
    .threat-card {
      transition: all 0.4s ease;
    }
    .threat-card:hover {
      transform: translateY(-12px);
      box-shadow: 0 25px 40px rgba(0,0,0,0.18);
    }
    .text-seafoam { color: #6dd5ed; }
  </style>
</head>
<body class="bg-gray-50">
 <!-- Navbar -->
<header class="fixed top-0 w-full bg-white shadow-md z-50 border-b border-blue-100">
  <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">
    <!-- Logo -->
    <div class="flex items-center gap-2 sm:gap-3">
      <i data-lucide="waves" class="w-9 h-9 sm:w-10 sm:h-10 md:w-12 md:h-12 text-[#015b8a] drop-shadow-md"></i>
      <div
        class="text-xl sm:text-2xl md:text-4xl font-bold text-[#015b8a] tracking-wide drop-shadow-md"
        style="font-family: 'Apple Chancery', cursive;">
        MantaFlow
      </div>
    </div>
    <!-- Desktop Menu -->
    <div class="hidden md:flex space-x-6 lg:space-x-8 text-gray-700 font-medium">
      <a href="index.php" class="hover:text-[#015b8a] transition">Home</a>
      <a href="index.php#about" class="hover:text-[#015b8a] transition">About</a>
      <a href="index.php#species" class="hover:text-[#015b8a] transition">Species</a>
      <a href="Threats.php" class="hover:text-[#015b8a] transition">Threats</a>
      <a href="event.php" class="hover:text-[#015b8a] transition">Events</a>
      <a href="index.php#contact" class="hover:text-[#015b8a] transition">Contact</a>
    </div>
    <!-- Mobile Menu Button -->
    <button id="menu-btn"
      class="md:hidden flex items-center justify-center w-10 h-10 rounded-lg border border-blue-200 text-[#015b8a] hover:bg-blue-50 transition"
      aria-label="Toggle menu">
      ☰
    </button>
  </nav>
  <!-- Mobile Menu -->
  <div id="mobile-menu"
    class="hidden md:hidden bg-white shadow-lg border-t border-gray-100">
    <a href="index.php" class="block px-6 py-3 hover:bg-gray-100">Home</a>
    <a href="index.php#about" class="block px-6 py-3 hover:bg-gray-100">About</a>
    <a href="species.php" class="block px-6 py-3 hover:bg-gray-100">Species</a>
    <a href="Threats.php" class="block px-6 py-3 hover:bg-gray-100">Threats</a>
    <a href="event.php" class="block px-6 py-3 hover:bg-gray-100">Events</a>
    <a href="index.php#contact" class="block px-6 py-3 hover:bg-gray-100">Contact</a>
  </div>
</header>
<script>
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
  window.addEventListener('resize', () => {
    if (window.innerWidth >= 768) {
      mobileMenu.classList.add('hidden');
    }
  });
</script>
  <!-- Hero Section -->
  <section class="bg-ocean-gradient text-white py-32 px-6 relative overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="max-w-7xl mx-auto text-center relative z-10">
      <h1 class="text-5xl md:text-6xl font-bold mb-6 drop-shadow-lg" style="font-family: 'Apple Chancery', cursive;">Threats to Our Oceans</h1>
      <p class="text-xl md:text-2xl opacity-90 max-w-3xl mx-auto">
        The ocean is in crisis. Here are the biggest dangers — and how to fight back.
      </p>
    </div>
  </section>
  <!-- Threats Section -->
  <section class="py-20 px-6">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-4xl md:text-5xl font-bold text-[#015b8a] mb-4" style="font-family: 'Apple Chancery', cursive;">Major Ocean Threats</h2>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-12">
        Understanding the problem is the first step to solving it.
      </p>
      <div class="grid md:grid-cols-3 gap-8">
       <!-- 1. Plastic Pollution -->
<div class="threat-card relative p-8 rounded-2xl shadow-lg flex flex-col overflow-hidden bg-gradient-to-br from-red-50 to-orange-50">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0fLdwvL70XYBLmeWf106fMWMmTfExn-nt9g&s" alt="Marine life affected by plastic pollution"
       class="absolute inset-0 w-full h-full object-cover opacity-30 pointer-events-none rounded-2xl">
  <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent rounded-2xl"></div>
  <div class="relative z-10">
    <div class="w-16 h-16 mx-auto mb-4 bg-[#015b8a] rounded-full flex items-center justify-center text-white">
      <i data-lucide="trash-2" class="w-8 h-8"></i>
    </div>
    <h3 class="text-2xl font-bold text-[#015b8a] mb-3">Plastic Pollution</h3>
    <p class="text-gray-100 flex-grow">
      8–14 million tons enter oceans yearly. Kills 1M+ seabirds and 100K+ marine mammals.
    </p>
    <a href="solution.html"
       class="mt-6 inline-block bg-ocean-gradient text-white px-6 py-3 rounded-full font-semibold shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300">
      Find Solution
    </a>
  </div>
</div>
<!-- 2. Overfishing -->
<div class="threat-card relative p-8 rounded-2xl shadow-lg flex flex-col overflow-hidden bg-gradient-to-br from-orange-50 to-amber-50">
  <img src="https://www.environmentalconsortium.org/wp-content/uploads/2024/06/ShapingaMore.jpg" alt="Overfishing impact"
       class="absolute inset-0 w-full h-full object-cover opacity-30 pointer-events-none rounded-2xl">
  <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent rounded-2xl"></div>
  <div class="relative z-10">
    <div class="w-16 h-16 mx-auto mb-4 bg-[#015b8a] rounded-full flex items-center justify-center text-white">
      <i data-lucide="fish" class="w-8 h-8"></i>
    </div>
    <h3 class="text-2xl font-bold text-[#015b8a] mb-3">Overfishing</h3>
    <p class="text-gray-100 flex-grow">
      33% of global fish stocks are overexploited. Threatens food security.
    </p>
    <a href="solution.html"
       class="mt-6 inline-block bg-ocean-gradient text-white px-6 py-3 rounded-full font-semibold shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300">
      Find Solution
    </a>
  </div>
</div>
      <!-- 3. Climate Change -->
<div class="threat-card relative p-8 rounded-2xl shadow-lg flex flex-col overflow-hidden bg-gradient-to-br from-amber-50 to-yellow-50">
  <img src="https://avaada.com/wp-content/uploads/7-Secrets-About-the-Causes-of-Climate-Change.jpg" alt="Climate Change Impact"
       class="absolute inset-0 w-full h-full object-cover opacity-30 pointer-events-none rounded-2xl">
  <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent rounded-2xl"></div>
  <div class="relative z-10">
    <div class="w-16 h-16 mx-auto mb-4 bg-[#015b8a] rounded-full flex items-center justify-center text-white">
      <i data-lucide="thermometer" class="w-8 h-8"></i>
    </div>
    <h3 class="text-2xl font-bold text-[#015b8a] mb-3">Climate Change</h3>
    <p class="text-gray-100 flex-grow">
      90% of coral reefs could die by 2050 due to warming and acidification.
    </p>
    <a href="solution.html"
       class="mt-6 inline-block bg-ocean-gradient text-white px-6 py-3 rounded-full font-semibold shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300">
      Find Solution
    </a>
  </div>
</div>
<!-- 4. Habitat Loss -->
<div class="threat-card relative p-8 rounded-2xl shadow-lg flex flex-col overflow-hidden bg-gradient-to-br from-purple-50 to-pink-50">
  <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Habitat Destruction"
       class="absolute inset-0 w-full h-full object-cover opacity-30 pointer-events-none rounded-2xl">
  <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent rounded-2xl"></div>
  <div class="relative z-10">
    <div class="w-16 h-16 mx-auto mb-4 bg-[#015b8a] rounded-full flex items-center justify-center text-white">
      <i data-lucide="home" class="w-8 h-8"></i>
    </div>
    <h3 class="text-2xl font-bold text-[#015b8a] mb-3">Habitat Loss</h3>
    <p class="text-gray-100 flex-grow">
      Mangroves, seagrass, and coral homes destroyed by development.
    </p>
    <a href="solution.html"
       class="mt-6 inline-block bg-ocean-gradient text-white px-6 py-3 rounded-full font-semibold shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300">
      Find Solution
    </a>
  </div>
</div>
<!-- 5. Chemical Pollution -->
<div class="threat-card relative p-8 rounded-2xl shadow-lg flex flex-col overflow-hidden bg-gradient-to-br from-pink-50 to-rose-50">
  <img src="https://thumbs.dreamstime.com/b/toxic-waste-leaking-rusty-pipe-ocean-green-foamy-chemical-pollution-leaking-corroded-pipe-sea-393100773.jpg" alt="Chemical Pollution"
       class="absolute inset-0 w-full h-full object-cover opacity-30 pointer-events-none rounded-2xl">
  <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent rounded-2xl"></div>
  <div class="relative z-10">
    <div class="w-16 h-16 mx-auto mb-4 bg-[#015b8a] rounded-full flex items-center justify-center text-white">
      <i data-lucide="flask-conical" class="w-8 h-8"></i>
    </div>
    <h3 class="text-2xl font-bold text-[#015b8a] mb-3">Chemical Pollution</h3>
    <p class="text-gray-100 flex-grow">
      Oil spills, fertilizers, and toxins create deadly ocean dead zones.
    </p>
    <a href="solution.html"
       class="mt-6 inline-block bg-ocean-gradient text-white px-6 py-3 rounded-full font-semibold shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300">
      Find Solution
    </a>
  </div>
</div>
       <!-- 6. Bycatch -->
<div class="threat-card relative p-8 rounded-2xl shadow-lg flex flex-col overflow-hidden bg-gradient-to-br from-rose-50 to-red-50">
  <img src="https://wwfeu.awsassets.panda.org/img/large_ww2122572_resize_749750.jpg" alt="Bycatch"
       class="absolute inset-0 w-full h-full object-cover opacity-30 pointer-events-none rounded-2xl">
  <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent rounded-2xl"></div>
  <div class="relative z-10">
    <div class="w-16 h-16 mx-auto mb-4 bg-[#015b8a] rounded-full flex items-center justify-center text-white">
      <i data-lucide="anchor" class="w-8 h-8"></i>
    </div>
    <h3 class="text-2xl font-bold text-[#015b8a] mb-3">Bycatch</h3>
    <p class="text-gray-100 flex-grow">
      Dolphins, turtles, and sharks killed in nets meant for fish.
    </p>
    <a href="solution.html"
       class="mt-6 inline-block bg-ocean-gradient text-white px-6 py-3 rounded-full font-semibold shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300">
      Find Solution
    </a>
  </div>
</div>
      </div>
    </div>
  </section>
  <!-- 🌊 About Threats & Solutions Section -->
<section id="about-threats" class="relative py-20 px-6 bg-gradient-to-b from-[#015b8a] to-[#002f4b] text-white overflow-hidden">
  <div class="max-w-6xl mx-auto text-center">
    <h2 class="text-4xl md:text-5xl font-bold mb-6" style="font-family: 'Apple Chancery', cursive;">
      Ocean Threats & Solutions
    </h2>
    <p class="text-lg md:text-xl mb-6 max-w-3xl mx-auto opacity-90">
      Our oceans are under threat from human activities — plastic pollution, overfishing, habitat loss,
      and more. The <strong>Marine Life Awareness Portal</strong> helps you explore these issues and
      discover sustainable solutions to protect marine ecosystems.
    </p>
    <p class="text-base md:text-lg max-w-2xl mx-auto text-blue-100 italic">
      “The sea, once it casts its spell, holds one in its net of wonder forever.” – Jacques Cousteau
    </p>
  </div>
  <!-- Highlights Grid -->
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 mt-12 text-center mb-32">
    <div class="bg-white/10 p-6 rounded-2xl backdrop-blur-md shadow-md hover:bg-white/20 transition">
      <h3 class="text-2xl font-semibold mb-2 text-seafoam">🌿 Awareness</h3>
      <p class="text-sm opacity-90">
        Learn about major ocean threats such as pollution, bycatch, and coral bleaching — and why they matter.
      </p>
    </div>
    <div class="bg-white/10 p-6 rounded-2xl backdrop-blur-md shadow-md hover:bg-white/20 transition">
      <h3 class="text-2xl font-semibold mb-2 text-seafoam">💡 Solutions</h3>
      <p class="text-sm opacity-90">
        Each threat includes a <strong>“Find Solution”</strong> button leading to real-world conservation tips,
        eco-friendly practices, and global initiatives you can support.
      </p>
    </div>
  </div>
  <!-- 🔵 Circular Info Grid - About Website -->
  <div class="max-w-5xl mx-auto grid md:grid-cols-3 gap-10 text-center mb-40">
    <div class="flex flex-col items-center">
      <div class="w-40 h-40 rounded-full bg-white/10 backdrop-blur-md shadow-md flex items-center justify-center mb-4 border border-white/20 hover:scale-105 transition">
        <i data-lucide="globe-2" class="w-12 h-12 text-seafoam"></i>
      </div>
      <h3 class="text-xl font-semibold mb-2 text-seafoam">About Website</h3>
      <p class="text-sm text-blue-100 max-w-xs">
        The <strong>Marine Life Awareness Portal</strong> is a web-based educational project designed to inform and engage users about ocean conservation, endangered species, and sustainable solutions.
      </p>
    </div>
    <div class="flex flex-col items-center">
      <div class="w-40 h-40 rounded-full bg-white/10 backdrop-blur-md shadow-md flex items-center justify-center mb-4 border border-white/20 hover:scale-105 transition">
        <i data-lucide="users" class="w-12 h-12 text-seafoam"></i>
      </div>
      <h3 class="text-xl font-semibold mb-2 text-seafoam">Why It’s Useful</h3>
      <p class="text-sm text-blue-100 max-w-xs">
        This platform raises awareness among students, researchers, and the public. It helps people understand marine challenges and motivates eco-friendly action to save ocean life.
      </p>
    </div>
    <div class="flex flex-col items-center">
      <div class="w-40 h-40 rounded-full bg-white/10 backdrop-blur-md shadow-md flex items-center justify-center mb-4 border border-white/20 hover:scale-105 transition">
        <i data-lucide="compass" class="w-12 h-12 text-seafoam"></i>
      </div>
      <h3 class="text-xl font-semibold mb-2 text-seafoam">How to Use</h3>
      <p class="text-sm text-blue-100 max-w-xs">
        Navigate through sections such as <strong>Species</strong>, <strong>Threats</strong>, and <strong>Solutions</strong>. Click cards to explore detailed info and learn how you can take action for marine preservation.
      </p>
    </div>
  </div>
  <!-- 🌊 Ocean Wave Divider -->
  <div class="absolute bottom-0 left-0 right-0">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150">
      <path fill="#fff" fill-opacity="1"
        d="M0,96L80,112C160,128,320,160,480,144C640,128,800,64,960,42.7C1120,21,1280,43,1360,53.3L1440,64L1440,160L0,160Z">
      </path>
    </svg>
  </div>
</section>
  <!-- Scripts -->
  <script src="https://unpkg.com/lucide@latest"></script>
  <script>
    lucide.createIcons();
  </script>
 
 <!-- Footer -->
  <footer class="relative bg-white text-[#015b8a] py-12 px-6 overflow-hidden">
    <div class="absolute inset-0 -z-10">
      <img src="images/r.jpeg" alt="Marine Background" class="w-full h-full object-cover opacity-40">
    </div>
    <div class="max-w-7xl mx-auto text-center relative z-10">
      <h3 class="text-2xl md:text-3xl font-bold text-seafoam mb-2" style="font-family: 'Apple Chancery', cursive;">MantaFlow</h3>
      <p class="text-sm md:text-base opacity-90 mb-4">Together we can protect and preserve our blue planet.</p>
      <p class="text-xs md:text-sm opacity-70">© 2025 MarineLife Portal. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>