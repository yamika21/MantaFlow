<?php
session_start();
require_once 'backend/db_connect.php';

// Protect the page - must be logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

$username = $_SESSION['username'] ?? 'Admin';

// Get total registrations
try {
    $totalRegs = $pdo->query("SELECT COUNT(*) FROM event_registrations")->fetchColumn();
} catch (Exception $e) {
    $totalRegs = 'Error';
}
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
    .sidebar-active {
      background: linear-gradient(to right, #015b8a, #06b6d4);
      color: white !important;
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }
    .stat-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    }
    .table-row:hover {
      background-color: #eff6ff;
    }
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
      <p class="text-sm text-gray-600 mt-4">Welcome, <strong><?php echo htmlspecialchars($username); ?></strong></p>
    </div>

    <nav class="flex-1 p-6 space-y-3">
      <a href="#" data-section="dashboard" class="sidebar-link flex items-center gap-4 p-4 rounded-xl sidebar-active transition">
        <i data-lucide="layout-dashboard" class="w-6 h-6"></i>
        <span class="font-medium">Dashboard</span>
      </a>
      <a href="#" data-section="registrations" class="sidebar-link flex items-center gap-4 p-4 rounded-xl text-gray-700 hover:bg-blue-50 transition">
        <i data-lucide="users" class="w-6 h-6"></i>
        <span class="font-medium">Registrations</span>
      </a>
      <a href="event.php" class="flex items-center gap-4 p-4 rounded-xl text-gray-700 hover:bg-blue-50 transition">
        <i data-lucide="calendar" class="w-6 h-6"></i>
        <span class="font-medium">View Events</span>
      </a>
    </nav>

    <div class="p-6 border-t border-gray-200">
      <!-- FIXED: Now goes to logout.php which destroys session -->
      <a href="backend/logout.php" class="flex items-center gap-4 p-4 rounded-xl text-red-600 hover:bg-red-50 transition">
        <i data-lucide="log-out" class="w-6 h-6"></i>
        <span class="font-medium">Logout</span>
      </a>
    </div>
  </div>

  <!-- Main Content -->
  <div class="ml-64 min-h-screen">
    <header class="bg-white shadow-lg border-b border-gray-200 px-10 py-6 flex justify-between items-center">
      <h1 class="text-3xl font-bold text-gray-800" id="page-title">Dashboard</h1>
      <div class="flex items-center gap-6">
        <div class="text-right">
          <p class="text-lg font-bold text-[#015b8a] registration-count"><?php echo $totalRegs; ?> Registrations</p>
          <p class="text-sm text-gray-500">Today: <?php echo date('M j, Y'); ?></p>
        </div>
        <i data-lucide="bell" class="w-8 h-8 text-gray-600 cursor-pointer hover:text-[#015b8a]"></i>
      </div>
    </header>

    <!-- Dashboard Section -->
    <section id="dashboard" class="content-section p-10">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
        <div class="stat-card bg-gradient-to-br from-[#015b8a] to-cyan-700 p-8 rounded-2xl text-white shadow-xl">
          <i data-lucide="calendar-check" class="w-12 h-12 mb-4 opacity-80"></i>
          <p class="text-lg opacity-90">Total Events</p>
          <p class="text-5xl font-bold">6</p>
        </div>
        <div class="stat-card bg-gradient-to-br from-teal-500 to-emerald-600 p-8 rounded-2xl text-white shadow-xl">
          <i data-lucide="users" class="w-12 h-12 mb-4 opacity-80"></i>
          <p class="text-lg opacity-90">Total Registrations</p>
          <p class="text-5xl font-bold registration-count"><?php echo $totalRegs; ?></p>
        </div>
        <div class="stat-card bg-gradient-to-br from-purple-600 to-pink-600 p-8 rounded-2xl text-white shadow-xl">
          <i data-lucide="trending-up" class="w-12 h-12 mb-4 opacity-80"></i>
          <p class="text-lg opacity-90">This Month</p>
          <p class="text-5xl font-bold">+24%</p>
        </div>
      </div>

      <h2 class="text-2xl font-bold text-gray-800 mb-6">Latest Registrations</h2>
      <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
        <div class="p-6 border-b bg-gray-50">
          <input type="text" id="search" placeholder="Search by name, email, event..." class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-4 focus:ring-[#015b8a]/30">
        </div>
        <div class="overflow-x-auto">
          <table class="w-full">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Event</th>
                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
              </tr>
            </thead>
            <tbody id="tableBody" class="bg-white divide-y divide-gray-200">
              <?php include 'backend/get_latest_registrations.php'; ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- All Registrations Section -->
    <section id="registrations" class="content-section p-10 hidden">
      <h2 class="text-3xl font-bold text-gray-800 mb-8">All Event Registrations</h2>

      <div class="mb-8 max-w-md">
        <input type="text" id="fullSearch" placeholder="Search by name, email, event, phone..." 
               class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-4 focus:ring-[#015b8a]/30">
      </div>

      <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
        <div class="overflow-x-auto">
          <table class="w-full">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Event</th>
                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Age Group</th>
                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Registered On</th>
                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
              </tr>
            </thead>
            <tbody id="fullTableBody" class="bg-white divide-y divide-gray-200">
              <?php
              try {
                $stmt = $pdo->query("SELECT * FROM event_registrations ORDER BY registered_at DESC");
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  $phone = $row['phone'] ?: '-';
                  $age = $row['age_group'] ?: '-';
                  $date = date('M j, Y g:i A', strtotime($row['registered_at']));
                  ?>
                  <tr class="table-row transition hover:bg-blue-50">
                    <td class="px-6 py-4 text-sm text-gray-600">#<?php echo $row['id']; ?></td>
                    <td class="px-6 py-4 font-medium"><?php echo htmlspecialchars($row['name']); ?></td>
                    <td class="px-6 py-4"><?php echo htmlspecialchars($row['email']); ?></td>
                    <td class="px-6 py-4"><?php echo htmlspecialchars($phone); ?></td>
                    <td class="px-6 py-4 font-medium text-[#015b8a]"><?php echo htmlspecialchars($row['event_name']); ?></td>
                    <td class="px-6 py-4 text-sm"><?php echo htmlspecialchars($age); ?></td>
                    <td class="px-6 py-4 text-sm text-gray-600"><?php echo $date; ?></td>
                    <td class="px-6 py-4">
                      <button onclick="deleteReg(<?php echo $row['id']; ?>)" class="text-red-600 hover:text-red-800 font-bold text-sm">
                        Delete
                      </button>
                    </td>
                  </tr>
                  <?php
                }
              } catch (Exception $e) {
                echo "<tr><td colspan='8' class='text-center py-10 text-red-500'>Error: " . htmlspecialchars($e->getMessage()) . "</td></tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>

  <script>
    lucide.createIcons();

    // Sidebar Navigation
    document.querySelectorAll('.sidebar-link').forEach(link => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        document.querySelectorAll('.sidebar-link').forEach(l => {
          l.classList.remove('sidebar-active');
          l.classList.add('text-gray-700', 'hover:bg-blue-50');
        });
        link.classList.add('sidebar-active');
        link.classList.remove('text-gray-700', 'hover:bg-blue-50');

        document.querySelectorAll('.content-section').forEach(sec => sec.classList.add('hidden'));
        const target = document.getElementById(link.dataset.section);
        if (target) target.classList.remove('hidden');

        document.getElementById('page-title').textContent = link.querySelector('span').textContent;
      });
    });

    // Live Search
    document.getElementById('search')?.addEventListener('input', function() {
      const term = this.value.toLowerCase();
      document.querySelectorAll('#tableBody tr').forEach(row => {
        row.style.display = row.textContent.toLowerCase().includes(term) ? '' : 'none';
      });
    });

    document.getElementById('fullSearch')?.addEventListener('input', function() {
      const term = this.value.toLowerCase();
      document.querySelectorAll('#fullTableBody tr').forEach(row => {
        row.style.display = row.textContent.toLowerCase().includes(term) ? '' : 'none';
      });
    });

    // Delete Registration
    async function deleteReg(id) {
      if (!confirm("Are you sure you want to delete this registration? This cannot be undone.")) return;
      
      const fd = new FormData();
      fd.append('id', id);
      
      try {
        const res = await fetch('backend/delete_registration.php', {
          method: 'POST',
          body: fd
        });
        const data = await res.json();
        
        if (data.status === 'success') {
          location.reload();
        } else {
          alert('Delete failed: ' + (data.message || 'Unknown error'));
        }
      } catch (err) {
        alert('Network error. Please try again.');
        console.error(err);
      }
    }

    // Auto-refresh Latest Registrations & Count
    async function refreshDashboard() {
      try {
        const tableRes = await fetch('backend/get_latest_registrations.php');
        const tableHtml = await tableRes.text();
        document.getElementById('tableBody').innerHTML = tableHtml;

        const countRes = await fetch('backend/get_registration_count.php');
        const countData = await countRes.json();
        if (countData.count !== undefined) {
          document.querySelectorAll('.registration-count').forEach(el => {
            el.textContent = countData.count;
          });
        }
      } catch (err) {
        console.log('Auto-refresh failed');
      }
    }

    setInterval(refreshDashboard, 10000);
    refreshDashboard();
  </script>
</body>
</html>