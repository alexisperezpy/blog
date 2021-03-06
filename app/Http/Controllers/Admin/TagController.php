<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::orderBy('name', 'asc')->paginate(10);
        return view('admin.tags.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colors = [
           'red' => 'Color Rojo', 
           'blue' => 'Color Azul', 
           'yellow' => 'Color Amarillo', 
           'indigo' => 'Color Indigo', 
           'pink' => 'Color Rosado',
           'purple' => 'Color Morado',
           'grey' => 'Color Gris',
           'green' => 'Color Verde',
           'orange' => 'Color Naranja',
           'brown' => 'Color Marrón'

        ];

        return view('admin.tags.create', compact('colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:tags',
            'color' => 'required'
        ]);
            // return $request;
        $tag = Tag::create($request->all());
        return redirect()->route('admin.tags.index', compact('tag'))->with('info', 'La etiqueta se creó con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        $colors = [
            'red' => 'Color Rojo',
            'blue' => 'Color Azul',
            'yellow' => 'Color Amarillo',
            'indigo' => 'Color Indigo',
            'pink' => 'Color Rosado',
            'purple' => 'Color Morado',
            'grey' => 'Color Gris',
            'green' => 'Color Verde',
            'orange' => 'Color Naranja',
            'brown' => 'Color Marrón'
        ];
        return view('admin.tags.edit', compact('colors','tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Tag $tag)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:tags,slug,$tag->id",
            'color' => 'required'
        ]);

        $tag->update($request->all());

        return redirect()->route('admin.tags.index',$tag)->with('info','Le etiqueta se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tags.index')->with('eliminado', 'ok');
    }
}
