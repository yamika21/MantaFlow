<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Marine Events | MantaFlow</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
  <style>
    body { font-family: 'Inter', sans-serif; margin: 0; padding: 0; }
    .bg-ocean-gradient { 
      background: linear-gradient(135deg, #0a3d62 0%, #1e6b9a 30%, #3c9bc4 60%, #6dd5ed 100%);
    }
    .event-card {
      transition: all 0.3s ease;
    }
    .event-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 30px rgba(0,0,0,0.15);
    }
    .filter-active {
      background: #015b8a !important;
      color: white !important;
    }
    .nav-link-active {
      color: #015b8a !important;
      font-weight: 600;
    }
    .text-seafoam { color: #a7f3d0; }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 pt-20">

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
        <a href="index.php" class="hover:text-[#015b8a] transition">Home</a>
        <a href="index.php#about" class="hover:text-[#015b8a] transition">About</a>
        <a href="index.php#species" class="hover:text-[#015b8a] transition">Species</a>
        <a href="index.php#threats" class="hover:text-[#015b8a] transition">Threats</a>
        <a href="event.php" class="nav-link-active hover:text-[#015b8a] transition">Events</a>
        <a href="index.php#contact" class="hover:text-[#015b8a] transition">Contact</a>
        <a href="index.php#admin" class="hover:text-[#015b8a] transition">Admin</a>
      </div>
      <button id="menu-btn" class="md:hidden text-[#015b8a] text-3xl">Menu</button>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden bg-white shadow-md border-t border-gray-100 md:hidden">
      <a href="index.php#home" class="block px-6 py-3 hover:bg-gray-100">Home</a>
      <a href="index.php#about" class="block px-6 py-3 hover:bg-gray-100">About</a>
      <a href="index.php#species" class="block px-6 py-3 hover:bg-gray-100">Species</a>
      <a href="index.php#threats" class="block px-6 py-3 hover:bg-gray-100">Threats</a>
      <a href="event.php" class="block px-6 py-3 bg-blue-50 text-[#015b8a] font-semibold">Events</a>
      <a href="index.php#contact" class="block px-6 py-3 hover:bg-gray-100">Contact</a>
      <a href="index.php#admin" class="block px-6 py-3 hover:bg-gray-100">Admin</a>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="bg-ocean-gradient text-white py-24 px-6 relative overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="max-w-7xl mx-auto text-center relative z-10">
      <h1 class="text-5xl md:text-6xl font-bold mb-6 drop-shadow-lg" style="font-family: 'Apple Chancery', cursive;">Marine Conservation Events</h1>
      <p class="text-xl md:text-2xl opacity-90 max-w-3xl mx-auto">
        Join us in protecting our oceans. Attend cleanups, workshops, and awareness campaigns.
      </p>
    </div>
  </section>

  <!-- Events Section -->
  <section class="py-20 px-6">
    <div class="max-w-7xl mx-auto">

      <!-- Filters & Search -->
      <div class="mb-12 flex flex-col md:flex-row gap-6 items-center justify-between">
        <div class="flex gap-3 flex-wrap">
          <button data-filter="all" class="filter-btn px-6 py-3 rounded-full bg-white shadow-md font-semibold text-gray-700 hover:bg-gray-100 transition filter-active">
            All Events
          </button>
          <button data-filter="upcoming" class="filter-btn px-6 py-3 rounded-full bg-white shadow-md font-semibold text-gray-700 hover:bg-gray-100 transition">
            Upcoming
          </button>
          <button data-filter="past" class="filter-btn px-6 py-3 rounded-full bg-white shadow-md font-semibold text-gray-700 hover:bg-gray-100 transition">
            Past Events
          </button>
        </div>
        <input 
          type="text" 
          id="searchInput" 
          placeholder="Search events..." 
          class="px-5 py-3 rounded-full bg-white shadow-md w-full md:w-80 focus:outline-none focus:ring-2 focus:ring-teal-500"
        >
      </div>

      <!-- Events Grid -->
      <div id="eventsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Cards injected by JS -->
      </div>

      <!-- No Results -->
      <div id="noResults" class="hidden text-center py-16 text-gray-500">
        <p class="text-xl">No events found.</p>
      </div>
    </div>
  </section>

  <!-- Why Ocean Conservation Matters -->
  <section id="why-conservation" class="py-24 px-6 bg-gradient-to-b from-[#001f3f] via-[#015b8a] to-[#00a3cc] text-white">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-4xl md:text-5xl font-bold mb-6" style="font-family: 'Apple Chancery', cursive;">
        Why Ocean Conservation Matters
      </h2>
      <p class="text-lg text-blue-100 max-w-3xl mx-auto mb-12">
        Oceans produce over half of the world’s oxygen, regulate climate, and feed billions.  
        Yet pollution, overfishing, and habitat loss are destroying marine ecosystems.  
        Protecting oceans means protecting our own future.
      </p>

      <div class="grid md:grid-cols-3 gap-10 mt-10">
        <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl shadow-lg hover:bg-white/20 transition">
          <i data-lucide="wind" class="w-10 h-10 mx-auto mb-3 text-seafoam"></i>
          <h3 class="text-2xl font-semibold mb-2 text-seafoam">Climate Regulation</h3>
          <p class="text-blue-100 text-sm">Oceans absorb carbon dioxide and regulate global temperatures.</p>
        </div>
        <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl shadow-lg hover:bg-white/20 transition">
          <i data-lucide="heart-pulse" class="w-10 h-10 mx-auto mb-3 text-seafoam"></i>
          <h3 class="text-2xl font-semibold mb-2 text-seafoam">Supports Life</h3>
          <p class="text-blue-100 text-sm">Marine ecosystems provide food, oxygen, and medicine.</p>
        </div>
        <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl shadow-lg hover:bg-white/20 transition">
          <i data-lucide="globe" class="w-10 h-10 mx-auto mb-3 text-seafoam"></i>
          <h3 class="text-2xl font-semibold mb-2 text-seafoam">Global Connection</h3>
          <p class="text-blue-100 text-sm">The ocean connects every continent. One action can change everything.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Event Data & JS -->
  <script>
    lucide.createIcons();

    // Mobile Menu Toggle
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
      menuBtn.textContent = mobileMenu.classList.contains('hidden') ? 'Menu' : 'Close';
    });

    // Events Data
    const events = [
      {
        id: 1,
        title: "Beach Cleanup Drive",
        date: "2025-11-15",
        time: "8:00 AM - 12:00 PM",
        location: "Santa Monica Beach, CA",
        category: "upcoming",
        image: "https://img.freepik.com/free-vector/people-cleaning-beaches-together_23-2148417058.jpg?semt=ais_hybrid&w=740&q=80",
        description: "Join 200+ volunteers to remove plastic waste and protect marine life."
      },
      {
        id: 2,
        title: "Coral Reef Restoration Workshop",
        date: "2025-12-05",
        time: "10:00 AM - 3:00 PM",
        location: "Key West, FL",
        category: "upcoming",
        image: "https://img.freepik.com/premium-photo/coral-reef-restoration-project-with-divers-planting-corals_1314467-142768.jpg",
        description: "Hands-on training in coral planting and reef health monitoring."
      },
      {
        id: 3,
        title: "Ocean Plastic Awareness Seminar",
        date: "2025-10-20",
        time: "2:00 PM - 5:00 PM",
        location: "Miami Convention Center",
        category: "past",
        image: "https://www.topsdaynurseries.co.uk/wp-content/uploads/2022/11/Oceans-of-Plastic-Insta-2-1.png",
        description: "Expert talks on microplastics and sustainable alternatives."
      },
      {
        id: 4,
        title: "Sea Turtle Rescue Training",
        date: "2025-11-28",
        time: "9:00 AM - 1:00 PM",
        location: "Galveston, TX",
        category: "upcoming",
        image: "https://images.ctfassets.net/4398fxjf8451/6q4I9jJ9jd8BfyvnOOqxtC/718dcaa60e481260fad465779e818aab/SW-Turtle-Research-03.jpg?q=75&fm=webp&w=3840&h=2160",
        description: "Learn rescue protocols and rehabilitation techniques."
      },
      {
        id: 5,
        title: "World Oceans Day Festival",
        date: "2025-06-08",
        time: "All Day",
        location: "San Diego, CA",
        category: "past",
        image: "https://education.sakshi.com/sites/default/files/images/2022/06/08/worldoceanday-1654681207.jpg",
        description: "Celebrating marine biodiversity with music, art, and education."
      },
      {
        id: 6,
        title: "Dolphin Conservation Webinar",
        date: "2025-12-12",
        time: "7:00 PM - 8:30 PM",
        location: "Online (Zoom)",
        category: "upcoming",
        image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSewaF0kLtl_WBHnNhGTvfK4-ERivE4YgDkTw&s",
        description: "Live session with marine biologists on dolphin protection."
      }
    ];

    const eventsGrid = document.getElementById('eventsGrid');
    const noResults = document.getElementById('noResults');
    const searchInput = document.getElementById('searchInput');
    const filterBtns = document.querySelectorAll('.filter-btn');

    function formatDate(dateStr) {
      const date = new Date(dateStr);
      return date.toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' });
    }

    function renderEvents(filter = 'all', search = '') {
      let filtered = [...events];

      if (filter !== 'all') {
        filtered = filtered.filter(e => e.category === filter);
      }

      const term = search.trim().toLowerCase();
      if (term) {
        filtered = filtered.filter(e =>
          e.title.toLowerCase().includes(term) ||
          e.location.toLowerCase().includes(term) ||
          e.description.toLowerCase().includes(term)
        );
      }

      filtered.sort((a, b) => {
        if (a.category !== b.category) {
          return a.category === 'upcoming' ? -1 : 1;
        }
        return new Date(a.date) - new Date(b.date);
      });

      if (filtered.length === 0) {
        eventsGrid.innerHTML = '';
        noResults.classList.remove('hidden');
        return;
      }

      noResults.classList.add('hidden');
      eventsGrid.innerHTML = filtered.map(event => `
        <div class="event-card bg-white rounded-2xl overflow-hidden shadow-lg">
          <img src="${event.image}" alt="${event.title}" class="w-full h-48 object-cover">
          <div class="p-6">
            <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
              <span>${formatDate(event.date)}</span>
              <span>•</span>
              <span>${event.time}</span>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2">${event.title}</h3>
            <p class="text-gray-600 text-sm mb-3">${event.location}</p>
            <p class="text-gray-600 mb-4 line-clamp-2">${event.description}</p>

            ${event.category === 'upcoming'
              ? `<a href="registration.php?event=${encodeURIComponent(event.title)}&date=${encodeURIComponent(formatDate(event.date))}"
                   class="inline-block bg-gradient-to-r from-teal-500 to-cyan-500 text-white px-6 py-3 rounded-full font-semibold text-sm hover:shadow-lg transform hover:-translate-y-0.5 transition">
                  Register Now
                 </a>`
              : `<a href="#" class="inline-block bg-gray-400 text-white px-6 py-3 rounded-full font-semibold text-sm opacity-70 cursor-not-allowed">
                  View Details
                 </a>`
            }
          </div>
        </div>
      `).join('');
    }

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('filter-active'));
        btn.classList.add('filter-active');
        renderEvents(btn.dataset.filter, searchInput.value);
      });
    });

    searchInput.addEventListener('input', () => {
      const activeFilter = document.querySelector('.filter-active')?.dataset.filter || 'all';
      renderEvents(activeFilter, searchInput.value);
    });

    renderEvents();
  </script>

  <!-- Footer -->
  <footer class="relative bg-white text-[#015b8a] py-12 px-6 overflow-hidden">
    <div class="absolute inset-0 -z-10">
      <img src="images/r.jpeg" alt="Marine Background" class="w-full h-full object-cover opacity-40">
    </div>
    <div class="max-w-7xl mx-auto text-center relative z-10">
      <h3 class="text-2xl md:text-3xl font-bold text-[#015b8a] mb-2" style="font-family: 'Apple Chancery', cursive;">MantaFlow</h3>
      <p class="text-sm md:text-base opacity-90 mb-4">Together we can protect and preserve our blue planet.</p>
      <p class="text-xs md:text-sm opacity-70">© 2025 MarineLife Portal. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>