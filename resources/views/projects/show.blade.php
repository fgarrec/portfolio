@extends('layouts.app')
@section('content')
    <header class="project-header">
        <div class="bg-image-container parallax-header-project" style="filter:blur(40px);">

        </div>
    </header>
    <main class="main l-container">
        <div class="img-project-container">
            <div class="img-project">
                {{--  <div class="img-project-container">  --}}
                    <img src='{{asset("img/vignettes/$project->vignettes")}}' alt="">
                {{--  </div>  --}}
                <h2 class="project-title">{{$project->name}}</h2>  
                <p class="project-infos"><strong>Technologies impliqué :</strong>{{$project->technologies}}</p>
                <p class="project-infos"><strong>Durée :</strong> {{$project->timeProduction}}</p>
            </div>
        </div>
        <div class="project-content">
            <p class="project-type"><strong>Type du projet :</strong> {{$project->category}}</p>
            <p class="project-content-text">
                {{$project->description1}}
            </p>
            {{--  <textarea readonly class="project-content-code">
        var winH = $(window).height();
        var winW = $(window).width();
        //Set the popup window to center
        $(id).css('top',  winH/2-$(id).height()/2);
        $(id).css('left', winW/2-$(id).width()/2
        var winH = $(window).height();
        var winW = $(window).width();
        //Set the popup window to center
        $(id).css('top',  winH/2-$(id).height()/2);
        $(id).css('left', winW/2-$(id).width()/2
            </textarea>  --}}
            @if($project->description2)
                <p class="project-content-text">
                    {{$project->description2}}
                </p>
            @else

            @endif
        </div>
    </main>
@endsection