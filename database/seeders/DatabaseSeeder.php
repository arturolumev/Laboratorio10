<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\Playlist::factory(10)->create();

        //nuevos seeder
        $this->call(PlaylistSeeder::class);
        $this->call(ArtistaSeeder::class);
        //$this->call(AlbumSeeder::class);
        //$this->call(CancionSeeder::class);
    }
}
