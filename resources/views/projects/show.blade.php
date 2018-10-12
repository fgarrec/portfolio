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
                <h2 class="project-title">My little Zelda</h2>  
                <p class="project-infos"><strong>Technologies impliqué :</strong>C#, Unity2D, Animate</p>
                <p class="project-infos"><strong>Durée :</strong> 20h</p>
            </div>
        </div>
        <div class="project-content">
            <p class="project-type"><strong>Type du projet :</strong> Programmation</p>
            <p class="project-content-text">
                
            </p>
            <p class="project-content-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident tempora temporibus fugiat impedit quibusdam sequi magni recusandae, id ipsa. Voluptas fugit voluptatum facilis veniam rem vero, commodi veritatis quibusdam dolorum!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident tempora temporibus fugiat impedit quibusdam sequi magni recusandae, id ipsa. Voluptas fugit voluptatum facilis veniam rem vero, commodi veritatis quibusdam dolorum!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident tempora temporibus fugiat impedit quibusdam sequi magni recusandae, id ipsa. Voluptas fugit voluptatum facilis veniam rem vero, commodi veritatis quibusdam dolorum!
            </p>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="{{asset('js/api/parallax.min.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.parallax-header-project').parallax({imageSrc: '{{asset("img/$project->img1")}}'});
            
        });

    </script>

@endsection