<x-app-layout>
    <h1>AQUI SE CREARA UN NUEVO POST</h1>
    @if ($errors->any())
    <div>
        <h2>ERROR</h2>
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route("post.update", $post)}}" method="POST">
    @csrf
    @method("put")
<label for="">
        Titulo: <input type="text" name="title" value="{{old("title", $post->title)}}">
        <!-- ala hora de actualizar y haigan un error no te cargue con los datos de la base de datos sino con el que colocaste en el momento -->
         <!-- primer parametro como title , y segundo el de la base de dato para cuando entras a editar desde cero-->
    </label>
    <br>
    <br>
    <label for="">
        slug: <input type="text" name="slug" value="{{$post->slug}}">
    </label>
    <br>
    <br>
    <label for="">
        Categoria: <input type="text" name="categoria" value="{{$post->categoria}}">
    </label>
    <br>
    <br>
    <label for="">
        contenido:
    <textarea name="content" id="" >{{$post->content}}</textarea>
    </label>
    <br>
    <br>
    <button type="submit">actualizar Post</button>


</form>

</x-app-layout>
