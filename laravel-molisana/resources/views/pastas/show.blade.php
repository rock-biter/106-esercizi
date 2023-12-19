@extends('layouts.app')

@section('content')
    
  <section class="py-5">
    <div class="container">
      <h1>{{ $pasta->title }} </h1>
      <p><a href="{{ route('pastas.edit',$pasta)}}">Edit</a></p>
      <ul>
        <li><span>Cottura:</span> {{ $pasta->cooking_time }}</li>
        <li><span>Peso:</span> {{ $pasta->weight }}</li>
        <li><span>Tipologia:</span> {{ $pasta->type }}</li>
      </ul>
      <p>
        {!! $pasta->description !!}
      </p>
    </div>
  </section>

@endsection