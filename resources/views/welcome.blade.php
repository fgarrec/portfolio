@extends('layouts.app')

@section('content')
    <header class="header parallax-header" >
        <div class="header-content">
            <img src="img/logos/logo_escaip.png" alt="">
            <div class="slash-bar"></div>
            <h1 class="header-content-title">Mon projet de vie</h1>
            <div class="header-buttons">
                <a href="" class="goto-escaip">Aller sur escaip.ca</a>
                <a href="" class="see-escaip">Voir le projet</a>
            </div>
        </div>
        
    </header>
    <main class="main">
        
            
        <section class="presentation l-container">
            <img src="img/guillemets.png" class="guillement-left" alt="">
                <ul>
                    @foreach($projects as $project)
                    <li>{{$project->name}}</li>
                    @endforeach
                </ul>
            <img src="img/guillemets.png" class="guillement-right" alt="">
        </section>
        <section class="presentation l-container">
            <img src="img/guillemets.png" class="guillement-left" alt="">
                <p class="presentation-text">
                    Je suis un artiste qui est devenu programmeur. Jadore faire des projets
                    esthétiquement beaux et ergonomiques. Mon but? Monter mon propre réseau social.
                </p>
            <img src="img/guillemets.png" class="guillement-right" alt="">
        </section>
        <section class="techno parallax-carousel">
            <div class="carousel-container l-container">
                <h3 class="techno-title">Mes technologies préférées</h3>
                <div class="techno-carousel">
                    <img src="img/techno/Adobe_Illustrator_Icon_(CS6).svg.png" alt="">
                    <img src="img/techno/afterEffects.png" alt="">
                    <img src="img/techno/animate.png" alt="">
                    <img src="img/techno/bootstrap.png" alt="">
                    <img src="img/techno/css3.png" alt="">
                    <img src="img/techno/HTML_Logo.png" alt="">
                    <img src="img/techno/java.png" alt="">
                    <img src="img/techno/Javascript-shield.png" alt="">
                    <img src="img/techno/jquery.gif" alt="">
                    <img src="img/techno/laravel-512.png" alt="">
                    <img src="img/techno/less-7-226016.png" alt="">
                    <img src="img/techno/Photoshop_CC_icon.png" alt="">
                    <img src="img/techno/php.png" alt="">
                    <img src="img/techno/premiere.png" alt="">
                    <img src="img/techno/qml.png" alt="">
                    <img src="img/techno/qt_creator.png" alt="">
                    <img src="img/techno/sass.png" alt="">
                    <img src="img/techno/unity.png" alt="">
                    <img src="img/techno/vscode.png" alt="">
                </div>
            </div>
        </section>
        
        
        
        <section class="project grid row l-container">
            <h3 class="project-title col-12">Quelques projets</h3>
            @foreach ($projects as $project)
                <a href="#project-popup-{{$project->id}}" class="open-popup-link col-12 col-sm-6 col-md-4 col-lg-3 ">
                    <div class="project-items">
                        <img src="img/vignettes/{{$project->vignettes}}" class="project-items-img" style="width:100%;" alt="">
                        <p class="project-items-title">{{$project->name}}</p>
                        <p class="project-items-category">{{$project->type}}</p>
                    </div>  
                </a>
            @endforeach
            @foreach ($projects as $project)
            <div id="project-popup-{{$project->id}}" class="project-items-popup mfp-hide">
                    <img src="img/vignettes/{{$project->vignettes}}" style="width:100%;" alt="">
                    <div class="cancel">
                        <span class="cancel-bar"></span>
                        <span class="cancel-bar"></span>
                    </div>
                    <div class="popup-container">
                        <div class="project-popup-infos">
                            <h3 class="project-popup-title">{{$project->name}}</h3>
                            <p class="project-popup-category"> - {{$project->type}}</p>
                        </div>
                        <div class="project-popup-content">
                            <div class="popup-more-infos">
                                <p class="project-popup-techo"><strong>Technologies impliquées :</strong> {{$project->technolgies}}</p>
                                <p class="project-popup-time"><strong>Durée du projet :</strong> {{$project->time}}h</p>
                            </div>
                            <p class="popup-text">
                                {{$project->description}}
                            </p>
        
                            <a href="{{route('project.show', $project->id)}}" class="btn-view-project">Voir plus</a>
                        </div>
                        
                    </div>
                </div>
            @endforeach
        </section> 
    </main>
@endsection