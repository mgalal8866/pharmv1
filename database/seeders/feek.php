<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
class feek extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,50) as $index){
            $pro = Product::create([
                'name'=> $faker->name,
                'slug' => Str::slug($faker->sentence(2)),
                'origin' => $faker->sentence(2),
                'company' => $faker->sentence(2),
                'effective' => $faker->sentence(2),
                'description' => $faker->sentence(9),
            ]);
            foreach(range(1,1) as $index){
            $pro->warehouse_product()->create([
                'warehouse_id' => 1,
                'category_id' => 1,
                'code' => $faker->sentence(2),
                'qty' => $faker->biasedNumberBetween(1,454),
                'price_sale' => $faker->biasedNumberBetween(1,454),
                'price_buy' => $faker->biasedNumberBetween(1,454),
                'unit_id' => 1,
                'image' => $faker->image('public/assets/images/product',400,300,null, false),
                'special_price' => $faker->biasedNumberBetween(1,454),
                'special_type' => $faker->randomElement($array = array ('fixed','percentage')) ,
                'special_startdate' => $faker->date,
                'special_enddate' =>$faker->date
            ]);
                }
        }
    }
}
