{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Correo por aprobar</h1>
    <p>
        se ha creado un nuevo post, que necesita ser aprobado.

    </p>
    <a href="{{route('posts.show',$post)}}">Click para probar</a>
</body>

</html> --}}

{{-- coment to use markdown --}}
{{-- don't use identity  --}}
<x-mail::message>

#Correo por aprobar

<x-mail::panel>
se ha creado un nuevo post, que necesita ser aprobado
</x-mail::panel>

<x-mail::button :url="route('posts.show', $post)"
   color="success">>
Ver Post
</x-mail::button>

</x-mail::message>