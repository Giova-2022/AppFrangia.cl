<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>COTIZACION</title>
    <link rel="icon" href="favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-yellow-500 leading-tight">
            {{ __('Panel de control') }}
        </h2>
    </x-slot>
<h1 class="text-center text-2xl text-bold mb-5 uppercase mt-20"><b>cotizacion</b></h1>


</x-app-layout>

@include('template.footer')