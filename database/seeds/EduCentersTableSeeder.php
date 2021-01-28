<?php

use Illuminate\Database\Seeder;

class EduCentersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\EduCenter::class, 5)->create();
    }
}
