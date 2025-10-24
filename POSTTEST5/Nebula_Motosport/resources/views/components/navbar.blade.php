<nav class="sticky top-0 z-50 bg-white/90 backdrop-blur-md shadow-md">
    <div class="mx-auto flex w-full max-w-11/12 items-center justify-between px-8 py-4 lg:px-10">

        <!-- Logo -->
        <a href="{{ route('welcome') }}#" class="flex items-center select-none">
            <img src="{{ asset('images/logo4.png') }}" alt="Nebula Motosport Logo" class="h-11 w-auto block">
        </a>

        <!-- Desktop Menu -->
        <ul class="hidden items-center gap-10 text-[15px] font-medium tracking-wide text-gray-700 md:flex">
            <li>
                <a href="{{ route('welcome') }}#" class="relative group px-2 py-2 transition hover:text-indigo-600">
                    Home
                    <span class="absolute left-1/2 bottom-0 h-0.5 w-0 -translate-x-1/2 rounded-full bg-indigo-600 transition-all duration-300 group-hover:w-4/5"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('welcome') }}#products" class="relative group px-2 py-2 transition hover:text-indigo-600">
                    Products
                    <span class="absolute left-1/2 bottom-0 h-0.5 w-0 -translate-x-1/2 rounded-full bg-indigo-600 transition-all duration-300 group-hover:w-4/5"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('welcome') }}#about" class="relative group px-2 py-2 transition hover:text-indigo-600">
                    About
                    <span class="absolute left-1/2 bottom-0 h-0.5 w-0 -translate-x-1/2 rounded-full bg-indigo-600 transition-all duration-300 group-hover:w-4/5"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('welcome') }}#contact" class="relative group px-2 py-2 transition hover:text-indigo-600">
                    Contact
                    <span class="absolute left-1/2 bottom-0 h-0.5 w-0 -translate-x-1/2 rounded-full bg-indigo-600 transition-all duration-300 group-hover:w-4/5"></span>
                </a>
            </li>
        </ul>

        <!-- Auth Buttons -->
        <div class="hidden items-center gap-5 md:flex">
            @auth
                <div class="flex items-center gap-4 rounded-full bg-indigo-50/80 px-3 py-1.5 shadow-sm border border-indigo-100">
                    <div class="flex h-9 w-9 items-center justify-center rounded-full bg-indigo-600 text-sm font-semibold text-white uppercase">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>
                    <div class="text-left leading-tight">
                        <span class="block text-[11px] font-semibold uppercase tracking-wide text-indigo-400">Signed in</span>
                        <span class="text-sm font-semibold text-indigo-700">{{ auth()->user()->name }}</span>
                    </div>
                </div>
                @role('admin')
                    <a href="{{ route('admin.dashboard') }}" class="text-sm font-semibold text-gray-700 hover:text-indigo-600 transition">Dashboard</a>
                @endrole
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-5 py-2 rounded-xl shadow-sm transition">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-700 hover:text-indigo-600 transition">Sign in</a>
                <a href="{{ route('register') }}"
                    class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-5 py-2 rounded-xl shadow-sm transition">
                    Create account
                </a>
            @endauth
        </div>

        <!-- Mobile Button -->
        <div class="md:hidden">
            <button id="nav-toggle" aria-label="Toggle navigation"
                class="focus:outline-none focus:ring-2 focus:ring-indigo-600 rounded-md p-1.5">
                <svg class="w-7 h-7 text-gray-700" fill="none" stroke="currentColor" stroke-width="2.5"
                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="nav-menu" class="hidden md:hidden bg-white/95 backdrop-blur-md px-8 pb-6 border-t border-gray-200">
        <ul class="space-y-4 text-gray-700 font-semibold tracking-wide">
            <li><a href="#home" class="block py-2 rounded hover:bg-indigo-100 transition">Home</a></li>
            <li><a href="#products" class="block py-2 rounded hover:bg-indigo-100 transition">Products</a></li>
            <li><a href="#about" class="block py-2 rounded hover:bg-indigo-100 transition">About</a></li>
            <li><a href="#contact" class="block py-2 rounded hover:bg-indigo-100 transition">Contact</a></li>

            @auth
                <li>
                    <div class="flex items-center gap-4 rounded-2xl bg-indigo-50/90 px-4 py-3 border border-indigo-100">
                        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-indigo-600 text-base font-semibold text-white uppercase">
                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                        </div>
                        <div class="leading-tight">
                            <p class="text-xs font-semibold uppercase tracking-wide text-indigo-400">Signed in</p>
                            <p class="text-sm font-semibold text-indigo-700">{{ auth()->user()->name }}</p>
                        </div>
                    </div>
                </li>
                @role('admin')
                    <li><a href="{{ route('admin.dashboard') }}" class="block py-2 rounded hover:bg-indigo-100 transition">Dashboard</a></li>
                @endrole
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full text-left py-2 rounded hover:bg-indigo-100 transition">Logout</button>
                    </form>
                </li>
            @else
                <li><a href="{{ route('login') }}" class="block py-2 rounded hover:bg-indigo-100 transition">Sign in</a></li>
                <li><a href="{{ route('register') }}" class="block py-2 rounded hover:bg-indigo-100 transition">Create account</a></li>
            @endauth
        </ul>
    </div>
</nav>
