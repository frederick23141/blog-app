<x-app-layout>
    @section('title', 'Todos los posts')

    @section('content')
        <h1>Aqui se mostraran todos los posts</h1>
        <a href="/posts/create">Crear nuevo post</a>
        <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="/posts/{{ $post->id }}">
                        {{ $post->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endsection
</x-app-layout>
