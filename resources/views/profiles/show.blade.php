@extends('layout')

@section('title')
Profile
@endsection

@section('content')
@include('partials.errors')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <br>
                    <br>
                    <br>
                    
                    <figure>
                        <img class="profilePic" class="rounded" class="img-responsive" src="{{ $profile->picture }}" alt="Profile picture" style="width:40%" />
                    </figure>

                    <strong>Profile Name</strong> 
                    {{ $user->name }}

                    <br>
                    <strong>Location</strong>
                    <p>{{ $user->location }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection