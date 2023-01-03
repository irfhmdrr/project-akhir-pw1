<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Koma Coffee</title>
</head>

<body class="bg-gray-700">
    <!-- navbar -->
    <nav class="flex justify-between bg-gray-900 text-white w-screen">
        <div class="px-5 xl:px-12 py-6 flex w-full items-center">
            <a class="text-3xl font-bold font-heading" href="#">
                <img class="h-24" src="assets/koma.png" alt="logo">
            </a>
            <!-- Nav Links -->
            <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                <li><a class="hover:text-gray-200" href="index.php">Home</a></li>
                <li><a class="hover:text-gray-200" href="menu.php">Menu</a></li>
                <li><a class="hover:text-gray-200" href="profil.php">Contact Us</a></li>
            </ul>
            <!-- Header Icons -->
            <div class="hidden xl:flex items-center space-x-5 items-center">
                <a class="flex items-center hover:text-gray-200" href="process_add.php">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="flex absolute -mt-5 ml-4">
                        <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                        </span>
                    </span>
                </a>
                <!-- Sign In / Register      -->
                <a class="flex items-center hover:text-gray-200" href="log.php">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
                <?php
                // Check if the user is logged in
                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
                    // Display the logout link
                    echo '<li><a href="logout.php">Log Out</a></li>';
                }
                ?>

            </div>
        </div>
        <!-- Responsive navbar -->
        <a class="xl:hidden flex mr-6 items-center" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <span class="flex absolute -mt-5 ml-4">
                <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                </span>
            </span>
        </a>
        <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </a>
    </nav>
    <!-- navbar end -->
    <!-- cards -->
    <div class="bg-gray-800 px-4 py-3 text-white sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">
        <p class="text-center font-medium sm:text-left">
            Here is our menu !!!
        </p>
    </div>

    <div class="justify-start grid grid-cols-5 gap-4 px-6">
        <a href="#" class="relative block overflow-hidden group">
            <button class="absolute right-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                <span class="sr-only">Wishlist</span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
            </button>

            <img src="assets/1.jpg " alt="" class="object-cover w-full h-64 transition duration-500 group-hover:scale-105 sm:h-72" />

            <div class="relative p-6 bg-white border border-gray-100">
                <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium">
                    New
                </span>

                <h3 class="mt-4 text-lg font-medium text-gray-900">Expresso</h3>

                <p class="mt-1.5 text-sm text-gray-700">12k</p>

                <form class="mt-4">
                    <button class="block w-full p-4 text-sm font-medium transition bg-yellow-400 rounded hover:scale-105">
                        Add to Cart
                    </button>
                </form>
            </div>
        </a>
        <a href="#" class="relative block overflow-hidden group">
            <button class="absolute right-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                <span class="sr-only">Wishlist</span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
            </button>

            <img src="assets/2.jpg" alt="" class="object-cover w-full h-64 transition duration-500 group-hover:scale-105 sm:h-72" />

            <div class="relative p-6 bg-white border border-gray-100">
                <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium">
                    New
                </span>

                <h3 class="mt-4 text-lg font-medium text-gray-900">Kopi Tubruk</h3>

                <p class="mt-1.5 text-sm text-gray-700">7k</p>

                <form class="mt-4">
                    <button class="block w-full p-4 text-sm font-medium transition bg-yellow-400 rounded hover:scale-105">
                        Add to Cart
                    </button>
                </form>
            </div>
        </a>
        <a href="#" class="relative block overflow-hidden group">
            <button class="absolute right-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                <span class="sr-only">Wishlist</span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
            </button>

            <img src="assets/3.jpg" alt="" class="object-cover w-full h-64 transition duration-500 group-hover:scale-105 sm:h-72" />

            <div class="relative p-6 bg-white border border-gray-100">
                <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium">
                    New
                </span>

                <h3 class="mt-4 text-lg font-medium text-gray-900">Moccacino Latte</h3>

                <p class="mt-1.5 text-sm text-gray-700">18k</p>

                <form class="mt-4">
                    <button class="block w-full p-4 text-sm font-medium transition bg-yellow-400 rounded hover:scale-105">
                        Add to Cart
                    </button>
                </form>
            </div>
        </a>
        <a href="#" class="relative block overflow-hidden group">
            <button class="absolute right-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                <span class="sr-only">Wishlist</span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
            </button>

            <img src="assets/4.jpg" alt="" class="object-cover w-full h-64 transition duration-500 group-hover:scale-105 sm:h-72" />

            <div class="relative p-6 bg-white border border-gray-100">
                <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium">
                    New
                </span>

                <h3 class="mt-4 text-lg font-medium text-gray-900">V60</h3>

                <p class="mt-1.5 text-sm text-gray-700">14k</p>

                <form class="mt-4">
                    <button class="block w-full p-4 text-sm font-medium transition bg-yellow-400 rounded hover:scale-105">
                        Add to Cart
                    </button>
                </form>
            </div>
        </a>
        <a href="#" class="relative block overflow-hidden group">
            <button class="absolute right-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                <span class="sr-only">Wishlist</span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
            </button>

            <img src="assets/5.jpg" alt="" class="object-cover w-full h-64 transition duration-500 group-hover:scale-105 sm:h-72" />

            <div class="relative p-6 bg-white border border-gray-100">
                <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium">
                    New
                </span>

                <h3 class="mt-4 text-lg font-medium text-gray-900">Vietnam Drip</h3>

                <p class="mt-1.5 text-sm text-gray-700">14K</p>

                <form class="mt-4">
                    <button class="block w-full p-4 text-sm font-medium transition bg-yellow-400 rounded hover:scale-105">
                        Add to Cart
                    </button>
                </form>
            </div>
        </a>
        <a href="#" class="relative block overflow-hidden group">
            <button class="absolute right-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                <span class="sr-only">Wishlist</span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
            </button>

            <img src="assets/6.jpg" alt="" class="object-cover w-full h-64 transition duration-500 group-hover:scale-105 sm:h-72" />

            <div class="relative p-6 bg-white border border-gray-100">
                <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium">
                    New
                </span>

                <h3 class="mt-4 text-lg font-medium text-gray-900">Americano Coffee</h3>

                <p class="mt-1.5 text-sm text-gray-700">18k</p>

                <form class="mt-4">
                    <button class="block w-full p-4 text-sm font-medium transition bg-yellow-400 rounded hover:scale-105">
                        Add to Cart
                    </button>
                </form>
            </div>
        </a>
        <a href="#" class="relative block overflow-hidden group">
            <button class="absolute right-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                <span class="sr-only">Wishlist</span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
            </button>

            <img src="assets/7.jpg" alt="" class="object-cover w-full h-64 transition duration-500 group-hover:scale-105 sm:h-72" />

            <div class="relative p-6 bg-white border border-gray-100">
                <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium">
                    New
                </span>

                <h3 class="mt-4 text-lg font-medium text-gray-900">Romanno Coffee</h3>

                <p class="mt-1.5 text-sm text-gray-700">15k</p>

                <form class="mt-4">
                    <button class="block w-full p-4 text-sm font-medium transition bg-yellow-400 rounded hover:scale-105">
                        Add to Cart
                    </button>
                </form>
            </div>
        </a>
        <a href="#" class="relative block overflow-hidden group">
            <button class="absolute right-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                <span class="sr-only">Wishlist</span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
            </button>

            <img src="assets/8.jpg" alt="" class="object-cover w-full h-64 transition duration-500 group-hover:scale-105 sm:h-72" />

            <div class="relative p-6 bg-white border border-gray-100">
                <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium">
                    New
                </span>

                <h3 class="mt-4 text-lg font-medium text-gray-900">Hot Chocolatte</h3>

                <p class="mt-1.5 text-sm text-gray-700">15k</p>

                <form class="mt-4">
                    <button class="block w-full p-4 text-sm font-medium transition bg-yellow-400 rounded hover:scale-105">
                        Add to Cart
                    </button>
                </form>
            </div>
        </a>
        <a href="#" class="relative block overflow-hidden group">
            <button class="absolute right-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                <span class="sr-only">Wishlist</span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
            </button>

            <img src="assets/9.jpg" alt="" class="object-cover w-full h-64 transition duration-500 group-hover:scale-105 sm:h-72" />

            <div class="relative p-6 bg-white border border-gray-100">
                <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium">
                    New
                </span>

                <h3 class="mt-4 text-lg font-medium text-gray-900">Ice Lemon Tea</h3>

                <p class="mt-1.5 text-sm text-gray-700">9k</p>

                <form class="mt-4">
                    <button class="block w-full p-4 text-sm font-medium transition bg-yellow-400 rounded hover:scale-105">
                        Add to Cart
                    </button>
                </form>
            </div>
        </a>
        <a href="#" class="relative block overflow-hidden group">
            <button class="absolute right-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                <span class="sr-only">Wishlist</span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
            </button>

            <img src="assets/10.jpg" alt="" class="object-cover w-full h-64 transition duration-500 group-hover:scale-105 sm:h-72" />

            <div class="relative p-6 bg-white border border-gray-100">
                <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium">
                    New
                </span>

                <h3 class="mt-4 text-lg font-medium text-gray-900">Matcha Latte</h3>

                <p class="mt-1.5 text-sm text-gray-700">17k</p>

                <form class="mt-4">
                    <button class="block w-full p-4 text-sm font-medium transition bg-yellow-400 rounded hover:scale-105">
                        Add to Cart
                    </button>
                </form>
            </div>
        </a>

    </div>
    <!-- cards end -->
</body>

</html>