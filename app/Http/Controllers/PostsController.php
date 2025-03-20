<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /*Indice*/ 
    public function index (){
        $posts = Posts::paginate(5);
        return view('posts',['posts'=>$posts]);
    } 
   /*Borrar*/ 
    public function destroy ($id){
        $post =  Posts::find($id);

        $post->delete();
        
        return redirect()->route('Inicio');
    } 
   /*Crear Nuevo*/ 
    public function create (PostRequest $request){
        $nuevopost = new Posts;
        $nuevopost->titulo = $request->titulo;
        $nuevopost->contenido = $request->contenido;
        $nuevopost->autor = $request->autor;
        $nuevopost->save();
        
        return redirect()->route('Inicio');
    } 
   /*Actualizar*/ 
    public function update (PostRequest $request,$id){
        $nuevopost =  Posts::find($id);
        $nuevopost->titulo = $request->titulo;
        $nuevopost->contenido = $request->contenido;
        $nuevopost->autor = $request->autor;
        $nuevopost->save();
        return redirect()->route('Inicio');
    } 

       /*Filter*/ 
       public function filter (Request $request){
        $posts= Posts::where('autor',$request->autor)->paginate(5);
        return view('posts',['posts'=>$posts]);
    } 

    /*vista Crear Post*/ 
    public function VistaCrearPost (){
        return view('Crearpost');
    } 

       /*Vista actualizar*/ 
       public function VistaActualizar ($id){
        $post = Posts::find($id);
        return view('Vistactualizar',['post'=>$post]);
    } 


       /*show*/ 
       public function show ($id){
        $post =  Posts::find($id);
        return view('Vermas',['post'=>$post]);
        
    } 





}
