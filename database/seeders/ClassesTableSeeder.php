<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Define how many classes you want to create
         $numberOfClasses = 5;

         // Create classes using the factory
         Classes::factory($numberOfClasses)->create();
    }
}
