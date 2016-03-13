<?php

use App\FoodType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('set foreign_key_checks=0');
        FoodType::truncate();
        DB::statement('set foreign_key_checks=1');

        FoodType::create([
            'id' => 1,
            'food_type_name' => 'staple'
        ]);

        FoodType::create([
            'id' => 2,
            'food_type_name' => 'snack'
        ]);

        FoodType::create([
            'id' => 3,
            'food_type_name' => 'drink'
        ]);

        FoodType::create([
            'id' => 4,
            'food_type_name' => 'share'
        ]);
    }

}
