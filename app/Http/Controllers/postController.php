<?php

namespace App\Http\Controllers;

use App\Http\Requests\storePostRequest;
use App\Mail\PostCreateMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use function Pest\Laravel\post;

// use function Pest\Laravel\post;

class postController extends Controller
{
 public function index()
 {
   // $posts = posts::orderBy("id", "desc")->get();
   $posts =   Post::orderBy("id", "desc")->paginate(5);   // esta haciendo una consulta  en el modulo post

    return  view("post.index",compact("posts"));  // lo va mostrar el la vista index y va llevar acabo la variable posts a la vista 

 }
 public function create(){
    return view("post.create");
 }
public function store(storePostRequest $request){
   // return request()->all();  una forma
   // return $request->all();
  //  $post = new Post();
  //  $post->title = $request->title;
  //  $post->slug = $request->slug;
  //  $post->categoria = $request->categoria;
  //  $post->content = $request->content;
  //  $post->save();
  //  return redirect()->route("post.index");

  #validar formulario
  // $request->validate([
  //   "title"=>"required|min:5|max:255",
  //   // "title"=>["required","min:5","max:255"]
  //   "slug"=>"required|unique:posts",
  //   //unique para validar si es unico el la tabla posts
  //   "categoria"=>"required",
  //   "content"=>"required"
  // ]);
  #otra forma
  $post = Post::create($request->all());
// para enviar correo 

Mail::to("prueba@prueba.com")->send(new PostCreateMail($post));


  // return $request->all();
  return redirect()->route("post.index");



}

public function edit(Post $post){
  //  $post = posts::find($post);

   return view("post.edit", compact("post")); 

 }

 public function update(Request $request,Post $post){
  //  $post = posts::find($post);
  //  $post->title = $request->title;
  //  $post->slug = $request->slug;
  //  $post->categoria = $request->categoria;
  //  $post->content = $request->content;
  //  $post->save();
  $request->validate([
    "title"=>"required|min:5|max:255",
    // "title"=>["required","min:5","max:255"]
    "slug"=>"required|unique:posts,slug,{{$post->id}}",  //para que lo excluya de la validacion

    //unique para validar si es unico el la tabla posts
    "categoria"=>"required",
    "content"=>"required"
   ]);



  $post->update($request->all());
  return redirect(route("post.show", $post));




 }


 //compact(post)
 public function show(Post $post){
   //  return view("post.show", [
   //    "post" => $post
   //  ]);
  //  $post = Post::where('slug', $slug)->firstOrFail();
  //  $post = Post::find($post);
   return view("post.show", compact("post")); 


 }



 public function destroy(Post $post){

  //  $post = Post::find($post);
   $post->delete();
   return  redirect(route("post.index")); 


 }

}