<!doctype html>
<html lang="en">

<head>
    <title>Fabrice Garrec</title>

    <link rel="shortcut icon" href="{{asset('img/icons/fabrice_icon.ico')}}">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/api/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/header/component.css')}}">
    <link rel="stylesheet" href="{{asset('css/header/demo.css')}}">
    <link rel="stylesheet" href="{{asset('css/header/normalize.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('js/api/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('js/api/slick-theme.css')}}"/>
    
</head>

<body class="{{Route::currentRouteName() === 'project.show' ? 'one-project' : 'index'}}">

    <div class="navbar">
        <div class="l-container">
            <a href="{{route('home')}}">
                <img src="{{asset('img/logos/logo_grey.png')}}" alt="" class="logo">
            </a>
            <nav class="navbar-navigation subnav">
                <ul class="navbar-navigation-list">
                    <li class="navigation-list-items"> <a href="{{route('project.index')}}"> Projets</a></li>
                    <li class="navigation-list-items"> <a href="{{route('aPropos')}}"> À propos de moi</a></li>
                    @if(Auth::user())
                        <li class="navigation-list-items">
                            <a href="{{Auth::logout()}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            Se déconnecter</li>
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endif
                </ul>
            </nav>
            <div class="burger-menu">
                <span class="burger-menu-bar"></span>
                <span class="burger-menu-bar"></span>
                <span class="burger-menu-bar"></span>
            </div>
        </div>
    </div>
    {{-- <h1>{{Auth::user()->name}}</h1> --}}
    <div class="hide"></div>
    @yield('content')
    <footer class="footer">
        <div class="footer-container l-container">
            <img src="{{asset('img/logos/logo_grey.png')}}" alt="Fabrice Garrec" class="footer-logo">
            <div class="cv-container">
                <img src="{{asset('img/icons/resume.png')}}" alt=""><a href="/download/cv.pdf" download="cv.pdf">Télécharger mon c.v.</a>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    {{--  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
   <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>   --}}

   <script type="text/javascript" src="{{asset('js/api/slick.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('js/api/jquery.waypoints.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('js/api/jquery.magnific-popup.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('js/api/parallax.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('js/js.min.js')}}"></script>

   <script src="{{asset('js/header/TweenLite.min.js')}}"></script>
   <script src="{{asset('js/header/EasePack.min.js')}}"></script>
   <script src="{{asset('js/header/rAF.js')}}"></script>
   <script src="{{asset('js/header/points.js')}}"></script>

   <script type="text/javascript" src="{{asset('js/carousel.js')}}"></script>
   <script type="text/javascript" src="{{asset('js/parallax.js')}}"></script>
     <script type="text/javascript" src="{{asset('js/waypoint.js')}}"></script>
   <script type="text/javascript" src="{{asset('js/hover.js')}}"></script>

   <script type="text/javascript">
    @if(Route::currentRouteName() === 'home')
       $(document).ready(function() {
           var lastScrollTop = 0;
           // var navbar = document.getElementById("navbar");
           $(window).scroll(function(event){
           var st = $(this).scrollTop();
           if (st > lastScrollTop){
               $(".navbar").css("top", "0");
           }else{
               $(".navbar").css("top", "-60");
           }
           lastScrollTop = st;
           });
       });
    @else
        $(document).ready(function() {
            $(".navbar").css("top", "0");
        });
    @endif

   </script>
</body>


</html>
