@extends('layouts.app')

@section('content')
    <section>
      <div class="container">
        @if($post->cover_image)
          <img class="w-100" src="{{ asset('storage/' . $post->cover_image) }}">
        @endif
        <h1>{{ $post->title }}</h1>
        {{-- @dump($post->category()) --}}
        <p>{{ $post->slug }}</p>
        @if($post->category)
        <p>
          <strong>
          {{ $post->category->name }}
          </strong>
        </p>
        @endif

        <ul class="d-flex gap-2 ps-0">
          @foreach ($post->tags as $tag)
            <li class="badge rounded-pill text-bg-primary">{{ $tag->name }}</li>
          @endforeach 
        </ul>
        
          
        
        <p>{{ $post->created_at->format('d/m/Y') }}</p>
      </div>
      <div class="container mb-3">
        <div class="row">
          <div class="col-auto">
            <a href="{{ route('admin.posts.edit',$post)}}">modifica</a>
          </div>
          <div class="col-auto">
            <form action="{{ route('admin.posts.destroy',$post)}}" method="POST">
              @csrf
              @method('DELETE')

              <input class="btn btn-danger btn-sm" type="submit" value="delete">
            </form>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        {!! $post->content !!}
      </div>
    </section>
@endsection