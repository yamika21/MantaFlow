<?php
session_start();
require_once 'backend/db_connect.php';

// Optional: Protect admin panel (uncomment when ready)
// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit;
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Dashboard | MantaFlow</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/lucide@latest"></script>
  <style>
    body { font-family: 'Inter', sans-serif; background: #f8fafc; }
    .sidebar-active { @apply bg-gradient-to-r from-[#015b8a] to-cyan-600 text-white shadow-lg; }
    .stat-card { @apply transition-all duration-300; }
    .stat-card:hover { @apply transform -translate-y-2 shadow-2xl; }
    .table-row:hover { @apply bg-blue-50; }
  </style>
</head>
<body class="bg-gray-100">

  <!-- Sidebar -->
  <div class="fixed inset-y-0 left-0 w-64 bg-white shadow-2xl z-50 flex flex-col">
    <div class="p-8 border-b border-gray-200">
      <div class="flex items-center gap-3">
        <i data-lucide="waves" class="w-12 h-12 text-[#015b8a]"></i>
        <div class="text-3xl font-bold text-[#015b8a]" style="font-family: 'Apple Chancery', cursive;">MantaFlow</div>
      </div>
      <p class="text-sm text-gray-500 mt-2">Admin Panel</p>
    </div>

    <nav class="flex-1 p-6 space-y-3">
      <a href="#" data-section="dashboard" class="sidebar-link flex items-center gap-4 p-4 rounded-xl sidebar-active">
        <i data-lucide="layout-dashboard" class="w-6 h-6"></i>
        <span class="font-medium">Dashboard</span>
      </a>
      <a href="#" data-section="registrations" class="sidebar-link flex items-center gap-4 p-4 rounded-xl text-gray-700 hover:bg-blue-50">
        <i data-lucide="users" class="w-6 h-6"></i>
        <span class="font-medium">Registrations</span>
      </a>
      <a href="event.php" class="flex items-center gap-4 p-4 rounded-xl text-gray-700 hover:bg-blue-50">
        <i data-lucide="calendar" class="w-6 h-6"></i>
        <span class="font-medium">View Events</span>
      </a>
    </nav>

    <div class="p-6 border-t border-gray-200">
      <a href="login.php" class="flex items-center gap-4 p-4 rounded-xl text-red-600 hover:bg-red-50 transition">
        <i data-lucide="log-out" class="w-6 h-6"></i>
        <span class="font-medium">Logout</span>
      </a>
    </div>
  </div>

  <!-- Main Content -->
  <div class="ml-64 min-h-screen">

    <!-- Top Bar -->
    <header class="bg-white shadow-lg border-b border-gray-200 px-10 py-6 flex justify-between items-center">
      <h1 class="text-3xl font-bold text-gray-800" id="page-title">Dashboard</h1>
      <div class="flex items-center gap-6">
        <div class="text-right">
          <p class="text-lg font-bold text-[#015b8a]">
            <?php echo $pdo->query("SELECT COUNT(*) FROM event_registrations")->fetchColumn(); ?> Registrations
          </p>
          <p class="text-sm text-gray-500">Today: <?php echo date('M j, Y'); ?></p>
        </div>
        <i data-lucide="bell" class="w-8 h-8 text-gray-600 cursor-pointer hover:text-[#015b8a]"></i>
      </div>
    </header>

    <!-- Dashboard Section -->
    <section id="dashboard" class="content-section p-10">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
        <div class="stat-card bg-gradient-to-br from-[#015b8a] to-cyan-700 p-8 rounded-2xl text-white">
          <i data-lucide="calendar-check" class="w-12 h-12 mb-4 opacity-80"></i>
          <p class="text-lg opacity-90">Total Events</p>
          <p class="text-5xl font-bold">6</p>
        </div>
        <div class="stat-card bg-gradient-to-br from-teal-500 to-emerald-600 p-8 rounded-2xl text-white">
          <i data-lucide="users" class="w-12 h-12 mb-4 opacity-80"></i>
          <p class="text-lg opacity-90">Total Registrations</p>
          <p class="text-5xl font-bold">
            <?php echo $pdo->query("SELECT COUNT(*) FROM event_registrations")->fetchColumn(); ?>
          </p>
        </div>
        <div class="stat-card bg-gradient-to-br from-purple-600 to-pink-600 p-8 rounded-2xl text-white">
          <i data-lucide="trending-up" class="w-12 h-12 mb-4 opacity-80"></i>
          <p class="text-lg opacity-90">This Month</p>
          <p class="text-5xl font-bold">+24%</p>
        </div>
      </div>

      <h2 class="text-2xl font-bold text-gray-800 mb-6">Latest Registrations</h2>
      <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
        <div class="p-6 border-b">
          <input type="text" id="search" placeholder="Search by name, email, event..." class="w-full px-5 py-3 border rounded-xl focus:ring-4 focus:ring-[#015b8a]">
        </div>
        <div class="overflow-x-auto">
          <table class="w-full">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-6 py-4 text-left">Name</th>
                <th class="px-6 py-4 text-left">Email</th>
                <th class="px-6 py-4 text-left">Event</th>
                <th class="px-6 py-4 text-left">Phone</th>
                <th class="px-6 py-4 text-left">Date</th>
                <th class="px-6 py-4 text-left">Action</th>
              </tr>
            </thead>
            <tbody id="tableBody" class="divide-y divide-gray-200">
              <?php
              $stmt = $pdo->query("SELECT * FROM event_registrations ORDER BY registered_at DESC");
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $phone = $row['phone'] ? $row['phone'] : '-';
                $date = date('M j, Y g:i A', strtotime($row['registered_at']));
                
                echo "<tr class='table-row'>
                  <td class='px-6 py-4'>{$row['name']}</td>
                  <td class='px-6 py-4'>{$row['email']}</td>
                  <td class='px-6 py-4 font-medium text-[#015b8a]'>{$row['event_name']}</td>
                  <td class='px-6 py-4'>$phone</td>
                  <td class='px-6 py-4'>$date</td>
                  <td class='px-6 py-4'>
                    <button onclick='deleteReg({$row['id']})' class='text-red-600 hover:text-red-800 font-bold'>
                      Delete
                    </button>
                  </td>
                </tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- Registrations Section -->
    <section id="registrations" class="content-section p-10 hidden">
      <h2 class="text-3xl font-bold text-gray-800 mb-8">All Event Registrations</h2>
      <?php include 'registrations_list.php'; // We'll make this next if you want ?>
    </section>
  </div>

  <script>
    lucide.createIcons();

    // Sidebar Navigation
    document.querySelectorAll('.sidebar-link').forEach(link => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        document.querySelectorAll('.sidebar-link').forEach(l => {
          l.classList.remove('sidebar-active', 'bg-gradient-to-r', 'from-[#015b8a]', 'to-cyan-600', 'text-white');
          l.classList.add('text-gray-700', 'hover:bg-blue-50');
        });
        link.classList.add('sidebar-active', 'bg-gradient-to-r', 'from-[#015b8a]', 'to-cyan-600', 'text-white');
        link.classList.remove('text-gray-700', 'hover:bg-blue-50');

        document.querySelectorAll('.content-section').forEach(sec => sec.classList.add('hidden'));
        document.getElementById(link.dataset.section).classList.remove('hidden');
        document.getElementById('page-title').textContent = link.querySelector('span').textContent;
      });
    });

    // Live Search
    document.getElementById('search').addEventListener('input', function() {
      const term = this.value.toLowerCase();
      document.querySelectorAll('#tableBody tr').forEach(row => {
        row.style.display = row.textContent.toLowerCase().includes(term) ? '' : 'none';
      });
    });

    // Delete Function
    async function deleteReg(id) {
      if (!confirm("Delete this registration permanently?")) return;
      const fd = new FormData();
      fd.append('id', id);
      const res = await fetch('backend/delete_registration.php', {method:'POST', body:fd});
      const data = await res.json();
      if (data.status === 'success') location.reload();
      else alert("Delete failed");
    }
  </script>
</body>
</html>