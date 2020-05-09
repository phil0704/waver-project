@extends('layout')


@section('title')
Profile
@endsection

@section('content')

@if ( session()->get('success') )
<div role="alert">
    {{ session()->get('success') }}
</div>
@endif

@include('partials.errors')

@foreach($profiles as $profile)
<div class="card" style="width: 36rem;">

    <ul>    
        <div class="card-body"> 
            <li>
                <h5>
                    <strong>{{ $profile->username }}</strong>
                </h5>
                <figure>
                    <img class="profilePic" class="img-responsive" src="{{ $profile->profile_pic }}" alt="Profile picture" style="width:10%" />
                </figure>
                <h5>
                   <strong>Location</strong>  {{ $profile->location}}
                </h5>
                <a href="{{route('profile.edit', $user->id)}}" class="btn btn-warning">
                     Edit Profile
                 </a>
            </li>
        </div>       
    </ul>
</div>
@endforeach
@endsection

@auth 

@endauth