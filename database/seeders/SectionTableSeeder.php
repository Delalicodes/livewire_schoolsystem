<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Define how many sections you want to create
         $numberOfSections = 5;

         // Create sections using the factory
         Section::factory($numberOfSections)->create();
    }
}
