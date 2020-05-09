@extends('layout')

@section('title')
Create Wave Form
@endsection

@section('content')

<h1 class="text-center"> Fill out this form to create a Wave!</h1>

@include('partials.errors')

<div class="container-fluid">
    <div class="row h-100 justify-content-center align-items-center">

        <form method="post" action="{{ route( 'waves.store' ) }}" enctype="multipart/form-data">
            <div class="form-group container h-100">
         
                @csrf <!-- cross site request forgery. A security measure -->

                <label for="content">
                    <strong> Wave Content: </strong>
                    <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
                </label>
            </div>

            <div class="form-group container h-100">
                <label for="picture">
                    <strong>Select image to upload:</strong>
                    <br>
                    <input type="file" name="picture" id="picture">
                </label>
            </div>


            <div class="form-group container h-100">
                <input class="btn btn-primary btn-customized align-bottom" type="submit" value="Publish Wave">
            </div>
    
        </form>

   </div>
</div>

@endsection