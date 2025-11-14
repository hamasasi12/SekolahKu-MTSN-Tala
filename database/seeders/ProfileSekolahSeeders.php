<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSekolahSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profile_sekolahs')->insert([
            'title' => 'dicoding',
            'content' => 'MTsN 7 Tanah Laut adalah madrasah yang berkomitmen mencetak generasi berakhlak mulia, unggul dalam prestasi, dan berwawasan lingkungan.',
            'image' => 'hamas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
