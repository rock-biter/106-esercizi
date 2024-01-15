<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {

        $results = Post::with('category', 'tags', 'category.posts')->paginate(20);
        // $results = Post::all();

        return response()->json([
            'results' => $results,
            'success' => true
        ]);
    }
}
