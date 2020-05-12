@extends('layouts.app')

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
                        <img src="/waver-project/public/images/dennis-pic.jpg" class="profilePic" class="rounded" class="img-responsive" src="{{ $user->picture }}" alt="Profile picture" style="width:40%" />
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