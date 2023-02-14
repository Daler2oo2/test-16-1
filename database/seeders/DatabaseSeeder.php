<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
        $countries = \App\Models\Country::factory(3)->create();

        $countries->each(function ($country){

            $cities = \App\Models\City::factory(2)->create([
                'country_id' => $country->id
            ]);

            $cities->each(function ($city){
                $users = \App\Models\User::factory(2)->create([
                    'city_id' => $city->id
                ]);
    
                $users->each(function ($user) {
                    \App\Models\Profile::factory(1)->create([
                        'user_id' => $user->id
                    ]);
                });
    
            });    
    

        });

        $products = \App\Models\Product::factory(20)->create();
        
         \App\Models\Category::factory(10)->create();

        $products->each(function ($product){
            $categories = \App\Models\Category::all();
            $myarray = range(1,10);
            $coutCateg = rand(2,5);
            $array = array_rand($myarray,$coutCateg); 
            foreach ($array as $id) {
                \App\Models\ProductCategory::factory(1)->create([
                    'category_id' => $categories[$id]->id,
                    'product_id' => $product->id
                ]);
            };
        });
        
    }
}
