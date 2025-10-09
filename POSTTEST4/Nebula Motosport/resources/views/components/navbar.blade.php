<nav class="sticky top-0 z-50 bg-white/90 backdrop-blur-md shadow-md">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center min-w-max">

        <a href="{{ route('welcome') }}#" class="flex items-center select-none">
            <img src="{{ asset('images/logo.png') }}" alt="Nebula Motosport Logo" class="h-12 w-auto block">
        </a>

        <!-- Desktop Menu -->
        <ul class="hidden md:flex space-x-10 text-gray-700 font-semibold tracking-wide">
            <li><a href="{{ route('welcome') }}#" class="relative group py-2 px-1 hover:text-indigo-600 transition">
                    Home
                    <span
                        class="absolute left-0 -bottom-1 w-0 group-hover:w-full h-0.5 bg-indigo-600 rounded transition-all"></span>
                </a></li>
            <li><a href="{{ route('welcome') }}#products" class="relative group py-2 px-1 hover:text-indigo-600 transition">
                    Products
                    <span
                        class="absolute left-0 -bottom-1 w-0 group-hover:w-full h-0.5 bg-indigo-600 rounded transition-all"></span>
                </a></li>
            <li><a href="{{ route('welcome') }}#about" class="relative group py-2 px-1 hover:text-indigo-600 transition">
                    About
                    <span
                        class="absolute left-0 -bottom-1 w-0 group-hover:w-full h-0.5 bg-indigo-600 rounded transition-all"></span>
                </a></li>
            <li><a href="{{ route('welcome') }}#contact" class="relative group py-2 px-1 hover:text-indigo-600 transition">
                    Contact
                    <span
                        class="absolute left-0 -bottom-1 w-0 group-hover:w-full h-0.5 bg-indigo-600 rounded transition-all"></span>
                </a></li>
        </ul>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="nav-toggle" aria-label="Toggle navigation"
                class="focus:outline-none focus:ring-2 focus:ring-indigo-600 rounded">
                <svg class="w-7 h-7 text-gray-700" fill="none" stroke="currentColor" stroke-width="2.5"
                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="nav-menu" class="hidden md:hidden bg-white/95 backdrop-blur-md px-6 pb-6 border-t border-gray-200">
        <ul class="space-y-4 text-gray-700 font-semibold tracking-wide">
            <li><a href="#home" class="block py-2 px-1 rounded hover:bg-indigo-100 transition">Home</a></li>
            <li><a href="#products" class="block py-2 px-1 rounded hover:bg-indigo-100 transition">Products</a></li>
            <li><a href="#about" class="block py-2 px-1 rounded hover:bg-indigo-100 transition">About</a></li>
            <li><a href="#contact" class="block py-2 px-1 rounded hover:bg-indigo-100 transition">Contact</a></li>
        </ul>
    </div>
</nav>