@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')

    @if (session('info'))
            <div class="alert alert-success fade show alert-dismissible">
                <strong>{{ session('info') }}</strong>
                <button type="button" class="close" data-dismiss="alert">&times</button>
            </div>
    @endif

    <a class="btn btn-success btn-md float-right mr-4" href="{{ route('admin.posts.create') }}">Nuevo Post</a>
    <h1 class="text-uppercase ml-4">Listado de Post's</h1>
@stop

@section('content')
   @livewire('admin.post-index')
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        @if (session('eliminado')=='ok')
            <script>
                Swal.fire(
                    'Eliminado!!',
                    'El registro fue eliminado con éxito.',
                    'success'
                )
            </script>
        @endif
    
    <script> 

        $('.deletereg').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: 'Estás seguro?',
            text: "Esto no podrá ser revertido!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {
                
                    this.submit();
                    
                }
            })

        });
        
    </script>
@stop