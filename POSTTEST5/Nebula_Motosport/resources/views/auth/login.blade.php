@extends('components.layouts.app')

@section('content')
<section class="relative flex min-h-[80vh] items-center justify-center px-6 py-20">
    <div class="absolute inset-0 -z-10 bg-gradient-to-br from-indigo-100 via-white to-sky-100"></div>
    <div class="w-full max-w-5xl grid gap-10 lg:grid-cols-[1.1fr_1fr]">
        <div class="glass-panel relative overflow-hidden px-10 py-12 text-indigo-950">
            <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/15 via-sky-400/10 to-transparent"></div>
            <div class="relative flex h-full flex-col justify-between gap-10">
                <div class="space-y-6">
                    <span class="chip-soft inline-flex items-center gap-2">
                        <span class="h-2 w-2 rounded-full bg-indigo-500 animate-pulse"></span>
                        Nebula Control Access
                    </span>
                    <div>
                        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Welcome back</h1>
                        <p class="mt-3 text-base text-gray-600">
                            Sign in to synchronize your product launches, monitor performance, and keep the Nebula ecosystem aligned in real time.
                        </p>
                    </div>
                </div>

                <div class="grid gap-5 sm:grid-cols-2">
                    <div class="rounded-3xl border border-white/60 bg-white/70 px-5 py-6 shadow-lg shadow-indigo-100/60">
                        <p class="text-xs font-semibold uppercase tracking-wide text-indigo-400">Active listings</p>
                        <p class="mt-3 text-2xl font-bold text-gray-900">180+</p>
                        <p class="mt-2 text-xs text-gray-500">Curate and update your inventory without leaving this session.</p>
                    </div>
                    <div class="rounded-3xl border border-white/60 bg-white/70 px-5 py-6 shadow-lg shadow-indigo-100/60">
                        <p class="text-xs font-semibold uppercase tracking-wide text-indigo-400">Admin uptime</p>
                        <p class="mt-3 text-2xl font-bold text-gray-900">99.9%</p>
                        <p class="mt-2 text-xs text-gray-500">Secure authentication backed by granular role permissions.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="glass-panel px-10 py-12">
            <div class="mb-8 space-y-3 text-center">
                <h2 class="text-2xl font-bold text-gray-900">Sign in to dashboard</h2>
                <p class="text-sm text-gray-600">Use your Nebula admin credentials to continue.</p>
            </div>

            @if ($errors->any())
                <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 px-5 py-4 text-sm font-medium text-red-600">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <div class="space-y-1.5">
                    <label for="email" class="text-sm font-semibold text-gray-700">Email</label>
                    <div class="gradient-outline rounded-2xl">
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus
                            class="form-input rounded-2xl border border-transparent bg-white/90 text-gray-900 placeholder:text-gray-400" placeholder="you@example.com" />
                    </div>
                </div>

                <div class="space-y-1.5">
                    <label for="password" class="text-sm font-semibold text-gray-700">Password</label>
                    <div class="gradient-outline rounded-2xl">
                        <input id="password" name="password" type="password" required
                            class="form-input rounded-2xl border border-transparent bg-white/90 text-gray-900 placeholder:text-gray-400" placeholder="••••••••" />
                    </div>
                </div>

                <div class="flex flex-wrap items-center justify-between gap-3 text-sm">
                    <label class="flex items-center gap-2 text-gray-600">
                        <input id="remember" name="remember" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" />
                        Remember me
                    </label>
                    <a href="{{ route('register') }}" class="font-semibold text-indigo-600 transition hover:text-indigo-500">Create account</a>
                </div>

                <button type="submit" class="btn-primary w-full justify-center">
                    Access dashboard
                </button>
            </form>

            <div class="mt-8 rounded-2xl border border-indigo-100 bg-indigo-50/70 px-5 py-4 text-xs font-medium uppercase tracking-[0.25em] text-indigo-500">
                Secure gateway · Nebula Motorsport Admin
            </div>
        </div>
    </div>
</section>
@endsection
