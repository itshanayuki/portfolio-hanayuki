<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Admin - Hanayuki Dev</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      background-image: url('/img/foto2.jpg');
      background-size: cover;
      background-position: center;
      font-family: 'Segoe UI', sans-serif;
    }

    .glass {
  backdrop-filter: blur(10px);
  background-color: rgba(0, 0, 0, 0.5); /* Lebih gelap */
  border: 1px solid rgba(255, 255, 255, 0.1);
}


    .toggle-eye {
      top: 2.6rem;
      right: 1rem;
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center px-4">

  <div class="w-full max-w-md p-8 rounded-xl glass shadow-xl">
    <h2 class="text-3xl font-bold text-center text-white mb-6">Login Admin</h2>

    <!-- Alert Error -->
    @if(session('error'))
      <div class="bg-red-100 text-red-700 px-4 py-3 rounded mb-4 text-sm">
        {{ session('error') }}
      </div>
    @endif

    <form action="{{ route('proses.login') }}" method="POST" class="space-y-5 relative">
      @csrf

      <!-- Username -->
      <div>
        <label class="block mb-1 text-sm font-semibold text-white">Username</label>
        <input type="text" name="username" required
          class="w-full px-4 py-2 rounded bg-white/10 text-white border border-white/30 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400"
          placeholder="Enter your username">
      </div>

      <!-- Password -->
      <div class="relative">
        <label class="block mb-1 text-sm font-semibold text-white">Password</label>
        <input type="password" name="password" id="passwordInput" required
          class="w-full px-4 py-2 rounded bg-white/10 text-white border border-white/30 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400"
          placeholder="Enter your password">
        <i id="togglePassword" class="fas fa-eye absolute toggle-eye text-white cursor-pointer"></i>
      </div>

      <!-- Submit -->
      <div>
        <button type="submit"
          class="w-full py-2 rounded bg-orange-500 hover:bg-orange-600 text-white font-semibold text-lg transition shadow-lg">
          <i class="fas fa-sign-in-alt mr-2"></i>Login
        </button>
      </div>
    </form>
  </div>

  <!-- Password toggle script -->
  <script>
    const toggle = document.getElementById('togglePassword');
    const input = document.getElementById('passwordInput');
    toggle.addEventListener('click', function () {
      const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
      input.setAttribute('type', type);
      this.classList.toggle('fa-eye-slash');
    });
  </script>
</body>
</html>
