<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="waver logo"  type="company/images" href="{{ URL('/images/connecting-people.jpeg') }}">
        <title>Waver. Free Social Media</title>
        <meta name="description" content="A Waver app. Connecting to the World!">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Style -->
        <link type="text/css" rel="stylesheet" href="{{ asset('/css/app.css') }}" >
        <!-- Script -->
        <script type="text/javascript"  src="{{ asset('/js/app.js') }}" defer></script>
        <script type="text/javascript"  src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.js"></script>
        <script type="text/javascript"  src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
        <script type="text/javascript"  src="js/scrollmagic/uncompressed/ScrollMagic.js"></script>
        <script type="text/javascript"  src="js/scrollmagic/minified/ScrollMagic.min.js"></script>
        <script type="text/javascript"  src="js/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>
         
    </head>
    <body>
    <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
 <div class="main-page">
<figure>
     <img src="./images/connecting-people.jpeg" alt="connecting people">
    <figcaption><i>People around world connecting through Waver</i></figcaption>
</figure>

    <h3>Welcome to Waver</h3>
    <p>We Create wonderful experiences for the people, creating memories, making life easier and discover the new ways of life.</p>
    <br>

    <figure>
      <img src="./images/family-photo.jpg" alt="family-photo">
      <figcaption><i>Family always comes first</i></figcaption>
    </figure>
    
    <h4>Waver brings you closer to home!</h4> 
   

    <figure>
        <img src="./images/friends-photo.jpeg" alt="friends images">
    
        <img src="./images/videocalling.jpg" alt="family videocalling">
        
        <img src="./images/family-portrait.jpg" alt="family protrait">
    </figure>
    <p>Stay Waver. Stay Connected</p>

</div>
        <footer>
            Waver.ConnectingtotheWorld! Registered TM. Copyright 2020
        </footer>
    </body>
</html>