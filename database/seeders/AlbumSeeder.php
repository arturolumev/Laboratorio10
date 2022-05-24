<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//usar db
use Illuminate\Support\Facades\DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('album')->insert([
            'foto' => 'Prueba',
            'titulo' => 'Prueba',
            'year' => 'Prueba',
        ]);
    }
}
