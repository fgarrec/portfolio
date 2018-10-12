<!doctype html>
<html lang="en">

<head>
    <title>Fabrice Garrec</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/api/magnific-popup.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" type="text/css" href="js/api/slick.css"/>
    <link rel="stylesheet" type="text/css" href="js/api/slick-theme.css"/>
</head>

<body class="index">
    
    <div class="navbar">
        <div class="l-container">
            <a href="index.html">
                <img src="img/logos/logo_grey.png" alt="" class="logo">
            </a>
            <nav class="navbar-navigation subnav">
                <ul class="navbar-navigation-list">
                    <li class="navigation-list-items"> <a href="projects.html"> Projets</a></li>
                    <li class="navigation-list-items"> <a href="a-propos.html"> À propos de moi</a></li>
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
            <img src="img/logos/logo_grey.png" alt="Fabrice Garrec" class="footer-logo">
        </div>
    </footer>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->

    <script type="text/javascript" src="js/api/slick.min.js"></script>
    <script type="text/javascript" src="js/api/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="js/api/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/api/parallax.min.js"></script>

    <script type="text/javascript" src="js/carousel.js"></script>
    <script type="text/javascript" src="js/parallax.js"></script>
    <script type="text/javascript" src="js/waypoint.js"></script>
    <!-- <script type="text/javascript" src="js/popup.js"></script> -->
    <script type="text/javascript" src="js/hover.js"></script>

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