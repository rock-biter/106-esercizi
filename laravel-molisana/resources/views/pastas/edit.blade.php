@extends('layouts.app')

@section('content')

<section class="py-5">


  <div class="container">
    <form action="{{ route('pastas.update',$pasta) }}" method="POST" >

      @csrf
      @method('PUT')
      {{-- <input type="hidden" name="_method" value="PUT"> --}}

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Titolo" value="{{ old('title', $pasta->title) }}">
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Tipologia</label>
        <select class="form-label" name="type" id="type">
          <option>-- nessuno --</option>
          <option @selected(old('type',$pasta->type) === 'lunga') value="lunga">Lunga</option>
          <option @selected(old('type',$pasta->type) === 'corta')  value="corta">Corta</option>
          <option @selected(old('type',$pasta->type) === 'cortissima')  value="cortissima">Cortissima</option>
          <option @selected(old('type',$pasta->type) === 'brodo')  value="brodo">Brodo</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Image (url)</label>
        <input type="text" class="form-control" name="image" id="image" placeholder="Url image" value="{{ old('image',$pasta->image) }}">
      </div>
      <div class="mb-3">
        <label for="cooking_time" class="form-label">Tempo di cottura</label>
        <input type="text" class="form-control" name="cooking_time" id="cooking_time" placeholder="tempo in minuti" value="{{old('cooking_time',$pasta->cooking_time)}}">
      </div>

      <div class="mb-3">
        <label for="weight" class="form-label">Peso</label>
        <input type="text" class="form-control" name="weight" id="weight" placeholder="pego" value="{{old('weight',$pasta->weight)}}">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrivi la pasta">{{ old('description',$pasta->description) }}</textarea>
      </div>

      <div class="">
        <input type="submit" class="btn btn-primary" value="crea">
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