@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container">
    <form action="{{ route('pastas.store') }}" method="POST" >

      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Titolo">
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Tipologia</label>
        <input type="text" class="form-control" name="type" id="type" placeholder="Tipo di pasta">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Image (url)</label>
        <input type="text" class="form-control" name="image" id="image" placeholder="Url image">
      </div>
      <div class="mb-3">
        <label for="cooking_time" class="form-label">Tempo di cottura</label>
        <input type="text" class="form-control" name="cooking_time" id="cooking_time" placeholder="tempo in minuti">
      </div>

      <div class="mb-3">
        <label for="weight" class="form-label">Peso</label>
        <input type="text" class="form-control" name="weight" id="weight" placeholder="pego">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrivi la pasta"></textarea>
      </div>

      <div class="">
        <input type="submit" class="btn btn-primary" value="crea">
      </div>

    </form>
  </div>
</section>

@endsection