<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="waver logo"  type="company/images" href="{{ URL('/images/connecting-people.jpeg') }}">
        <meta name="description" content="A Waver app. Connecting to the World!">
        <title>Waver. Free Social Media</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Style -->
        <link type="text/css" rel="stylesheet" href="{{ asset('/css/app.css') }}" >
        <!-- Script -->
        <script type="text/javascript"  src="{{ asset('/js/app.js') }}" defer></script>
        <script type="text/javascript"  src="js/scrollmagic/uncompressed/ScrollMagic.js"></script>
        <script type="text/javascript"  src="js/scrollmagic/minified/ScrollMagic.min.js"></script>
        <script type="text/javascript"  src="js/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
         
    </head>
    <body>
    <nav class="flex-center position-ref full-height">
        <figure>
            <img src="../public/images/waver-icon.png" class="logo">
        </figure>
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
       </nav>
     
     <header>
     <h1>Welcome to Waver. Connecting People</h1>
     </header>
         <main>
             <section class="a-waver">
                <h3>What is all about Waver?</h3> 
                <p>Waver is a new Social Network that works whenever you are. Waver Create wonderful experiences for the people, creating memories, making life easier and discover the new ways of life.</p>
                <p>Waver brings you closer to home!</p>
             </section>
             <section class="b-waver">
               <div id="c-waver">
                 <figure class="col-1">
                   <img src="./images/connecting-people.jpeg" alt="connecting people">
                 </figure>
                 <figure class="col-2">
                   <img src="./images/family-photo.jpg" alt="family-photo">
                 </figure>
                 <figure class="col-3">
                   <img src="./images/friends-photo.jpeg" alt="friends images">
                 </figure>
                 <figure class="col-4">
                   <img src="./images/videocalling.jpg" alt="family videocalling">
                 </figure>
               </div>
             </section>
             <section class="c-waver">
               <p><a href="{{ route('register') }}">Register Now</a>Waver...Connecting People</p>
             </section>
        </main>
     <footer>
          <p>Waver.ConnectingtotheWorld! Registered TM. Copyright 2020</p> 
     </footer> 
    </body>
</html>