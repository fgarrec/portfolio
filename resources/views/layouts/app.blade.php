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
                </ul>
            </nav>   
            <div class="burger-menu">
                <span class="burger-menu-bar"></span>
                <span class="burger-menu-bar"></span>
                <span class="burger-menu-bar"></span>
            </div>
        </div>
    </div>
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
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
     {{--  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>   --}}

    <script type="text/javascript" src="{{asset('js/api/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/api/jquery.waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/api/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/api/parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/js.min.js')}}"></script>
    
    {{--<script type="text/javascript" src="{{asset('js/carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/parallax.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/waypoint.js')}}"></script>
     <script type="text/javascript" src="{{asset('js/popup.js')}}"></script>   
    <script type="text/javascript" src="{{asset('js/hover.js')}}"></script>--}}

    <script type="text/javascript">
        $(document).ready(function() {
            $('.open-popup-link').magnificPopup({
                type:'inline',
                midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
            });
        });

    </script>
</body>


</html>
