@extends('layouts.app')

@section('content')
    <section class="py-3">
      <div class="container">
        <h1>Nuovo Post</h1>
      </div>
    </section>
    <section>
      <div class="container">
        <form action="{{ route('admin.posts.store') }}" method="POST">
      
        @csrf

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" required class="form-control" name="title" id="title" placeholder="Titolo del post" value="{{ old('title') }}">
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