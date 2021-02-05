<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Compruebo si cualquier user_id que se pasa por el formulario coincide con el del usuario logeado
        // Entonces e permito la verificacion de las reglas y enviar el formulario
        return true;
        // if ($this->user_id == auth()->user()->id) {
        //     return true;
        // } else {
        //     return false;
        // }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $post = $this->route()->parameter('post');
        
        $rules=[
            'name'=>'required|min:10',
            'slug'=>'required|unique:posts',
            'status'=>'required|in:1,2',
            'file'=> 'image'
        ];
        
        if($post){
            $rules['slug'] = 'required|unique:posts,slug,'. $post->id;
        }

        if($this->status==2){
            $rules = array_merge($rules,[
                'category_id'=>'required',
                'tags'=>'required',
                'extract'=>'required|min:10',
                'body'=>'required|min:30'
            ]);
        }
        
        return $rules;
    }
}
