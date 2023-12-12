@extends('layouts.app')

@section('content')
    
  <section class="py-5">
    <div class="container">
      <h1>I nostri libri</h1>
    </div>

    <div class="container mt-3">
      <div class="row">
        @forelse ($books as $book)

          <div class="col-3">
            <img class="w-100" src="{{ $book->overview }}" alt="">
            <h2>{{ $book->title }}</h2>
            <p>{{ $book->author }}</p>
          </div>
            
        @empty
            nessun libro
        @endforelse
      </div>
    </div>
  </section>



@endsection