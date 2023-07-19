<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
  <header class="bg-white py-6">
    <div class="container mx-auto px-4">
      <nav class="flex items-center justify-between">
        <a href="#" class="text-2xl font-bold text-gray-800">One28</a>
        <ul class="flex space-x-4">
                <a href="index.html" class="nav-link">Home</a>
                <a href="#download" class="nav-link">Features</a>
                <a href="#contact" class="nav-link">Contact</a>
        </ul>
      </nav>
    </div>
  </header>

  <section id="hero" class="bg-gray-800 text-white py-16">
    <div class="container mx-auto px-4">
      <div class="flex flex-col items-center justify-center">
        <h1 class="text-4xl font-bold mb-6 text-center">Welcome to One28 Web App</h1>
        <p class="text-lg mb-10 text-center">Discover parties, request songs, and tip DJs or venues</p>
        <div class="mt-4 space-x-4">
          <a href="{{ route('login') }}" class="inline-block bg-orange-500 text-white font-bold rounded-lg hover:bg-orange-400 transition duration-300 px-6 py-3">User</a>
          <a href="#djs" class="inline-block bg-orange-500 text-white font-bold rounded-lg hover:bg-orange-400 transition duration-300 px-6 py-3">DJ</a>
        </div>
      </div>
    </div>
  </section>
  <section id="users" class="bg-white py-16">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold mb-8 text-center">For Users</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
        <div class="bg-white rounded-lg shadow-lg p-6">
          <h3 class="text-xl font-bold mb-4 text-center">Join Parties</h3>
          <p class="mb-4 text-center">Discover and join parties happening nearby.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6">
          <h3 class="text-xl font-bold mb-4 text-center">Request Songs</h3>
          <p class="mb-4 text-center">Request your favorite songs from the DJ's playlist.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6">
          <h3 class="text-xl font-bold mb-4 text-center">Pay for Song Requests</h3>
          <p class="mb-4 text-center">Pay a fee to have your requested songs played.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6">
          <h3 class="text-xl font-bold mb-4 text-center">Tip DJs/Venues</h3>
          <p class="mb-4 text-center">Show appreciation by tipping DJs or venues for their performance.</p>
        </div>
      </div>
    </div>
  </section>
  <section id="djs" class="bg-gray-800 py-16">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-white mb-8 text-center">For DJs</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
        <div class="bg-white rounded-lg shadow-lg p-6">
          <h3 class="text-xl font-bold mb-4 text-center">Create Parties</h3>
          <p class="mb-4 text-center">Create parties and invite users to join.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6">
          <h3 class="text-xl font-bold mb-4 text-center">Accept Song Requests</h3>
          <p class="mb-4 text-center">Accept song requests from users and add them to your playlist.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6">
          <h3 class="text-xl font-bold mb-4 text-center">Set Song Request Fees</h3>
          <p class="mb-4 text-center">Set fees for requested songs based on various factors.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6">
          <h3 class="text-xl font-bold mb-4 text-center">Receive Tips</h3>
          <p class="mb-4 text-center">Receive tips from users for your performance.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="bg-gray-200 text-black py-20">
    <div class="max-w-screen-lg mx-auto text-center">
      <h2 class="text-3xl font-bold mb-8">Contact Us</h2>
      <p class="text-lg mb-12">Have any questions or feedback? We'd love to hear from you! Send us a message below:</p>
  
      <form action="#" method="POST" class="max-w-md mx-auto">
        <div class="mb-4">
          <label for="name" class="sr-only">Name</label>
          <input type="text" id="name" name="name" placeholder="Your Name" class="bg-gray-700 text-white w-full p-3 rounded-lg" required>
        </div>
        <div class="mb-4">
          <label for="email" class="sr-only">Email</label>
          <input type="email" id="email" name="email" placeholder="Your Email" class="bg-gray-700 text-white w-full p-3 rounded-lg" required>
        </div>
        <div class="mb-4">
          <label for="message" class="sr-only">Message</label>
          <textarea id="message" name="message" placeholder="Your Message" class="bg-gray-700 text-white w-full p-3 rounded-lg" required></textarea>
        </div>
        <button type="submit" class="inline-block px-6 py-3 bg-white text-black font-bold rounded-lg hover:bg-orange-400 transition duration-300">Send Message</button>
      </form>
    </div>
  </section>
  
  <footer class="bg-gray-900 text-white py-6">
    <div class="max-w-screen-lg mx-auto flex justify-between items-center">
      <div class="text-sm">
        &copy; 2023 One28 App. All rights reserved.
      </div>
      <ul class="flex space-x-4">
        <li><a href="#home" class="text-white hover:text-gray-300 transition duration-300">Home</a></li>
        <li><a href="#about" class="text-white hover:text-gray-300 transition duration-300">About</a></li>
        <li><a href="#how-it-works" class="text-white hover:text-gray-300 transition duration-300">How it works</a></li>
        <li><a href="#features" class="text-white hover:text-gray-300 transition duration-300">Features</a></li>
        <li><a href="#contact" class="text-white hover:text-gray-300 transition duration-300">Contact</a></li>
        <li><a href="#download" class="text-white hover:text-gray-300 transition duration-300">Download</a></li>
      </ul>
    </div>
  </footer>
  


</body>

</html>
