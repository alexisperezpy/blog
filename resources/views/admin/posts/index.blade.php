@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
    <a class="btn btn-success btn-md float-right mr-4" href="{{ route('admin.posts.create') }}">Nuevo Post</a>
    <h1 class="text-uppercase ml-4">Listado de Post's</h1>
@stop

@section('content')
   @livewire('admin.post-index')
@stop
