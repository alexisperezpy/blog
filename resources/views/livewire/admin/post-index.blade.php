  <div class="card">
 
    @if (session('info'))
        <div class="alert alert-success fade show alert-dismissible">
            <strong>{{ session('info') }}</strong>
            <button type="button" class="close" data-dismiss="alert">&times</button>
        </div>
    @endif

   
    <div class="card-header d-flex">
        {{-- Sincronizo el input con la propiedad search de PostIndex.php--}}
        <input wire:model ="search" class="form-control" autofocus placeholder="Busque un post aquí">
    </div>    

        @if ($posts->isEmpty())
            <div class="card-body text-center font-weight-bold">No hay registros para mostrar!!</div>    
        @else   
            <div class="card-body">        
                <table class="table table-sm table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nombres</th>
                            <th class="text-center" colspan="3">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($posts as $post)
                            <tr>                  
                                <td>
                                    {{ $post->id }}
                                </td>   
                                <td>
                                    <a href="{{ route('admin.posts.show', $post) }}">
                                        {{ $post->name }}
                                    </a>
                                    
                                </td>    
                                <td width="10px">
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.posts.show', $post) }}">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </td>
                                <td width="10px">
                                    <a class="btn btn-warning  btn-sm" href="{{ route('admin.posts.edit', $post) }}">
                                        <i class="far fa-edit"></i>
                                    </a>
                                </td>
                                <td width="10px">
                                    <form action={{ route('admin.posts.destroy', $post) }} method="POST" class="deletereg">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger  btn-sm">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>    
                </table>
            </div> 
                <div class="mt-4 ml-4">
                    {{$posts->links()}}
                </div>             
        @endif
</div>    
   
   