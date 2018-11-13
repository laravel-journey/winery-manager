<?php

use Illuminate\Database\Seeder;

class WinesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $wine = new \App\Wine();

        $wine->name = 'Chianti Classico';
        $wine->year = 2015;
        $wine->quantity = 100;
        $wine->price = 20.50;

        $wine->save();
    }
}
