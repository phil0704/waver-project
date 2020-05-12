@foreach($comments as $comment)

<div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
    <strong>{{ $wave->username }}</strong>

    <section>
        @if( $comment->is_gif == TRUE )
        <figure>
            <img src="{{ $comment->content }}">
        </figure>
        @else 
    
        <p class="card-body">>{{ $comment->content }}</p>
        @endif
    </section>

    <div class="form-group">
    <a  class="btn btn-primary" href="#" id="reply">Reply</a>
    </div>

    <div class="form-group">
        <a href="{{ route('comments.edit', $comment->id) }}" wave-id="{{ $wave_id }}" comment-id="{{ $comment->id }}" class="btn btn-primary">Edit Comment</a>
    </div>

    <div class="form-group">
        <form action="{{ route('comments.destroy', $comment->id) }}" method="post">
            
            @csrf <!-- cross site request forgery. A security measure -->
            @method('DELETE')
            <input class="btn btn-danger" type="submit" value="Delete Comment">
        </form>
    </div>

    @include('waves.commentsDisplay', ['comments' => $comment->replies])
</div>

@endforeach