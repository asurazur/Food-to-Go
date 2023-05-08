<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(
            [
                'user_id' => 1,
                'product_name' => "Spaghetti",
                'product_type' => "Meal",
                'product_description' => "it consists of long, thin noodles, tomato sauce, and various seasonings and spices.",
                'product_image' => public_path('images/spag.jpg'),
                'price' => 70.00,
                'product_rating' => 4.5,
            ]
            
            );
        Product::create(
            [
                'user_id' => 1,
                'product_name' => "Bananacue",
                'product_type' => "Meal",
                'product_description' => "made from skewered and deep-fried bananas coated in caramelized brown sugar.",
                'product_image' => public_path('images/bananacue.jpg'),
                'price' => 13.00,
                'product_rating' => 4.0,
            ]
            );
            Product::create(
                [
                    'user_id' => 1,
                    'product_name' => "Gulaman",
                    'product_type' => "Drink",
                    'product_description' => "Gulaman is a refreshing and sweet drink that is commonly sold by street vendors and is enjoyed by Filipinos of all ages.",
                    'product_image' => public_path('images/gulaman.jpg'),
                    'price' => 20.00,
                    'product_rating' => 2.5,
                ]
                );
    }
}
