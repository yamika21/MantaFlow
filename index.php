<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MarineLife Portal - Protect Our Oceans</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'deep-ocean': '#014871',
            'seafoam': '#D7EDE2',
            'aqua-blue': '#0284C7',
            'coral': '#FF7F50'
          },
          fontFamily: {
            'display': ['"Playfair Display"', 'serif'],
            'body': ['Inter', 'sans-serif'],
          },
          backgroundImage: {
            'ocean-gradient': 'linear-gradient(135deg, #014871 0%, #016B9B 40%, #D7EDE2 100%)',
          }
        }
      }
    }
   </script>

  <style>
    body { font-family: 'Inter', sans-serif; scroll-behavior: smooth; }
    h1, h2, h3, h4 { font-family: 'Playfair Display', serif; }
  </style>

  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />
</head>

<!-- Lucide Icons CDN -->
<script src="https://unpkg.com/lucide@latest"></script>

<body class="bg-gradient-to-br from-blue-50 to-teal-50 text-gray-800">

  <!-- Navbar -->
 <!-- Header Section -->
<header class="fixed top-0 w-full bg-white shadow-md z-50 border-b border-blue-100">
  <nav class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <!-- Logo -->
    <div class="flex items-center gap-3">
      <i data-lucide="waves" class="w-10 h-10 md:w-12 md:h-12 text-[#015b8a] drop-shadow-md"></i>
      <div class="text-2xl md:text-4xl font-bold text-[#015b8a] tracking-wide drop-shadow-md" style="font-family: 'Apple Chancery', cursive;">
        MantaFlow
      </div>
    </div>

    <!-- Desktop Menu -->
    <div class="hidden md:flex items-center space-x-6 lg:space-x-8 text-gray-700 font-medium text-sm lg:text-base">
      <a href="#home" class="hover:text-[#015b8a] transition">Home</a>
      <a href="#about" class="hover:text-[#015b8a] transition">About</a>
      <a href="species.php" class="hover:text-[#015b8a] transition">Species</a>
      <a href="Threats.php" class="hover:text-[#015b8a] transition">Threats</a>
      <a href="event.php" class="hover:text-[#015b8a] transition">Events</a>
      <a href="#contact" class="hover:text-[#015b8a] transition">Contact</a>
      <a href="admin.php" class="hover:text-[#015b8a] transition">Admin</a>

      <!-- Login Button -->
      <a href="login.html" class="bg-[#015b8a] text-white px-5 py-2 rounded-full hover:bg-[#014a70] transition shadow-md">
        Login
      </a>
    </div>

    <!-- Mobile Menu Button -->
    <button id="menu-btn" class="md:hidden text-[#015b8a] text-2xl font-semibold focus:outline-none">
      Menu
    </button>
  </nav>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden bg-white shadow-md border-t border-gray-100 md:hidden">
    <a href="#home" class="block px-6 py-3 hover:bg-gray-100 text-sm">Home</a>
    <a href="#about" class="block px-6 py-3 hover:bg-gray-100 text-sm">About</a>
    <a href="species.php" class="block px-6 py-3 hover:bg-gray-100 text-sm">Species</a>
    <a href="Threats.php" class="block px-6 py-3 hover:bg-gray-100 text-sm">Threats</a>
    <a href="event.php" class="block px-6 py-3 hover:bg-gray-100 text-sm">Events</a>
    <a href="#contact" class="block px-6 py-3 hover:bg-gray-100 text-sm">Contact</a>
    <a href="admin.php" class="block px-6 py-3 hover:bg-gray-100 text-sm">Admin</a>
    <a href="login.php" class="block px-6 py-3 bg-[#015b8a] text-white hover:bg-[#014a70] text-sm font-medium">
      Login
    </a>
  </div>
</header>

<!-- Scripts -->
<script src="https://unpkg.com/lucide@latest"></script>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    lucide.createIcons();

    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    menuBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
  });
