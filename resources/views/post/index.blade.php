<x-app-layout> 
<!-- componentes html para evitar escribir otra ves el mismo codigo -->

<h1>Aqui se mostraran los estilos</h1> 
<!-- la mejor forma para las rutas -->
<h1><a href="{{route("post.create")}}">Nuevo Post</a></h1>  




<!-- ciclo for each para recorrer nuestros post aqui usamos la variables posts -->
@foreach ($posts as $post)
   <ul>
    <li>
        <!-- <a href="/post/{{$post->id}}">
            {{ $post->title }}
        </a> -->
        <a href="{{route("post.show", $post)}}">  
            {{ $post->title }} 
            <!-- mostraremos solo el titulo -->
        </a>


    </li>"
   </ul>
@endforeach
{{$posts->links()}} 
<!-- para paginar lo que se va mostrar en nuestra pagina principal -->
</x-app-layout>