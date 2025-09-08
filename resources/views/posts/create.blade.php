<x-app-layout>
    @section('title', 'Crear nuevo post');



    @section('content')
       {{--  @if ($errors->any())
            <div>
                <strong>Whoops!</strong> Hubo algunos problemas con su entrada.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif
 --}}
        <h1>Aqui se mostraran el formulario para crear los posts con campos</h1>
        <form action="{{route('posts.store')}}" method="POST">
            {{-- <form action="/posts" method="POST"> --}}
                {{-- para crear formularios con token csrf --}}
                @csrf
                <label for="">
                    Titulo:
                    <input type="text" name="title" value="{{old('title')}}">
                </label>
                @error('title')
                    <p> {{$message}} </p>
                @enderror
                <br>
                <br>
                <label for="">
                    Slug:
                    <input type="text" name="slug" value="{{old('slug')}}">
                </label>
                @error('slug')
                    <p> {{$message}} </p>
                @enderror
                <br>
                <br>
                <label for="">
                    Categorie:
                    <input type="text" name="categorie" value="{{old('categorie')}}">
                </label>
                @error('categorie')
                    <p> {{$message}} </p>
                @enderror
                <br>
                <br>
                <label for="">
                    content:
                    <textarea name="content" cols="30" rows="10" required>{{ old('content') }}</textarea>
                </label>
                <br>
                <br>
                <button type="submit">Guardar </button>
            </form>
    @endsection
</x-app-layout>