<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>DJ App</title>
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black font-sans">
  <header class="p-4 flex justify-center items-center text-white">
    <h1 class="logo text-2xl">DJ App</h1>
  </header>

  <nav class="flex justify-center mt-4 text-white">
    <a href="#home" class="nav-link p-2 hover:underline hover:underline-offset-4">Home</a>
    <a href="#about" class="nav-link p-2 hover:underline hover:underline-offset-4">About</a>
    <a href="#features" class="nav-link p-2 hover:underline hover:underline-offset-4">Features</a>
    <a href="{{ route('users') }}" class="nav-link p-2 hover:underline hover:underline-offset-4">Web-app</a>
    <a href="#download" class="nav-link p-2 hover:underline hover:underline-offset-4">Download</a>
    <a href="#contact" class="nav-link p-2 hover:underline hover:underline-offset-4">Contact</a>
  </nav>

  <div class="w-full  mt-10">
  <section id="home" class="h-screen w-full flex flex-col justify-center items-center">
    <img src="pexels-isabella-mendes-860707.jpg" alt="Background Image" class="object-cover w-full h-full opacity-75 pb-28">
    <div class="absolute top-2/3 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
      <h1 class="text-4xl font-bold text-white">Welcome to DJ-app</h1>
      <p class="text-xl text-white mt-4">The Ultimate Party App</p>
    </div>
