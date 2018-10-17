
{{ Form::open(['route' => 'project.store', 'class' => 'form', 'files' => true]) }}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-elements">
        {!! Form::label('name', 'Titre du projet') !!}
        {!! Form::text('name', null) !!}
    </div>
    
    <div class="form-elements">
        {!! Form::label('type', 'Type') !!}
        {!! Form::text('type', null) !!}
    </div>
    
    <div class="form-elements">
        {!! Form::label('time', 'Temps') !!}
        {!! Form::text('time', null) !!}
    </div>
    <div class="form-elements">
        {!! Form::label('technos', 'Technos') !!}
        {!! Form::text('technos', null) !!}
    </div>
    <div class="form-elements">
        {!! Form::label('vignette', 'Vignette') !!}
        {!! Form::text('vignette', null) !!}
    </div>
    <div class="form-elements">
        {!! Form::label('img1', 'Image1') !!}
        {!! Form::text('img1', null) !!}
    </div>  
    <div class="form-elements">
        {!! Form::label('img2', 'Image2') !!}
        {!! Form::text('img2', null) !!}
    </div>  
    <div class="form-elements">
        {!! Form::label('img3', 'Image3') !!}
        {!! Form::text('img3', null) !!}
    </div>  
    <div class="form-elements">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', null) !!}
    </div>  
     {{--  <div class="form-elements">
        {!! Form::label('vignette', 'Vignette') !!}
        {!! Form::file('vignette') !!}
    </div>
     <div class="form-elements">
        {!! Form::label('img1', 'Image1') !!}
        {!! Form::file('img1') !!}
    </div>  --}}
    <button>Soumettre</button>

{{ Form::close() }}