@extends('layouts.app')

@section('content')
    
  <section class="py-5">
    <div class="container">
      <h1>{{ $pasta->title }} </h1>
      <p><a href="{{ route('pastas.edit',$pasta)}}">Edit</a></p>
      <p>
        <form id="form-{{ $pasta->id }}" action="{{ route('pastas.destroy',$pasta) }}" method="POST">
          @csrf
          @method('DELETE')
          <input data-confirm data-target="form-{{ $pasta->id }}" class="btn btn-danger btn-sm" type="submit" value="Delete">
        </form>
      </p>
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