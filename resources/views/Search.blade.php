<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles can be added here */
    </style>
</head>
<body class="bg-black">
    <header class="p-4 flex justify-between items-center">
        <h1 class="text-2xl text-white">App Logo</h1>
        <a href="#download" class="bg-white text-black py-2 px-4 rounded-lg">Download App</a>
    </header>

    <div class="container mx-auto px-4 mt-8">
        <div class="w-full mb-8">
            <input type="text" placeholder="Search for events or songs" class="w-full border border-gray-300 bg-white rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- DJ Card -->
            <div class="w-full bg-white rounded-lg overflow-hidden">
                <div class="p-4">
                    <img src="_f67270bb-c40e-4e47-a499-f7de91e8aac3.jpg" alt="DJ Avatar" class="w-16 h-16 rounded-full object-cover">
                    <h3 class="text-lg font-bold mt-4"><a href="#dj-profile" class="text-blue-500">DJ Name</a></h3>
                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 15.585l-4.95 3.97a1 1 0 01-1.427-1.054l.547-5.993L1.494 7.78a1 1 0 01.553-1.705l6.002-.71L9.583.462a1 1 0 011.834 0l2.123 4.903 6.002.71a1 1 0 01.553 1.705l-4.134 3.813.547 5.993a1 1 0 01-1.427 1.054L10 15.585z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-gray-600">4.8 (128 ratings)</p>
                    </div>
                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 16.171l5.553 3.984a.6.6 0 00.894-.65l-1.558-6.088 4.365-3.763a.6.6 0 00-.327-1.034l-6.095-.524L10.981.49a.6.6 0 00-1.084 0L6.607 4.77l-6.095.524a.6.6 0 00-.327 1.034l4.365 3.763-1.558 6.088a.6.6 0 00.894.65L10 16.171z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-gray-600">12k followers</p>
                    </div>
                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3.333l1.315 3.206h3.385l-2.74 1.993 1.315 3.205L10 11.667l-3.275 2.07 1.314-3.205-2.74-1.993h3.385L10 3.333zm0 2.07l-1.225 2.994H6.39l2.49 1.812-.95 2.326L10 9.694l2.094 1.525-.95-2.326 2.49-1.812h-2.385L10 5.403z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-gray-600">$500 tipped</p>
                    </div>
                </div>
                <div class="bg-gray-100 p-4 border-t border-gray-200">
                    <a href="#join-event" class="text-blue-500">Tap to join</a>
                </div>
            </div>
            <div class="w-full bg-white rounded-lg overflow-hidden">
                <div class="p-4">
                    <img src="_f67270bb-c40e-4e47-a499-f7de91e8aac3.jpg" alt="DJ Avatar" class="w-16 h-16 rounded-full object-cover">
                    <h3 class="text-lg font-bold mt-4"><a href="#dj-profile" class="text-blue-500">DJ Name</a></h3>
                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 15.585l-4.95 3.97a1 1 0 01-1.427-1.054l.547-5.993L1.494 7.78a1 1 0 01.553-1.705l6.002-.71L9.583.462a1 1 0 011.834 0l2.123 4.903 6.002.71a1 1 0 01.553 1.705l-4.134 3.813.547 5.993a1 1 0 01-1.427 1.054L10 15.585z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-gray-600">4.8 (128 ratings)</p>
                    </div>
                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 16.171l5.553 3.984a.6.6 0 00.894-.65l-1.558-6.088 4.365-3.763a.6.6 0 00-.327-1.034l-6.095-.524L10.981.49a.6.6 0 00-1.084 0L6.607 4.77l-6.095.524a.6.6 0 00-.327 1.034l4.365 3.763-1.558 6.088a.6.6 0 00.894.65L10 16.171z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-gray-600">12k followers</p>
                    </div>
                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3.333l1.315 3.206h3.385l-2.74 1.993 1.315 3.205L10 11.667l-3.275 2.07 1.314-3.205-2.74-1.993h3.385L10 3.333zm0 2.07l-1.225 2.994H6.39l2.49 1.812-.95 2.326L10 9.694l2.094 1.525-.95-2.326 2.49-1.812h-2.385L10 5.403z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-gray-600">$500 tipped</p>
                    </div>
                </div>
                <div class="bg-gray-100 p-4 border-t border-gray-200">
                    <a href="#join-event" class="text-blue-500">Tap to join</a>
                </div>
            </div>
            <div class="w-full bg-white rounded-lg overflow-hidden">
                <div class="p-4">
                    <img src="_f67270bb-c40e-4e47-a499-f7de91e8aac3.jpg" alt="DJ Avatar" class="w-16 h-16 rounded-full object-cover">
                    <h3 class="text-lg font-bold mt-4"><a href="#dj-profile" class="text-blue-500">DJ Name</a></h3>
                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 15.585l-4.95 3.97a1 1 0 01-1.427-1.054l.547-5.993L1.494 7.78a1 1 0 01.553-1.705l6.002-.71L9.583.462a1 1 0 011.834 0l2.123 4.903 6.002.71a1 1 0 01.553 1.705l-4.134 3.813.547 5.993a1 1 0 01-1.427 1.054L10 15.585z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-gray-600">4.8 (128 ratings)</p>
                    </div>
                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 16.171l5.553 3.984a.6.6 0 00.894-.65l-1.558-6.088 4.365-3.763a.6.6 0 00-.327-1.034l-6.095-.524L10.981.49a.6.6 0 00-1.084 0L6.607 4.77l-6.095.524a.6.6 0 00-.327 1.034l4.365 3.763-1.558 6.088a.6.6 0 00.894.65L10 16.171z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-gray-600">12k followers</p>
                    </div>
                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3.333l1.315 3.206h3.385l-2.74 1.993 1.315 3.205L10 11.667l-3.275 2.07 1.314-3.205-2.74-1.993h3.385L10 3.333zm0 2.07l-1.225 2.994H6.39l2.49 1.812-.95 2.326L10 9.694l2.094 1.525-.95-2.326 2.49-1.812h-2.385L10 5.403z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-gray-600">$500 tipped</p>
                    </div>
                </div>
                <div class="bg-gray-100 p-4 border-t border-gray-200">
                    <a href="#join-event" class="text-blue-500">Tap to join</a>
                </div>
            </div>
            <div class="w-full bg-white rounded-lg overflow-hidden">
                <div class="p-4">
                    <img src="_f67270bb-c40e-4e47-a499-f7de91e8aac3.jpg" alt="DJ Avatar" class="w-16 h-16 rounded-full object-cover">
                    <h3 class="text-lg font-bold mt-4"><a href="#dj-profile" class="text-blue-500">DJ Name</a></h3>
                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 15.585l-4.95 3.97a1 1 0 01-1.427-1.054l.547-5.993L1.494 7.78a1 1 0 01.553-1.705l6.002-.71L9.583.462a1 1 0 011.834 0l2.123 4.903 6.002.71a1 1 0 01.553 1.705l-4.134 3.813.547 5.993a1 1 0 01-1.427 1.054L10 15.585z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-gray-600">4.8 (128 ratings)</p>
                    </div>
                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 16.171l5.553 3.984a.6.6 0 00.894-.65l-1.558-6.088 4.365-3.763a.6.6 0 00-.327-1.034l-6.095-.524L10.981.49a.6.6 0 00-1.084 0L6.607 4.77l-6.095.524a.6.6 0 00-.327 1.034l4.365 3.763-1.558 6.088a.6.6 0 00.894.65L10 16.171z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-gray-600">12k followers</p>
                    </div>
                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3.333l1.315 3.206h3.385l-2.74 1.993 1.315 3.205L10 11.667l-3.275 2.07 1.314-3.205-2.74-1.993h3.385L10 3.333zm0 2.07l-1.225 2.994H6.39l2.49 1.812-.95 2.326L10 9.694l2.094 1.525-.95-2.326 2.49-1.812h-2.385L10 5.403z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-gray-600">$500 tipped</p>
                    </div>
                </div>
                <div class="bg-gray-100 p-4 border-t border-gray-200">
                    <a href="#join-event" class="text-blue-500">Tap to join</a>
                </div>
            </div>
            <div class="w-full bg-white rounded-lg overflow-hidden">
                <div class="p-4">
                    <img src="_f67270bb-c40e-4e47-a499-f7de91e8aac3.jpg" alt="DJ Avatar" class="w-16 h-16 rounded-full object-cover">
                    <h3 class="text-lg font-bold mt-4"><a href="#dj-profile" class="text-blue-500">DJ Name</a></h3>
                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 15.585l-4.95 3.97a1 1 0 01-1.427-1.054l.547-5.993L1.494 7.78a1 1 0 01.553-1.705l6.002-.71L9.583.462a1 1 0 011.834 0l2.123 4.903 6.002.71a1 1 0 01.553 1.705l-4.134 3.813.547 5.993a1 1 0 01-1.427 1.054L10 15.585z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-gray-600">4.8 (128 ratings)</p>
                    </div>
                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 16.171l5.553 3.984a.6.6 0 00.894-.65l-1.558-6.088 4.365-3.763a.6.6 0 00-.327-1.034l-6.095-.524L10.981.49a.6.6 0 00-1.084 0L6.607 4.77l-6.095.524a.6.6 0 00-.327 1.034l4.365 3.763-1.558 6.088a.6.6 0 00.894.65L10 16.171z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-gray-600">12k followers</p>
                    </div>
                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3.333l1.315 3.206h3.385l-2.74 1.993 1.315 3.205L10 11.667l-3.275 2.07 1.314-3.205-2.74-1.993h3.385L10 3.333zm0 2.07l-1.225 2.994H6.39l2.49 1.812-.95 2.326L10 9.694l2.094 1.525-.95-2.326 2.49-1.812h-2.385L10 5.403z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-gray-600">$500 tipped</p>
                    </div>
                </div>
                <div class="bg-gray-100 p-4 border-t border-gray-200">
                    <a href="#join-event" class="text-blue-500">Tap to join</a>
                </div>
            </div>
            <div class="w-full bg-white rounded-lg overflow-hidden">
                <div class="p-4">
                    <img src="_f67270bb-c40e-4e47-a499-f7de91e8aac3.jpg" alt="DJ Avatar" class="w-16 h-16 rounded-full object-cover">
                    <h3 class="text-lg font-bold mt-4"><a href="#dj-profile" class="text-blue-500">DJ Name</a></h3>
                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 15.585l-4.95 3.97a1 1 0 01-1.427-1.054l.547-5.993L1.494 7.78a1 1 0 01.553-1.705l6.002-.71L9.583.462a1 1 0 011.834 0l2.123 4.903 6.002.71a1 1 0 01.553 1.705l-4.134 3.813.547 5.993a1 1 0 01-1.427 1.054L10 15.585z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-gray-600">4.8 (128 ratings)</p>
                    </div>
                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 16.171l5.553 3.984a.6.6 0 00.894-.65l-1.558-6.088 4.365-3.763a.6.6 0 00-.327-1.034l-6.095-.524L10.981.49a.6.6 0 00-1.084 0L6.607 4.77l-6.095.524a.6.6 0 00-.327 1.034l4.365 3.763-1.558 6.088a.6.6 0 00.894.65L10 16.171z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-gray-600">12k followers</p>
                    </div>
                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3.333l1.315 3.206h3.385l-2.74 1.993 1.315 3.205L10 11.667l-3.275 2.07 1.314-3.205-2.74-1.993h3.385L10 3.333zm0 2.07l-1.225 2.994H6.39l2.49 1.812-.95 2.326L10 9.694l2.094 1.525-.95-2.326 2.49-1.812h-2.385L10 5.403z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-gray-600">$500 tipped</p>
                    </div>
                </div>
                <div class="bg-gray-100 p-4 border-t border-gray-200">
                    <a href="#join-event" class="text-blue-500">Tap to join</a>
                </div>
            </div>

            

                

            
        </section>
        <button class="w-full bg-blue-500 text-white rounded-lg py-2 px-4 mt-8 mb-4 mx-auto">Show More</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js"></script>
</body>
</html>
