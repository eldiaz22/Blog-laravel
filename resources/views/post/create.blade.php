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

<form action="{{route("post.store")}}" method="POST">
    @csrf
    <label for="">
        Titulo: <input type="text" name="title"  value="{{old("title")}}">
    </label>
    @error("title")
    {{$message}}
    @enderror


    <br>
    <br>
    <label for="">
        slug: <input type="text" name="slug" value="{{old("slug")}}" >
    </label>
    @error("slug")
    {{$message}}
    @enderror
    <br>
    <br>
    <label for="">
        Categoria: <input type="text" name="categoria" value="{{old("categoria")}}" >
        <!-- metodo old me mantiene el contenido si hay un error -->
    </label>
    @error("categoria")
    {{$message}}
    @enderror
    <br>
    <br>
    <label for="">
        contenido:
    <textarea name="content" id=""></textarea>
    </label>
    <br>
    <br>
    <button type="submit">crear post</button>


</form>

</x-app-layout>
