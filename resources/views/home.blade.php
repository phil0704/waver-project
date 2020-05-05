@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Recent Updates</div>

                <div class="card-body">
                <form action="" method="post">
                <textarea name="body" cols="3" class="form-control" placeholder="What's on your mind?"></textarea>
                <button type="submit" class="btn btn-primary">Post!</button>
                </form>
                </div>
<hr>
                <div class="card-body">
              <!-- Waves came from the DB name and the message came from waves message! -->
                @foreach($waves as $wave)
                {{ $wave->message }}
               
                <br>
                <small>{{ date('d/m/Y', strtotime($wave->created_at)) }}</small>
                <hr>
                @endforeach
              <!--  Posts -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
