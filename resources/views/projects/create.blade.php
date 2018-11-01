@extends('layouts.app')

@section('content')
    @if(Auth::user())
        <div class="l-container" style="margin-top: 90px;">
            @include('forms.create')
        </div>
    @else
        <div>
            <h1>Désolé,</h1>
            <p>Vous n'avez pas accès à cette page</p>
        </div>
    @endif
@endsection