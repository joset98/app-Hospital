<?php

use Illuminate\Database\Seeder;


class PersonalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Personal::class, 50)->create();

    }
}
