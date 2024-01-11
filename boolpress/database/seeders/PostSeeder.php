<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
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
        $categoryIds = $categories->pluck('id');

        $tags = Tag::all();
        $tagIds = $tags->pluck('id');

        $users = User::all();

        for ($i = 0; $i < 100; $i++) {
            $new_post = new Post();

            $new_post->title = $faker->sentence(5);
            $new_post->content = $faker->text(500);
            $new_post->slug = Str::slug($new_post->title, '-');
            $new_post->category_id = $faker->optional()->randomElement($categoryIds);
            $new_post->user_id = $users->random()->id;

            $new_post->save();
            $new_post->tags()->attach($faker->randomElements($tagIds, null));
        }
    }
}
