{{ Form::open(['route' => 'project.store', 'class' => 'form', 'files' => true]) }}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-elements">
        {!! Form::label('id', 'Titre du projet') !!}
        {!! Form::text('id', null) !!}
    </div>
    <button>Soumettre</button>

{{ Form::close() }}