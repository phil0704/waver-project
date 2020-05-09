@extends('layout')

@section('title')
Edit Profile
@endsection

@section('content')

<h1 class="text-center"> Fill out this form to edit your Profile!</h1>

@include('partials.errors')

<div class="container-fluid">
    <div class="row h-100 justify-content-center align-items-center">

        <form method="post" action="{{ route( 'profiles.store' ) }}" enctype="multipart/form-data">
        <div class="form-group container h-100">
             @csrf 

            <label for="name">
                <strong>Edit Name</strong>
                <input type="text" id="username" name="username" value="{{ $profile->username}}">
            </label>
        </div>

        <div class="form-group container h-100">
            <label for="location">
                <strong>Location</strong>
                <textarea class="form-control" name="location" id="location" cols="30" rows="10"> {{ $profile->location }} </textarea>
            </label>
        </div>

        <div class="form-group container h-100">
            <label for="picture">
                Select image to upload
                <input type="file" name="picture" id="picture">
            </label>
        </div>

        <div class="form-group container h-100">
            <input class="btn btn-primary btn-customized align-bottom" type="submit" value="Update Profile">
        </div>
    
        </form>

    </div>
</div>

@endsection