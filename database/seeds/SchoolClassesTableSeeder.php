<?php

use App\SchoolClass;
use Illuminate\Database\Seeder;

class SchoolClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = [
            [
                'id' => 1,
                'name' => 'Dev 201'
            ],
            [
                'id' => 2,
                'name' => 'Dev 202'
            ]
        ];

        SchoolClass::insert($classes);
    }
}
