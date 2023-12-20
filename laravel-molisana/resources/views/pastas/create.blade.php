@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container">
    <form action="{{ route('pastas.store') }}" method="POST" >

      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Titolo" value="{{ old('title') }}">
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Tipologia</label>
        <select class="form-label" name="type" id="type">
          <option>-- nessuno --</option>
          <option @selected(old('type') === 'lunga') value="lunga">Lunga</option>
          <option @selected(old('type') === 'corta')  value="corta">Corta</option>
          <option @selected(old('type') === 'cortissima')  value="cortissima">Cortissima</option>
          <option @selected(old('type') === 'brodo')  value="brodo">Brodo</option>
        </select>
        {{-- <input type="text" class="form-control" name="type" id="type" placeholder="Tipo di pasta" value="{{ old('type')}}"> --}}
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Image (url)</label>
        <input type="text" class="form-control" name="image" id="image" placeholder="Url image" value="{{ old('image')}}">
      </div>
      <div class="mb-3">
        <label for="cooking_time" class="form-label">Tempo di cottura</label>
        <input type="text" class="form-control" name="cooking_time" id="cooking_time" placeholder="tempo in minuti" value="{{ old('cooking_time')}}">
      </div>

      <div class="mb-3">
        <label for="weight" class="form-label">Peso</label>
        <input type="text" class="form-control" name="weight" id="weight" placeholder="pego" value="{{ old('weight')}}">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrivi la pasta">{{ old('description') }}</textarea>
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