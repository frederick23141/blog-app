<x-app-layout>
    @section('title', 'Mostrando post')

    @section('content')
    <a href="/posts">Volver a posts</a>
        <h1>Mostrando el post {{ $post->title }} </h1>
        <p>
            <b>Categoria :
                {{ $post->categorie }}
            </b>
        </p>
        <p>
            <b>
                Contenido:
                {{ $post->content }}
            </b>
        </p>

        <a href="/posts/{{$post->id}}/edit">Editar post</a>

        <form action="/posts/{{$post->id}}" method="POST">
             @csrf
            @method('DELETE')
           
            <button type="submit">
                Eliminar
            </button>
        </form>
    @endsection
</x-app-layout>
