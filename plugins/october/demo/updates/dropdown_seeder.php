<?php namespace October\Demo\Updates;

use Seeder;
use October\Demo\Models\Dropdown;

class DropdownsSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        
        for ($x = 0; $x < 100; $x++) {
            Dropdown::create([
                'title' => $faker->name()
            ]);
        }
    }
}