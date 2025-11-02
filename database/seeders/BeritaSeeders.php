<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BeritaSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $beritas = [
            [
                'title' => 'MTsN 7 Tanah Laut Raih Juara Umum Lomba MTQ Tingkat Kabupaten',
                'slug' => Str::slug('MTsN 7 Tanah Laut Raih Juara Umum Lomba MTQ Tingkat Kabupaten'),
                'content' => 'MTsN 7 Tanah Laut berhasil meraih prestasi gemilang dengan menjadi juara umum dalam Lomba Musabaqah Tilawatil Quran (MTQ) tingkat kabupaten yang diselenggarakan pada bulan lalu. Prestasi ini merupakan buah dari kerja keras para siswa dan pembina yang telah mempersiapkan diri dengan matang. Dalam lomba tersebut, MTsN 7 Tanah Laut berhasil meraih berbagai kategori juara...',
                'kategori_id' => 1,
                'thumbnail' => 'berita/mtq-juara.jpg',
                'is_active' => 1,
                'created_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pelaksanaan Pesantren Ramadhan 1446 H di MTsN 7 Tanah Laut',
                'slug' => Str::slug('Pelaksanaan Pesantren Ramadhan 1446 H di MTsN 7 Tanah Laut'),
                'content' => 'MTsN 7 Tanah Laut mengadakan kegiatan Pesantren Ramadhan 1446 H yang diikuti oleh seluruh siswa. Kegiatan ini bertujuan untuk meningkatkan pemahaman agama dan memperkuat nilai-nilai keislaman di kalangan siswa. Berbagai kegiatan dilaksanakan seperti tadarus Al-Quran, kultum, kajian kitab, dan berbagai lomba keagamaan yang menarik...',
                'kategori_id' => 2,
                'thumbnail' => 'berita/pesantren-ramadhan.jpg',
                'is_active' => 1,
                'created_by' => 1,
                'created_at' => now()->subDays(5),
                'updated_at' => now()->subDays(5),
            ],
            [
                'title' => 'Siswa MTsN 7 Tanah Laut Wakili Kabupaten dalam Olimpiade Sains Nasional',
                'slug' => Str::slug('Siswa MTsN 7 Tanah Laut Wakili Kabupaten dalam Olimpiade Sains Nasional'),
                'content' => 'Tiga siswa MTsN 7 Tanah Laut berhasil lolos seleksi untuk mewakili Kabupaten Tanah Laut dalam Olimpiade Sains Nasional (OSN) tingkat provinsi. Mereka adalah Ahmad Fauzi (Matematika), Siti Nurhaliza (IPA), dan Muhammad Rizki (IPS). Para siswa telah menjalani persiapan intensif bersama guru pembina...',
                'kategori_id' => 1,
                'thumbnail' => 'berita/osn-siswa.jpg',
                'is_active' => 1,
                'created_by' => 1,
                'created_at' => now()->subDays(10),
                'updated_at' => now()->subDays(10),
            ],
            [
                'title' => 'Program Tahfidz MTsN 7 Tanah Laut Cetak 15 Siswa Hafal 5 Juz',
                'slug' => Str::slug('Program Tahfidz MTsN 7 Tanah Laut Cetak 15 Siswa Hafal 5 Juz'),
                'content' => 'Program Tahfidz Al-Quran di MTsN 7 Tanah Laut menunjukkan hasil yang membanggakan. Sebanyak 15 siswa berhasil menghafal 5 juz Al-Quran dalam tahun ajaran ini. Kepala Madrasah menyampaikan apresiasi yang tinggi kepada para siswa dan guru pembina tahfidz atas dedikasi dan kerja keras mereka...',
                'kategori_id' => 2,
                'thumbnail' => 'berita/tahfidz-program.jpg',
                'is_active' => 1,
                'created_by' => 1,
                'created_at' => now()->subDays(15),
                'updated_at' => now()->subDays(15),
            ],
        ];

        DB::table('beritas')->insert($beritas);
    }
}