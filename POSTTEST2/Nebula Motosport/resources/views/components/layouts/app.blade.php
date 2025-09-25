<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Nebula Motosport</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <style>
        /* Floating labels */
        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .form-input {
            width: 100%;
            padding: 1rem 1rem 0.25rem 1rem;
            border: 1.5px solid #d1d5db;
            /* gray-300 */
            border-radius: 0.5rem;
            background: transparent;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: #6366f1;
            /* indigo-500 */
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.3);
        }

        .form-label {
            position: absolute;
            top: 1rem;
            left: 1rem;
            color: #6b7280;
            /* gray-500 */
            font-size: 1rem;
            font-weight: 500;
            pointer-events: none;
            transition: all 0.3s ease;
            background: white;
            padding: 0 0.25rem;
            border-radius: 0.25rem;
        }

        .form-input:focus+.form-label,
        .form-input:not(:placeholder-shown)+.form-label {
            top: -0.5rem;
            left: 0.75rem;
            font-size: 0.75rem;
            color: #4f46e5;
            /* indigo-600 */
            font-weight: 600;
            letter-spacing: 0.05em;
        }
    </style>
</head>

<body class="font-sans antialiased text-gray-900 bg-gradient-to-b from-white via-indigo-50 to-white">

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')
</body>

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
</html>
