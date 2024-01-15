<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->all();

        $query = Post::limit(20);

        if (isset($data['title'])) {
            $query = $query->where('title', 'like', "%{$data['title']}%")->limit(20);
        }

        // aggiungere altri filtri se li abbiamo

        $posts = $query->get();

        // dd($posts);

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        $tags = Tag::orderBy('name', 'ASC')->get();

        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());

        $request->validate([
            'title' => 'required|max:255|string|unique:posts',
            'content' => 'nullable|min:5|string',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'exists:tags,id',
            'cover_image' => 'nullable|file|max:2048'
        ]);



        $data = $request->all();
        $data['slug'] = Str::slug($data['title'], '-');

        $user_id = Auth::id();
        $data['user_id'] = $user_id;
        // salvare il file
        if ($request->hasFile('cover_image')) {

            $file_path = Storage::put('images', $request->cover_image);

            $data['cover_image'] = $file_path;
        }

        $post = Post::create($data);

        if ($request->has('tags')) {
            $post->tags()->attach($data['tags']);
        }

        return redirect()->route('admin.posts.show', $post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        $tags = Tag::orderBy('name', 'ASC')->get();

        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => ['required', 'max:255', 'string', Rule::unique('posts')->ignore($post->id)],
            'content' => 'nullable|min:5|string',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'exists:tags,id',
            'cover_image' => 'nullable|file|max:2048'
        ]);

        $data = $request->all();
        // dd($data);

        // if($post->title !== $data['title']) {
        $data['slug'] = Str::slug($data['title'], '-');


        // }

        // salvare il file
        if ($request->hasFile('cover_image')) {

            $file_path = Storage::put('images', $request->cover_image);

            $data['cover_image'] = $file_path;

            // elimino il file precedente se sto salvando una nuova copertina
            if ($post->cover_image) {
                Storage::delete($post->cover_image);
            }
        }

        $post->update($data);

        if ($request->has('tags')) {
            $post->tags()->sync($data['tags']);
        } else {
            // $post->tags()->sync([]);
            $post->tags()->detach();
        }

        return redirect()->route('admin.posts.show', $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->tags()->sync([]);
        $post->delete();

        return redirect()->route('admin.posts.index');
    }
}
