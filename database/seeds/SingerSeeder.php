<?php

use Illuminate\Database\Seeder;


use App\Singer;

class SingerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(Singer::class, 50) -> create();
    }
}
