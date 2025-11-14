<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VisimisiSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visimisis')->insert([
            [
                'visi' => 'Menjadi perusahaan terdepan yang memberikan solusi inovatif dan berkualitas tinggi untuk meningkatkan kualitas hidup masyarakat.',
                'misi' => 'Mengembangkan produk dan layanan yang berfokus pada kepuasan pelanggan. Membangun tim profesional yang kompeten dan berintegritas. Berkontribusi positif terhadap pembangunan ekonomi dan sosial masyarakat.',
                'image' => 'visimisi-default.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}