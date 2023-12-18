@extends('layouts.app')

@section('content')
    
  <section class="py-5">
    <div class="container">
      <h1>{{ $pasta->title }}</h1>
      <p>
        {{ $pasta->description }}
      </p>
    </div>
  </section>

@endsection