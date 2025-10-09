@extends('components.layouts.app')
@section('content')
    {{-- Hero Section --}}
    <section id="home"
        class="relative h-[calc(100vh-5rem)] bg-gradient-to-r from-indigo-900 via-indigo-800 to-indigo-900 text-white pt-16">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Sport Motorcycle" class="w-full h-full object-cover brightness-75" />
            <div class="absolute inset-0 bg-gradient-to-r from-indigo-900/80 via-indigo-900/60 to-indigo-900/80"></div>
        </div>

        <div
            class="container mx-auto px-6 relative z-10 flex flex-col justify-center items-center md:items-start text-center md:text-left min-h-[calc(100vh-4rem)]">
            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight tracking-tight drop-shadow-lg mb-6">
                Ride the Future with Nebula Motosport
            </h1>
            <p class="text-xl md:text-2xl max-w-lg mb-10 font-light drop-shadow-md">
                Discover the latest sport motorcycles designed for speed, style, and performance.
            </p>
            <a href="{{ route('welcome') }}#products"
                class="inline-block bg-gradient-to-r from-indigo-500 to-indigo-700 hover:from-indigo-600 hover:to-indigo-800 shadow-lg text-white font-semibold px-10 py-4 rounded-full transition-transform transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-indigo-400">
                Shop Now
            </a>
        </div>
    </section>

    <section id="products" class="container mx-auto px-6 py-20 max-w-7xl">
        <h2 class="text-4xl font-extrabold text-center mb-16 text-gray-900 tracking-wide">Featured Motorcycles</h2>
        <div class="grid gap-12 md:grid-cols-4">
            @foreach ($products as $product)
                <article
                    class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group cursor-pointer border border-gray-100">

                    {{-- Gambar Produk --}}
                    <div class="overflow-hidden rounded-t-2xl bg-gray-100 flex justify-center">
                        <img src="{{ $product->image }}" alt="{{ $product->name }}"
                            class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500" />
                    </div>

                    {{-- Detail Produk --}}
                    <div class="p-6 space-y-3">
                        {{-- Nama Produk --}}
                        <h3 class="text-xl font-semibold text-gray-900 tracking-wide">
                            {{ $product->name }}
                        </h3>

                        {{-- Kategori --}}
                        @if ($product->category)
                            <p class="text-sm text-indigo-500 font-medium">
                                {{ $product->category->name }}
                            </p>
                        @endif

                        {{-- Deskripsi Singkat --}}
                        <p class="text-sm text-gray-600 leading-relaxed line-clamp-2">
                            {{ Str::limit($product->description, 70, '...') }}
                        </p>

                        {{-- Release Date --}}
                        {{-- <p class="text-sm text-gray-500">
                            <span class="font-medium text-gray-700">Release:</span>
                            {{ \Carbon\Carbon::parse($product->release_date)->format('d M Y') }}
                        </p> --}}

                        {{-- Harga --}}
                        <div class="flex items-baseline gap-2">
                            <p class="text-indigo-600 font-bold text-lg">
                                ${{ number_format($product->price, 0) }}
                            </p>
                            <span class="text-gray-400 text-sm">/unit</span>
                        </div>

                        {{-- Tombol --}}
                        <a href="{{ route('product.details', $product->id) }}"
                            class="block text-center bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 rounded-full shadow-md transition-transform hover:scale-105">
                            View Details
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    <section id="about" class="bg-white py-24">
        <div class="container mx-auto px-6 max-w-6xl flex flex-col md:flex-row items-center gap-16">
            <div class="md:w-1/2 space-y-6">
                <h2 class="text-4xl font-extrabold text-gray-900 tracking-wide">About Nebula Motosport</h2>
                <p class="text-gray-700 text-lg leading-relaxed font-light">
                    At Nebula Motosport, we are passionate about delivering cutting-edge motorcycles that combine
                    innovation, power, and style. Our mission is to empower riders to experience the thrill of the road
                    with confidence and unmatched performance.
                </p>
                <p class="text-gray-600 italic text-sm tracking-wide">Experience the ride of your life with our premium
                    motorcycles.</p>
            </div>
            <div class="md:w-1/2 rounded-3xl overflow-hidden shadow-2xl">
                <img src="https://images.unsplash.com/photo-1613360509310-a4dacc9bd758?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="About Nebula Motosport" class="w-full h-auto object-cover" />
            </div>
        </div>
    </section>

    <section id="contact" class="bg-indigo-50 py-24">
        <div class="container mx-auto px-6 max-w-3xl">
            <h2 class="text-4xl font-extrabold mb-12 text-center text-indigo-900 tracking-wide">Get in Touch</h2>
            <form action="#" method="POST" class="bg-white rounded-3xl shadow-xl p-10">
                @csrf
                <div class="form-group">
                    <input type="text" id="name" name="name" placeholder=" " required class="form-input" />
                    <label for="name" class="form-label">Name</label>
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder=" " required class="form-input" />
                    <label for="email" class="form-label">Email</label>
                </div>
                <div class="form-group">
                    <textarea id="message" name="message" rows="5" placeholder=" " required class="form-input resize-none"></textarea>
                    <label for="message" class="form-label">Message</label>
                </div>
                <button type="submit"
                    class="w-full bg-gradient-to-r from-indigo-600 to-indigo-800 hover:from-indigo-700 hover:to-indigo-900 text-white font-semibold py-4 rounded-full shadow-lg transition-transform transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-indigo-400">
                    Send Message
                </button>
            </form>
        </div>
    </section>
    <script>
        const navToggle = document.getElementById('nav-toggle');
        const navMenu = document.getElementById('nav-menu');

        navToggle.addEventListener('click', () => {
            navMenu.classList.toggle('hidden');
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });

                    if (!navMenu.classList.contains('hidden')) {
                        navMenu.classList.add('hidden');
                    }
                }
            });
        });

        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                }
            });
        }, observerOptions);

        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });

        const style = document.createElement('style');
        style.textContent = `
      @keyframes fadeInUp {
        from {
          opacity: 0;
          transform: translateY(30px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }
      .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
      }
      section {
        opacity: 0;
      }
    `;
        document.head.appendChild(style);
    </script>
@endsection
