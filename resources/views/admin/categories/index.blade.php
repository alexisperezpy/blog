@extends('adminlte::page')

@section('title', 'Categoria')

@section('content_header')
    <h1 class="text-center text-uppercase">Listado de Categorias</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success fade show alert-dismissible">
            <strong>{{ session('info') }}</strong>
            <button type="button" class="close" data-dismiss="alert">&times</button>
        </div>
    @endif
     {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"> --}}
     <div class="card">
         <div class="card-header d-flex">
             <a class="btn btn-success btn-md ml-auto" href="{{ route('admin.categories.create') }}">Nueva Categoria</a>
         </div>
        <div class="card-body">
            @if ($categories->isEmpty())
                <div>No hay Categorias cargadas</div>
            @else   
            
                <table class="table table-sm table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nombres</th>
                            <th class="text-center" colspan="3">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($categories as $category)
                            <tr>                  
                                <td>
                                    {{ $category->id }}
                                </td>   
                                <td>
                                    <a href="{{ route('admin.categories.show',$category) }}">
                                        {{ $category->name }}
                                    </a>
                                    
                                </td>    
                                <td width="10px">
                                    <a class="btn btn-primary" href="{{ route('admin.categories.show',$category) }}">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </td>
                                <td width="10px">
                                    <a class="btn btn-warning" href="{{ route('admin.categories.edit',$category) }}">
                                        <i class="far fa-edit"></i>
                                    </a>
                                </td>
                                <td width="10px">
                                    <form action={{ route('admin.categories.destroy',$category) }} method="POST">
                                        @csrf
                                        @method('delete')

                                        <button type="submit" class="btn btn-danger">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>    
                </table>
                
                  {{ $categories->links() }}
                  
                
            @endif
        </div>
    </div>    
@stop
