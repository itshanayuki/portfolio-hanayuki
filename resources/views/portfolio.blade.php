<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Karya & Proyek — Hanayuki Dev</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    .gradient-text {
      background: linear-gradient(90deg, #D4AF37, #FFFFFF);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    body {
      background-color: #121212;
    }
    img {
      transition: transform 0.4s ease;
    }
    img:hover {
      transform: scale(1.05);
    }
  </style>
</head>
<body class="bg-black text-gray-200 font-sans antialiased">

<!-- Navbar -->
<nav class="fixed w-full bg-black bg-opacity-90 z-50 border-b border-gray-800">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <div class="text-2xl font-bold gradient-text">Hanayuki Dev</div>
    <div class="hidden md:flex space-x-8">
      <a href="/" class="hover:text-amber-200 transition duration-300">Home</a>
      <a href="/portfolio" class="text-amber-400 font-semibold">Projects</a>
      <a href="/about" class="hover:text-amber-200 transition duration-300">About</a>
      <a href="/contact" class="hover:text-amber-200 transition duration-300">Contact</a>
    </div>
  </div>
</nav>


  <!-- Hero Title -->
  <section class="text-center py-20 px-4">
    <h2 class="text-4xl md:text-5xl font-bold text-white tracking-tight mb-4">My Selected Works</h2>
    <p class="text-gray-400 max-w-2xl mx-auto text-base md:text-lg">Berbagai proyek dan karya yang pernah saya kerjakan dengan cinta dan teknologi modern.</p>
  </section>

  <!-- Projects Grid -->
  <main class="max-w-7xl mx-auto px-6 sm:px-12 pb-24 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
    
    @php
      $projects = [
        ['title' => 'UMKM Kuliner', 'desc' => 'Platform sederhana untuk memasarkan produk UMKM secara online.', 'img' => 'https://images.unsplash.com/photo-1600891964599-f61ba0e24092?auto=format&fit=crop&w=600&q=80'],
        ['title' => 'Undangan Digital', 'desc' => 'Website undangan elegan, mudah dibagikan, responsif di semua perangkat.', 'img' => 'https://images.unsplash.com/photo-1524642046550-4a1121188589?auto=format&fit=crop&w=600&q=80'],
        ['title' => 'Aplikasi Arsip Digital', 'desc' => 'Sistem manajemen arsip digital untuk kantor kecil dan sekolah.', 'img' => 'https://images.unsplash.com/photo-1559027615-cdcbef2d1047?auto=format&fit=crop&w=600&q=80'],
        ['title' => 'Website Portofolio', 'desc' => 'Tampilan pribadi yang menampilkan karya, pengalaman, dan branding developer.', 'img' => 'https://images.unsplash.com/photo-1527689368864-3a821dbccc34?auto=format&fit=crop&w=600&q=80'],
        ['title' => 'Website Wisata Alam', 'desc' => 'Informasi destinasi alam, pemesanan tiket, dan galeri panorama menakjubkan.', 'img' => 'https://images.unsplash.com/photo-1526772662000-3f88f10405ff?auto=format&fit=crop&w=600&q=80'],
        ['title' => 'Sistem Nilai Siswa', 'desc' => 'Input nilai, cetak raport, dan kelola data siswa untuk sekolah dasar-menengah.', 'img' => 'https://images.unsplash.com/photo-1571260899304-425eee4c7efc?auto=format&fit=crop&w=600&q=80'],
        ['title' => 'Pembayaran SPP Online', 'desc' => 'Sistem pelaporan dan pembayaran SPP digital, efisien dan transparan.', 'img' => 'https://images.unsplash.com/photo-1605902711622-cfb43c4437f9?auto=format&fit=crop&w=600&q=80'],
        ['title' => 'Katalog Produk Online', 'desc' => 'Web showcase untuk menampilkan katalog produk fashion dan handmade craft.', 'img' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=600&q=80'],
        ['title' => 'Pengajuan Skripsi Online', 'desc' => 'Platform bagi mahasiswa untuk submit judul, revisi, dan tracking dosen pembimbing.', 'img' => 'https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?auto=format&fit=crop&w=600&q=80'],
        ['title' => 'Reservasi Wisata Online', 'desc' => 'Sistem booking destinasi wisata, cocok untuk desa wisata & event lokal.', 'img' => 'https://images.unsplash.com/photo-1519741491049-1e60c39be266?auto=format&fit=crop&w=600&q=80'],
      ];
    @endphp

    @foreach ($projects as $project)
      <div class="group relative rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition">
        <img src="{{ $project['img'] }}" alt="{{ $project['title'] }}" class="w-full h-60 object-cover group-hover:scale-105 transition duration-500">
        <div class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-60 transition"></div>
        <div class="absolute bottom-0 p-6 text-white z-10">
          <h3 class="text-xl font-semibold mb-1">{{ $project['title'] }}</h3>
          <p class="text-sm text-gray-200">{{ $project['desc'] }}</p>
        </div>
      </div>
    @endforeach

  </main>

  <!-- Footer -->
  <footer class="text-center text-sm text-gray-500 py-10 border-t border-gray-800">
    &copy; 2025 Hanayuki Dev — Dibangun dengan cinta, kopi hangat, dan barisan kode yang jujur.
  </footer>

</body>
</html>
