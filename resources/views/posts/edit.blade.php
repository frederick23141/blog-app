<x-app-layout>
    @section('title', 'Editar post');

    @section('content')
        <h1>Aqui se mostraran el formulario para crear los posts con campos</h1>

        @if ($errors->any())
            <div>
                <strong>Whoops!</strong> Hubo algunos problemas con su entrada.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        <form action="{{route('posts.update', $post)}}" method="POST">
            {{-- <form action="/posts/{{$post->id}}" method="POST"> --}}
                {{-- para crear formularios con token csrf --}}
                @csrf
                {{-- para hacer el metodo put @method('put') --}}
                @method('PUT')

                <label for="">
                    Titulo:
                    <input type="text" name="title" value="{{old('title', $post->title)}}">
                </label>
                <br>
                <br>
                <label for="">
                    Slug:
                    <input type="text" name="slug" value="{{old('slug', $post->slug)}}">
                </label>
                <br>
                <br>
                <label for="">
                    Categorie:
                    <input type="text" name="categorie" value="{{old('categorie', $post->categorie)}}">
                </label>
                <br>
                <br>
                <label for="">
                    content:
                    <textarea name="content" cols="30" rows="10" required>{{ old('content') }}>
                                    {{old('content', $post->content)}}
                                </textarea>
                </label>
                <br>
                <br>
                <button type="submit">Actualizar post </button>
            </form>
    @endsection
</x-app-layout>