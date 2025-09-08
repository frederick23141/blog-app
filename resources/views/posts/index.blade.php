<x-app-layout>
    @section('title', 'Todos los posts')

    @section('content')
        <h1>Aqui se mostraran todos los posts</h1>
        <a href="{{route('posts.create')}}">Crear nuevo post</a>
        {{-- <a href="/posts/create">Crear nuevo post</a> --}}
        <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="{{route('posts.show', $post)}}">
                        {{ $post->title }}
                    </a>
                    {{-- <a href="/posts/{{ $post->id }}">
                        {{ $post->title }}
                    </a> --}}
                </li>
            @endforeach
        </ul>

        {{-- post links para poner las paginas asociadas del paginate --}}
        {{ $posts->links() }}
    @endsection
</x-app-layout>