<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hanayuki Dev Portfolio</title>
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
    .hero-gradient {
      background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(30,30,30,0.8) 100%);
    }
    .project-card:hover .project-overlay {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>
<body class="bg-black text-gray-200 font-sans antialiased">

<!-- Navbar -->
<nav class="fixed w-full bg-black bg-opacity-90 z-50 border-b border-gray-800">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <div class="text-2xl font-bold gradient-text">Hanayuki Dev</div>
    <div class="hidden md:flex space-x-8">
      <a href="#home" class="hover:text-amber-200 transition duration-300">Home</a>
      <a href="portfolio" class="hover:text-amber-200 transition duration-300">Projects</a>
      <a href="#about" class="hover:text-amber-200 transition duration-300">About</a>
      <a href="contact" class="hover:text-amber-200 transition duration-300">Contact</a>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section id="home" class="min-h-screen flex items-center hero-gradient pt-24">
  <div class="max-w-7xl mx-auto px-6 py-20 flex flex-col md:flex-row items-center">
    <div class="md:w-1/2 mb-10 md:mb-0">
      <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
        <span class="gradient-text">Hi, I'm Hanayuki</span> <br>
        <span class="text-white">Web Developer</span>
      </h1>
      <p class="text-xl md:text-2xl text-gray-300 mb-10 max-w-lg">
I build elegant and scalable web applications using Laravel, crafting responsive interfaces with HTML and CSS to deliver clean and engaging user experiences.      </p>
      <div class="flex space-x-6">
        <a href="portfolio" class="px-8 py-3 bg-gradient-to-r from-amber-600 to-amber-400 text-black font-semibold rounded-full hover:opacity-90 transition duration-300">
          View Work
        </a>
        <a href="#contact" class="px-8 py-3 border border-amber-400 text-amber-400 font-semibold rounded-full hover:bg-amber-400 hover:bg-opacity-10 transition duration-300">
          Contact Me
        </a>
      </div>
    </div>
    <div class="md:w-1/2 flex justify-center">
      <div class="relative">
        <div class="absolute -inset-4 bg-amber-400 opacity-20 rounded-full blur-xl"></div>
        <img src="/img/butterfly.jpg" alt="Foto Hanayuki" class="relative rounded-xl w-full max-w-md shadow-2xl">
      </div>
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

<script>
  gsap.registerPlugin(ScrollTrigger);
  gsap.from(".gradient-text", { duration: 1, opacity: 0, y: 50, ease: "power2.out" });
  gsap.utils.toArray("section").forEach(section => {
    const heading = section.querySelector("h2");
    if (heading) {
      gsap.from(heading, {
        scrollTrigger: {
          trigger: section,
          start: "top 80%",
          toggleActions: "play none none none"
        },
        duration: 0.8,
        opacity: 0,
        y: 30,
        ease: "power2.out"
      });
    }
  });
</script>

</body>
</html>
