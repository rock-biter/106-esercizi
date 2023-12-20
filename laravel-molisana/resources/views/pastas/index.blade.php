@extends('layouts.app')

@section('content')
    
  <section>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Thumb</th>
            <th>Titolo</th>
            <th>Tipo</th>
            <th>Cottura</th>
            <th>Peso</th>
            <th></th>
            <th>
              <a href="{{ route('pastas.create') }}" class="btn btn-sm btn-primary">Nuova pasta </a>
            </th>
          </tr>
        </thead>
        <tbody>
          @forelse ($pastas as $pasta)
              <tr>
                <td>{{ $pasta->id }}</td>
                <td>
                  <img src="{{ $pasta->image }}" width="40" alt="">
                </td>
                <td>
                  <a href="{{ route('pastas.show',$pasta) }}">
                    {{ $pasta->title }}
                  </a>
                </td>
                <td>{{ $pasta->type }}</td>
                <td>{{ $pasta->cooking_time }}</td>
                <td>{{ $pasta->weight }}</td>
                <td>
                  <a href="{{ route('pastas.edit',$pasta) }}" class="btn btn-secondary btn-sm">edit</a>
                </td>
                <td>
                  <form id="form-{{ $pasta->id }}" action="{{ route('pastas.destroy',$pasta) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input data-confirm data-target="form-{{ $pasta->id }}" class="btn btn-danger btn-sm" type="submit" value="Delete">
                  </form>
                </td>
              </tr>
          @empty
              <tr>
                <td colspan="6">
                  Nessuna pasta trovata
                </td>
              </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </section>

@endsection