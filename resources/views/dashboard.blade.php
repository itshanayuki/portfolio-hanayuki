<!-- resources/views/admin/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin - Hanayuki Dev</title>

  <!-- Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Chart.js CDN -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gradient-to-br from-[#1a1a2e] via-[#1f1f2f] to-[#2a2a3d] text-white min-h-screen font-sans">

  <!-- Layout Wrapper -->
  <div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-[#121212] border-r border-gray-700 flex flex-col p-6">
      <div class="text-center mb-10">
    <div class="w-24 h-24 rounded-full border-4 border-pink-300 mx-auto mb-4 bg-gray-100"></div>
    <h2 class="text-lg font-semibold text-gray-700">Hanayuki Dev</h2>
    <p class="text-sm text-gray-400">Web Developer</p>
  </div>

  <nav class="flex flex-col gap-4">
    <a href="#" class="flex items-center gap-3 text-pink-500 font-semibold hover:text-pink-600">
      <i class="fas fa-home"></i> Dashboard
    </a>
    <a href="#" class="flex items-center gap-3 text-gray-600 hover:text-pink-500">
      <i class="fas fa-address-book"></i> Contacts
    </a>
    <a href="#" class="flex items-center gap-3 text-gray-600 hover:text-pink-500">
      <i class="fas fa-briefcase"></i> Portfolio
    </a>
    <a href="#" class="flex items-center gap-3 text-gray-600 hover:text-pink-500">
      <i class="fas fa-cog"></i> Settings
    </a>
  </nav>

  <div class="mt-10">
    <form action="{{ route('logout') }}" method="POST">
      @csrf
      <button type="submit"
        class="w-full py-2 text-sm text-white bg-pink-500 hover:bg-pink-600 rounded flex items-center justify-center gap-2">
        <i class="fas fa-sign-out-alt"></i> Logout
      </button>
    </form>
  </div>
    </aside>

   <!-- Main Content -->
<main class="flex-1 p-6 bg-[#f6f4fb] text-gray-800 min-h-screen">
 <h1 class="text-xl font-bold mb-4">Welcome back, {{ Auth::user()->name }}!</h1>


  <!-- Stat Cards -->
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
  <div class="bg-white p-4 rounded-lg text-center shadow">
    <p class="text-xs text-gray-500">Visitors Rate</p>
    <h2 class="text-2xl font-bold text-pink-500">{{ $visitorsRate }}%</h2>
  </div>
  <div class="bg-white p-4 rounded-lg text-center shadow">
    <p class="text-xs text-gray-500">Bounce Rate</p>
    <h2 class="text-2xl font-bold text-purple-500">{{ $bounceRate }}%</h2>
  </div>
  <div class="bg-white p-4 rounded-lg text-center shadow">
    <p class="text-xs text-gray-500">Total Contacts</p>
    <h2 class="text-2xl font-bold text-pink-400">{{ $totalContacts }}</h2>
  </div>
</div>


  <!-- Charts Section -->
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
    <!-- Line Chart -->
    <div class="bg-white p-4 rounded-lg shadow flex flex-col items-center">
      <h3 class="text-sm font-semibold mb-2 text-gray-700">Contacts Over Time</h3>
      <canvas id="lineChart" width="200" height="130"></canvas>
    </div>

    <!-- Doughnut Chart -->
    <div class="bg-white p-4 rounded-lg shadow flex flex-col items-center">
      <h3 class="text-sm font-semibold mb-2 text-gray-700">Conversion Rate</h3>
      <canvas id="donutChart" width="180" height="180"></canvas>
    </div>

    <!-- Bar Chart -->
    <div class="bg-white p-4 rounded-lg shadow flex flex-col items-center">
      <h3 class="text-sm font-semibold mb-2 text-gray-700">Monthly Contacts</h3>
      <canvas id="barChart" width="200" height="130"></canvas>
    </div>
  </div>
</main>

<!-- Chart.js Script -->
<script>
  // Line Chart
  new Chart(document.getElementById('lineChart'), {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        label: 'Visitors',
        data: [120, 190, 300, 150, 220, 340],
        fill: false,
        borderColor: '#c59bff',
        tension: 0.3,
        pointBackgroundColor: '#f7b3da',
      }]
    },
    options: {
      plugins: { legend: { display: false } },
      scales: {
        x: { ticks: { color: '#666' }, grid: { color: '#eee' } },
        y: { ticks: { color: '#666' }, grid: { color: '#eee' } }
      }
    }
  });

  // Doughnut Chart
  new Chart(document.getElementById('donutChart'), {
    type: 'doughnut',
    data: {
      labels: ['Converted', 'Not Converted'],
      datasets: [{
        data: [65, 35],
        backgroundColor: ['#f7b3da', '#c5c5c5'],
        borderWidth: 1
      }]
    },
    options: {
      plugins: { legend: { labels: { color: '#555' } } }
    }
  });

  // Bar Chart
  new Chart(document.getElementById('barChart'), {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        label: 'Contacts',
        data: [40, 55, 60, 45, 70, 90],
        backgroundColor: '#d7a9ff',
        borderRadius: 5
      }]
    },
    options: {
      plugins: { legend: { display: false } },
      scales: {
        x: { ticks: { color: '#666' }, grid: { color: '#eee' } },
        y: { ticks: { color: '#666' }, grid: { color: '#eee' } }
      }
    }
  });
</script>

</body>
</html>
