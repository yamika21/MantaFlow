<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register for Event | MantaFlow</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/lucide@latest"></script>
  <style>
    body { font-family: 'Inter', sans-serif; }
    .ocean-gradient { 
      background: linear-gradient(135deg, #0a3d62 0%, #1e6b9a 40%, #3c9bc4 80%, #6dd5ed 100%);
    }
  </style>
</head>
<body class="bg-gray-50 min-h-screen">

  <!-- Header (same as before) -->
<header class="fixed top-0 w-full bg-white shadow-md z-50 border-b border-blue-100">
  <nav class="max-w-7xl mx-auto px-4 sm:px-6 py-4 flex justify-between items-center">

    <!-- Logo -->
    <div class="flex items-center gap-2 sm:gap-3">
      <i data-lucide="waves"
         class="w-9 h-9 sm:w-10 sm:h-10 md:w-12 md:h-12 text-[#015b8a]"></i>
      <div class="text-xl sm:text-2xl md:text-4xl font-bold text-[#015b8a]"
           style="font-family: 'Apple Chancery', cursive;">
        MantaFlow
      </div>
    </div>

    <!-- Desktop Menu -->
    <div class="hidden md:flex items-center space-x-8 font-medium">
      <a href="index.php" class="hover:text-[#015b8a] transition">Home</a>
      <a href="index.php#about" class="hover:text-[#015b8a] transition">About</a>
      <a href="index.php#species" class="hover:text-[#015b8a] transition">Species</a>
      <a href="Threats.php" class="hover:text-[#015b8a] transition">Threats</a>
      <a href="event.php" class="hover:text-[#015b8a] transition">Events</a>
      <a href="index.php#contact" class="hover:text-[#015b8a] transition">Contact</a>
      <a href="login.php"
         class="bg-[#015b8a] text-white px-6 py-2 rounded-full hover:bg-[#014a70] transition">
        Login
      </a>
    </div>

    <!-- Mobile Button -->
    <button id="menu-btn"
      class="md:hidden text-[#015b8a] text-3xl focus:outline-none">
      ☰
    </button>
  </nav>

  <!-- Mobile Menu -->
  <div id="mobile-menu"
       class="hidden md:hidden bg-white border-t shadow-md">
    <a href="index.php" class="block px-6 py-3 hover:bg-gray-100">Home</a>
    <a href="index.php#about" class="block px-6 py-3 hover:bg-gray-100">About</a>
    <a href="index.php#species" class="block px-6 py-3 hover:bg-gray-100">Species</a>
    <a href="Threats.php" class="block px-6 py-3 hover:bg-gray-100">Threats</a>
    <a href="event.php" class="block px-6 py-3 hover:bg-gray-100">Events</a>
    <a href="login.php"
       class="block px-6 py-3 bg-[#015b8a] text-white text-center">
      Login
    </a>
  </div>
</header>
<script>
  const menuBtn = document.getElementById("menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");

  menuBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
  });

  // Close mobile menu when resizing to desktop
  window.addEventListener("resize", () => {
    if (window.innerWidth >= 768) {
      mobileMenu.classList.add("hidden");
    }
  });
</script>

  <!-- Hero -->
  <section class="ocean-gradient text-white py-24 text-center">
    <div class="max-w-4xl mx-auto px-6">
      <h2 class="text-5xl md:text-6xl font-bold mb-4" style="font-family: 'Apple Chancery', cursive;">
        Event Registration
      </h2>
      <p class="text-xl opacity-90" id="eventInfo">
        You are registering for:<br>
        <span class="text-3xl font-bold text-cyan-200" id="eventName">Loading...</span>
      </p>
    </div>
  </section>

  <!-- Registration Form -->
  <section class="py-16 px-6">
    <div class="max-w-2xl mx-auto">
      <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12">

        <form id="registrationForm" class="space-y-8">
          <div class="text-center mb-8">
            <i data-lucide="calendar-check" class="w-16 h-16 text-teal-500 mx-auto mb-4"></i>
            <h3 class="text-3xl font-bold text-gray-800">Secure Your Spot</h3>
          </div>

          <div class="grid md:grid-cols-2 gap-7">
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label>
              <input type="text" name="name" required class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-4 focus:ring-teal-300">
            </div>
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
              <input type="email" name="email" required class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-4 focus:ring-teal-300">
            </div>
          </div>

          <div class="grid md:grid-cols-2 gap-7">
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
              <input type="tel" name="phone" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-4 focus:ring-teal-300">
            </div>
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">Age Group</label>
              <select name="age" class="w-full px-5 py-4 border border-gray-300 rounded-xl">
                <option>Under 18</option>
                <option>18–25</option>
                <option>26–35</option>
                <option>36–50</option>
                <option>50+</option>
              </select>
            </div>
          </div>

          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Special Notes</label>
            <textarea name="notes" rows="3" class="w-full px-5 py-4 border border-gray-300 rounded-xl"></textarea>
          </div>

          <label class="flex items-start gap-3">
            <input type="checkbox" required class="w-5 h-5 text-teal-600">
            <span class="text-sm text-gray-700">I agree to attend and follow guidelines *</span>
          </label>

          <button type="submit" class="w-full bg-gradient-to-r from-teal-500 to-cyan-600 text-white font-bold text-xl py-5 rounded-2xl hover:shadow-2xl transition">
            Complete Registration
          </button>
        </form>

        <div id="successMessage" class="hidden text-center py-16">
          <i data-lucide="check-circle" class="w-24 h-24 text-green-500 mx-auto mb-6"></i>
          <h3 class="text-4xl font-bold text-gray-800 mb-4">Thank You!</h3>
          <p class="text-xl text-gray-600">Your registration is saved successfully!</p>
          <a href="event.php" class="mt-8 inline-block bg-[#015b8a] text-white px-8 py-3 rounded-xl">Back to Events</a>
        </div>

      </div>
    </div>
  </section>

  <script>
    lucide.createIcons();

    // Get event name from URL
    const params = new URLSearchParams(window.location.search);
    document.getElementById('eventName').textContent = decodeURIComponent(params.get('event') || 'Marine Event');

    document.getElementById('registrationForm').addEventListener('submit', async function(e) {
      e.preventDefault();

      const formData = new FormData(this);
      formData.append('event', document.getElementById('eventName').textContent);

      try {
        const res = await fetch('backend/save_registration.php', {
          method: 'POST',
          body: formData
        });
        const data = await res.json();

        if (data.status === 'success') {
          this.classList.add('hidden');
          document.getElementById('successMessage').classList.remove('hidden');
          lucide.createIcons();
        } else {
          alert('Error: ' + data.message);
        }
      } catch (err) {
        alert('Network error. Check console.');
        console.error(err);
      }
    });
  </script>
</body>
</html>