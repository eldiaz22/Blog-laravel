<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\postController;
use App\Models\Post;
use function Pest\Laravel\post;

Route::get('/', homeController::class);

// Route::get('/post', [postController::class, "index"])->name("post.index"); //por si mas adelante quiere cambiar la url

// Route::get('/CrearPost', [postController::class, "create"])->name("post.create");
// //enviar datos
// Route::post("/posts", [postController::class, "store"])->name("post.store");
// //mostrar los datos
// Route::get('/post/{post}', [postController::class, "show"])->name("post.show");
// //editar los datos
// Route::get("/post/{post}/edit", [postController::class, "edit"])->name("post.edit");

// Route::put("/post/{post}", [postController::class, "update"])->name("post.update ");

// Route::delete("/post/{post}", [postController::class, "destroy"])->name("post.destroy");


//otra manera  para simplicar nuestro codigo
// Route::resource("/post", postController::class)->except("destroy");
// Route::resource("/post", postController::class)->only(["create,"]); 
Route::resource("post", postController::class);
// ->parameters(["articulo" => "post"])
// ->names("post");

  //php artisan  r:l

// Route::apiResource()


//importa el orden en laravel

// ? opcional
// Route::get('/post/{post}/{categoria?}', function ($post, $categoria = null) {
//     if ($categoria){
//         return "aqui se mostraran todos los post {$post} de la categoria {$categoria}"; }
//     else{
//         return "aqui se mostraran todos los post {$post}";}
// });


//peticiones
//get cuando escribimos una url o damo click  
//post para formulario y no sea visible
//put
//past
//delete


Route::get("prueba", function(){
    // $post = new posts;
    // $post->title = 
    // $post->content ="pkscsjjcj";
    // $psot->categoria = inpu;
    // $post->save();

    // return $post;
                 // 
    // $post = posts::find(1);

    //filtro
    // $post = posts::where("title", "prueba1") ->first();
    // return $post;

    // return $post;
//listar todos los post
    // $post = posts::where("id", ">", "1") ->get();
    // return $post;

    // $post = posts::orderBy("id","asc") ->select("id","title", "content") ->take(2)    ->get();


    // $post = Post::find(1);
    // dd($post->is_active);
    // $post->delete();
    // return "eliminado correctamente";
    // return $post->published_at->format("d-m-y");
    // return $post->created_at->diffForHumans();



}
);