@extends('layouts.app')

@section('content')
<div class="demo-1">
    <div class="content">
        <div id="large-header" class="large-header">
            <canvas id="demo"></canvas>
            <h1 class="main-title">Fabrice Garrec <span class="thin">Développeur web</span></h1>
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
        <section class="techno l-container">
                <h3 class="techno-title">Mes compétences</h3>
                <div class="skillbar clearfix " data-percent="20%">
                    <div class="skillbar-title" ><span>HTML5</span></div>
                    <div class="skillbar-bar" ></div>
                    <div class="skill-bar-percent">20%</div>
                </div> <!-- End Skill Bar -->
                
                <div class="skillbar clearfix " data-percent="25%">
                    <div class="skillbar-title" ><span>CSS3</span></div>
                    <div class="skillbar-bar" ></div>
                    <div class="skill-bar-percent">25%</div>
                </div> <!-- End Skill Bar -->
                
                <div class="skillbar clearfix " data-percent="50%">
                    <div class="skillbar-title" ><span>jQuery</span></div>
                    <div class="skillbar-bar" ></div>
                    <div class="skill-bar-percent">50%</div>
                </div> <!-- End Skill Bar -->
                
                <div class="skillbar clearfix " data-percent="40%">
                    <div class="skillbar-title" ><span>PHP</span></div>
                    <div class="skillbar-bar" ></div>
                    <div class="skill-bar-percent">40%</div>
                </div> <!-- End Skill Bar -->
                
                <div class="skillbar clearfix " data-percent="75%">
                    <div class="skillbar-title" ><span>Wordpress</span></div>
                    <div class="skillbar-bar" ></div>
                    <div class="skill-bar-percent">75%</div>
                </div> <!-- End Skill Bar -->
                
                <div class="skillbar clearfix " data-percent="100%">
                    <div class="skillbar-title" ><span>SEO</span></div>
                    <div class="skillbar-bar" ></div>
                    <div class="skill-bar-percent">100%</div>
                </div> <!-- End Skill Bar -->
                
                <div class="skillbar clearfix " data-percent="70%">
                    <div class="skillbar-title" ><span>Photoshop</span></div>
                    <div class="skillbar-bar" ></div>
                    <div class="skill-bar-percent">70%</div>
                </div> <!-- End Skill Bar -->
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
