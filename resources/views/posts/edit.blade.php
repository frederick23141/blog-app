<x-app-layout>
    @section('title', 'Editar post');

    @section('content')
        <h1>Aqui se mostraran el formulario para crear los posts con campos</h1>
        <form action="/posts/{{$post->id}}" method="POST">
            {{-- para crear formularios con token csrf --}}
            @csrf
           {{--  para hacer el metodo put @method('put') --}}
            @method('PUT')

            <label for="">
                Titulo:
                <input type="text" name="title" value="{{$post->title}}">
            </label>
            <br>
            <br>
            <label for="">
                Categorie:
                <input type="text" name="categorie" value="{{$post->categorie}}">
            </label>
            <br>
            <br>
            <label for="">
                content:
                <textarea name="content" cols="30" rows="10" required>{{ old('content') }}>
                    {{$post->content}}
                </textarea>
            </label>
            <br>
            <br>
            <button type="submit">Actualizar post </button>
        </form>
    @endsection
</x-app-layout>
