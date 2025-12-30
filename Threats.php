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
  </style>
</head>
<body class="bg-gray-50">

  <!-- Navbar -->
  <header class="fixed top-0 w-full bg-white shadow-md z-50 border-b border-blue-100">
    <nav class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <div class="flex items-center justify-center gap-3">
        <i data-lucide="waves" class="w-12 h-12 text-[#015b8a] drop-shadow-md"></i>
        <div class="text-4xl font-bold text-[#015b8a] tracking-wide drop-shadow-md" style="font-family: 'Apple Chancery', cursive;">
          MantaFlow
        </div>
      </div>

      <div class="hidden md:flex space-x-8 text-gray-700 font-medium">
        <a href="/" class="hover:text-[#015b8a] transition">Home</a>
        <a href="index.php#about" class="hover:text-[#015b8a] transition">About</a>
        <a href="index.php#species" class="hover:text-[#015b8a] transition">Species</a>
        <a href="Threats.php" class="hover:text-[#015b8a] transition">Threats</a>
        <a href="event.php" class="hover:text-[#015b8a] transition">Events</a>
        <a href="index.php#contact" class="hover:text-[#015b8a] transition">Contact</a>
      </div>
     <button id="menu-btn" class="md:hidden text-deep-ocean text-2xl">☰</button>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden bg-white shadow-md border-t border-gray-100 md:hidden">
      <a href="index.php#home" class="block px-6 py-3 hover:bg-gray-100">Home</a>
      <a href="index.php#about" class="block px-6 py-3 hover:bg-gray-100">About</a>
      <a href="species.php" class="block px-6 py-3 hover:bg-gray-100">Species</a>
      <a href="Threats.php" class="block px-6 py-3 hover:bg-gray-100">Threats</a>
      <a href="event.php" class="block px-6 py-3 hover:bg-gray-100">Events</a>
      <a href="index.php#contact" class="block px-6 py-3 hover:bg-gray-100">Contact</a>
    </div>
  </header>

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

  <!-- Background Image -->
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0fLdwvL70XYBLmeWf106fMWMmTfExn-nt9g&s" alt="Marine life affected by plastic pollution" 
       class="absolute inset-0 w-full h-full object-cover opacity-30 pointer-events-none rounded-2xl">

  <!-- Overlay to make text readable -->
  <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent rounded-2xl"></div>

  <!-- Content -->
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

  <!-- Background Image -->
  <img src="https://www.environmentalconsortium.org/wp-content/uploads/2024/06/ShapingaMore.jpg" alt="Overfishing impact" 
       class="absolute inset-0 w-full h-full object-cover opacity-30 pointer-events-none rounded-2xl">

  <!-- Overlay -->
  <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent rounded-2xl"></div>

  <!-- Content -->
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

  <!-- Background Image -->
  <img src="https://avaada.com/wp-content/uploads/7-Secrets-About-the-Causes-of-Climate-Change.jpg" alt="Climate Change Impact" 
       class="absolute inset-0 w-full h-full object-cover opacity-30 pointer-events-none rounded-2xl">

  <!-- Overlay -->
  <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent rounded-2xl"></div>

  <!-- Content -->
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

  <!-- Background Image -->
  <img src="data:image/jpeg;base64,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" alt="Habitat Destruction" 
       class="absolute inset-0 w-full h-full object-cover opacity-30 pointer-events-none rounded-2xl">

  <!-- Overlay -->
  <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent rounded-2xl"></div>

  <!-- Content -->
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

  <!-- Background Image -->
  <img src="https://thumbs.dreamstime.com/b/toxic-waste-leaking-rusty-pipe-ocean-green-foamy-chemical-pollution-leaking-corroded-pipe-sea-393100773.jpg" alt="Chemical Pollution" 
       class="absolute inset-0 w-full h-full object-cover opacity-30 pointer-events-none rounded-2xl">

  <!-- Overlay -->
  <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent rounded-2xl"></div>

  <!-- Content -->
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

  <!-- Background Image -->
  <img src="https://wwfeu.awsassets.panda.org/img/large_ww2122572_resize_749750.jpg" alt="Bycatch" 
       class="absolute inset-0 w-full h-full object-cover opacity-30 pointer-events-none rounded-2xl">

  <!-- Overlay -->
  <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent rounded-2xl"></div>

  <!-- Content -->
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
    <!-- Awareness -->
    <div class="bg-white/10 p-6 rounded-2xl backdrop-blur-md shadow-md hover:bg-white/20 transition">
      <h3 class="text-2xl font-semibold mb-2 text-seafoam">🌿 Awareness</h3>
      <p class="text-sm opacity-90">
        Learn about major ocean threats such as pollution, bycatch, and coral bleaching — and why they matter.
      </p>
    </div>

    <!-- Solutions -->
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
    <!-- Card 1 -->
    <div class="flex flex-col items-center">
      <div class="w-40 h-40 rounded-full bg-white/10 backdrop-blur-md shadow-md flex items-center justify-center mb-4 border border-white/20 hover:scale-105 transition">
        <i data-lucide="globe-2" class="w-12 h-12 text-seafoam"></i>
      </div>
      <h3 class="text-xl font-semibold mb-2 text-seafoam">About Website</h3>
      <p class="text-sm text-blue-100 max-w-xs">
        The <strong>Marine Life Awareness Portal</strong> is a web-based educational project designed to inform and engage users about ocean conservation, endangered species, and sustainable solutions.
      </p>
    </div>

    <!-- Card 2 -->
    <div class="flex flex-col items-center">
      <div class="w-40 h-40 rounded-full bg-white/10 backdrop-blur-md shadow-md flex items-center justify-center mb-4 border border-white/20 hover:scale-105 transition">
        <i data-lucide="users" class="w-12 h-12 text-seafoam"></i>
      </div>
      <h3 class="text-xl font-semibold mb-2 text-seafoam">Why It’s Useful</h3>
      <p class="text-sm text-blue-100 max-w-xs">
        This platform raises awareness among students, researchers, and the public. It helps people understand marine challenges and motivates eco-friendly action to save ocean life.
      </p>
    </div>

    <!-- Card 3 -->
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

    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
      menuBtn.textContent = mobileMenu.classList.contains('hidden') ? 'Menu' : 'Close';
    });
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