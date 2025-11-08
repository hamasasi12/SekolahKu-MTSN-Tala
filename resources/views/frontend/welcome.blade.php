{{-- @extends('layouts.Frontend.app')
@section('title')
    Sekolahku
@endsection --}}

{{-- @section('content') --}}

{{-- Slider --}}
{{-- @section('slider')
    @include('frontend.content.slider')
@endsection --}}

{{-- About --}}
{{-- @section('about')
    @include('frontend.content.about')
@endsection --}}

{{-- Video --}}
{{-- @section('video')
    @include('frontend.content.video')
@endsection --}}

{{-- Guru --}}
{{-- @section('guru')
    @include('frontend.content.guru')
@endsection --}}

{{-- Berita & Event --}}
{{-- @section('beritaEvent')
    @include('frontend.content.beritaEvent')
@endsection
@endsection --}}

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
                        <h1 class="text-xl font-bold text-primary group-hover:text-primary-light transition-colors">MTsN
                            7 Tanah Laut</h1>
                        <p class="text-xs text-gray-600">Madrasah Tsanawiyah Negeri 7 Tanah Laut</p>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <ul class="hidden lg:flex items-center gap-8">
                    <li><a href="#beranda"
                            class="relative font-medium hover:text-primary transition-colors after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-gold after:transition-all hover:after:w-full">Beranda</a>
                    </li>

                    <li class="relative group">
                        <a href="#profil" class="font-medium hover:text-primary transition-colors">Profil</a>
                        <div
                            class="absolute top-full left-0 mt-2 w-56 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                            <a href=""
                                class="block px-6 py-3 hover:bg-light-green hover:text-primary transition-colors">Sejarah</a>
                            <a href=""
                                class="block px-6 py-3 hover:bg-light-green hover:text-primary transition-colors">Visi &
                                Misi</a>
                            <a href=""
                                class="block px-6 py-3 hover:bg-light-green hover:text-primary transition-colors">Struktur
                                Organisasi</a>
                            <a href="#program-unggulan"
                                class="block px-6 py-3 hover:bg-light-green hover:text-primary transition-colors rounded-b-lg">Program
                                Unggulan</a>
                        </div>
                    </li>

                    <li class="relative group">
                        <a href="#other" class="font-medium hover:text-primary transition-colors">Lainnya</a>
                        <div
                            class="absolute top-full left-0 mt-2 w-56 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                            <a href=""
                                class="block px-6 py-3 hover:bg-light-green hover:text-primary transition-colors">Perpustakaan</a>
                            <a href=""
                                class="block px-6 py-3 hover:bg-light-green hover:text-primary transition-colors rounded-b-lg">PPDB</a>
                        </div>
                    </li>

                    <li class="relative group">
                        <a href="#akademik" class="font-medium hover:text-primary transition-colors">Akademik</a>
                        <div
                            class="absolute top-full left-0 mt-2 w-56 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                            <a href="#kurikulum"
                                class="block px-6 py-3 hover:bg-light-green hover:text-primary transition-colors">Kurikulum</a>
                            <a href="#jadwal"
                                class="block px-6 py-3 hover:bg-light-green hover:text-primary transition-colors">Jadwal
                                Pelajaran</a>
                            <a href="#ekstrakurikuler"
                                class="block px-6 py-3 hover:bg-light-green hover:text-primary transition-colors rounded-b-lg">Ekstrakurikuler</a>
                        </div>
                    </li>

                    <li><a href="#berita" class="font-medium hover:text-primary transition-colors">Berita</a></li>
                    <li><a href="" class="font-medium hover:text-primary transition-colors">Kontak</a></li>
                    <li>
                        @auth
                        <a href="{{ route('login') }}" class="px-6 py-2 bg-primary text-white rounded-full hover:bg-primary-light transition-colors">Login</a>
                        @else
                        <a href="{{ url('home') }}" class="px-6 py-2 bg-primary text-white rounded-full hover:bg-primary-light transition-colors">Login</a>
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
        <!-- Hero Section -->
        <section id="beranda"
            class="mt-24 md:mt-32 bg-gradient-to-br from-primary to-primary-light min-h-[600px] flex items-center">
            <div class="container mx-auto px-4">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <article class="text-white fade-in-up">
                        <h2 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">Selamat Datang di MTsN 7 Tanah
                            Laut</h2>
                        <p class="text-lg md:text-xl mb-8 text-white/90">Membentuk generasi yang berilmu, beriman, dan
                            berakhlak mulia dengan berlandaskan nilai-nilai Islam</p>
                        <div class="flex flex-wrap gap-4">
                            <a href="#pendaftaran"
                                class="px-8 py-3 bg-gold text-primary rounded-full font-medium hover:bg-gold/90 transition-all hover:scale-105">Pendaftaran
                                Siswa Baru</a>
                            <a href="#profil"
                                class="px-8 py-3 border-2 border-white text-white rounded-full font-medium hover:bg-white hover:text-primary transition-all">Tentang
                                Kami</a>
                        </div>
                    </article>

                    <figure class="fade-in-up" style="animation-delay: 0.2s">
                        <img src="{{ asset('assets/Frontend/img/logo.png') }}" alt="Kegiatan siswa MTsN 7 Tanah Laut"
                            class="w-full h-[400px] object-cover rounded-2xl shadow-2xl">
                    </figure>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-20 bg-white" aria-labelledby="features-heading">
            <div class="container mx-auto px-4">
                <header class="text-center mb-16">
                    <h2 id="features-heading"
                        class="text-3xl md:text-4xl font-bold text-primary mb-4 relative inline-block after:content-[''] after:absolute after:bottom-[-10px] after:left-1/2 after:-translate-x-1/2 after:w-16 after:h-1 after:bg-gold">
                        Keunggulan Kami</h2>
                    <p class="text-gray-600 mt-6">MTsN 7 Tanah Laut berkomitmen memberikan pendidikan terbaik dengan
                        nilai-nilai Islami</p>
                </header>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <article class="bg-gray-50 p-8 rounded-2xl text-center hover:shadow-lg transition-shadow">
                        <div
                            class="w-20 h-20 bg-primary text-white rounded-full flex items-center justify-center text-4xl mx-auto mb-6">
                            📖</div>
                        <h3 class="text-xl font-semibold text-primary mb-4">Kurikulum Terpadu</h3>
                        <p class="text-gray-600">Memadukan kurikulum nasional dengan pendidikan agama Islam yang
                            komprehensif</p>
                    </article>

                    <article class="bg-gray-50 p-8 rounded-2xl text-center hover:shadow-lg transition-shadow">
                        <div
                            class="w-20 h-20 bg-primary text-white rounded-full flex items-center justify-center text-4xl mx-auto mb-6">
                            🕌</div>
                        <h3 class="text-xl font-semibold text-primary mb-4">Pendidikan Karakter</h3>
                        <p class="text-gray-600">Membentuk akhlak mulia melalui pembiasaan ibadah dan kegiatan
                            keagamaan</p>
                    </article>

                    <article class="bg-gray-50 p-8 rounded-2xl text-center hover:shadow-lg transition-shadow">
                        <div
                            class="w-20 h-20 bg-primary text-white rounded-full flex items-center justify-center text-4xl mx-auto mb-6">
                            💻</div>
                        <h3 class="text-xl font-semibold text-primary mb-4">Fasilitas Modern</h3>
                        <p class="text-gray-600">Dilengkapi laboratorium komputer, IPA, bahasa, dan perpustakaan
                            digital</p>
                    </article>

                    <article class="bg-gray-50 p-8 rounded-2xl text-center hover:shadow-lg transition-shadow">
                        <div
                            class="w-20 h-20 bg-primary text-white rounded-full flex items-center justify-center text-4xl mx-auto mb-6">
                            🎯</div>
                        <h3 class="text-xl font-semibold text-primary mb-4">Program Tahfidz</h3>
                        <p class="text-gray-600">Program khusus menghafal Al-Qur'an dengan target minimal 3 juz</p>
                    </article>

                    <article class="bg-gray-50 p-8 rounded-2xl text-center hover:shadow-lg transition-shadow">
                        <div
                            class="w-20 h-20 bg-primary text-white rounded-full flex items-center justify-center text-4xl mx-auto mb-6">
                            🌟</div>
                        <h3 class="text-xl font-semibold text-primary mb-4">Ekstrakurikuler</h3>
                        <p class="text-gray-600">Beragam kegiatan untuk mengembangkan minat dan bakat siswa</p>
                    </article>
                </div>
            </div>
        </section>
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
