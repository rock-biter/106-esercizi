<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $categories = Category::all();
        $ids = $categories->pluck('id');

        for ($i = 0; $i < 100; $i++) {
            $new_post = new Post();

            $new_post->title = $faker->sentence(5);
            $new_post->content = $faker->text(500);
            $new_post->slug = Str::slug($new_post->title, '-');
            $new_post->category_id = $faker->optional()->randomElement($ids);
            $new_post->save();
        }
    }
}
