@extends('layouts.app')

@section('content')
    @if(Route::currentRouteName() === 'projects.index')
        <header class="header-projects" style="background-image:url('img/rawpixel-579231-unsplash.jpg'); height: 800px; width: 100%; background-size: cover; background-position-y: bottom;" >
        </header>
    @endif
    <section class="project grid row l-container">
        <h3 class="project-title col-12">Mes projets</h3>
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
                            <p class="project-popup-techo"><strong>Technologies impliquées :</strong> {{$project->technos}}</p>
                            <p class="project-popup-time"><strong>Durée du projet :</strong> {{$project->time}}h</p>
                        </div>
                        <p class="popup-text">
                            {{str_limit($project->description, 170)}}
                        </p>

                        <a href="{{route('project.show', $project->id)}}" class="btn-view-project">Voir plus</a>
                    </div>
                    
                </div>
            </div>
        @endforeach
    </section> 
@endsection