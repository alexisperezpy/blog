@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
    <h1 class="text-center text-uppercase">Editar Etiquetas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($tag, ['route'=>['admin.tags.update',$tag], 'method'=>'put']) !!}

                @include('admin.tags.partials.form')
                {!! Form::submit('Actualizar Etiqueta', ['class'=>'btn btn-info']) !!}

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
@stop