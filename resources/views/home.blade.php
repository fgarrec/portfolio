@extends('layouts.app')

@section('content')
<div class="demo-1">
    <div class="content">
        <div id="large-header" class="large-header">
            <canvas id="demo"></canvas>
            <h1 class="main-title">Fabrice Garrec <span class="thin">Portfolio</span></h1>
        </div>
    </div>
</div>
    <main class="main">
        
        <section class="presentation l-container">
            <img src="img/guillemets.png" class="guillement-left" alt="">
                <p class="presentation-text">
                    Je suis un artiste qui est devenu programmeur. Jadore faire des projets
                    esthétiquement beaux et ergonomiques. Mon but? Apprendre le plus de technologies possible.
                </p>
            <img src="img/guillemets.png" class="guillement-right" alt="">
        </section>
        <section class="techno parallax-carousel">
            <div class="carousel-container l-container">
                <h3 class="techno-title">Mes technologies préférées</h3>
                <div class="techno-carousel">
                    <img src="img/techno/Adobe_Illustrator_Icon_(CS6).png" alt="">
                    <img src="img/techno/css3.png" alt="">
                    <img src="img/techno/HTML_Logo.png" alt="">
                    <img src="img/techno/Javascript-shield.png" alt="">
                    <img src="img/techno/jquery.png" alt="">
                    <img src="img/techno/laravel-512.png" alt="">
                    <img src="img/techno/less-7-226016.png" alt="">
                    <img src="img/techno/php.png" alt="">
                    <img src="img/techno/sass.png" alt="">
                    <img src="img/techno/vscode.png" alt="">
                </div>
            </div>
        </section>
        
        
        
        <section class="project grid row l-container">
            <h3 class="project-title col-12">Quelques projets</h3>
            @foreach ($projects as $project)
                <a href="{{route('project.show', $project->id)}}" class="open-popup-link col-12 col-sm-6 col-md-4 col-lg-3 ">
                    <div class="project-items">
                        <img src="img/vignettes/{{$project->vignettes}}" class="project-items-img" style="width:100%;" alt="">
                        <p class="project-items-title">{{$project->name}}</p>
                        <p class="project-items-category">{{$project->type}}</p>
                    </div>  
                </a>
            @endforeach
        </section> 
    </main>
@endsection