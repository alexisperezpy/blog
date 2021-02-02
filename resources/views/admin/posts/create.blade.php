@extends('adminlte::page')

@section('title', 'Crear Post')

@section('content_header')
    <h1>Crea un Post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store','autocomplete'=>'off','files'=>true]) !!}
            {!! Form::hidden('user_id', auth()->user()->id) !!} {{-- Campo oculto --}}   
            
            <div class="row mb-3">
                <div class="col">
                    <div class="image-wrapper">
                        <img id="picture" src="https://cdn.pixabay.com/photo/2016/10/22/17/46/mountains-1761292_960_720.jpg" alt="">
                    </div>                        
                </div>
                <div class="col">
                    <div class="form-group">
                        {!! Form::label('file', 'Imagen asociada al post') !!}
                        {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                        <p>Cargue aquí la imagen a mostrar en el Post</p>
                    </div>
                </div>
            </div>
            <div class="form-group">
                    {!! Form::label('name', 'Nombre: ') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Escribe el nombre del post']) !!}
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('slug', 'Slug: ') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'readonly', 'placeholder' => 'El slug del post se crea automáticamente al escribir el nombre']) !!}
                    @error('slug')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('category_id', 'Categoría: ') !!}
                    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                    @error('category_id')
                        <br>
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <p class="font-weight-bold">Etiquetas: </p>
                    @foreach ($tags as $tag)
                        <label class="mr-2">
                            {!! Form::checkbox('tags[]', $tag->id, null) !!} {{--Seleccion multiple en array tags[]--}}
                            {{$tag->name}}
                        </label>
                    @endforeach
                    @error('tags')
                        <br>
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <p class="font-weight-bold">Estado:</p>
                    <label class="mr-4">
                        {!! Form::radio('status', 1, true) !!}
                        Borrador
                    </label>
                    <label class="mr-2">
                        {!! Form::radio('status', 2) !!}
                        Publicar
                    </label>
                </div>
                <div class="form-group">
                    {!! Form::label('extract', 'Extracto del Post: ') !!}
                    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
                    @error('extract')
                        <br>
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('body', 'Detalle del post: ') !!}
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                    @error('body')
                        <br>
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                {!! Form::submit('Crear post', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3.0/jquery.stringToSlug.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>
    <script>
        //Cambiar imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result); 
            };

            reader.readAsDataURL(file);
        }
    </script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

        ClassicEditor
        .create( document.querySelector( '#extract' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
@stop