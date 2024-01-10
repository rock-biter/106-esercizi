<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['css', 'scss', 'js', 'vue', 'react', 'astro', 'laravel', 'node', 'angular', 'c++'];

        foreach ($tags as $tag_name) {

            $tag = new Tag();
            $tag->name = $tag_name;
            $tag->slug = Str::slug($tag_name);
            $tag->save();
        }
    }
}
