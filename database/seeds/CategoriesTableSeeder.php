<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Category::class, 5)
        // ->create();
        
        for ($i=1; $i<=5; $i++){
            DB::table('categories')->insert([
                'name' => 'category' . $i,
            ]);
        }
    }
}
