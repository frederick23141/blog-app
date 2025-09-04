<x-app-layout>
    @section('title', 'Crear nuevo post');

    @section('content')
        <h1>Aqui se mostraran el formulario para crear los posts con campos</h1>
        <form action="{{route('posts.store')}}" method="POST">
        {{-- <form action="/posts" method="POST"> --}}
            {{-- para crear formularios con token csrf --}}
            @csrf
            <label for="">
                Titulo:
                <input type="text" name="title">
            </label>
            <br>
            <br>
            <label for="">
                Categorie:
                <input type="text" name="categorie">
            </label>
            <br>
            <br>
            <label for="">
                content:
                <textarea name="content" cols="30" rows="10" required>{{ old('content') }}></textarea>
            </label>
            <br>
            <br>
            <button type="submit">Guardar </button>
        </form>
    @endsection
</x-app-layout>
