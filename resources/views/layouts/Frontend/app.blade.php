<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="MTsN 7 Tanah Laut - Madrasah Tsanawiyah Negeri yang membentuk generasi berilmu, beriman, dan berakhlak mulia dengan nilai-nilai Islam">
    <meta name="keywords" content="MTsN 7 Tanah Laut, Madrasah Tsanawiyah, Pendidikan Islam, Tanah Laut">
    <meta name="author" content="MTsN 7 Tanah Laut">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="MTsN 7 Tanah Laut - Madrasah Tsanawiyah Negeri 7 Tanah Laut">
    <meta property="og:description"
        content="Membentuk generasi yang berilmu, beriman, dan berakhlak mulia dengan berlandaskan nilai-nilai Islam">

    <title>{{ $title ?? 'MTsN 7 Tanah Laut - Madrasah Tsanawiyah Negeri 7 Tanah Laut' }}</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#1a5f3f',
                            dark: '#144a32',
                            light: '#2d8659'
                        },
                        gold: '#d4af37',
                        'light-green': '#e8f5e9'
                    },
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif']
                    }
                }
            }
        }
    </script>

    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }
    </style>
</head>

<body class="font-poppins text-gray-900 overflow-x-hidden">

    <!-- Header -->
    <header class="fixed w-full top-0 z-50 bg-white shadow-md">
        <!-- Top Bar -->
        <div class="bg-primary text-white py-2">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center text-sm">
                    <p>Selamat Datang di MTsN 7 Tanah Laut</p>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="container mx-auto px-4" aria-label="Main navigation">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-4 group">
                    <img src="{{ asset('assets/frontend/img/logofix.png') }}" alt="Logo MTsN 7 Tanah Laut"
                        class="w-12 h-12 object-contain rounded-lg">
                    <div>
                        <h1 class="text-xl font-bold text-primary group-hover:text-primary-light transition-colors">
                            MTsN 7 Tanah Laut
                        </h1>
                        <p class="text-xs text-gray-600">
                            Madrasah Tsanawiyah Negeri 7 Tanah Laut
                        </p>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <ul class="hidden lg:flex items-center gap-8">
                    <li>
                        <a href="{{ url('/') }}"
                            class="relative font-medium hover:text-primary transition-colors after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-gold after:transition-all hover:after:w-full">
                            Beranda
                        </a>
                    </li>

                    <li class="relative group">
                        <a href="#profil" class="font-medium hover:text-primary transition-colors">
                            Profile
                        </a>
                        <div
                            class="absolute top-full left-0 mt-2 w-56 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                            {{-- PROFILE SEKOLAH --}}
                            <a href="{{ route('profile.sekolah') }}"
                                class="block px-6 py-3 hover:bg-light-green hover:text-primary transition-colors">
                                Profile Sekolah
                            </a>
                            {{-- VISI & MISI --}}
                            <a href="{{ route('visimisi.sekolah') }}"
                                class="block px-6 py-3 hover:bg-light-green hover:text-primary transition-colors">
                                Visi & Misi
                            </a>

                            {{-- <a href=""
                                class="block px-6 py-3 hover:bg-light-green hover:text-primary transition-colors">Struktur
                                Organisasi</a>
                            <a href="#program-unggulan"
                                class="block px-6 py-3 hover:bg-light-green hover:text-primary transition-colors rounded-b-lg">Program
                                Unggulan</a> --}}
                        </div>
                    </li>

                    <li class="relative group">
                        <a href="#other" class="font-medium hover:text-primary transition-colors">Lainnya</a>
                        <div
                            class="absolute top-full left-0 mt-2 w-56 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                            {{-- PERPUSTAKAAN --}}
                            <a href="{{ url('murid/perpustakaan') }}"
                                class="block px-6 py-3 hover:bg-light-green hover:text-primary transition-colors">
                                Perpustakaan
                            </a>
                            {{-- PPDB --}}
                            <a href="{{ url('ppdb') }}"
                                class="block px-6 py-3 hover:bg-light-green hover:text-primary transition-colors rounded-b-lg">
                                PPDB
                            </a>
                        </div>
                    </li>

                    <li class="relative group">
                        <a href="#akademik" class="font-medium hover:text-primary transition-colors">
                            Akademik
                        </a>
                        <div
                            class="absolute top-full left-0 mt-2 w-56 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                            {{-- AKADEMIK --}}
                            <a href="#kurikulum"
                                class="block px-6 py-3 hover:bg-light-green hover:text-primary transition-colors">
                                Kurikulum
                            </a>
                            {{-- JADWAL --}}
                            <a href="#jadwal"
                                class="block px-6 py-3 hover:bg-light-green hover:text-primary transition-colors">
                                Jadwal Pelajaran
                            </a>
                            {{-- EKSTRAKURIKULER --}}
                            <a href="#ekstrakurikuler"
                                class="block px-6 py-3 hover:bg-light-green hover:text-primary transition-colors rounded-b-lg">
                                Ekstrakurikuler
                            </a>
                        </div>
                    </li>

                    <li><a href="{{ url('berita') }}" class="font-medium hover:text-primary transition-colors">
                        Berita
                    </a></li>
                    {{-- <li><a href="" class="font-medium hover:text-primary transition-colors">Kontak</a></li> --}}
                    <li>
                        @auth
                            <a href="{{ route('login') }}"
                                class="px-6 py-2 bg-primary text-white rounded-full hover:bg-primary-light transition-colors">Login</a>
                        @else
                            <a href="{{ url('home') }}"
                                class="px-6 py-2 bg-primary text-white rounded-full hover:bg-primary-light transition-colors">Login</a>
                        @endauth
                    </li>
                </ul>

                <!-- Mobile Menu Button -->
                <button class="lg:hidden text-primary" aria-label="Toggle menu" id="mobile-menu-btn">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden lg:hidden pb-4">
                <ul class="flex flex-col gap-2">
                    <li><a href="#beranda" class="block py-2 hover:text-primary">Beranda</a></li>
                    <li><a href="#profil" class="block py-2 hover:text-primary">Profil</a></li>
                    <li><a href="#akademik" class="block py-2 hover:text-primary">Akademik</a></li>
                    <li><a href="#berita" class="block py-2 hover:text-primary">Berita</a></li>
                    <li><a href="" class="block py-2 hover:text-primary">Kontak</a></li>
                    <li><a href="" class="block py-2 text-primary font-medium">Login</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-6">
        <address class="not-italic">
            <a href="mailto:info@mtsn7tanahlaut.sch.id" class="hover:text-gold transition-colors">📧
                info@mtsn7tanahlaut.sch.id</a>
            <span class="mx-4">|</span>
            <a href="tel:+62512123456" class="hover:text-gold transition-colors">📞 (0512) 123456</a>
        </address>
        <p class="mt-2 text-sm text-gray-400">&copy; {{ date('Y') }} Himpunan Mahasiswa Elektro</p>
    </footer>

    <!-- Scripts -->
    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Intersection Observer for fade-in animations
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in-up').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.8s ease-out, transform 0.8s ease-out';
            observer.observe(el);
        });
    </script>
</body>

</html>




{{-- <!doctype html>
<html class="no-js" lang="">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    @include('layouts.Frontend.style')
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Main Body Area Start Here -->
    <div id="wrapper">
        @yield('content')
        <!-- Header Area Start Here -->
        <header>
           @include('frontend.content.header')
        </header>
        <!-- Header Area End Here -->

        <!-- Slider 1 Area Start Here -->
        <div class="slider1-area overlay-default">
            @yield('slider')
        </div>
        <!-- Slider 1 Area End Here -->
        
        <!-- About 1 Area Start Here -->
            @yield('about')
        <!-- About 1 Area End Here -->

        <!-- Video Area Start Here -->
            @yield('video')
        <!-- Video Area End Here -->

        <!-- Lecturers Area Start Here -->
            @yield('guru')
        <!-- Lecturers Area End Here -->

        <!-- News and Event Area Start Here -->
            @yield('beritaEvent')
        <!-- News and Event Area End Here -->
        
        <!-- Footer Area Start Here -->
        <footer>
            @include('frontend.content.footer')
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Main Body Area End Here -->
    @include('layouts.Frontend.scripts')
</body>
</html> --}}