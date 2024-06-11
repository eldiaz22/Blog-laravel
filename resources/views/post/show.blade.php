<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>AQUI SE MOSTRARA EL POST <?php echo $post ?></h1>  -->
    <!--   $post ?>; -->
    <a href="{{route("post.index")}}">Volver a posts</a>
    <h1>Titulo: {{$post->title}}</h1>
    <p>Slug: {{$post->slug}}</p>
    <p>categoria: {{$post->categoria}}</p>
    <p>Contenido: {{$post->content}}</p>

    <h1>
        <a href="{{route("post.edit", $post) }}">
            editar post
        </a>"
    </h1>

    <form action="{{route("post.destroy" , $post)}}" method="POST">
        @csrf
        @method("DELETE")
        <button type="submit">
            eliminar post
        </button>

    </form>
</body>
</html>