<?php

use Illuminate\Database\Seeder;
use App\Singerphp artisan migrate:refresh --seed;

class SingerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Singer::class, 100) -> create();
    }
}
