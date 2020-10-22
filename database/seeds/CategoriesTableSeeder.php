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
        $categories = collect(['Framework', 'Code']);
        $categories->each(function($e) {
            \App\Category::create([
                'name' => $e,
                'slug' => \Str::slug($e),
            ]);
        });
    }
}
