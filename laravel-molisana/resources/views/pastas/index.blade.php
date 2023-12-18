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
                  <span>edit</span>
                  <span>delete</span>
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