@extends('adminlte::page')

@section('title', 'Dasboard')

@section('content_header')
    <h1 class="text-center text-uppercase font-bold">Detalle de Post</h1>
@stop

@section('content')
    
    <div class="container py-8 px-6">
        <h1 class="text-2xl text-gray-700 ">{{ $post->name }}</h1>
        <div class="text-lg text-gray-400 mb-2 text-justify">
            <h3>{!! $post->extract !!}</h3>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- Contenido principal --}}
            <div class="lg:col-span-2">
                <figure>
                    @if ($post->image)
                        <img class="w-full h-80 object-cover object-center px-4" src="{{Storage::url($post->image->url)}}">
                    @else
                        <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2016/10/22/17/46/mountains-1761292_960_720.jpg" alt="">
                    @endif
                </figure>
                <div class="text-base text-gray-600 mt-4 mr-4 text-justify">
                    {!! $post->body !!}
                </div>
            </div>
        </div>
    </div>

    
@stop

