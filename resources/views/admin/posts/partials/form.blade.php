
<div class="form-group">
    {!! Form::label('name', 'Nombre: ') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Escribe el nombre del post']) !!}
    
    @error('name')
        <small class="text-danger">{{$message}}</small>
        <br>
    @enderror
</div>
        
<div class="form-group">
    {!! Form::label('slug', 'Slug: ') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'readonly', 'placeholder' => 'El slug del post se crea automáticamente al escribir el nombre']) !!}
    
    @error('slug')
        <small class="text-danger">{{$message}}</small>
        <br>
    @enderror
</div>
        
<div class="form-group">
    {!! Form::label('category_id', 'Categoría: ') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
    
    @error('category_id')
        <small class="text-danger">{{$message}}</small>
        <br>
    @enderror
</div>
        
<div class="form-group">
    {!! Form::label('extract', 'Extracto del Post: ') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
    
    @error('extract')
        <small class="text-danger">{{$message}}</small>
        <br>
    @enderror
</div>
        
<div class="form-group">
    {!! Form::label('body', 'Detalle del post: ') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    
    @error('body')
        <small class="text-danger">{{$message}}</small>
        <br>
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
        <br>
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

<div class="row mb-4">
    <div class="col">
        <div class="image-wrapper">
            @isset ($post->image)
                <img id="picture" src="{{ Storage::url($post->image->url) }}" alt="">
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2016/10/22/17/46/mountains-1761292_960_720.jpg" alt="">
                    
            @endisset
        </div>                        
    </div>
    
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrará en el post') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            <p>Esta imagen se mostrará en el Post</p>
            
            @error('file')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

</div>