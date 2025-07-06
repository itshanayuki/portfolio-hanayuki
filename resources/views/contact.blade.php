<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact — Hanayuki Dev</title>

  <!-- Tailwind & Font Awesome -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/a2e0e6e6ae.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" />

  <style>
    body {
      background-color: #121212;
      font-family: 'Inter', sans-serif;
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

@if(session('success'))
  <div class="bg-green-600 text-white px-4 py-2 rounded mb-4 max-w-3xl mx-auto mt-6">
    {{ session('success') }}
  </div>
@endif

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



<!-- Contact Section -->
<section id="contact" class="py-20 bg-black">
  <div class="max-w-5xl mx-auto px-6">
    
    <!-- Section Title -->
    <div class="text-center mb-16">
      <h2 class="text-4xl font-bold mb-4">Get In <span class="text-amber-400">Touch</span></h2>
      <p class="text-xl text-gray-400 max-w-2xl mx-auto">Have a project in mind or want to discuss potential collaboration?</p>
    </div>

    <!-- Contact Card -->
    <div class="bg-gray-900 rounded-xl shadow-2xl overflow-hidden">
      <div class="grid md:grid-cols-2">
        
        <!-- Contact Info -->
        <div class="p-10">
          <h3 class="text-2xl font-bold mb-6">Contact Information</h3>
          <ul class="space-y-6">
            <li class="flex items-start">
              <div class="w-10 h-10 bg-amber-400 bg-opacity-10 rounded-full flex items-center justify-center mr-4 mt-1">
                <i class="fas fa-envelope text-amber-400"></i>
              </div>
              <div>
                <h4 class="font-semibold">Email</h4>
                <p class="text-gray-400">itshanayuki@email.com</p>
              </div>
            </li>
            <li class="flex items-start">
              <div class="w-10 h-10 bg-amber-400 bg-opacity-10 rounded-full flex items-center justify-center mr-4 mt-1">
                <i class="fas fa-phone-alt text-amber-400"></i>
              </div>
              <div>
                <h4 class="font-semibold">Phone</h4>
                <p class="text-gray-400">+62 812-xxxx-xxxx</p>
              </div>
            </li>
            <li class="flex items-start">
              <div class="w-10 h-10 bg-amber-400 bg-opacity-10 rounded-full flex items-center justify-center mr-4 mt-1">
                <i class="fas fa-map-marker-alt text-amber-400"></i>
              </div>
              <div>
                <h4 class="font-semibold">Location</h4>
                <p class="text-gray-400">Indonesia</p>
              </div>
            </li>
          </ul>

          <!-- Social Media -->
          <div class="mt-10">
            <h4 class="font-semibold mb-4">Connect With Me</h4>
            <div class="flex space-x-4">
              <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-amber-400 hover:text-black transition duration-300">
                <i class="fab fa-linkedin-in text-amber-400"></i>
              </a>
              <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-amber-400 hover:text-black transition duration-300">
                <i class="fab fa-github text-amber-400"></i>
              </a>
              <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-amber-400 hover:text-black transition duration-300">
                <i class="fab fa-instagram text-amber-400"></i>
              </a>
              <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-amber-400 hover:text-black transition duration-300">
                <i class="fab fa-twitter text-amber-400"></i>
              </a>
            </div>
          </div>
        </div>


         <!-- Right Form -->
    <div class="p-10 bg-[#161616]">
      <form method="POST" action="{{ route('contact.submit') }}" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @csrf

       <div>
  <label class="block text-sm mb-1 text-gray-300">First Name *</label>
  <input name="first_name" type="text" required placeholder="First name" class="w-full bg-[#121212] border border-gray-700 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
</div>

<div>
  <label class="block text-sm mb-1 text-gray-300">Last Name *</label>
  <input name="last_name" type="text" required placeholder="Last name" class="w-full bg-[#121212] border border-gray-700 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
</div>

<div class="md:col-span-2">
  <label class="block text-sm mb-1 text-gray-300">Email *</label>
  <input name="email" type="email" required placeholder="Active email address" class="w-full bg-[#121212] border border-gray-700 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
</div>

<div>
  <label class="block text-sm mb-1 text-gray-300">Country Code *</label>
  <select name="country_code" class="w-full bg-[#121212] border border-gray-700 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
    <option value="+62">+62</option>
    <option value="+1">+1</option>
    <option value="+91">+91</option>
  </select>
</div>

<div>
  <label class="block text-sm mb-1 text-gray-300">Phone Number *</label>
  <input name="phone_number" type="tel" required placeholder="Your active phone number" class="w-full bg-[#121212] border border-gray-700 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
</div>

<div class="md:col-span-2">
  <label class="block text-sm mb-1 text-gray-300">Company (optional)</label>
  <input name="company_name" type="text" placeholder="Company or organization name" class="w-full bg-[#121212] border border-gray-700 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
</div>

        <div class="md:col-span-2">
          <label class="block text-sm mb-1 text-gray-300">Country *</label>
          <select name="country" required class="w-full bg-[#121212] border border-gray-700 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
            <option>Indonesia</option>
            <option>Malaysia</option>
            <option>Singapore</option>
            <option>United States</option>
            <option>Other</option>
          </select>
        </div>

      <div class="md:col-span-2">
  <label class="block text-sm mb-1 text-gray-300">How did you hear about me?</label>
  <input name="heard_about" type="text" placeholder="Instagram, friend, Google, etc..." class="w-full bg-[#121212] border border-gray-700 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
</div>

<div class="md:col-span-2">
  <label class="block text-sm mb-1 text-gray-300">Message</label>
  <textarea name="message" rows="5" placeholder="Write your message or question here..." class="w-full bg-[#121212] border border-gray-700 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
</div>


          <div class="md:col-span-2">
  <button type="submit" class="w-full py-3 bg-gradient-to-r from-amber-600 to-amber-400 text-black font-semibold rounded-lg hover:opacity-90 transition duration-300">
    Send Message
  </button>
</div>

          </form>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- Font Awesome for Icons -->
<script src="https://kit.fontawesome.com/a2e0e6e6ae.js" crossorigin="anonymous"></script>


<!-- Footer Info -->
<footer class="text-center text-sm text-gray-500 mt-16 mb-10">
  &copy; 2025 Hanayuki Dev — Built with sincerity and style.
</footer>

</body>
</html>
