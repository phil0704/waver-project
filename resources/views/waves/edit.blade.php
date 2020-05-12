@extends('layout')

@section('title')
Edit Wave
@endsection

@section('content')


<h1 class="text-center">Use this form to edit your Wave!</h1>

@include('partials.errors')

<div class="container-fluid">
    <div class="row h-100 justify-content-center align-items-center">

        <form method="post" action="{{ route('waves.update', $wave->id) }}">

            <div class="form-group container h-100">
                @csrf 
                @method('PATCH')

                <div class="form-group container h-100">
                    <label for="content">
                    <strong>Wave Content</strong>
                    <br>
                    <textarea name="content" id="content" cols="30" rows="10">{{ $wave->content }}</textarea>
                    </label>
                </div>

            <div class="form-group container h-100">
                <input class="btn btn-primary btn-customized align-bottom" type="submit" value="Update Wave">
                </form>
            </div>

            <div class="form-group container h-100">
                <form action="{{ route('waves.destroy', $wave->id) }}" method="post">
                @csrf 
                @method('DELETE')
                <input class="btn btn-danger" type="submit" value="Delete Wave">
            </div>  
                </form>

   </div>
   
</div>

@endsection