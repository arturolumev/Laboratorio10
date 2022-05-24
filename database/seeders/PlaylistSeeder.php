<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//usar db
use Illuminate\Support\Facades\DB;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('playlist')->insert([
            'nombre' => 'Prueba',
            'duracion' => 1,
        ]);
    }
}
