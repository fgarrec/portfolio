@extends('layouts.app')

@section('content')

<header class="fabrice-header">
        <div class="fabrice-header-container l-container">
            <img src="img/profil.jpg" alt="">
            <div class="header-content col-12">
                <h1 class="fabrice-name">Fabrice Garrec</h1>
                <p class="fabrice-description">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh 
                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad 
                        minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut ali
                        quip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
                        velit esse molestie consequat, 
                </p>
            </div>
        </div>
    </header>
    <main class="main">
        <section class="fabrice-technos row  l-container">
            <h3 class="fabrice-technos-title col-12">Logiciels et langages de programmations</h3>
            <div class=" col-12 col-sm-6 technos-back-end">
                <h3 class="back-end-title">Back-end</h3>
                <ul class="back-end-list carousel-back">
                    <li class="back-end-list-items"><img src="img/techno/laravel-512.png" alt=""></li>
                    <li class="back-end-list-items"><img src="img/techno/php.png" alt=""></li>
                    <li class="back-end-list-items"><img src="img/techno/qml.png" alt=""></li>
                    <li class="back-end-list-items"><img src="img/techno/HTML_Logo.png" alt=""></li>
                    <li class="back-end-list-items"><img src="img/techno/java.png" alt=""></li>
                </ul>
            </div> 
            <div class=" col-12 col-sm-6 technos-back-end">
                <h3 class="back-end-title">front-end</h3>
                <ul class="back-end-list carousel-front">
                    <li class="back-end-list-items"><img src="img/techno/css3.png" alt=""></li>
                    <li class="back-end-list-items"><img src="img/techno/bootstrap.png" alt=""></li>
                    <li class="back-end-list-items"><img src="img/techno/Javascript-shield.png" alt=""></li>
                    <li class="back-end-list-items"><img src="img/techno/jquery.gif" alt=""></li>
                    <li class="back-end-list-items"><img src="img/techno/less-7-226016.png" alt=""></li>
                    <li class="back-end-list-items"><img src="img/techno/sass.png" alt=""></li>
                </ul>
            </div> 
            <div class=" col-12 technos-back-end">
                <h3 class="back-end-title">Logiciels</h3>
                <ul class="back-end-list carousel-log">
                    <li class="back-end-list-items"><img src="img/techno/vscode.png" alt=""></li>
                    <li class="back-end-list-items"><img src="img/techno/Adobe_Illustrator_Icon_(CS6).svg.png" alt=""></li>
                    <li class="back-end-list-items"><img src="img/techno/Photoshop_CC_icon.png" alt=""></li>
                    <li class="back-end-list-items"><img src="img/techno/unity.png" alt=""></li>
                    <li class="back-end-list-items"><img src="img/techno/qt_creator.png" alt=""></li>
                    <li class="back-end-list-items"><img src="img/techno/afterEffects.png" alt=""></li>
                    <li class="back-end-list-items"><img src="img/techno/animate.png" alt=""></li>
                    <li class="back-end-list-items"><img src="img/techno/premiere.png" alt=""></li>
                </ul>
            </div> 
        </section>
        <section class="skills parallax-skills">
            <div class="skills-container row l-container">
                <h3 class="skills-title col-12">Compétences</h3>
                
                <div class="skills-block col-12 col-sm-6 col-lg-4">
                    <div class="skills-header">
                        <!-- <span class="skills-icon"></span> -->
                        <img src="img/icons/programmation.png" alt="">
                        <h4 class="skills-subtitle">Programmation</h4>
                    </div>
                    <ul class="skills-list">
                        <li class="skills-list-items"> <div></div> Production d'algorithmes complexes</li>
                        <li class="skills-list-items"> <div></div> Écriture d'un code claire et organisé</li>
                        <li class="skills-list-items"> <div></div> Concept MVC acquis</li>
                    </ul>
                </div>

                <div class="skills-block col-12 col-sm-6 col-lg-4">
                    <div class="skills-header">
                        <!-- <span class="skills-icon"></span> -->
                        <img src="img/icons/design.png" alt="">
                        <h4 class="skills-subtitle">Design</h4>
                    </div>
                    <ul class="skills-list">
                        <li class="skills-list-items"> <div></div> Conception d'interfaces ergonomiques</li>
                        <li class="skills-list-items"> <div></div> Designs adaptés pour tous les supports</li>
                        <li class="skills-list-items"> <div></div> Analyse de l'information à afficher</li>
                    </ul>
                </div>
                <div class="skills-block col-12 col-sm-6 col-lg-4">
                    <div class="skills-header">
                        <!-- <span class="skills-icon"></span> -->
                        <img src="img/icons/web.png" alt="">
                        <h4 class="skills-subtitle">Web</h4>
                    </div>
                    <ul class="skills-list">
                        <li class="skills-list-items"> <div></div> Implémentation de plusieurs librairies</li>
                        <li class="skills-list-items"> <div></div> Utilisation de préprocesseurs</li>
                        <li class="skills-list-items"> <div></div> Maîtrise de la synthaxe HTML/CSS</li>
                    </ul>
                </div>
                
            </div>
        </section>
        <section class="fabrice-form row  l-container">
            <h3 class="form-title col-12">Me contacter</h3>
            @include('forms.contact')
        </section>
    </main>

@endsection