@extends('components.layouts.app')

@php
    use Illuminate\Support\Facades\Storage;
    use Illuminate\Support\Str;
@endphp

@section('content')
    {{-- Hero Section --}}
    <section id="home"
        class="relative min-h-[calc(100vh-4rem)] overflow-hidden flex items-center py-24 md:py-32 text-white">
        <!-- 🔹 Background Layer -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?q=80&w=1170&auto=format&fit=crop"
                alt="Sport Motorcycle" class="h-full w-full object-cover object-center" />
            <div class="absolute inset-0 bg-gradient-to-r from-indigo-950/95 via-indigo-900/85 to-indigo-800/70"></div>

            <!-- Decorative Blurs -->
            <div
                class="absolute -top-20 right-10 h-64 w-64 rounded-full bg-gradient-to-br from-sky-400/40 via-indigo-400/20 to-transparent blur-3xl animate-float">
            </div>
            <div
                class="absolute -bottom-32 left-1/3 h-[420px] w-[420px] rounded-full bg-gradient-to-tr from-indigo-400/30 via-purple-400/20 to-transparent blur-3xl">
            </div>
        </div>

        <!-- 🔹 Content Layer -->
        <div class="relative z-10 mx-auto max-w-7xl px-6 md:px-12 lg:px-16">
            <div class="grid items-center gap-16 lg:grid-cols-2">

                <!-- Left Text Section -->
                <div class="space-y-8 text-center lg:text-left">
                    <div
                        class="inline-flex items-center gap-3 rounded-full border border-white/30 bg-white/10 px-5 py-2 text-xs font-semibold uppercase tracking-[0.25em] text-indigo-100">
                        <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                        2025 Hyper Sport Line
                    </div>

                    <h1 class="text-4xl font-extrabold leading-tight md:text-5xl lg:text-6xl">
                        Ride the future with
                        <span
                            class="bg-gradient-to-r from-indigo-300 via-sky-200 to-indigo-100 bg-clip-text text-transparent">
                            Nebula Motosport
                        </span>
                    </h1>

                    <p class="max-w-xl mx-auto text-lg leading-relaxed text-indigo-100/90 md:text-xl lg:mx-0">
                        Discover an elite collection of sport motorcycles engineered for velocity, precision,
                        and unmatched control on every track.
                    </p>

                    <div class="flex flex-col sm:flex-row justify-center lg:justify-start items-center gap-4 mt-4">
                        <a href="{{ route('welcome') }}#products"
                            class="rounded-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-8 py-3 shadow-md shadow-indigo-500/20 transition-all duration-300 hover:scale-[1.03]">
                            Shop collection
                        </a>
                        <a href="#about"
                            class="inline-flex items-center gap-2 rounded-full border border-white/25 px-7 py-3 text-sm font-semibold text-indigo-100 transition-all duration-300 hover:bg-white/10 hover:scale-[1.03]">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.752 11.168l-3.197-2.132A1 1 0 0010.5 9.868v4.264a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Watch teaser
                        </a>
                    </div>
                </div>

                <!-- Right Image Section -->
                <div class="hidden lg:flex justify-center items-center">
                    <div class="relative w-full max-w-xl">
                        <div class="absolute -inset-16 rounded-full bg-gradient-to-br from-indigo-500/20 via-sky-400/10 to-transparent blur-3xl"></div>
                        <div class="absolute -inset-6 rounded-[36px] border border-white/10 opacity-70 animate-slow-rotate"></div>

                        <div class="group relative overflow-hidden rounded-[36px] border border-white/25 bg-white/10 backdrop-blur-2xl shadow-[0_35px_60px_-25px_rgba(30,64,175,0.55)]">
                            <img src="https://images.unsplash.com/photo-1760272541617-e86736799606?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1964"
                                alt="Racing motorcycle"
                                class="h-[430px] w-full object-cover rounded-[30px] transition-transform duration-700 group-hover:scale-[1.03]" />

                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-indigo-950/70 via-transparent to-transparent"></div>

                            <div class="absolute top-6 left-6 flex flex-col gap-3">
                                <span class="inline-flex items-center gap-2 rounded-full bg-white/15 px-4 py-1.5 text-xs font-semibold tracking-wide text-indigo-50 backdrop-blur-md shadow">
                                    Nebula X Prototype
                                </span>
                                <span class="inline-flex items-center gap-2 rounded-full bg-black/20 px-3 py-1 text-[11px] font-semibold tracking-wider uppercase text-white/80 backdrop-blur-md">
                                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                                    Live track telemetry
                                </span>
                            </div>

                            <div class="absolute top-6 right-6 flex flex-col items-end gap-3 text-xs text-indigo-100/80">
                                <div class="rounded-2xl border border-white/15 bg-white/10 px-4 py-3 backdrop-blur-md shadow">
                                    <p class="text-[11px] uppercase tracking-[0.35em] text-indigo-200">0-100 km/h</p>
                                    <p class="mt-1 text-2xl font-semibold text-white">2.8s</p>
                                </div>
                                <div class="rounded-2xl border border-white/15 bg-white/10 px-4 py-3 backdrop-blur-md shadow">
                                    <p class="text-[11px] uppercase tracking-[0.35em] text-indigo-200">Power</p>
                                    <p class="mt-1 text-2xl font-semibold text-white">218 HP</p>
                                </div>
                            </div>
                        </div>

                        <div class="absolute -bottom-12 left-1/2 flex w-[70%] -translate-x-1/2 items-center justify-between rounded-2xl border border-white/10 bg-indigo-950/70 px-6 py-4 text-xs text-indigo-100/90 shadow-lg shadow-indigo-900/40 backdrop-blur">
                            <div>
                                <p class="font-semibold tracking-[0.28em] text-[11px] uppercase text-indigo-200">Lean angle</p>
                                <p class="mt-1 text-lg font-semibold text-white">58°</p>
                            </div>
                            <div class="h-10 w-px bg-white/10"></div>
                            <div>
                                <p class="font-semibold tracking-[0.28em] text-[11px] uppercase text-indigo-200">Dry weight</p>
                                <p class="mt-1 text-lg font-semibold text-white">189 kg</p>
                            </div>
                            <div class="h-10 w-px bg-white/10"></div>
                            <div>
                                <p class="font-semibold tracking-[0.28em] text-[11px] uppercase text-indigo-200">Torque</p>
                                <p class="mt-1 text-lg font-semibold text-white">128 Nm</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="products" class="container mx-auto max-w-7xl px-6 py-24">
        <div class="mx-auto max-w-2xl text-center">
            <span class="chip-soft reveal">Signature lineup</span>
            <h2 class="section-heading mt-4 reveal delay-75">Featured motorcycles</h2>
            <p class="mt-4 text-base text-gray-600 reveal delay-150">
                Handpicked machines with race-proven DNA, ready to deliver adrenaline on every ride.
            </p>
        </div>

        <div class="mt-16 grid gap-12 sm:grid-cols-2 xl:grid-cols-3">
            @foreach ($products as $product)
                @php
                    $image = Str::startsWith($product->image, ['http://', 'https://'])
                        ? $product->image
                        : asset('storage/' . $product->image);
                    $delayClass = match ($loop->index % 4) {
                        1 => ' delay-75',
                        2 => ' delay-150',
                        3 => ' delay-225',
                        default => '',
                    };
                @endphp

                <article
                    class="glass-panel reveal{{ $delayClass }} group flex flex-col overflow-hidden rounded-3xl shadow-md transition duration-300 hover:shadow-lg bg-white">

                    <!-- Gambar penuh tanpa margin -->
                    <div class="relative overflow-hidden bg-slate-900">
                        <div
                            class="absolute inset-0 bg-gradient-to-tr from-indigo-500/10 via-transparent to-sky-400/10 opacity-0 transition duration-500 group-hover:opacity-100">
                        </div>
                        <img src="{{ $image }}" alt="{{ $product->name }}"
                            class="aspect-[4/3] w-full object-cover transition duration-700 group-hover:scale-110" />

                        <div class="absolute left-4 top-4 flex items-center gap-2 text-xs font-semibold text-white">
                            @if ($product->category)
                                <span
                                    class="rounded-full bg-white/15 px-3 py-1 backdrop-blur-md">{{ $product->category->name }}</span>
                            @endif
                            <span class="rounded-full bg-indigo-500/80 px-3 py-1 backdrop-blur-md">
                                {{ $product->details->engine_type ?? '1000cc' }}
                            </span>
                        </div>
                    </div>

                    <!-- Konten card -->
                    <div class="flex flex-1 flex-col gap-5 p-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">{{ $product->name }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-gray-600">
                                {{ Str::limit($product->details->description ?? 'Experience the thrill of speed with Nebula motorbikes.', 110, '...') }}
                            </p>
                        </div>
                        <div class="mt-auto flex items-center justify-between border-t border-indigo-100/70 pt-5">
                            <span class="text-2xl font-bold text-indigo-600">${{ number_format($product->price, 0) }}</span>
                            <a href="{{ route('product.details', $product->id) }}"
                                class="btn-primary px-6 py-2 text-xs rounded-full">View details</a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>


    <section id="about" class="relative overflow-hidden py-24">
        <div class="absolute inset-x-0 top-10 flex justify-center">
            <div class="h-48 w-48 rounded-full bg-gradient-to-br from-indigo-200/50 via-sky-200/50 to-transparent blur-3xl">
            </div>
        </div>
        <div class="container relative mx-auto max-w-6xl px-6">
            <div class="grid items-center gap-16 lg:grid-cols-2">
                <div class="space-y-6">
                    <span class="chip-soft reveal">Our philosophy</span>
                    <h2 class="section-heading reveal delay-75">About Nebula Motosport</h2>
                    <p class="text-lg leading-relaxed text-gray-600 reveal delay-150">
                        We blend aerodynamic design, lightweight engineering, and precision electronics to push boundaries
                        for riders who demand the extraordinary.
                    </p>
                    <div class="grid gap-6 sm:grid-cols-2 reveal delay-225">
                        <div class="glass-panel p-6 text-sm text-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900">Engineering first</h3>
                            <p class="mt-3">Carbon fiber components, adaptive suspension, and race-tested ergonomics
                                across the range.</p>
                        </div>
                        <div class="glass-panel p-6 text-sm text-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900">Rider centric</h3>
                            <p class="mt-3">Immersive telemetry, modular riding modes, and responsive control for every
                                environment.</p>
                        </div>
                    </div>
                </div>
                <div class="glass-panel gradient-outline reveal lg:justify-self-end">
                    <img src="https://images.unsplash.com/photo-1613360509310-a4dacc9bd758?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="About Nebula Motosport" class="h-full w-full rounded-3xl object-cover" />
                    <div class="mt-6 flex items-center justify-between px-4 pb-4 text-sm text-gray-600">
                        <span class="font-medium text-gray-900">Zero compromises build</span>
                        <span>Wind tunnel tested</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="relative py-24">
        <div class="absolute inset-x-0 top-0 -z-10 h-1/2 bg-gradient-to-b from-indigo-100 via-indigo-50 to-transparent">
        </div>
        <div class="container mx-auto max-w-4xl px-6">
            <div class="glass-panel p-10 md:p-14 reveal">
                <div class="mx-auto max-w-xl text-center">
                    <span class="chip-soft">Let's collaborate</span>
                    <h2 class="section-heading mt-4">Get in touch</h2>
                    <p class="mt-4 text-base text-gray-600">Our specialists will help tailor the perfect configuration for
                        your next ride.</p>
                </div>
                <form action="#" method="POST" class="mt-10 space-y-6">
                    @csrf
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder=" " required
                            class="form-input" />
                        <label for="name" class="form-label">Name</label>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder=" " required
                            class="form-input" />
                        <label for="email" class="form-label">Email</label>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" rows="5" placeholder=" " required class="form-input resize-none"></textarea>
                        <label for="message" class="form-label">How can we help?</label>
                    </div>
                    <button type="submit" class="btn-primary w-full">
                        Send message
                    </button>
                </form>
            </div>
        </div>
    </section>

@endsection
