@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Recent Updates</div>

                <div class="card-body">
                <form action="{{ route('waves.create') }}" method="get">
                <textarea name="message" cols="3" class="form-control" placeholder="What's on your mind?"></textarea>
                <button type="submit" class="btn btn-primary">Wave!</button>
                </form>
                </div>
<hr>
                <div class="card-body">
              <!-- Waves came from the DB name and the message came from waves message! -->
                @foreach($waves as $wave)
                <h5>{{ $wave->user->name }}</h5>
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
        <div class="col-md-4">
           <div class="card">
              <div class="card-header">
                  Notifications
              </div>
              <div class="card-body">
              @foreach(Auth::user()->notifications as $notification)
               <h5>{{ $notification->data['user_name'] }} started following you.</h5>
               <small>{{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }</small>
              @endforeach
              </div>
          </div>
        </div>
    </div>
</div>
@endsection
