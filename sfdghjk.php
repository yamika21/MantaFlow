<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Signup | Marine Portal</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
      margin: 0;
      overflow: hidden;
    }

    /* Background video styling */
    .bg-video {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -2;
    }

    /* Dark overlay for readability */
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.55);
      z-index: -1;
    }

    /* Glassmorphism effect */
    .signup-card {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.25);
    }
  </style>
</head>

<body class="flex justify-center items-center text-white relative">
<?php require 'mantaflow/index.php' ?>
  <!-- 🎬 Background Video -->
  <video autoplay muted loop playsinline class="bg-video">
    <source src="images/bg.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <!-- 🌊 Overlay -->
  <div class="overlay"></div>

  <!-- 🧾 Signup Card -->
  <div class="signup-card p-10 rounded-3xl shadow-2xl w-[90%] max-w-md text-center">
    <h1 class="text-3xl font-bold mb-2">Admin Signup</h1>
    <p class="text-blue-100 mb-8">Create your account for the Marine Life Awareness Portal</p>

    <form action="/mantaflow/signup.php" method="post" class="flex flex-col space-y-5">
      <input type="text" id="username" placeholder="Username" required
        class="w-full px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-200 outline-none focus:ring-2 focus:ring-blue-300" />

      <input type="email" id="email" placeholder="Email Address" required
        class="w-full px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-200 outline-none focus:ring-2 focus:ring-blue-300" />

      <input type="password" id="password" placeholder="Password" required
        class="w-full px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-200 outline-none focus:ring-2 focus:ring-blue-300" />

      <input type="password" id="confirmPassword" placeholder="Confirm Password" required
        class="w-full px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-200 outline-none focus:ring-2 focus:ring-blue-300" />

      <button type="submit"
        class="w-full py-3 rounded-lg bg-gradient-to-r from-[#03a9f4] to-[#015b8a] font-semibold text-white hover:from-[#0288d1] hover:to-[#013b6b] transition-all duration-300">
        Sign Up
      </button>
    </form>

    <p id="message" class="mt-5 text-sm text-red-200"></p>

    <p class="mt-6 text-sm text-blue-200">
      Already have an account? 
      <a href="login.html" class="text-white underline hover:text-blue-300">Login here</a>
    </p>

    <footer class="mt-10 text-sm text-blue-200 opacity-80">
      &copy; 2025 Marine Awareness Portal. All rights reserved.
    </footer>
  </div>

  <script>
    document.getElementById("signupForm").addEventListener("submit", async function(e) {
      e.preventDefault();
      const msg = document.getElementById("message");

      const username = document.getElementById("username").value.trim();
      const email = document.getElementById("email").value.trim();
      const password = document.getElementById("password").value;
      const confirmPassword = document.getElementById("confirmPassword").value;

      // ⚠️ Basic password match check
      if (password !== confirmPassword) {
        msg.textContent = "Passwords do not match!";
        msg.classList.replace("text-green-200", "text-red-200");
        return;
      }

      const formData = new FormData();
      formData.append("username", username);
      formData.append("email", email);
      formData.append("password", password);

      const response = await fetch("backend/signup.php", {
        method: "POST",
        body: formData
      });

      const data = await response.json();

      if (data.status === "success") {
        msg.textContent = "Signup successful! Redirecting to login...";
        msg.classList.replace("text-red-200", "text-green-200");

        setTimeout(() => window.location.href = "login.html", 1500);
      } else {
        msg.textContent = data.message;
        msg.classList.replace("text-green-200", "text-red-200");
      }
    });
  </script>
</body>
</html>
