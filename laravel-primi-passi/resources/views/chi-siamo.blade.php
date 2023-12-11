@extends('layouts.app')

@section('head')

<meta name="description" content="contattaci al: info@molisana.com">
@endsection

@section('content')
  <div class="container">
    <h1>{{ $title }}</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, est officiis nihil distinctio sit unde reiciendis laboriosam, recusandae nobis dolores fuga possimus dolorum accusantium excepturi velit. Necessitatibus, nemo quam. Fugiat!</p>
    <p>Mi chiamo {{ $user }}.</p>
  </div>
@endsection
  
@section('title','Chi siamo')

