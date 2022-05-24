<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//usar db
use Illuminate\Support\Facades\DB;

class CancionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cancion')->insert([
            'titulo' => 'Prueba',
            'duracion' => 'Prueba',
            'reproducciones' => 1,
        ]);
    }
}
