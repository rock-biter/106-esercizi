@extends('layouts.app')

@section('content')
    
  <div class="conatiner">
    @forelse ($trains as $train)
        <div>
          <h2>{{ $train->train_code }}</h2>
          <p>{{ $train->departure_station }} - {{ $train->arrival_station}}</p>
          <p>{{ $train->departure_time }} - {{ $train->arrival_time}}</p>
        </div>
    @empty
        <div>
          Nessun treno disponibile
        </div>
    @endforelse
  </div>

@endsection