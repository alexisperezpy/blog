<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('admin.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id'); //Devuelve un array de parejas 'id'=>'nombre'
        $tags = Tag::all();//Devuelve un array de objetos Tag.
        return view('admin.posts.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        // se guarda el post//
        $post = Post::create($request->all()); 

        // se consulta si hay etiquetas seleccionadas en el formulario
        if($request->tags){
            //se añade los tags a la tabla intermedia
            $post->tags()->attach($request->tags);
        }

        //consulta si está enviando una imagen
        if($request->file('file')){
                // guarda la imagen en la carpeta posts y copia la url en la variable $url
            $url=Storage::put('posts', $request->file('file'));

                //al usar create para guardar la imagen en la tabla imagen se habilita asignacion masiva
                $post->image()->create([
                'url'=>$url]);
        }
        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

        // $similares = Post::where('category_id', $post->category_id)
        //     ->where('status', 2)
        //     ->where('id', '!=', $post->id)
        //     ->latest('id')
        //     ->take(4)->get();
        
       
        return view('admin.posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('name', 'id'); //Devuelve un array de parejas 'id'=>'nombre'
        $tags = Tag::all();//Devuelve un array de objetos Tag.
        return view('admin.posts.edit', compact('post','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->all());
        
        if($request->file('file')){
           $url = Storage::put('posts', $request->file('file'));

            if($post->image){
                Storage::delete($post->image->url);

                $post->image()->update([
                    'url'=>$url
                ]);
            }else{
                $post->image()->create([
                    'url'=>$url
                ]);
            }            
        }
        if ($request->tags) {
            //se añade los tags a la tabla intermedia
            $post->tags()->sync($request->tags);
        }
        return view('admin.posts.index')->with('info','El post se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        if ($post->image) {
            Storage::delete($post->image->url);
            $post->image->delete();
        }

        if ($post->tags) {
            //se añade los tags a la tabla intermedia
            $post->tags()->delete();
        }
        $post->delete();
        return redirect()->route('admin.posts.index')->with('eliminado', 'ok');
    }
}
