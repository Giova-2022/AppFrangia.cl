<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ADMIN | FRANGIA.CL</title>
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




    <div class="py-5">
        <div class="w-5/6 mx-auto sm:px-6 lg:px-8  ">
            <div class="bg-gradient-to-b from-gray-300 to-gray-100 rounded-xl overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 ">
                    <h3>Hola 🖐 {{ Auth::user()->name }} <br> si puedo ayudarte en
                        algo recuerda contactarme <b> <a href="https://wa.me/56936384308"
                                class="text-blue-700">AQUI!</a></b></h3>

                </div>
            </div>
        </div>
    </div>
    <!-- acceso a cotizacion y orden de compra-->
    <div class="py-2 flex w-5/6 mx-auto ">
        <div
            class="mx-4 mr-4 bg-gradient-to-b from-gray-300 to-gray-100 rounded-xl overflow-hidden shadow-xl sm:rounded-lg  mx-auto sm:px-6 lg:px-8 flex-1">
            <div class="p-6 ">
                <a href="{{ asset('compra') }}" class="text-white rounded-lg text-xs mx-auto bg-purple-600 uppercase py-2 px-3 animate-pulse">
                    OR. de compra
                  </a>
            </div>
        </div>
        <div
            class="mx- bg-gradient-to-b from-gray-300 to-gray-100 rounded-xl overflow-hidden shadow-xl sm:rounded-lg  mx-auto sm:px-6 lg:px-8 flex-1">
            <div class="p-6 ">
                <a href="{{ asset('cotizacion') }}" class="text-white rounded-lg text-xs mx-auto bg-green-500 uppercase py-2 px-3">
                  Cotizacion
                </a>
              </div>
        </div>
        
    </div>
    <div class="py-2  flex w-5/6 mx-auto ">
        <div
            class="mx-4 mr-4 bg-gradient-to-b from-gray-300 to-gray-100 rounded-xl overflow-hidden shadow-xl sm:rounded-lg  mx-auto sm:px-6 lg:px-8 flex-1">
            <div class="p-6 ">
                <a href="{{ asset('compra') }}" class="text-white rounded-lg text-xs mx-auto bg-gray-600 uppercase py-2 px-3 ">
                    Ver productos
                  </a>
            </div>
        </div>
        <div
            class="mx-2 bg-gradient-to-b from-gray-300 to-gray-100 rounded-xl overflow-hidden shadow-xl sm:rounded-lg  mx-auto sm:px-6 lg:px-8 flex-1">
            <div class="p-6 ">
                <a href="" class="text-white rounded-lg text-xs mx-auto bg-gray-500 uppercase py-2 px-3">
                  portafolio
                </a>
              </div>
        </div>
        
    </div>


</x-app-layout>

@include('preguntas')


@include('template/footer')

