<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="waver logo"  type="company/images" href="{{ URL('/images/waver-icon.png') }}">
        <meta name="description" content="A Waver app. Connecting to the World!">
        <title>Waver. Free Social Media</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
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

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenLite.min.js"></script> 
        <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
         
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-align: center;
}

body {
  font-family: Merriweather, serif;
  background-color: #708090;
  position: relative;
  padding-bottom: 58px;
  min-height: 100vh;
}

header {
  text-align: center;
  align-items: center;
  background-color: #B0C4DE;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  color: #fff;
  padding: 200px 80px;
  height: 90vh;
}

header h1 {
  font-family: Merriweather, serif;
  font-size: 15vh;
  margin: 30px;
  text-transform: uppercase;
  text-shadow: 2px 2px gray;
  -webkit-text-stroke-width: .5px;
  -webkit-text-stroke-color: navy;
  background-image: linear-gradient(to top, #88d3ce 0%, #6e45e2 100%);
}

nav {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 50px;
  background-color: rgba(255, 255, 255);
}

.top-right {
  position: absolute;
  right: 10px;
  top: 18px;
}

.links>a {
  color: #00BFFF;
  padding: 0 25px;
  font-size: 15px;
  font-weight: 580;
  letter-spacing: .1rem;
  text-decoration: none;
  text-transform: uppercase;
}

.logo {
  position: absolute;
  left: 10px;
  top: 18px;
  height: 60px;
  width: 60px;
}

main {
  width: 90vw;
  margin: 0 auto;
  padding: 30px 20px;
}

.waver-a {
  background-image: linear-gradient(to right, #eea2a2 0%, #bbc1bf 19%, #57c6e1 42%, #b49fda 79%, #7ac5d8 100%);
}

.waver-b {
  background-image: linear-gradient(to top, #6a85b6 0%, #bac8e0 100%);
}

section {
  background-color: #fff;
  padding: 80px;
  margin-bottom: 30px;
  border-radius: 5px;
  background-image: linear-gradient(-225deg, #69EACB 0%, #EACCF8 48%, #6654F1 100%);
}

section.wave.waver-images {
  padding: 0;
  padding-bottom: 40px;
  align-items: center;
}

section h2 {
  margin: 10px 0 25px 0;
}

section p {
  font-size: 20px;
  margin-top: 16px;
  line-height: 24px;
}

section:last-child {
  margin-bottom: 0;
}

footer {
  text-align: center;
  background-color: #333;
  color: #fff;
  padding: 20px;
  position: absolute;
  bottom: 0;
  width: 100%;
}


@media screen and (max-width: 600px) {
    body {
        width: 100%;
        font-size: 0.75em;
    }
    h1 {
        font-size: 6vh;
    }
}

@media(max-width:768px) {
    main {
        width: 100vw;
        padding: 20px;
    }
    section {
        margin-bottom: 16px;
        font-size: 14px;
    }
    section h2 {
        margin: 8px 0 15px 0;
    }
    section p {
        margin-top: 16px;
        line-height: 20px;
    }
}


</style>

    </head>
    <body>
    <nav>
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
     <h1>Welcome to Waver</h1>
     </header>
         <main>
             <section class="waver-a">
                <h2>What Is All About Waver?</h2> 
                <p>Waver is a new Social Network that works whenever you are. Waver Create wonderful experiences for the people, creating memories, making life easier and discover the new ways of life.</p>
                <p>Waver brings you closer to home!</p>
                <section class="waver-b">
                    <h2>Why Join Waver?</h2>
                    <p>Waver. A social media platform that connects you around the world! Share memories and laughter.</p>
                </section>
             </section>
             <section class="waver-c">
               <div id="waver-images">
                 <figure class="col1 pic">
                   <img src="./images/connecting-people.jpeg" alt="connecting people">
                 </figure>
                 <figure class="col2 pic">
                   <img src="./images/family-photo.jpg" alt="family-photo">
                 </figure>
                 <figure class="col3 pic">
                   <img src="./images/friends-photo.jpeg" alt="friends images">
                 </figure>
                 <figure class="col4 pic">
                   <img src="./images/videocalling.jpg" alt="family videocalling">
                 </figure>
               </div>
             </section>
             <section class="waver reg">
               <p><a href="{{ route('register') }}">Register Now!</a> Waver...Connecting People</p>
             </section>
        </main>
     <footer>
          <p>Waver. Connecting People! Registered TM. Copyright 2020</p> 
     </footer> 
    </body>
</html>