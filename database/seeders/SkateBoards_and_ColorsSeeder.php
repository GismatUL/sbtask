<?php

namespace Database\Seeders;

use App\Models\SB_and_Color;
use Database\Factories\Sbs_and_ColorFactory;
use Illuminate\Database\Seeder;

class SkateBoards_and_ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SB_and_Color::factory()->times(40)->create();
    }
}
