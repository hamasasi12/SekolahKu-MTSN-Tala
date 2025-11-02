<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class EventSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            [
                'title' => 'Penerimaan Peserta Didik Baru (PPDB) 2025/2026',
                'slug' => Str::slug('Penerimaan Peserta Didik Baru (PPDB) 2025/2026'),
                'desc' => 'Pendaftaran siswa baru untuk tahun ajaran 2025/2026 dibuka secara online dan offline',
                'content' => 'MTsN 7 Tanah Laut membuka pendaftaran PPDB untuk tahun ajaran 2025/2026. Proses pendaftaran dapat dilakukan secara online melalui website resmi atau datang langsung ke madrasah. Persyaratan meliputi fotocopy ijazah SD/MI, kartu keluarga, akta kelahiran, dan pas foto.',
                'thumbnail' => 'events/ppdb-2025.jpg',
                'acara' => Carbon::create(2025, 5, 1, 8, 0, 0),
                'lokasi' => 'MTsN 7 Tanah Laut',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Peringatan Maulid Nabi Muhammad SAW 1446 H',
                'slug' => Str::slug('Peringatan Maulid Nabi Muhammad SAW 1446 H'),
                'desc' => 'Peringatan hari kelahiran Nabi Muhammad SAW dengan berbagai kegiatan keagamaan',
                'content' => 'Dalam rangka memperingati Maulid Nabi Muhammad SAW 1446 H, MTsN 7 Tanah Laut mengadakan serangkaian kegiatan meliputi pembacaan shalawat, tausiyah, lomba kaligrafi, lomba membaca shalawat, dan santunan anak yatim.',
                'thumbnail' => 'events/maulid-nabi.jpg',
                'acara' => Carbon::create(2025, 9, 15, 7, 30, 0),
                'lokasi' => 'Aula MTsN 7 Tanah Laut',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Ujian Tengah Semester Genap 2024/2025',
                'slug' => Str::slug('Ujian Tengah Semester Genap 2024/2025'),
                'desc' => 'Pelaksanaan Ujian Tengah Semester untuk seluruh siswa kelas VII, VIII, dan IX',
                'content' => 'Ujian Tengah Semester Genap tahun ajaran 2024/2025 akan dilaksanakan selama 5 hari. Siswa diharapkan mempersiapkan diri dengan baik dan membawa perlengkapan ujian seperti alat tulis dan kartu peserta ujian.',
                'thumbnail' => 'events/uts-genap.jpg',
                'acara' => Carbon::create(2025, 3, 10, 7, 0, 0),
                'lokasi' => 'Ruang Kelas MTsN 7 Tanah Laut',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('events')->insert($events);
    }
}