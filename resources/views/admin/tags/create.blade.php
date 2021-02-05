@extends('adminlte::page')

@section('title', 'Categoria')

@section('content_header')
    <h1 class="text-center text-uppercase">Crear nueva Etiqueta</h1>
@stop

@section('content')
    
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=> 'admin.tags.store']) !!}
               
                @include('admin.tags.partials.form')
                {!! Form::submit('Crear Etiqueta', ['class'=>'btn btn-info']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3.0/jquery.stringToSlug.js') }}">
    </script>

    <script>
        $(document).ready(function(){
            $("#name").stringToSlug({
               setEvents: 'keyup keydown blur',
               getPut: '#slug',
               space: '-'
            });
        });
    </script>

@endsection