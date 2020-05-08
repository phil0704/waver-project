@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $user->name }}</div>
               <form action="" method="post"></form>
               @if(Auth::user()->isFollowing($user))
               <input class="btn btn-danger float-right" value="UnFollow" type="submit" name="unfollow" value="{{ $user->id }}">
               @else
               <input class="btn btn-primary float-right" value="Follow" type="submit" name="follow" value="{{ $user->id }}">
<hr>
                <div class="card-body">
              <!-- Waves came from the DB name and the message came from waves message! -->
                @foreach($user->waves as $wave)
             <h5>{{ $waves->user->name }}</h5>
                {{ $wave->message }}
               
                <br>
                <!-- <small>{{ date('d/m/Y h:i:sa', strtotime($wave->created_at)) }}</small> -->
                <small>{{ \Carbon\Carbon::parse($wave->created_at)->diffForHumans() }}</small>
                <hr>
                @endforeach
              <!--  Posts -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
