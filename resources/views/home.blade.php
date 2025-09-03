@extends('layouts.app')

@section('title')
    laravel 11 con parametro
@endsection

@push('css')
    <style>
        body {
            background-color: #f3f3f3;
        }
    </style>
@endpush

@section('content')
    <div class="max-w-4xl mx-auto px-4">
        <h1>Aca estamos en el home con alerata afuera</h1>

        <x-alert2 type='info' class="mb-8">
            <x-slot name="tittle">Alerta de informacion</x-slot>
            <x-slot name="message"> Contenido de la alerta varaible con parametro a</x-slot>
            </x-alert>
            <p>hola</p>
    </div>
@endsection