</script>


  <!-- Hero Section -->
  <section id="home" class="relative pt-24 pb-16 md:pb-20 px-6 bg-ocean-gradient text-white min-h-screen flex items-center text-center overflow-hidden">
    <!-- Floating bubbles with images -->
    <div class="bubble w-12 h-12 md:w-16 md:h-16 left-5 md:left-10" style="animation-delay: 0s;">
      <img src="images/1.jpeg" alt="Marine" class="w-full h-full object-cover rounded-full">
    </div>
    <div class="bubble w-10 h-10 md:w-20 md:h-20 left-16 md:left-20" style="animation-delay: 2s;">
      <img src="images/1.jpeg" alt="Marine" class="w-full h-full object-cover rounded-full">
    </div>
    <div class="bubble w-8 h-8 md:w-12 md:h-12 left-1/4" style="animation-delay: 1s;">
      <img src="images/1.jpeg" alt="Marine" class="w-full h-full object-cover rounded-full">
    </div>
    <div class="bubble w-14 h-14 md:w-24 md:h-24 left-1/3" style="animation-delay: 3s;">
      <img src="images/1.jpeg" alt="Marine" class="w-full h-full object-cover rounded-full">
    </div>
    <div class="bubble w-10 h-10 md:w-14 md:h-14 left-2/5" style="animation-delay: 0.5s;">
      <img src="images/1.jpeg" alt="Marine" class="w-full h-full object-cover rounded-full">
    </div>

    <div class="max-w-4xl mx-auto z-10">
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 md:mb-6 drop-shadow-lg leading-tight" style="font-family: 'Apple Chancery', cursive;">
        Protect Marine Life, Protect Our Future
      </h1>
      <p class="text-base md:text-lg lg:text-xl mb-8 md:mb-10 opacity-95 max-w-2xl mx-auto">
        Join us in spreading awareness about the beauty and importance of marine ecosystems.
      </p>
      <div class="flex flex-col sm:flex-row gap-3 md:gap-4 justify-center">
        <a href="#about" class="bg-white text-deep-ocean px-6 md:px-8 py-3 md:py-4 rounded-full font-semibold text-sm md:text-lg shadow-lg hover:bg-seafoam hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
          Learn More
        </a>
        <a href="event.html" class="border-2 border-white text-white px-6 md:px-8 py-3 md:py-4 rounded-full font-semibold text-sm md:text-lg hover:bg-white hover:text-deep-ocean transition-all duration-300">
          Join Campaign
        </a>
      </div>
    </div>
  </section>

  <!-- Tailwind + Custom CSS -->
  <style>
    .bubble {
      position: absolute;
      bottom: -50px;
      border-radius: 50%;
      overflow: hidden;
      animation: floatUp 8s linear infinite;
    }

    @keyframes floatUp {
      0% {
        transform: translateY(0) translateX(0) scale(1);
        opacity: 0.7;
      }
      50% {
        transform: translateY(-200px) translateX(20px) scale(1.1);
        opacity: 0.5;
      }
      100% {
        transform: translateY(-500px) translateX(-10px) scale(0.9);
        opacity: 0;
      }
    }
  </style>

  <!-- About Section -->
  <section id="about" class="relative py-16 md:py-20 px-6 bg-cover bg-center bg-no-repeat" style="background-image: url('images/r.jpeg');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="relative max-w-7xl mx-auto text-center text-white">
      <h2 data-aos="fade-down" data-aos-duration="1000" class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 drop-shadow-lg" style="font-family: 'Apple Chancery', cursive;">
        About MarineLife Portal
      </h2>
      <p data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" class="text-sm md:text-base lg:text-lg max-w-3xl mx-auto mb-8 md:mb-10 drop-shadow-md">
        The MantaFlow MarineLife Awareness Portal is dedicated to educating and inspiring people to conserve ocean life.
        We share valuable information, host awareness campaigns, and encourage action to protect aquatic ecosystems.
      </p>

      <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center text-left">
        <!-- Feature Image Card -->
        <div class="mx-auto max-w-md" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000">
          <div class="flex flex-col overflow-hidden rounded">
            <img src="images/r.jpeg" alt="Marine Life Awareness" class="w-full h-60 md:h-80 lg:h-96 object-cover rounded-xl shadow-lg">
            <div class="p-4 md:p-6 -mt-12 md:-mt-16 mx-4 md:mx-6 lg:mx-8 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl shadow-xl transition-transform duration-300 hover:scale-105">
              <div class="space-y-2 text-center">
                <a rel="noopener noreferrer" href="#about" class="inline-block text-xl md:text-2xl lg:text-3xl font-semibold text-white hover:text-[#5FC9C5] transition-colors duration-300 leading-tight">
                  <span class="block text-white">The Ultimate</span>
                  <span class="block font-extrabold text-[#5FC9C5]">MarineLife Awareness Portal</span>
                  <span class="block text-sm md:text-base lg:text-lg font-medium text-gray-100 mt-1">
                    Ocean Conservation • Education • Real-World Impact
                  </span>
                </a>
                <p class="text-xs text-gray-300">
                  By <a href="#" class="hover:underline text-[#5FC9C5]">MantaFlow</a>
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Feature List -->
        <div class="space-y-4 md:space-y-6">
          <div data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000" class="flex gap-4 p-5 rounded-2xl bg-ocean-gradient backdrop-blur-sm shadow-md border-l-4 border-[#015b8a] hover:scale-[1.03] transition-transform duration-300 hover:shadow-xl">
            <i data-lucide="book-open" class="w-6 h-6 md:w-7 md:h-7 text-white"></i>
            <div>
              <h3 class="text-lg md:text-xl font-bold mb-1" style="font-family: 'Apple Chancery', cursive;">Marine Species Encyclopedia</h3>
              <p class="text-white text-xs md:text-sm">Explore facts and habitats of marine species worldwide.</p>
            </div>
          </div>

          <div data-aos="fade-left" data-aos-delay="600" data-aos-duration="1000" class="flex gap-4 p-5 rounded-2xl bg-ocean-gradient backdrop-blur-sm shadow-md border-l-4 border-[#015b8a] hover:scale-[1.03] transition-transform duration-300 hover:shadow-xl">
            <i data-lucide="megaphone" class="w-6 h-6 md:w-7 md:h-7 text-white"></i>
            <div>
              <h3 class="text-lg md:text-xl font-bold mb-1" style="font-family: 'Apple Chancery', cursive;">Eco Action Campaigns</h3>
              <p class="text-white text-xs md:text-sm">Join awareness and cleanup drives for ocean conservation.</p>
            </div>
          </div>

          <div data-aos="fade-left" data-aos-delay="700" data-aos-duration="1000" class="flex gap-4 p-5 rounded-2xl bg-ocean-gradient backdrop-blur-sm shadow-md border-l-4 border-[#015b8a] hover:scale-[1.03] transition-transform duration-300 hover:shadow-xl">
            <i data-lucide="graduation-cap" class="w-6 h-6 md:w-7 md:h-7 text-white"></i>
            <div>
              <h3 class="text-lg md:text-xl font-bold mb-1" style="font-family: 'Apple Chancery', cursive;">Educational Resources</h3>
              <p class="text-white text-xs md:text-sm">Access guides and materials for ocean enthusiasts.</p>
            </div>
          </div>

          <div data-aos="fade-left" data-aos-delay="800" data-aos-duration="1000" class="flex gap-4 p-5 rounded-2xl bg-ocean-gradient backdrop-blur-sm shadow-md border-l-4 border-[#015b8a] hover:scale-[1.03] transition-transform duration-300 hover:shadow-xl">
            <i data-lucide="users" class="w-6 h-6 md:w-7 md:h-7 text-white"></i>
            <div>
              <h3 class="text-lg md:text-xl font-bold mb-1" style="font-family: 'Apple Chancery', cursive;">Volunteer Opportunities</h3>
              <p class="text-white text-xs md:text-sm">Connect with NGOs and join marine protection efforts.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      lucide.createIcons();
      AOS.init({ duration: 1000, once: true, offset: 100 });
    </script>
  </section>

  <!-- Species Section -->
  <section id="species" class="relative py-16 md:py-20 px-6 overflow-hidden">
    <div class="absolute inset-0 -z-10">
      <img src="images/r.jpeg" alt="Marine Background" class="w-full h-full object-cover filter brightness-75">
    </div>

    <div class="max-w-7xl mx-auto text-center relative z-10">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-10 md:mb-12 drop-shadow-xl" style="font-family: 'Apple Chancery', cursive;">Marine Species</h2>

      <div class="overflow-hidden relative w-full mx-auto">
        <div id="marquee" class="flex w-fit marquee-inner">
          <!-- Card 1 -->
          <div class="bg-ocean-gradient backdrop-blur-sm p-5 md:p-6 rounded-2xl shadow-lg hover:shadow-xl transition w-60 md:w-72 mx-3 md:mx-4 h-[22rem] md:h-[24rem] flex-shrink-0">
            <img src="images/s4.jpg" class="rounded-xl mb-3 md:mb-4 w-full h-40 md:h-48 object-cover" alt="Coral Reef">
            <h3 class="text-xl md:text-2xl font-semibold text-white mb-2" style="font-family: 'Apple Chancery', cursive;">Coral Reefs</h3>
            <p class="text-gray-100 text-xs md:text-sm">Vital ecosystems providing shelter and food for countless marine species.</p>
          </div>

          <!-- Card 2 -->
          <div class="bg-ocean-gradient backdrop-blur-sm p-5 md:p-6 rounded-2xl shadow-lg hover:shadow-xl transition w-60 md:w-72 mx-3 md:mx-4 h-[22rem] md:h-[24rem] flex-shrink-0">
            <img src="images/s2.jpg" class="rounded-xl mb-3 md:mb-4 w-full h-40 md:h-48 object-cover" alt="Dolphins">
            <h3 class="text-xl md:text-2xl font-semibold text-white mb-2" style="font-family: 'Apple Chancery', cursive;">Dolphins</h3>
            <p class="text-gray-100 text-xs md:text-sm">Intelligent mammals known for their playful behavior and social nature.</p>
          </div>

          <!-- Card 3 -->
          <div class="bg-ocean-gradient backdrop-blur-sm p-5 md:p-6 rounded-2xl shadow-lg hover:shadow-xl transition w-60 md:w-72 mx-3 md:mx-4 h-[22rem] md:h-[24rem] flex-shrink-0">
            <img src="images/s1.jpg" class="rounded-xl mb-3 md:mb-4 w-full h-40 md:h-48 object-cover" alt="Sea Turtles">
            <h3 class="text-xl md:text-2xl font-semibold text-white mb-2" style="font-family: 'Apple Chancery', cursive;">Sea Turtles</h3>
            <p class="text-gray-100 text-xs md:text-sm">Ancient mariners who travel thousands of miles and face many threats.</p>
          </div>

          <!-- Card 4 -->
          <div class="bg-ocean-gradient backdrop-blur-sm p-5 md:p-6 rounded-2xl shadow-lg hover:shadow-xl transition w-60 md:w-72 mx-3 md:mx-4 h-[22rem] md:h-[24rem] flex-shrink-0">
            <img src="images/s3.jpg" class="rounded-xl mb-3 md:mb-4 w-full h-40 md:h-48 object-cover" alt="Clownfish">
            <h3 class="text-xl md:text-2xl font-semibold text-white mb-2" style="font-family: 'Apple Chancery', cursive;">Clownfish</h3>
            <p class="text-gray-100 text-xs md:text-sm">Brightly colored fish living symbiotically with sea anemones.</p>
          </div>

          <!-- Duplicate Set -->
          <div class="bg-ocean-gradient backdrop-blur-sm p-5 md:p-6 rounded-2xl shadow-lg hover:shadow-xl transition w-60 md:w-72 mx-3 md:mx-4 h-[22rem] md:h-[24rem] flex-shrink-0">
            <img src="images/s4.jpg" class="rounded-xl mb-3 md:mb-4 w-full h-40 md:h-48 object-cover" alt="Coral Reef">
            <h3 class="text-xl md:text-2xl font-semibold text-white mb-2" style="font-family: 'Apple Chancery', cursive;">Coral Reefs</h3>
            <p class="text-gray-100 text-xs md:text-sm">Vital ecosystems providing shelter and food for countless marine species.</p>
          </div>
          <div class="bg-ocean-gradient backdrop-blur-sm p-5 md:p-6 rounded-2xl shadow-lg hover:shadow-xl transition w-60 md:w-72 mx-3 md:mx-4 h-[22rem] md:h-[24rem] flex-shrink-0">
            <img src="images/s2.jpg" class="rounded-xl mb-3 md:mb-4 w-full h-40 md:h-48 object-cover" alt="Dolphins">
            <h3 class="text-xl md:text-2xl font-semibold text-white mb-2" style="font-family: 'Apple Chancery', cursive;">Dolphins</h3>
            <p class="text-gray-100 text-xs md:text-sm">Intelligent mammals known for their playful behavior and social nature.</p>
          </div>
          <div class="bg-ocean-gradient backdrop-blur-sm p-5 md:p-6 rounded-2xl shadow-lg hover:shadow-xl transition w-60 md:w-72 mx-3 md:mx-4 h-[22rem] md:h-[24rem] flex-shrink-0">
            <img src="images/s1.jpg" class="rounded-xl mb-3 md:mb-4 w-full h-40 md:h-48 object-cover" alt="Sea Turtles">
            <h3 class="text-xl md:text-2xl font-semibold text-white mb-2" style="font-family: 'Apple Chancery', cursive;">Sea Turtles</h3>
            <p class="text-gray-100 text-xs md:text-sm">Ancient mariners who travel thousands of miles and face many threats.</p>
          </div>
          <div class="bg-ocean-gradient backdrop-blur-sm p-5 md:p-6 rounded-2xl shadow-lg hover:shadow-xl transition w-60 md:w-72 mx-3 md:mx-4 h-[22rem] md:h-[24rem] flex-shrink-0">
            <img src="images/s3.jpg" class="rounded-xl mb-3 md:mb-4 w-full h-40 md:h-48 object-cover" alt="Clownfish">
            <h3 class="text-xl md:text-2xl font-semibold text-white mb-2" style="font-family: 'Apple Chancery', cursive;">Clownfish</h3>
            <p class="text-gray-100 text-xs md:text-sm">Brightly colored fish living symbiotically with sea anemones.</p>
          </div>
        </div>
      </div>

      <!-- Awareness Info & CTA -->
      <div class="mt-12 md:mt-16 bg-ocean-gradient backdrop-blur-lg rounded-3xl p-6 md:p-8 lg:p-12 max-w-4xl mx-auto shadow-2xl">
        <h3 class="text-2xl md:text-3xl font-bold text-white mb-4" style="font-family: 'Apple Chancery', cursive;">Why Marine Life Matters</h3>
        <p class="text-white mb-6 leading-relaxed text-sm md:text-base">
          Oceans cover <strong>71% of our planet</strong> and are home to over <strong>230,000 known species</strong> — with millions more yet to be discovered. 
          They produce <strong>50% of the oxygen</strong> we breathe, regulate climate, and support livelihoods for billions.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6 text-center mb-6 md:mb-8">
          <div class="bg-blue-50 p-4 rounded-xl">
            <div class="text-3xl md:text-4xl font-bold text-blue-600">90%</div>
            <p class="text-xs md:text-sm text-gray-600 mt-1">of big fish populations depleted</p>
          </div>
          <div class="bg-teal-50 p-4 rounded-xl">
            <div class="text-3xl md:text-4xl font-bold text-teal-600">50%</div>
            <p class="text-xs md:text-sm text-gray-600 mt-1">of coral reefs lost in 30 years</p>
          </div>
          <div class="bg-cyan-50 p-4 rounded-xl">
            <div class="text-3xl md:text-4xl font-bold text-cyan-600">8M</div>
            <p class="text-xs md:text-sm text-gray-600 mt-1">tons of plastic enter oceans yearly</p>
          </div>
        </div>
        <a href="event.html" class="inline-block bg-[#015b8a] text-white px-6 md:px-8 py-3 md:py-4 rounded-full font-semibold text-sm md:text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
          Support Conservation Now
        </a>
      </div>
    </div>

    <!-- Inline Styles -->
    <style>
      .marquee-inner {
        animation: scrollCards 40s linear infinite;
      }
      @keyframes scrollCards {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
      }
      #marquee:hover .marquee-inner { animation-play-state: paused; }
    </style>

    <!-- Inline Script -->
    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const marquee = document.getElementById("marquee");
        const cardCount = 4;
        const baseSpeed = 10;
        const duration = cardCount * baseSpeed;
        marquee.querySelector(".marquee-inner").style.animationDuration = `${duration}s`;
      });
    </script>
  </section>

  <!-- Threats Section -->
  <section id="threats" class="py-16 md:py-20 px-6 bg-white">
    <div class="max-w-7xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#015b8a] mb-4" style="font-family: 'Apple Chancery', cursive;">Threats to Marine Life</h2>
      <p class="text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto mb-10 md:mb-12">
        Marine ecosystems face serious challenges such as pollution, overfishing, and climate change.
      </p>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
        <!-- Plastic Pollution -->
        <div class="p-6 md:p-8 bg-ocean-gradient rounded-2xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300 flex flex-col">
          <h3 class="text-xl md:text-2xl font-bold text-white mb-3" style="font-family: 'Apple Chancery', cursive;">Plastic Pollution</h3>
          <p class="text-gray-100 flex-grow text-sm md:text-base">
            Millions of tons of plastic waste end up in the ocean each year, harming wildlife and ecosystems.
          </p>
          <a href="Threats.html" class="mt-6 inline-block bg-[#015b8a] text-white px-5 md:px-6 py-3 rounded-full font-semibold text-sm md:text-base shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300">
            Learn More
          </a>
        </div>

        <!-- Overfishing -->
        <div class="p-6 md:p-8 bg-ocean-gradient rounded-2xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300 flex flex-col">
          <h3 class="text-xl md:text-2xl font-bold text-white mb-3" style="font-family: 'Apple Chancery', cursive;">Overfishing</h3>
          <p class="text-gray-100 flex-grow text-sm md:text-base">
            Unsustainable fishing practices deplete fish populations and disrupt ocean food chains.
          </p>
          <a href="Threats.html" class="mt-6 inline-block bg-[#015b8a] text-white px-5 md:px-6 py-3 rounded-full font-semibold text-sm md:text-base shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300">
            Learn More
          </a>
        </div>

        <!-- Climate Change -->
        <div class="p-6 md:p-8 bg-ocean-gradient rounded-2xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300 flex flex-col">
          <h3 class="text-xl md:text-2xl font-bold text-white mb-3" style="font-family: 'Apple Chancery', cursive;">Climate Change</h3>
          <p class="text-gray-100 flex-grow text-sm md:text-base">
            Rising temperatures and ocean acidification bleach coral reefs and threaten marine survival.
          </p>
          <a href="Threats.html" class="mt-6 inline-block bg-[#015b8a] text-white px-5 md:px-6 py-3 rounded-full font-semibold text-sm md:text-base shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300">
            Learn More
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Events Section -->
  <section id="events" class="py-16 md:py-20 px-6 bg-ocean-gradient text-white text-center">
    <div class="max-w-7xl mx-auto">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-8" style="font-family: 'Apple Chancery', cursive;">Upcoming Awareness Campaigns</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
        <div class="bg-white/10 backdrop-blur-sm p-6 rounded-2xl shadow-lg">
          <h3 class="text-xl md:text-2xl font-bold text-seafoam mb-2" style="font-family: 'Apple Chancery', cursive;">Beach Cleanup Drive</h3>
          <p class="opacity-90 mb-2 text-sm md:text-base">Date: Nov 10, 2025</p>
          <p class="opacity-80 text-xs md:text-sm">Join hands to clean our coastal areas and protect marine life.</p>
        </div>
        <div class="bg-white/10 backdrop-blur-sm p-6 rounded-2xl shadow-lg">
          <h3 class="text-xl md:text-2xl font-bold text-seafoam mb-2" style="font-family: 'Apple Chancery', cursive;">Save the Coral Week</h3>
          <p class="opacity-90 mb-2 text-sm md:text-base">Date: Dec 5–12, 2025</p>
          <p class="opacity-80 text-xs md:text-sm">A global initiative to educate people about coral preservation.</p>
        </div>
        <div class="bg-white/10 backdrop-blur-sm p-6 rounded-2xl shadow-lg">
          <h3 class="text-xl md:text-2xl font-bold text-seafoam mb-2" style="font-family: 'Apple Chancery', cursive;">Marine Education Workshop</h3>
          <p class="opacity-90 mb-2 text-sm md:text-base">Date: Jan 20, 2026</p>
          <p class="opacity-80 text-xs md:text-sm">Learn how to make a difference in your community through awareness.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-16 md:py-20 px-6 bg-white">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#015b8a] mb-4" style="font-family: 'Apple Chancery', cursive;">Get Involved</h2>
      <p class="text-sm md:text-base lg:text-lg text-gray-600 mb-8 max-w-2xl mx-auto">Contact us or volunteer to make a positive impact on marine conservation.</p>
      <form class="grid gap-4 text-left max-w-2xl mx-auto">
        <input type="text" placeholder="Full Name" class="p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-deep-ocean text-sm md:text-base"/>
        <input type="email" placeholder="Email Address" class="p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-deep-ocean text-sm md:text-base"/>
        <textarea placeholder="Your Message" rows="5" class="p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-deep-ocean text-sm md:text-base"></textarea>
        <button class="bg-deep-ocean text-white px-8 py-4 rounded-lg font-semibold hover:bg-ocean-gradient transition-all text-sm md:text-base">
          Submit
        </button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="relative bg-ocean-gradient text-white py-12 px-6 overflow-hidden">
    <div class="absolute inset-0 -z-10">
      <img src="images/r.jpeg" alt="Marine Background" class="w-full h-full object-cover opacity-40">
    </div>
    <div class="max-w-7xl mx-auto text-center relative z-10">
      <h3 class="text-2xl md:text-3xl font-bold text-seafoam mb-2" style="font-family: 'Apple Chancery', cursive;">MantaFlow</h3>
      <p class="text-sm md:text-base opacity-90 mb-4">Together we can protect and preserve our blue planet.</p>
      <p class="text-xs md:text-sm opacity-70">© 2025 MarineLife Portal. All rights reserved.</p>
    </div>
  </footer>

  <!-- JS for mobile menu -->
  <script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
      menuBtn.textContent = mobileMenu.classList.contains('hidden') ? 'Menu' : 'Close';
    });
  </script>

</body>
</html>