<?php

namespace Database\Seeders;

use App\Models\SkateBoard;
use Illuminate\Database\Seeder;

class SkateboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SkateBoard::factory()->times(20)->create();
    }
}
