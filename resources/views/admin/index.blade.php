@extends('layouts.app')

@section('content')
    @if(Auth::user())
    <main class="main l-container" style="margin-top:90px;">
        <section class="admin-options">
            <ul class="options-list">
                <li class="options-list-items"><a href="{{route('project.create')}}">Ajouter un projet</a></li>
            </ul>
        </section>
        <section class="admin-projects">
            <ul class="projects-list">
                @foreach($projects as $project)
                    <li class="projects-list-items"> {{$project->name}} </li>
                @endforeach
            </ul>
        </section>
    </main>
    @else
    <h1>Désolé,</h1>
    <p>Vous n'avez pas accès à cette page</p>
    @endif
@endsection