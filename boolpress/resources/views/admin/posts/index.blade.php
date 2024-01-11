@extends('layouts.app')

@section('content')
    <section>
      <div class="container">
        <h1>Posts index</h1>
      </div>
    </section>
    <section>
      <div class="container">
        <table class="table table-stripped">
          <thead>
            <tr>
              <td></td>
              <td>
                <form action="{{ route('admin.posts.index') }}" method="GET">
                  <input placeholder="filtra per titolo" class="form-control" type="text" name="title" value="{{ request()->get('title') }}">
                </form>
              </td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Slug</th>
              <th>Category</th>
              <th>User</th>
              <th></th>
              <th>
                <a class="btn btn-primary btn-sm" href="{{ route('admin.posts.create') }}">Nuovo</a>
              </th>
            </tr>
          </thead>
          <tbody>
            @forelse ($posts as $post)
                <tr>
                  <td>{{ $post->id}}</td>
                  <td>
                    <a href="{{ route('admin.posts.show',$post) }}">
                    {{ $post->title  }}
                  </a>
                  </td>
                  <td>{{ $post->slug }}</td>
                  <td>
                    {{ isset($post->category) ?  $post->category->name : '-' }}
                    {{-- {{ optional($post->category)->name  }} --}}
                  </td>
                  <td>
                    {{ $post->user->name }}
                  </td>
                  <td>
                    @if(Auth::id() === $post->user_id)
                      <a href="{{ route('admin.posts.edit',$post) }}">edit</a>
                    @endif
                  </td>
                  <td>
                    <form action="{{ route('admin.posts.destroy',$post)}}" method="POST">
                      @csrf
                      @method('DELETE')

                      <input class="btn btn-danger btn-sm" type="submit" value="delete">
                    </form>
                  </td>

                </tr>
            @empty
                <tr>
                  <td>Nessun post</td>
                </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </section>
@endsection