@extends('layouts.Frontend.app')

@section('title', 'Visi dan Misi - MTsN 7 Tanah Laut')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-primary to-primary-dark text-white pt-32 pb-20">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0"
                style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
            </div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl mx-auto text-center fade-in-up">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Visi & Misi</h1>
                <p class="text-lg text-white/90">MTsN 7 Tanah Laut</p>
                <div class="flex items-center justify-center gap-2 mt-6 text-sm">
                    <a href="{{ url('/') }}" class="hover:text-gold transition-colors">Beranda</a>
                    <span class="text-gold">›</span>
                    <span class="text-white/80">Visi & Misi</span>
                </div>
            </div>
        </div>
    </section>

    @if ($visimisi)
        <!-- Visi Misi Content -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="grid lg:grid-cols-2 gap-12 items-center max-w-7xl mx-auto">
                    <!-- Left Content -->
                    <div class="space-y-8 fade-in-up">
                        <!-- Visi Card -->
                        <div
                            class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                            <div class="bg-gradient-to-r from-primary to-primary-light p-6">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-sm">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h2 class="text-2xl font-bold text-white">VISI</h2>
                                </div>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-700 leading-relaxed text-justify">{{ $visimisi->visi }}</p>
                            </div>
                        </div>

                        <!-- Misi Card -->
                        <div
                            class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                            <div class="bg-gradient-to-r from-gold to-yellow-600 p-6">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-sm">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                            </path>
                                        </svg>
                                    </div>
                                    <h2 class="text-2xl font-bold text-white">MISI</h2>
                                </div>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-700 leading-relaxed text-justify">{{ $visimisi->misi }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Image -->
                    <div class="fade-in-up lg:order-last order-first">
                        <div class="relative">
                            <!-- Decorative Elements -->
                            <div class="absolute -top-6 -left-6 w-24 h-24 bg-primary/10 rounded-2xl -z-10"></div>
                            <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-gold/10 rounded-2xl -z-10"></div>

                            <!-- Main Image -->
                            <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                                {{-- <img src="{{ asset('storage/images/visimisi/' . $visimisi->image }}" --}}
                                <img src="{{ asset('Assets/Frontend/img/gambar5.png') }}"
                                    alt="Visi Misi MTsN 7 Tanah Laut" class="w-full h-auto object-cover">
                                <!-- Overlay Gradient -->
                                <div class="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent"></div>
                            </div>

                            <!-- Badge -->
                            {{-- <div
                                class="absolute -bottom-4 left-1/2 transform -translate-x-1/2 bg-white px-6 py-3 rounded-full shadow-lg">
                                <p class="text-primary font-semibold text-sm">MTsN 7 Tanah Laut</p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Values Section (Optional - Nilai-nilai) -->
        {{-- <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-7xl mx-auto">
                    <div class="text-center mb-12 fade-in-up">
                        <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Nilai-Nilai Kami</h2>
                        <div class="w-20 h-1 bg-gold mx-auto"></div>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Value 1 -->
                        <div
                            class="bg-light-green rounded-xl p-6 text-center hover:shadow-lg transition-all duration-300 fade-in-up hover:-translate-y-1">
                            <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-primary mb-2">Berilmu</h3>
                            <p class="text-gray-600 text-sm">Mengedepankan ilmu pengetahuan dalam setiap aspek pembelajaran
                            </p>
                        </div>

                        <!-- Value 2 -->
                        <div
                            class="bg-light-green rounded-xl p-6 text-center hover:shadow-lg transition-all duration-300 fade-in-up hover:-translate-y-1">
                            <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-primary mb-2">Beriman</h3>
                            <p class="text-gray-600 text-sm">Menanamkan keimanan dan ketaqwaan kepada Allah SWT</p>
                        </div>

                        <!-- Value 3 -->
                        <div
                            class="bg-light-green rounded-xl p-6 text-center hover:shadow-lg transition-all duration-300 fade-in-up hover:-translate-y-1">
                            <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-primary mb-2">Berakhlak</h3>
                            <p class="text-gray-600 text-sm">Membentuk karakter mulia sesuai ajaran Islam</p>
                        </div>

                        <!-- Value 4 -->
                        <div
                            class="bg-light-green rounded-xl p-6 text-center hover:shadow-lg transition-all duration-300 fade-in-up hover:-translate-y-1">
                            <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-primary mb-2">Berprestasi</h3>
                            <p class="text-gray-600 text-sm">Mendorong siswa untuk meraih prestasi terbaik</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    @else
        <!-- Empty State -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="max-w-2xl mx-auto text-center fade-in-up">
                    <div class="bg-white rounded-2xl shadow-lg p-12">
                        <img src="{{ asset('Assets/Frontend/img/empty.svg') }}" alt="Data tidak tersedia"
                            class="w-64 h-64 mx-auto mb-6 object-contain">
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Data Belum Tersedia</h3>
                        <p class="text-gray-600 mb-6">Informasi visi dan misi sedang dalam proses pembaruan. Silakan
                            kembali lagi nanti.</p>
                        <a href="{{ url('/') }}"
                            class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-full hover:bg-primary-light transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Kembali ke Beranda
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- Guru Section --}}
@section('guru')
    @include('frontend.content.guru')
@endsection

@endsection
