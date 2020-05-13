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
                    <figure>
                        <img src="/waver-project/public/images/dennis-pic.jpg" class="profilePic" class="rounded" class="img-responsive" src="{{ $user->picture }}" alt="Profile picture" style="width:40%" />
                    </figure>

                    <strong>Profile Name:</strong> 
                    {{ $user->name }}

                    <br>
                    <strong>Location:</strong>
                    <p>{{ $user->location }}</p>

                    <p class="mb-2">
                    <small>Following:<span class="badge badge-primary">{{ $user->isFollowing($user) }}</span></small>
                    <small>Followers:<span class="badge badge-primary tl-follower">{{ $user->followedBy($user) }}</span></small>
                    </p>
                    <button class="btn btn-info btn-sm action-follow" data-id="{{ $user->id }}"><strong>
                    @if(auth()->user()->isFollowing($user))
                    UnFollow
                    @else
                    Follow
                    @endif
</button>
                    
                    @if(auth()->user()->id === $user->id)
                    <a href="{{ route( 'users.edit', $user->id) }}">Edit Profile</a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection