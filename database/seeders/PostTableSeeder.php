<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sampel = [
            ['title' => 'Tips cepat nikah', 'content' => 'assalaam studio'],
            ['title' => 'Harus menunda nikah?', 'content' => 'assalaam studio'],
            ['title' => 'Membangun visi misi keluarga', 'content' => 'assalaam studio'],
        ];

        // masukkan data ke database
        DB::table('posts')->insert($sampel);
    }
}
