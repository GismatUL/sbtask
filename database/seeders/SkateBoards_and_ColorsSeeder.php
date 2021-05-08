<?php

namespace Database\Seeders;

use App\Models\SB_and_Color;
use App\Models\SkateBoard;
use Database\Factories\Sbs_and_ColorFactory;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SkateBoards_and_ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private function generate_sb_and_color_id()
    {
        $sb_id = $this->generate_faker_number(count(SkateBoard::all()));
        $color_id = $this->generate_faker_number(3);
        $get_exist_sb_and_color_id = Sb_and_Color::where(['sb_id' => $sb_id, 'color_id' => $color_id])->count();
        $get_exist_sb_and_color_id ? $this->generate_sb_and_color_id() : SB_and_Color::create(['color_id' => $color_id, 'sb_id' => $sb_id]);
    }

    public function run()
    {
        $this->faker = Faker::create();
        foreach (range(1, 40) as $value) {
            $this->generate_sb_and_color_id();
        }
    }

    private function generate_faker_number($number)
    {
        return $this->faker->numberBetween(1, $number);
    }

}
