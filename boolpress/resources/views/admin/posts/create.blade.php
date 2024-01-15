@extends('layouts.app')

@section('content')
    <section class="py-3">
      <div class="container">
        <h1>Nuovo Post</h1>
      </div>
    </section>
    <section>
      <div class="container">
        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
      
        @csrf

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Titolo del post" value="{{ old('title') }}">
        </div>

        {{-- @dump($categories) --}}
        <div class="mb-3">
          <label for="cover_image" class="form-label">Default file input example</label>
          <input class="form-control" name="cover_image" type="file" id="cover_image">
        </div>

        <div class="mb-3">
          <label for="category_id" class="form-label">Categories</label>
          <select name="category_id" class="form-control" id="category_id">
            <option value="">Seleziona una categoria</option>
            @foreach($categories as $category)
              <option @selected( old('category_id') == $category->id ) value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group mb-3">
          <p>Seleziona i tag:</p>
          <div class="d-flex flex-wrap gap-4 ">
            @foreach ($tags as $tag)
              <div class="form-check">
                <input name="tags[]" class="form-check-input" type="checkbox" value="{{$tag->id}}" id="tag-{{$tag->id}}" @checked( in_array($tag->id, old('tags',[]) ) ) >
                <label class="form-check-label" for="tag-{{$tag->id}}">
                  {{ $tag->name }}
                </label>
              </div>
            @endforeach
          </div>
        </div>

        <div class="mb-3">
          <label for="content"  class="form-label">Post content</label>
          <textarea class="form-control" id="content" name="content" rows="3">{{ old('content') }}</textarea>
        </div>

        <div class="mb-3">
          <input type="submit" class="btn btn-primary " value="Crea">
        </div>
      </form>

      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      </div>
    </section>
@endsection