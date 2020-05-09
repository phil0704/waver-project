@extends('layout')

@section('title')
View Wave
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    @include('partials.errors')

                    <strong>Username</strong>
                    <br>
                    {{ $user->name ?? '' }}
                    <br>
                    <strong>Wave</strong>
                    <br>
                    <p>{{ $post->content }}</p>
                    <h4>Comment Section</h4>

                    @include('waves.commentsDisplay', ['comments' => $wave->comments, 'wave_id' => $wave->id])

                    <section>
                        @if( $comment->is_gif == TRUE )
                        <figure>
                            <img src="{{ $comment->content }}">
                        </figure>
                        @else
                        <p>{{ $comment->content }}</p>
                            
                        @endif
                    </section>

                    <a href="#" id="reply"></a>

                    <div id="app">
                        <comment-create-form submission-url="{{route('comments.store')}}" comment-id="{{ $comment->id }}" wave-id="{{ $wave->id }}" v-model="content">
                            @csrf
                        </comment-create-form>
                        <Giphy v-on:image-clicked="imageClicked"/>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection