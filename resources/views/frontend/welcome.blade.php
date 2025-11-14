@extends('layouts.frontend.app')

@section('content')
    <div>
        <!-- Hero Section -->
        <section id="beranda"
            class="mt-32 md:mt-24 bg-gradient-to-br from-primary to-primary-light min-h-[600px] flex items-center">
            <div class="container mx-auto px-4">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <article class="text-white fade-in-up">
                        <h2 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">
                            Selamat Datang di MTsN 7 Tanah Laut</h2>
                        <p class="text-lg md:text-xl mb-8 text-white/90">Membentuk generasi yang berilmu, beriman,
                            dan
                            berakhlak mulia dengan berlandaskan nilai-nilai Islam</p>
                        <div class="flex flex-wrap gap-4">
                            {{-- PPDB --}}
                            <a href="{{ url('ppdb') }}"
                                class="px-8 py-3 bg-gold text-primary rounded-full font-medium transition-all hover:scale-105">
                                Pendaftaran Siswa Baru
                            </a>

                            <a href="{{ url('profile-sekolah') }}"
                                class="px-8 py-3 border-2 border-white text-white rounded-full font-medium hover:bg-white hover:text-primary transition-all">
                                Tentang Kami
                            </a>
                        </div>
                    </article>

                    <figure class="fade-in-up" style="animation-delay: 0.2s">
                        <img src="{{ asset('assets/Frontend/img/gambar5.png') }}" alt="Kegiatan siswa MTsN 7 Tanah Laut"
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
                        Keunggulan Kami
                    </h2>
                    <p class="text-gray-600 mt-6">
                        MTsN 7 Tanah Laut berkomitmen memberikan pendidikan terbaik dengan nilai-nilai Islami
                    </p>
                </header>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <article class="bg-gray-50 p-8 rounded-2xl text-center hover:shadow-lg transition-shadow">
                        <div
                            class="w-20 h-20 bg-primary text-white rounded-full flex items-center justify-center text-4xl mx-auto mb-6">
                            📖</div>
                        <h3 class="text-xl font-semibold text-primary mb-4">Kurikulum Terpadu</h3>
                        <p class="text-gray-600">
                            Memadukan kurikulum nasional dengan pendidikan agama Islam yang komprehensif
                        </p>
                    </article>

                    <article class="bg-gray-50 p-8 rounded-2xl text-center hover:shadow-lg transition-shadow">
                        <div
                            class="w-20 h-20 bg-primary text-white rounded-full flex items-center justify-center text-4xl mx-auto mb-6">
                            🕌</div>
                        <h3 class="text-xl font-semibold text-primary mb-4">
                            Pendidikan Karakter
                        </h3>
                        <p class="text-gray-600">
                            Membentuk akhlak mulia melalui pembiasaan ibadah dan kegiatan keagamaan
                        </p>
                    </article>

                    <article class="bg-gray-50 p-8 rounded-2xl text-center hover:shadow-lg transition-shadow">
                        <div
                            class="w-20 h-20 bg-primary text-white rounded-full flex items-center justify-center text-4xl mx-auto mb-6">
                            💻</div>
                        <h3 class="text-xl font-semibold text-primary mb-4">
                            Fasilitas Modern
                        </h3>
                        <p class="text-gray-600">
                            Dilengkapi laboratorium komputer, IPA, bahasa, dan perpustakaan digital
                        </p>
                    </article>

                    <article class="bg-gray-50 p-8 rounded-2xl text-center hover:shadow-lg transition-shadow">
                        <div
                            class="w-20 h-20 bg-primary text-white rounded-full flex items-center justify-center text-4xl mx-auto mb-6">
                            🎯</div>
                        <h3 class="text-xl font-semibold text-primary mb-4">
                            Program Tahfidz
                        </h3>
                        <p class="text-gray-600">
                            Program khusus menghafal Al-Qur'an dengan target minimal 3 juz
                        </p>
                    </article>

                    <article class="bg-gray-50 p-8 rounded-2xl text-center hover:shadow-lg transition-shadow">
                        <div
                            class="w-20 h-20 bg-primary text-white rounded-full flex items-center justify-center text-4xl mx-auto mb-6">
                            🌟</div>
                        <h3 class="text-xl font-semibold text-primary mb-4">
                            Ekstrakurikuler
                        </h3>
                        <p class="text-gray-600">
                            Beragam kegiatan untuk mengembangkan minat dan bakat siswa
                        </p>
                    </article>
                </div>
            </div>
        </section>
    </div>

    <section>
        <!-- News and Event Area Start Here -->
        @yield('beritaEvent')
        <!-- News and Event Area End Here -->
    </section>
@endsection