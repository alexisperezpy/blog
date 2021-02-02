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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop