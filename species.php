<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Marine Species | MantaFlow</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/lucide@latest"></script>
  <style>
    body { font-family: 'Inter', sans-serif; }
    .playfair { font-family: 'Playfair Display', serif; }
    .bg-ocean-gradient { 
      background: linear-gradient(135deg, #0a3d62 0%, #1e6b9a 30%, #3c9bc4 60%, #6dd5ed 100%);
    }
    .species-card {
      transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      transform: translateY(0);
      opacity: 1;
      display: block;
    }
    .species-card:hover {
      transform: translateY(-20px) scale(1.03);
      box-shadow: 0 30px 60px rgba(0,0,0,0.2);
      z-index: 10;
    }
    .species-card::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: linear-gradient(135deg, rgba(255,255,255,0.1), rgba(0,0,0,0.1));
      opacity: 0;
      transition: opacity 0.4s ease;
      border-radius: 1.5rem;
      pointer-events: none;
    }
    .species-card:hover::before {
      opacity: 1;
    }
    .filter-btn {
      transition: all 0.3s ease;
    }
    .filter-active {
      background: #015b8a !important;
      color: white !important;
      box-shadow: 0 10px 20px rgba(1,91,138,0.3);
    }
    .rarity-dot {
      width: 12px; height: 12px; border-radius: 50%; display: inline-block; margin-right: 6px;
    }
    .endangered { background: #dc2626; }
    .vulnerable { background: #f59e0b; }
    .safe { background: #10b981; }
    .bubble {
      position: absolute;
      border-radius: 50%;
      background: rgba(255,255,255,0.1);
      animation: float 15s infinite linear;
      backdrop-filter: blur(5px);
    }
    @keyframes float {
      0% { transform: translateY(100vh) translateX(-50%); opacity: 0; }
      10% { opacity: 1; }
      90% { opacity: 1; }
      100% { transform: translateY(-100px) translateX(50%); opacity: 0; }
    }
  </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-teal-50 min-h-screen">

  <!-- Navbar -->
  <header class="fixed top-0 w-full bg-white/90 backdrop-blur-md shadow-lg z-50 border-b border-blue-100">
    <nav class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <div class="flex items-center gap-3">
        <i data-lucide="waves" class="w-10 h-10 md:w-12 md:h-12 text-[#015b8a] drop-shadow-md"></i>
        <div class="text-2xl md:text-4xl font-bold text-[#015b8a] tracking-wide drop-shadow-md playfair" style="font-family: 'Apple Chancery', cursive;">MantaFlow</div>
      </div>
      <div class="hidden md:flex space-x-6 lg:space-x-8 text-gray-700 font-medium text-sm lg:text-base">
        <a href="/" class="hover:text-[#015b8a] transition">Home</a>
        <a href="index.php#about" class="hover:text-[#015b8a] transition">About</a>
        <a href="species.php" class="text-[#015b8a] font-bold">Species</a>
        <a href="Threats.php" class="hover:text-[#015b8a] transition">Threats</a>
        <a href="event.php" class="hover:text-[#015b8a] transition">Events</a>
        <a href="index.php#contact" class="hover:text-[#015b8a] transition">Contact</a>
      </div>
      <button id="menu-btn" class="md:hidden text-deep-ocean text-2xl">☰</button>
    </nav>
    <div id="mobile-menu" class="hidden bg-white/95 backdrop-blur-md shadow-lg md:hidden">
      <a href="/" class="block px-6 py-3 hover:bg-gray-100">Home</a>
      <a href="index.php#about" class="block px-6 py-3 hover:bg-gray-100">About</a>
      <a href="species.php" class="block px-6 py-3 bg-blue-50 text-[#015b8a] font-bold">Species</a>
      <a href="Threats.php" class="block px-6 py-3 hover:bg-gray-100">Threats</a>
      <a href="event.php" class="block px-6 py-3 hover:bg-gray-100">Events</a>
      <a href="index.php#contact" class="block px-6 py-3 hover:bg-gray-100">Contact</a>
    </div>
  </header>

  <!-- Hero with Bubbles -->
  <section class="relative bg-ocean-gradient text-white py-24 md:py-32 px-6 overflow-hidden">
    <div class="absolute inset-0 opacity-20">
      <div class="bubble w-24 h-24 md:w-32 md:h-32 left-5 md:left-10" style="animation-delay: 0s;"></div>
      <div class="bubble w-20 h-20 md:w-24 md:h-24 left-1/4" style="animation-delay: 3s;"></div>
      <div class="bubble w-32 h-32 md:w-40 md:h-40 right-10 md:right-20" style="animation-delay: 6s;"></div>
      <div class="bubble w-16 h-16 md:w-20 md:h-20 left-1/2" style="animation-delay: 9s;"></div>
      <div class="bubble w-28 h-28 md:w-36 md:h-36 right-1/3" style="animation-delay: 12s;"></div>
    </div>
    <div class="max-w-7xl mx-auto text-center relative z-10">
      <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-4 md:mb-6 drop-shadow-2xl playfair leading-tight" style="font-family: 'Apple Chancery', cursive;">Marine Life Gallery</h1>
      <p class="text-base md:text-lg lg:text-xl opacity-90 max-w-3xl mx-auto leading-relaxed">
        Explore the breathtaking diversity of ocean creatures — from majestic whales to tiny seahorses.
      </p>
    </div>
  </section>

  <!-- Filters -->
  <section class="py-6 md:py-8 px-6 sticky top-16 md:top-20 bg-gradient-to-b from-teal-50 to-white z-40 shadow-md">
    <div class="max-w-7xl mx-auto flex flex-wrap gap-2 md:gap-3 justify-center">
      <button data-filter="all" class="filter-btn px-5 md:px-6 py-2.5 md:py-3 rounded-full bg-white shadow-md font-semibold text-gray-700 hover:bg-[#015b8a] hover:text-white transition text-sm md:text-base filter-active">
        All Species
      </button>
      <button data-filter="mammals" class="filter-btn px-5 md:px-6 py-2.5 md:py-3 rounded-full bg-white shadow-md font-semibold text-gray-700 hover:bg-[#015b8a] hover:text-white transition text-sm md:text-base">
        Mammals
      </button>
      <button data-filter="fish" class="filter-btn px-5 md:px-6 py-2.5 md:py-3 rounded-full bg-white shadow-md font-semibold text-gray-700 hover:bg-[#015b8a] hover:text-white transition text-sm md:text-base">
        Fish
      </button>
      <button data-filter="reptiles" class="filter-btn px-5 md:px-6 py-2.5 md:py-3 rounded-full bg-white shadow-md font-semibold text-gray-700 hover:bg-[#015b8a] hover:text-white transition text-sm md:text-base">
        Reptiles
      </button>
      <button data-filter="invertebrates" class="filter-btn px-5 md:px-6 py-2.5 md:py-3 rounded-full bg-white shadow-md font-semibold text-gray-700 hover:bg-[#015b8a] hover:text-white transition text-sm md:text-base">
        Invertebrates
      </button>
    </div>
  </section>

  <!-- Species Grid -->
  <section class="py-12 md:py-16 px-6">
    <div class="max-w-7xl mx-auto">
      <div id="speciesGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 lg:gap-10">

        <!-- MAMMALS (10) -->
        <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="mammals" data-status="endangered">
          <div class="relative h-56 md:h-64 overflow-hidden">
            <img src="https://originaldiving.d3r.site/images/blog_gallery/554980-istock-1164887104body.jpg" alt="Humpback Whale" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
            <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-red-600 flex items-center">
              <span class="rarity-dot endangered"></span> Endangered
            </div>
          </div>
          <div class="p-5 md:p-6">
            <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Humpback Whale</h3>
            <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Megaptera novaeangliae</em></p>
            <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
              Known for complex songs and acrobatic breaches. Migrates 16,000 miles annually.
            </p>
            <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
              <div class="flex gap-1 md:gap-2">
                <span class="bg-blue-100 text-blue-700 px-2 md:px-3 py-1 rounded-full">Ocean Migrator</span>
                <span class="bg-teal-100 text-teal-700 px-2 md:px-3 py-1 rounded-full">30m Length</span>
              </div>
              <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
                Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="mammals" data-status="vulnerable">
          <div class="relative h-56 md:h-64 overflow-hidden">
            <img src="https://c.ndtvimg.com/gws/ms/10-incredible-facts-about-blue-whales/assets/8.jpeg?1723036565" alt="Blue Whale" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
            <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-amber-600 flex items-center">
              <span class="rarity-dot vulnerable"></span> Vulnerable
            </div>
          </div>
          <div class="p-5 md:p-6">
            <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Blue Whale</h3>
            <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Balaenoptera musculus</em></p>
            <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
              Largest animal on Earth. Heart is size of a small car.
            </p>
            <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
              <div class="flex gap-1 md:gap-2">
                <span class="bg-indigo-100 text-indigo-700 px-2 md:px-3 py-1 rounded-full">Deep Diver</span>
                <span class="bg-purple-100 text-purple-700 px-2 md:px-3 py-1 rounded-full">33m Length</span>
              </div>
              <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
                Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
              </a>
            </div>
          </div>
        </div>

       <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="mammals" data-status="safe">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://png.pngtree.com/thumb_back/fh260/background/20250120/pngtree-a-dolfin-in-the-sea-with-background-image_16873772.jpg" alt="Bottlenose Dolphin" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-green-600 flex items-center">
      <span class="rarity-dot safe"></span> Least Concern
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Bottlenose Dolphin</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Tursiops truncatus</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Highly intelligent marine mammals known for complex communication, echolocation, and playful behavior. Can recognize themselves in mirrors.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-teal-100 text-teal-700 px-2 md:px-3 py-1 rounded-full">Echolocation</span>
        <span class="bg-blue-100 text-blue-700 px-2 md:px-3 py-1 rounded-full">Social Pods</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>


     <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="mammals" data-status="vulnerable">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://nextlevelsailing.com/wp-content/uploads/sites/2044/2019/10/46962987_l.jpg" alt="Orca (Killer Whale)" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-amber-600 flex items-center">
      <span class="rarity-dot vulnerable"></span> Vulnerable
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Orca</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>orca</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Apex predators with complex cultures. Each pod has unique vocal dialects passed down generations.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-red-100 text-red-700 px-2 md:px-3 py-1 rounded-full">Apex Predator</span>
        <span class="bg-teal-100 text-teal-700 px-2 md:px-3 py-1 rounded-full">Pod Culture</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>


       <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="mammals" data-status="vulnerable">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://res.cloudinary.com/enchanting/q_70,f_auto,w_1024,h_684,c_fit/quark-web/2024/09/AdobeStock_144122226.jpeg" alt="Harbor Seal" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-amber-600 flex items-center">
      <span class="rarity-dot vulnerable"></span> Vulnerable
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Harbor Seal</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Phoca vitulina</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Agile swimmers with V-shaped nostrils. Can dive up to 500m and hold breath for 30 minutes.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-blue-100 text-blue-700 px-2 md:px-3 py-1 rounded-full">Deep Diver</span>
        <span class="bg-teal-100 text-teal-700 px-2 md:px-3 py-1 rounded-full">Coastal Hunter</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>


       <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="mammals" data-status="vulnerable">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://www.treehugger.com/thmb/_BL-0-39uBvVWB-RitnArqlD2vY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/manatee.primary-e6d6754efdc94e5bb635af7a5f456ca1.jpg" alt="West Indian Manatee" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-amber-600 flex items-center">
      <span class="rarity-dot vulnerable"></span> Vulnerable
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">West Indian Manatee</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Trichechus manatus</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Gentle giants of warm coastal waters. Eat 100+ pounds of seagrass daily and are known as "sea cows."
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-green-100 text-green-700 px-2 md:px-3 py-1 rounded-full">Herbivore</span>
        <span class="bg-teal-100 text-teal-700 px-2 md:px-3 py-1 rounded-full">Gentle Giant</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>


         <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="mammals" data-status="endangered">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="data:image/jpeg;base64,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" alt="Sea Otter" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-red-600 flex items-center">
      <span class="rarity-dot endangered"></span> Endangered
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Sea Otter</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Enhydra lutris</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Tool-using marine mammals with the thickest fur on Earth. Hold hands while sleeping to avoid drifting apart.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-orange-100 text-orange-700 px-2 md:px-3 py-1 rounded-full">Tool User</span>
        <span class="bg-green-100 text-green-700 px-2 md:px-3 py-1 rounded-full">Kelp Guardian</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>


        <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="mammals" data-status="vulnerable">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://www.national-aquarium.co.uk/wp-content/uploads/the_leviathan_of_beaumaris_by_gogosardina_d9zwj1w-fullview.jpg" alt="Sperm Whale" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-amber-600 flex items-center">
      <span class="rarity-dot vulnerable"></span> Vulnerable
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Sperm Whale</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Physeter macrocephalus</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Deepest diving mammal on Earth. Can plunge over 3,000m and hold breath for 90+ minutes.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-indigo-100 text-indigo-700 px-2 md:px-3 py-1 rounded-full">Deep Diver</span>
        <span class="bg-purple-100 text-purple-700 px-2 md:px-3 py-1 rounded-full">20m Length</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>

       <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="mammals" data-status="safe">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://mymodernmet.com/wp/wp-content/uploads/2025/03/narwhals-drone-footage-1.jpg" alt="Narwhal" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-green-600 flex items-center">
      <span class="rarity-dot safe"></span> Least Concern
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Narwhal</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Monodon monoceros</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      "Unicorns of the sea" with a 3m spiral tusk — actually an elongated tooth used as a sensory organ.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-purple-100 text-purple-700 px-2 md:px-3 py-1 rounded-full">Unicorn Tusk</span>
        <span class="bg-blue-100 text-blue-700 px-2 md:px-3 py-1 rounded-full">Arctic Dweller</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>


          <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="mammals" data-status="vulnerable">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://www.shutterstock.com/image-photo/dugong-spotted-while-snorkelling-beautiful-600nw-2522669297.jpg" alt="Dugong" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-amber-600 flex items-center">
      <span class="rarity-dot vulnerable"></span> Vulnerable
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Dugong</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Dugong dugon</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Gentle seagrass grazers known as "sea cows." Only marine mammal that is strictly herbivorous.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-green-100 text-green-700 px-2 md:px-3 py-1 rounded-full">Seagrass Eater</span>
        <span class="bg-teal-100 text-teal-700 px-2 md:px-3 py-1 rounded-full">Coastal Dweller</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>


        <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="mammals" data-status="safe">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://www.scuba.com/blog/wp-content/uploads/2012/02/beluga-whale-AdobeStock_480571672-1024x576.jpg" alt="Beluga Whale" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-green-600 flex items-center">
      <span class="rarity-dot safe"></span> Least Concern
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Beluga Whale</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Delphinapterus leucas</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      "Canaries of the sea" — highly vocal with over 50 distinct calls. Can turn head in all directions.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-yellow-100 text-yellow-700 px-2 md:px-3 py-1 rounded-full">Vocal Singer</span>
        <span class="bg-blue-100 text-blue-700 px-2 md:px-3 py-1 rounded-full">Arctic Smiler</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>
        <!-- Add 8 more mammals... -->


        <!-- Example: Dolphin, Orca, Seal, Manatee, etc. -->
        <!-- (Full list below in script) -->

        <!-- FISH (10) -->
        <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="fish" data-status="vulnerable">
          <div class="relative h-56 md:h-64 overflow-hidden">
            <img src="images/s3.jpg" alt="Clownfish" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
            <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-amber-600 flex items-center">
              <span class="rarity-dot vulnerable"></span> Vulnerable
            </div>
          </div>
          <div class="p-5 md:p-6">
            <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Clownfish</h3>
            <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Amphiprion ocellaris</em></p>
            <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
              Lives in sea anemones. All born male, can change to female.
            </p>
            <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
              <div class="flex gap-1 md:gap-2">
                <span class="bg-orange-100 text-orange-700 px-2 md:px-3 py-1 rounded-full">Coral Dweller</span>
              </div>
              <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
                Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
              </a>
            </div>
          </div>
        </div>


        <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="fish" data-status="vulnerable">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://www.thoughtco.com/thmb/13j7xHsSS1u1yJRKehhFAYUSrzY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/White-shark-Dave-Fleetham-getty-56a5f8593df78cf7728ac02b.jpg" alt="Great White Shark" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-amber-600 flex items-center">
      <span class="rarity-dot vulnerable"></span> Vulnerable
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Great White Shark</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Carcharodon carcharias</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Apex ocean predator with 300 serrated teeth. Can detect a drop of blood from miles away.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-red-100 text-red-700 px-2 md:px-3 py-1 rounded-full">Apex Predator</span>
        <span class="bg-gray-100 text-gray-700 px-2 md:px-3 py-1 rounded-full">6m Giant</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>


       <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="fish" data-status="vulnerable">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://static.myconnect.ae/-/media/yasconnect/project/swad/stories/all-about-rays/ray-1.png?h=1000&iar=0&w=1000" alt="Manta Ray" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-amber-600 flex items-center">
      <span class="rarity-dot vulnerable"></span> Vulnerable
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Manta Ray</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Manta birostris</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Gentle giants with 7m wingspan. Filter-feed on plankton using cephalic fins like scoops.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-teal-100 text-teal-700 px-2 md:px-3 py-1 rounded-full">Filter Feeder</span>
        <span class="bg-blue-100 text-blue-700 px-2 md:px-3 py-1 rounded-full">7m Wingspan</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>


       <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="fish" data-status="safe">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://miro.medium.com/1*KUnBm6sc2l06rzHowVEmNg.jpeg" alt="Lionfish" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-green-600 flex items-center">
      <span class="rarity-dot safe"></span> Least Concern
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Lionfish</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Pterois volitans</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Invasive predator with venomous spines. Can swallow prey 2x their size in one gulp.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-red-100 text-red-700 px-2 md:px-3 py-1 rounded-full">Invasive</span>
        <span class="bg-orange-100 text-orange-700 px-2 md:px-3 py-1 rounded-full">Venomous</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>


        <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="fish" data-status="safe">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://www.keywestaquarium.com/wp-content/uploads/2024/12/regal-angelfish-mobile.jpg" alt="Queen Angelfish" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-green-600 flex items-center">
      <span class="rarity-dot safe"></span> Least Concern
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Queen Angelfish</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Holacanthus ciliaris</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Jewel of the reef with electric blue & yellow. Changes color from juvenile to adult.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-cyan-100 text-cyan-700 px-2 md:px-3 py-1 rounded-full">Color Changer</span>
        <span class="bg-purple-100 text-purple-700 px-2 md:px-3 py-1 rounded-full">Reef Royalty</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>


       <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="fish" data-status="vulnerable">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://storage.googleapis.com/jm-gcp-bethestory-p-12po-bucket/uploads/tuna.jpg" alt="Bluefin Tuna" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-amber-600 flex items-center">
      <span class="rarity-dot vulnerable"></span> Vulnerable
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Tuna</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Thunnus thynnus</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Fastest fish on Earth — up to 70 km/h. Can weigh 680 kg and live 40+ years.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-blue-100 text-blue-700 px-2 md:px-3 py-1 rounded-full">Ocean Rocket</span>
        <span class="bg-red-100 text-red-700 px-2 md:px-3 py-1 rounded-full">Overfished</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>

     <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="fish" data-status="vulnerable">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://www.scuba.com/blog/wp-content/uploads/2018/08/group-seahorses.jpg" alt="Lined Seahorse" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-amber-600 flex items-center">
      <span class="rarity-dot vulnerable"></span> Vulnerable
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Lined Seahorse</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Hippocampus erectus</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Males carry babies in a pouch. Monogamous pairs greet with daily dances.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-pink-100 text-pink-700 px-2 md:px-3 py-1 rounded-full">Male Pregnancy</span>
        <span class="bg-teal-100 text-teal-700 px-2 md:px-3 py-1 rounded-full">Monogamous</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>

      <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="fish" data-status="safe">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://fishesofaustralia.net.au/Images/Image/CetoscarusBicolorRLing.jpg" alt="Parrotfish" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-green-600 flex items-center">
      <span class="rarity-dot safe"></span> Least Concern
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Stoplight Parrotfish</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Sparisoma viride</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Creates 200kg of white sand yearly. Sleeps in mucus cocoon to hide scent.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-teal-100 text-teal-700 px-2 md:px-3 py-1 rounded-full">Sand Maker</span>
        <span class="bg-purple-100 text-purple-700 px-2 md:px-3 py-1 rounded-full">Sex Changer</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>


       <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="fish" data-status="safe">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://www.bransonswildworld.com/green-moray-eel/green-moray-eel/" alt="Moray Eel" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-green-600 flex items-center">
      <span class="rarity-dot safe"></span> Least Concern
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Green Moray Eel</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Gymnothorax funebris</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Has second set of jaws in throat. Breathes by opening & closing mouth — not aggression.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-red-100 text-red-700 px-2 md:px-3 py-1 rounded-full">Pharyngeal Jaws</span>
        <span class="bg-gray-100 text-gray-700 px-2 md:px-3 py-1 rounded-full">Reef Ambusher</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>


        <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="fish" data-status="endangered">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://cdn.shopify.com/s/files/1/0023/6158/9871/files/SCALLOPED_HAMMERHEAD_480x480.png?v=1720526269" alt="Hammerhead Shark" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-red-600 flex items-center">
      <span class="rarity-dot endangered"></span> Endangered
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Great Hammerhead</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Sphyrna mokarran</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      360° vision with eyes on hammer. Detects stingrays buried in sand using electroreceptors.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-blue-100 text-blue-700 px-2 md:px-3 py-1 rounded-full">360° Vision</span>
        <span class="bg-red-100 text-red-700 px-2 md:px-3 py-1 rounded-full">Fin Trade</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>

        <!-- REPTILES (10) -->


        <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="reptiles" data-status="endangered">
          <div class="relative h-56 md:h-64 overflow-hidden">
            <img src="https://www.napaliriders.com/wp-content/uploads/sites/6990/2023/11/IMG_9281.jpg?w=700&h=700&zoom=2" alt="Green Sea Turtle" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
            <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-red-600 flex items-center">
              <span class="rarity-dot endangered"></span> Endangered
            </div>
          </div>
          <div class="p-5 md:p-6">
            <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Green Sea Turtle</h3>
            <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Chelonia mydas</em></p>
            <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
              Travels thousands of miles to lay eggs on birth beach.
            </p>
            <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
              <div class="flex gap-1 md:gap-2">
                <span class="bg-green-100 text-green-700 px-2 md:px-3 py-1 rounded-full">Navigator</span>
              </div>
              <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
                Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
              </a>
            </div>
          </div>
        </div>

       <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="reptiles" data-status="critically-endangered">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://www.temanaotemoana.org/wp-content/uploads/2024/02/428252172_788165200015861_5324312892418127931_n-1024x768.jpg" alt="Hawksbill Turtle" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-red-700 flex items-center">
      <span class="rarity-dot critically-endangered"></span> Critically Endangered
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Hawksbill Turtle</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Eretmochelys imbricata</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Beak-like mouth eats sponges. Shell hunted for "tortoiseshell" jewelry.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-orange-100 text-orange-700 px-2 md:px-3 py-1 rounded-full">Sponge Eater</span>
        <span class="bg-red-100 text-red-700 px-2 md:px-3 py-1 rounded-full">Tortoiseshell</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>
<div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="reptiles" data-status="safe">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://i.pinimg.com/736x/c9/01/e1/c901e14ef26894c41897e6ade1e7d15d.jpg" alt="Saltwater Crocodile" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-green-600 flex items-center">
      <span class="rarity-dot safe"></span> Least Concern
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Saltwater Crocodile</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Crocodylus porosus</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Largest living reptile — up to 7m & 1,000kg. Can swim 900km in open ocean.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-red-100 text-red-700 px-2 md:px-3 py-1 rounded-full">Apex Predator</span>
        <span class="bg-blue-100 text-blue-700 px-2 md:px-3 py-1 rounded-full">Ocean Traveler</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>

       <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="reptiles" data-status="vulnerable">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://cdn.expeditions.com/globalassets/stories/wild-personalities/marine-iguana/wild-personalities-main-graphic_1920x1000.jpg?width=1920&height=1080&mode=crop&scale=none&quality=50" alt="Marine Iguana" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-amber-600 flex items-center">
      <span class="rarity-dot vulnerable"></span> Vulnerable
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Marine Iguana</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Amblyrhynchus cristatus</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Only lizard that swims & feeds underwater. Sneezes salt to survive.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-blue-100 text-blue-700 px-2 md:px-3 py-1 rounded-full">Ocean Diver</span>
        <span class="bg-gray-100 text-gray-700 px-2 md:px-3 py-1 rounded-full">Salt Sneezer</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>

       <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="reptiles" data-status="vulnerable">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://www.fisheries.noaa.gov/s3//styles/full_width/s3/2024-08/750x500-leatherback-sea-turtle.jpg?itok=ss6utMk8" alt="Leatherback Turtle" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-amber-600 flex items-center">
      <span class="rarity-dot vulnerable"></span> Vulnerable
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Leatherback Turtle</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Dermochelys coriacea</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Deepest diving reptile — over 1,200m. Eats only jellyfish using scissor-like jaws.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-indigo-100 text-indigo-700 px-2 md:px-3 py-1 rounded-full">Deep Diver</span>
        <span class="bg-orange-100 text-orange-700 px-2 md:px-3 py-1 rounded-full">Jelly Eater</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>

        <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="reptiles" data-status="safe">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://a-z-animals.com/media/2021/11/Where-Do-Snakes-Live-sea.jpg" alt="Olive Sea Snake" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-green-600 flex items-center">
      <span class="rarity-dot safe"></span> Least Concern
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Olive Sea Snake</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Aipysurus laevis</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      100x more venomous than any land snake. Gives birth at sea — never leaves water.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-red-100 text-red-700 px-2 md:px-3 py-1 rounded-full">Ultra Venomous</span>
        <span class="bg-blue-100 text-blue-700 px-2 md:px-3 py-1 rounded-full">Live Birth</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>

      <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="reptiles" data-status="data-deficient">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://www.chevron.com/-/media/chevron/newsroom/2023/Q2/barrow_island_turtles_2.jpg?h=882&w=1568&la=en&hash=0AC76AA4B546D3FA7437A3453C483DD7" alt="Flatback Turtle" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-gray-600 flex items-center">
      <span class="rarity-dot data-deficient"></span> Data Deficient
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Flatback Turtle</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Natator depressus</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Only nests in Australia. Flattest shell of all sea turtles.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-yellow-100 text-yellow-700 px-2 md:px-3 py-1 rounded-full">Australia Only</span>
        <span class="bg-teal-100 text-teal-700 px-2 md:px-3 py-1 rounded-full">Flat Shell</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>

      <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="reptiles" data-status="critically-endangered">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://www.nwf.org/-/media/NEW-WEBSITE/Shared-Folder/Wildlife/Reptiles/reptile_kemps-ridley-sea-turtle_600x300.jpg" alt="Kemp's Ridley Turtle" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-red-700 flex items-center">
      <span class="rarity-dot critically-endangered"></span> Critically Endangered
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Kemp's Ridley Turtle</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Lepidochelys kempii</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Smallest sea turtle. Mass nesting event called "arribada" — thousands arrive at once.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-purple-100 text-purple-700 px-2 md:px-3 py-1 rounded-full">Arribada</span>
        <span class="bg-orange-100 text-orange-700 px-2 md:px-3 py-1 rounded-full">Smallest</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>

        <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="reptiles" data-status="vulnerable">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="data:image/jpeg;base64,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" alt="Loggerhead Turtle" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-amber-600 flex items-center">
      <span class="rarity-dot vulnerable"></span> Vulnerable
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Loggerhead Turtle</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Caretta caretta</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Massive jaws crush clams & crabs. Nests on same beach after 30-year journey.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-red-100 text-red-700 px-2 md:px-3 py-1 rounded-full">Crusher Jaws</span>
        <span class="bg-blue-100 text-blue-700 px-2 md:px-3 py-1 rounded-full">Global Traveler</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>

       <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="reptiles" data-status="vulnerable">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://www.aquariumofpacific.org/images/made_new/email_images-e1_sea_turtle_600_q85.jpg" alt="Olive Ridley Turtle" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-amber-600 flex items-center">
      <span class="rarity-dot vulnerable"></span> Vulnerable
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Olive Ridley Turtle</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Lepidochelys olivacea</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Mass nesting "arribada" — 100,000+ females storm beaches in one night.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md-2">
        <span class="bg-purple-100 text-purple-700 px-2 md:px-3 py-1 rounded-full">Arribada</span>
        <span class="bg-teal-100 text-teal-700 px-2 md:px-3 py-1 rounded-full">Most Abundant</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>

        <!-- INVERTEBRATES (10) -->
        <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="invertebrates" data-status="safe">
          <div class="relative h-56 md:h-64 overflow-hidden">
            <img src="https://tnaqua.org/wp-content/uploads/2025/09/20220302-Giant-Pacific-Octopus-04-1.webp" alt="Giant Pacific Octopus" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
            <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-green-600 flex items-center">
              <span class="rarity-dot safe"></span> Least Concern
            </div>
          </div>
          <div class="p-5 md:p-6">
            <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Giant Pacific Octopus</h3>
            <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Enteroctopus dofleini</em></p>
            <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
              Highly intelligent with 3 hearts and blue blood.
            </p>
            <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
              <div class="flex gap-1 md:gap-2">
                <span class="bg-purple-100 text-purple-700 px-2 md:px-3 py-1 rounded-full">Camouflage Master</span>
              </div>
              <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
                Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
              </a>
            </div>
          </div>
        </div>

      <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="invertebrates" data-status="varies">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://images.stockcake.com/public/6/a/8/6a8f9f03-f114-4caa-93ab-8ae5df9258f4_large/vibrant-coral-blooms-stockcake.jpg" alt="Coral Polyp" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-gray-600 flex items-center">
      <span class="rarity-dot varies"></span> Varies by Species
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Coral Polyp</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Order Scleractinia</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Tiny animals that build reefs. Symbiotic algae give color & energy.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-teal-100 text-teal-700 px-2 md:px-3 py-1 rounded-full">Reef Builder</span>
        <span class="bg-yellow-100 text-yellow-700 px-2 md:px-3 py-1 rounded-full">Zooxanthellae</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>

       <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="invertebrates" data-status="safe">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://thumbs.dreamstime.com/b/beautiful-jellyfish-underwater-against-deep-blue-background-beautiful-jellyfish-underwater-against-deep-blue-background-al-359438563.jpg" alt="Moon Jellyfish" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-green-600 flex items-center">
      <span class="rarity-dot safe"></span> Least Concern
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Moon Jellyfish</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Aurelia aurita</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      95% water. Pulsing bell moves them. Immortal polyp stage.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-cyan-100 text-cyan-700 px-2 md:px-3 py-1 rounded-full">95% Water</span>
        <span class="bg-purple-100 text-purple-700 px-2 md:px-3 py-1 rounded-full">Immortal Polyp</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>
<div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="invertebrates" data-status="safe">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://miro.medium.com/v2/resize:fit:1200/1*1hTUwOJlHWkvHjKPSSkxtw.jpeg" alt="Caribbean Reef Squid" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-green-600 flex items-center">
      <span class="rarity-dot safe"></span> Least Concern
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Caribbean Reef Squid</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Sepioteuthis sepioidea</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Changes color to communicate. Jet propulsion up to 40 km/h.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-purple-100 text-purple-700 px-2 md:px-3 py-1 rounded-full">Color Language</span>
        <span class="bg-blue-100 text-blue-700 px-2 md:px-3 py-1 rounded-full">Jet Racer</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>

    <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="invertebrates" data-status="safe">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://imagine5.com/wp-content/uploads/2021/02/5_seafood-business_01_hero_W2Y5J1_2000.jpg.webp" 
         alt="Starfish" 
         class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-green-600 flex items-center">
      <span class="rarity-dot safe"></span> Least Concern
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Starfish</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Asteroidea</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Starfish, or sea stars, are echinoderms known for their five arms and remarkable ability to regenerate lost limbs. They inhabit coral reefs, rocky shores, and seagrass beds across the world's oceans.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-yellow-100 text-yellow-700 px-2 md:px-3 py-1 rounded-full">Regenerative</span>
        <span class="bg-blue-100 text-blue-700 px-2 md:px-3 py-1 rounded-full">Echinoderm</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>


       <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="invertebrates" data-status="least-concern">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://images.stockcake.com/public/9/4/e/94e3b393-965e-40ca-891c-1f979319306b_large/glowing-underwater-anemones-stockcake.jpg" 
         alt="Giant Pacific Octopus" 
         class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm px-2 md:px-3 py-1 rounded-full text-xs font-bold text-green-600 flex items-center">
      <span class="rarity-dot least-concern"></span> Least Concern
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">Giant Pacific Octopus</h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3"><em>Enteroctopus dofleini</em></p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      The largest species of octopus, known for its intelligence, camouflage skills, and blue blood pumped by three hearts.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-purple-100 text-purple-700 px-2 md:px-3 py-1 rounded-full">Camouflage Master</span>
        <span class="bg-blue-100 text-blue-700 px-2 md:px-3 py-1 rounded-full">Intelligent</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>


      <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="invertebrates" data-status="vulnerable">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://www.calacademy.org/sites/default/files/styles/manual_crop_standard_960x540/public/assets/images/KW_IMAGES_DO_NOT_USE/nautilus_hero_sm-2.jpg?itok=wJRqMBm-&c=a53852365674bdfad1f35b5ffcc5f6e0" 
         alt="Chambered Nautilus" 
         class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm 
                px-2 md:px-3 py-1 rounded-full text-xs font-bold text-amber-600 flex items-center">
      <span class="rarity-dot vulnerable"></span> Vulnerable
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">
      Chambered Nautilus
    </h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3">
      <em>Nautilus pompilius</em>
    </p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Ancient marine mollusk known for its spiraled shell. Faces threats from shell trade and overfishing.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-purple-100 text-purple-700 px-2 md:px-3 py-1 rounded-full">Deep Sea Dweller</span>
        <span class="bg-orange-100 text-orange-700 px-2 md:px-3 py-1 rounded-full">Shell Collector Threat</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>


        <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="invertebrates" data-status="vulnerable">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://www.aquariumofpacific.org/images/made_new/images-olc-Johnsons_MBAF2_400_q85.jpg" 
         alt="Sea Cucumber" 
         class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm 
                px-2 md:px-3 py-1 rounded-full text-xs font-bold text-amber-600 flex items-center">
      <span class="rarity-dot vulnerable"></span> Vulnerable
    </div>
  </div>
  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">
      Sea Cucumber
    </h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3">
      <em>Holothuroidea</em>
    </p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Bottom-dwelling marine invertebrates that recycle nutrients on the seafloor. Many species are threatened by overharvesting for food and medicine.
    </p>
    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-purple-100 text-purple-700 px-2 md:px-3 py-1 rounded-full">Nutrient Recycler</span>
        <span class="bg-orange-100 text-orange-700 px-2 md:px-3 py-1 rounded-full">Overfishing Threat</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>


        <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="invertebrates" data-status="vulnerable">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://www.activewild.com/wp-content/uploads/2018/08/Atlantic-Horseshoe-Crabs.jpg" 
         alt="Horseshoe Crab" 
         class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm 
                px-2 md:px-3 py-1 rounded-full text-xs font-bold text-amber-600 flex items-center">
      <span class="rarity-dot vulnerable"></span> Vulnerable
    </div>
  </div>

  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">
      Horseshoe Crab
    </h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3">
      <em>Limulus polyphemus</em>
    </p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      Ancient marine arthropods that have existed for over 450 million years. Their blue blood is crucial for medical testing, leading to overharvesting and population decline.
    </p>

    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-blue-100 text-blue-700 px-2 md:px-3 py-1 rounded-full">Living Fossil</span>
        <span class="bg-red-100 text-red-700 px-2 md:px-3 py-1 rounded-full">Medicinal Value</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>

<div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="invertebrates" data-status="vulnerable">
  <div class="relative h-56 md:h-64 overflow-hidden">
    <img src="https://media.sciencephoto.com/c0/29/30/31/c0293031-800px-wm.jpg" 
         alt="Crown-of-Thorns Starfish" 
         class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
    <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-white/90 backdrop-blur-sm 
                px-2 md:px-3 py-1 rounded-full text-xs font-bold text-amber-600 flex items-center">
      <span class="rarity-dot vulnerable"></span> Vulnerable
    </div>
  </div>

  <div class="p-5 md:p-6">
    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-1 md:mb-2 playfair">
      Crown-of-Thorns Starfish
    </h3>
    <p class="text-xs md:text-sm text-gray-600 mb-2 md:mb-3">
      <em>Acanthaster planci</em>
    </p>
    <p class="text-gray-700 mb-3 md:mb-4 text-sm line-clamp-2">
      A large, spiny starfish that feeds on coral polyps. While part of the natural reef ecosystem, population outbreaks can devastate coral reefs. Some local populations face decline due to habitat loss and pollution.
    </p>

    <div class="flex flex-wrap gap-1 md:gap-2 justify-between items-center text-xs">
      <div class="flex gap-1 md:gap-2">
        <span class="bg-red-100 text-red-700 px-2 md:px-3 py-1 rounded-full">Coral Predator</span>
        <span class="bg-blue-100 text-blue-700 px-2 md:px-3 py-1 rounded-full">Reef Impact</span>
      </div>
      <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
        Learn More <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
      </a>
    </div>
  </div>
</div>




      </div>
    </div>
  </section>

  <!-- 🌊 Marine Life Awareness Portal Info Section -->
<section id="about-portal" class="relative py-20 px-6 bg-gradient-to-b from-[#015b8a] to-[#002f4b] text-white overflow-hidden">
  <div class="max-w-6xl mx-auto text-center">
    <h2 class="text-4xl md:text-5xl font-bold mb-6" style="font-family: 'Apple Chancery', cursive;">
      Marine Life Awareness Portal
    </h2>
    <p class="text-lg md:text-xl mb-6 max-w-3xl mx-auto opacity-90">
      The <strong>Marine Life Awareness Portal</strong> is an educational and conservation-focused platform
      built to inspire users to protect our oceans. It provides information about diverse marine species,
      their conservation status, and the impact of human activities on marine ecosystems.
    </p>
  </div>

  <!-- Highlights Section -->
  <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 mt-12 text-center">
    <div class="bg-white/10 p-6 rounded-2xl backdrop-blur-md shadow-md hover:bg-white/20 transition">
      <h3 class="text-2xl font-semibold mb-2 text-seafoam">🌿 Awareness</h3>
      <p class="text-sm opacity-90">
        Learn about endangered, vulnerable, and safe marine species and their vital roles in maintaining ocean balance.
      </p>
    </div>

    <div class="bg-white/10 p-6 rounded-2xl backdrop-blur-md shadow-md hover:bg-white/20 transition">
      <h3 class="text-2xl font-semibold mb-2 text-seafoam">🔍 Exploration</h3>
      <p class="text-sm opacity-90">
        Explore interactive cards showcasing marine invertebrates, fish, mammals, and coral species with rich visuals.
      </p>
    </div>

    <div class="bg-white/10 p-6 rounded-2xl backdrop-blur-md shadow-md hover:bg-white/20 transition">
      <h3 class="text-2xl font-semibold mb-2 text-seafoam">💧 Conservation</h3>
      <p class="text-sm opacity-90">
        Learn how pollution affects marine life, and take part in protecting our oceans.
      </p>
    </div>
  </div>

  <!-- Ocean Wave Divider -->
  <div class="absolute bottom-0 left-0 right-0">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150"><path fill="#fff" fill-opacity="1" d="M0,96L80,112C160,128,320,160,480,144C640,128,800,64,960,42.7C1120,21,1280,43,1360,53.3L1440,64L1440,160L1360,160C1280,160,1120,160,960,160C800,160,640,160,480,160C320,160,160,160,80,160L0,160Z"></path></svg>
  </div>
</section>


 <!-- Scripts -->
<script>
  lucide.createIcons();

  // Mobile Menu
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    menuBtn.textContent = mobileMenu.classList.contains('hidden') ? 'Menu' : 'Close';
  });

  // Filter System
  const filterBtns = document.querySelectorAll('.filter-btn');
  const speciesCards = document.querySelectorAll('.species-card');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const filter = btn.dataset.filter;
      filterBtns.forEach(b => b.classList.remove('filter-active'));
      btn.classList.add('filter-active');

      speciesCards.forEach(card => {
        const category = card.dataset.category;
        if (filter === 'all' || category === filter) {
          card.style.display = 'block';
          setTimeout(() => (card.style.opacity = '1'), 50);
        } else {
          card.style.opacity = '0';
          setTimeout(() => (card.style.display = 'none'), 300);
        }
      });
    });
  });

  const grid = document.getElementById('speciesGrid');
  speciesData.forEach(s => {
    const statusClass =
      s.status === "endangered"
        ? "text-red-600"
        : s.status === "vulnerable"
        ? "text-amber-600"
        : "text-green-600";

    const tagsHTML = s.tags
      .map(tag => `<span class="text-xs bg-blue-100 text-blue-700 px-2 py-1 rounded-full">${tag}</span>`)
      .join("");

    const cardHTML = `
      <div class="species-card bg-white rounded-3xl overflow-hidden shadow-xl relative" data-category="${s.cat}" data-status="${s.status}">
        <div class="relative h-56 overflow-hidden">
          <img src="${s.img}" alt="${s.name}" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
          <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold ${statusClass}">
            ${s.status.charAt(0).toUpperCase() + s.status.slice(1)}
          </div>
        </div>
        <div class="p-5">
          <h3 class="text-xl font-bold text-gray-800 mb-1">${s.name}</h3>
          <p class="text-xs text-gray-600 mb-2"><em>${s.sci}</em></p>
          <p class="text-gray-700 mb-3 text-sm">Fascinating marine species with unique adaptations.</p>
          <div class="flex flex-wrap gap-2 justify-between items-center text-xs">
            <div class="flex gap-1 flex-wrap">${tagsHTML}</div>
            <a href="#" class="text-[#015b8a] font-semibold hover:underline flex items-center gap-1">
              Learn More <i data-lucide="arrow-right" class="w-3 h-3"></i>
            </a>
          </div>
        </div>
      </div>
    `;
    grid.insertAdjacentHTML("beforeend", cardHTML);
  });

  // Re-init icons
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