<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {

        $results = Post::with('category', 'tags')->paginate(20);
        // $results = Post::all();

        return response()->json([
            'results' => $results,
            'success' => true
        ]);
    }

    public function show(Post $post)
    {
        // $post = Post::with('category','tags')->where('slug',$slug)->first();
        $post->load('category', 'tags');

        return response()->json([
            'post' => $post
        ]);
    }
}
