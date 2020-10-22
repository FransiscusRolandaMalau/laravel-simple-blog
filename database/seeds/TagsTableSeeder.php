<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = collect(['Laravel', 'Fondation', 'Golang', 'Bug', 'Help']);
        $tags->each(function($e) {
            \App\Tag::create([
                'name' => $e,
                'slug' => \Str::slug($e),
            ]);
        });
    }
}
