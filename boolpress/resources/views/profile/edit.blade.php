@extends('layouts.app')
@section('content')

<div class="container">
    <h2>I miei articoli</h2>

    <div class="row">
        @foreach ($user->posts as $post)
            <div class="col-4">
                <a href="{{ route('admin.posts.show',$post) }}">
                <h3>{{ $post->title }}</h3>
                <p>{{ optional($post->category)->name }}</p>
                </a>
            </div>
        @endforeach
    </div>
</div>

<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Profile') }}
    </h2>
    <div class="card p-4 mb-4 bg-white shadow rounded-lg">

        @include('profile.partials.update-profile-information-form')

    </div>

    <div class="card p-4 mb-4 bg-white shadow rounded-lg">


        @include('profile.partials.update-password-form')

    </div>

    <div class="card p-4 mb-4 bg-white shadow rounded-lg">


        @include('profile.partials.delete-user-form')

    </div>
</div>

@endsection
