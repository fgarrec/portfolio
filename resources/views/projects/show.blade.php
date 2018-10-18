@extends('layouts.app')

@section('content')
    <header class="project-header">
        <div class="bg-image-container parallax-header-project" style="filter:blur(40px);">

        </div>
    </header>
    <main class="main l-container">
        <div class="img-project-container">
            <div class="img-project">
                <img src='{{asset("img/vignettes/$project->vignettes")}}' alt="">
                <h2 class="project-title">{{$project->name}}</h2>  
                <p class="project-infos"><strong>Technologies impliqué :</strong>{{$project->technos}}</p>
                <p class="project-infos"><strong>Durée :</strong> {{$project->time}}h</p>
            </div>
        </div>
        <div class="project-content">
            <p class="project-type"><strong>Type du projet :</strong> {{$project->type}}</p>
            
            <p class="project-content-text">
                {{$project->description}}
            </p>
            <div class="gallery-project row">
                <a href='{{asset("img/projets/$project->img1")}}' class="img-container col-12 col-md-6 col-lg-4"><img src='{{asset("img/projets/$project->img1")}}' ></img></a>
                <a href='{{asset("img/projets/$project->img2")}}' class="img-container col-12 col-md-6 col-lg-4"><img src='{{asset("img/projets/$project->img2")}}' ></img></a>
                <a href='{{asset("img/projets/$project->img3")}}' class="img-container col-12 col-md-6 col-lg-4"><img src='{{asset("img/projets/$project->img3")}}' ></img></a>
            </div> 
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="{{asset('js/api/parallax.min.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.parallax-header-project').parallax({imageSrc: '{{asset("img/projets/$project->img1")}}'});

            $('.gallery-project').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery:{
                  enabled:true
                }
              });
            
        });

    </script>

@endsection