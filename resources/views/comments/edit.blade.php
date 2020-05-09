@extends ('layout')

@section('title')
Edit Comment
@endsection
@section('content')

@include('partials.errors')
<form method="post" action="{{route('comment.update', $comment->id)}}" v-model="content">
  @csrf
  @method('PATCH')
  <Giphy v-on:image-clicked="imageClicked" />
  <div class="form-group">
  <label for="body">
    <strong>Edit Comment</strong>
    <textarea class="form-control" name="body" id="body" rows="10" cols="30">{{$comment->wave}}</textarea>
  </label>
</div>
<div class="form-group">
  <input type="submit" class="btn btn-warning" value="Update Comment">
</div>
</form>

<div class="form-group container h-100">
        <form action="{{ route('comments.destroy', $comment->id) }}" method="post">
            @csrf
            @method('DELETE')
            <input class="btn btn-danger" type="submit" value="Delete Comment">
    </div>
    </form>

@endsection