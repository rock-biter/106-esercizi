@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="min-vh-100 py-5 d-flex flex-column justify-content-center">
                
                <h1 class="display-5 fw-bold">
                    Welcome to Laravel+Bootstrap 5
                </h1>

                <p class="col-md-8 fs-4">This a preset package with Bootstrap 5 views for laravel projects including laravel breeze/blade. It works from laravel 9.x to the latest release 10.x</p>
                {{-- <a href="https://packagist.org/packages/pacificdev/laravel_9_preset" class="btn btn-primary btn-lg" type="button">Documentation</a> --}}
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($books as $book)
            <div class="col-3">
                <h2 class="mb-3">{{ $book->title }}</h2>
                <p>
                    <img width="150" src="{{$book->overview}}" alt="">
                </p>
            </div>
        @endforeach
    </div>

</div>
    
@endsection


        