</section>

  </div>

  <section id="about" class=" bg-zinc-900">
    <div class="flex justify-center p-20">
      <div class="w-1/2 pr-10 pt-5">
        <img src="pexels-pixabay-270288.jpg" alt="App Logo" class="opacity-95 rounded-xl">
      </div>
      <div class="w-1/2">
        <h2 class="text-3xl font-bold mb-5 mt-16 text-white">Experience the Ultimate Party App</h2>
        <p class="text-lg text-white tracking-wide leading-10">DJ is an app that connects you to the DJ and lets you request your favorite songs live. Whether you are at a club, a bar, a wedding, or any other event, DJ allows you to make your voice heard and influence the vibe of the party.
        Created by a group of music lovers, DJ aims to make parties more fun and interactive. We believe that music is a powerful way to connect people and create unforgettable memories. 
        </p>
        
      </div>
    </div>
  </section>

  <section id="how-it-works" class="bg-black py-20">
    <div class="max-w-screen-lg mx-auto text-center">
      <h2 class="text-3xl font-bold mb-8 text-white">How it Works</h2>
      <h3 class="text-xl mb-8 text-white">Dj is Easy to Use and Fun to Play With</h3>
      <div class="flex flex-wrap justify-center">
        <div class="w-full md:w-1/3 px-4 mb-8">
          <div class="bg-zinc-900 rounded-lg p-8 h-full">
            <h4 class="text-xl font-bold mb-4 text-white">Step 1: Join a Party</h4>
            <p class="mb-4 text-white">Users can scan the QR code or enter the party code to join a party near them or anywhere in the world.</p>
          </div>
        </div>
        <div class="w-full md:w-1/3 px-4 mb-8">
          <div class="bg-zinc-900 rounded-lg p-8 h-full">
            <h4 class="text-xl font-bold mb-4 text-white">Step 2: Request Songs</h4>
            <p class="mb-4 text-white">Users can browse the song catalog or search for their favorite songs and send requests to the DJ. Requests are charged only if accepted and played by the DJ.</p>
          </div>
        </div>
        <div class="w-full md:w-1/3 px-4 mb-8">
          <div class="bg-zinc-900 rounded-lg p-8 h-full">
            <h4 class="text-xl font-bold mb-4 text-white">Step 3: Enjoy the Vibe</h4>
            <p class="mb-4 text-white">Users can enjoy the music and the party with their friends and other people who share their taste. They can also rate the DJ and leave feedback.</p>
          </div>
        </div>
      </div>
      <a href="#download" class="mt-5 inline-block px-6 py-3 bg-white text-black font-bold rounded-lg hover:bg-sky-900 transition duration-300">Get Started</a>
    </div>
  </section>

  <section id="features" class="bg-zinc-900 py-20">
    <div class="max-w-screen-lg mx-auto text-center">
      <h2 class="text-3xl font-bold mb-8 text-white">Features</h2>
      <p class="text-lg mb-12 text-white">DJ App connects you to the DJ and allows you to request your favorite songs live. Join parties and take control of the vibe with DJ. Available on the App Store for iPhone.</p>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-black rounded-lg p-8">
          <h3 class="text-xl font-bold mb-4 text-white">Join a Party</h3>
          <p class="mb-0 text-white">Scan the QR code or enter the party code to join a party near you or anywhere in the world.</p>
        </div>
        <div class="bg-black rounded-lg p-8">
          <h3 class="text-xl font-bold mb-4 text-white">Request Songs</h3>
          <p class="mb-0 text-white">Browse the song catalog or search for your favorite songs and send requests to the DJ. Only charged if your request is accepted and played.</p>
        </div>
        <div class="bg-black rounded-lg p-8">
          <h3 class="text-xl font-bold mb-4 text-white">Enjoy the Vibe</h3>
          <p class="mb-0 text-white">Enjoy the music and the party with your friends and other people who share your taste. Rate the DJ and leave feedback.</p>
        </div>
        <div class="bg-black rounded-lg p-8">
          <h3 class="text-xl font-bold mb-4 text-white">Create a Party</h3>
          <p class="mb-0 text-white">Create a party and share the QR code or party code with your audience as a DJ or venue. Accept or decline song requests. Get paid for accepted and played requests.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="download" class="py-20">
    <div class="max-w-screen-lg mx-auto text-center">
      <h2 class="text-3xl font-bold text-white mb-8">Download The App</h2>
      <div class="flex flex-col items-center">
        <div class="w-1/2">
          <img src="pexels-pixabay-270288.jpg" alt="Download on the App Store" class="h-100 mx-auto mb-4">
        </div>
        <div>
          <a href="https://example.com/ios" class="inline-block text-white font-bold rounded-lg  transition duration-300 px-6 py-3 mr-4">
            <button type="button" class="text-white bg-zinc-900 p-4 rounded">
              Download for iOS
            </button>
          </a>
          <a href="https://example.com/android" class="inline-block text-white font-bold rounded-lg  transition duration-300 px-6 py-3">
            <button type="button" class="text-white bg-zinc-900 p-4 rounded">
              Download for Android
            </button>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="bg-zinc-900  text-white py-20">
    <div class="max-w-screen-lg mx-auto text-center">
      <h2 class="text-3xl font-bold mb-8">Contact Us</h2>
      <p class="text-lg mb-12">Have any questions or feedback? We'd love to hear from you! Send us a message below:</p>
      <form action="#" method="POST" class="max-w-md mx-auto">
        <div class="mb-4">
          <label for="name" class="sr-only">Name</label>
          <input type="text" id="name" name="name" placeholder="Your Name" class="bg-black text-white w-full p-3 rounded-lg" required>
        </div>
        <div class="mb-4">
          <label for="email" class="sr-only">Email</label>
          <input type="email" id="email" name="email" placeholder="Your Email" class="bg-black text-white w-full p-3 rounded-lg" required>
        </div>
        <div class="mb-4">
          <label for="message" class="sr-only">Message</label>
          <textarea id="message" name="message" placeholder="Your Message" class="bg-black text-white w-full p-3 rounded-lg" required></textarea>
        </div>
        <button type="submit" class="inline-block px-6 py-3 bg-white text-black font-bold rounded-lg hover:bg-orange-400 transition duration-300">Send Message</button>
      </form>
    </div>
  </section>

  <footer class="bg-black text-white py-6">
    <div class="max-w-screen-lg mx-auto flex justify-between items-center">
      <div class="text-sm">
        &copy; 2023 Dj App. All rights reserved.
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

  <script>
    // JavaScript animations can be added here, if needed
  </script>
</body>
</html>
