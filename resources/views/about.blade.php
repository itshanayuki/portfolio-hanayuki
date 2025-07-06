<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About — Hanayuki Dev</title>

  <!-- Tailwind CSS & Font Awesome -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <style>
    body {
      background-color: #1a1a1a;
      background-image: url('https://www.transparenttextures.com/patterns/stardust.png');
    }
    .gradient-text {
      background: linear-gradient(90deg, #D4AF37, #FFFFFF);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
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

<!-- About Section -->
<section id="about" class="py-20 bg-gray-900">
  <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center">
    <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
      <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/70481127-9235-467d-b4d6-094bac918fb7.png" 
           alt="Professional web developer" 
           class="rounded-xl shadow-2xl w-full">
    </div>
    <div class="md:w-1/2">
      <h2 class="text-4xl font-bold mb-6"><span class="gradient-text">About</span> Me</h2>
      <p class="text-lg text-gray-300 mb-6">
        I'm a passionate full-stack developer with 8+ years of experience crafting high-end digital experiences for global brands and startups alike. My approach combines technical excellence with elegant design to deliver solutions that perform beautifully at scale.
      </p>
      <p class="text-lg text-gray-300 mb-8">
        Specializing in JavaScript ecosystems and modern frameworks, I help clients transition from legacy systems to cutting-edge architectures while maintaining business continuity and enhancing user engagement.
      </p>
      <div class="grid grid-cols-2 gap-4 mb-8">
        <div class="flex items-center">
          <div class="w-12 h-12 bg-amber-400 bg-opacity-10 rounded-full flex items-center justify-center mr-4">
            <i class="fas fa-medal text-xl text-amber-400"></i>
          </div>
          <div>
            <h4 class="font-bold">85+</h4>
            <p class="text-sm text-gray-400">Projects Completed</p>
          </div>
        </div>
        <div class="flex items-center">
          <div class="w-12 h-12 bg-amber-400 bg-opacity-10 rounded-full flex items-center justify-center mr-4">
            <i class="fas fa-users text-xl text-amber-400"></i>
          </div>
          <div>
            <h4 class="font-bold">40+</h4>
            <p class="text-sm text-gray-400">Satisfied Clients</p>
          </div>
        </div>
        <div class="flex items-center">
          <div class="w-12 h-12 bg-amber-400 bg-opacity-10 rounded-full flex items-center justify-center mr-4">
            <i class="fas fa-code text-xl text-amber-400"></i>
          </div>
          <div>
            <h4 class="font-bold">15K+</h4>
            <p class="text-sm text-gray-400">Lines of Code</p>
          </div>
        </div>
        <div class="flex items-center">
          <div class="w-12 h-12 bg-amber-400 bg-opacity-10 rounded-full flex items-center justify-center mr-4">
            <i class="fas fa-globe text-xl text-amber-400"></i>
          </div>
          <div>
            <h4 class="font-bold">5</h4>
            <p class="text-sm text-gray-400">Countries Served</p>
          </div>
        </div>
      </div>
      <a href="#" class="px-8 py-3 bg-gradient-to-r from-amber-600 to-amber-400 text-black font-semibold rounded-full inline-flex items-center hover:opacity-90 transition duration-300">
        Download CV <i class="fas fa-download ml-2"></i>
      </a>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 py-12 border-t border-gray-800">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <div class="text-2xl font-bold gradient-text mb-4">Hanayuki Dev</div>
    <p class="text-gray-400 mb-4">Crafting digital experiences with love & code ✨</p>
    <p class="text-gray-500">© 2025 Hanayuki Dev. All rights reserved.</p>
  </div>
</footer>

</body>
</html>
