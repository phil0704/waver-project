@extends('layout')


@section('title')
Waver
@endsection

@section('content')

@if ( session()->get('success') )
<div role="alert">
    {{ session()->get('success') }}
</div>
@endif

<div id="app">

</div>

@foreach($waves as $wave)
<div class="card" class="gridCard m-b-md" style="width: 36rem;">

    <ul>
        <div class="card-body"> 
            <li> 
                @auth
                <a href="{{ route('users.view', $wave->user_id) }}" class="text-dark" class="nav-link" >
                    <strong>{{ $wave->username }}</strong>
                </a>
                @endauth

             
                <div class="float-right">
                    @if($follower->following ?? '') 
                    <button><small>Followed</small></button>
                    @else 
                    <button><small>Unfollowed</small></button>

                    @endif
                </div>

                <p>
                    {{ $wave->content }}    
                </p>

                @auth 
                <a href="{{ route('waves.show', $wave->id ) }}" >
                    <button>Comment</button>
                </a>
                
               
                
                <div class="float-right">
                    <button  onclick="actOnPost(event);" data-wave-id="{{ $wave->id }}">Like</button>
                    <span id="likes-count-{{ $wave->id }}">{{ $wave->likes_count }}</span>
                </div>
            
                @endauth
               
            </li> 
        </div>       
    </ul>
</div>
@endforeach
@endsection
