<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NUEVO PEDIDO</title>
    <link rel="icon" href="favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-yellow-500 leading-tight">
            Orden de compra
        </h2>
    </x-slot>

    <!-- cover-->
    <div class="py-5 z-30 absolute">
        <div class="w-5/6 mx-auto sm:px-6 lg:px-8  ">
            <div class="bg-gradient-to-b from-gray-300 to-gray-100 rounded-xl overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 ">
                    <h3>{{ Auth::user()->name }} es neceseario llenar todos los campos
                        <b> <a href="https://wa.me/56936384308" class=" text-blue-700 text-xs ">Necesito ayuda!</a></b>
                    </h3>

                </div>
            </div>
        </div>
    </div>

    <!-- fin cover-->




    <!--Formulario orden de compra-->


    <form class="w-11/12 mx-auto pt-44 mb-8">
        <div class="mb-5 mx-auto text-center">
            <h1 class="flex items-center text-5xl font-extrabold  dark:text-black">Orden<span
                    class="bg-blue-100 text-blue-800 text-2xl font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-2">
                    DE COMPRA</span></h1>

        </div>



        <!-- Busqueda-->
        <div class="contenedor w-44 m-auto">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">
                Cotizacion</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">

                </div>
                <input type="search" id="default-search" placeholder="Nº de Cotizacion"
                    class="block w-full px-6 ps-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                <button type="submit"
                    class="  text-white min-w-14 flex items-center absolute -end-20 bottom-0.5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring--800">
                    <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    Buscar
                </button>
            </div>
        </div>
        <!-- Nombre de Ususario-->
        <div class="fondo__formulario  bg-gray-400 p-3 rounded-lg mt-3 w-full">
            <div class="flex mt-2">
                <span
                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                    </svg>
                </span>
                <input type="text" id="website-admin" placeholder="Nombre"
                    class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            </div>
            <div class="flex mt-2">
                <input type="number" id="number-input" aria-describedby="helper-text-explanation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Rut" required />

            </div>
            <div class="flex mt-2">
                <select id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>PRODUCTOS</option>
                    <option value="FLYERS">FLYERS</option>
                    <option value="TARJETAS">TARJETAS</option>
                    <option value="LETRERO">LETRERO</option>
                    <option value="CALENDARIO">CALENDARIO</option>
                    <option value="CALENDARIO">TALONARIO</option>
                </select>
            </div>

            <div class="flex mt-2">
                <textarea id="message" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:placeholder-white dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </textarea>
            </div>


            <br>
            <div class="flex mt-2">
                <input type="number" id="number-input" aria-describedby="helper-text-explanation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mr-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="alto" required />
                <input type="number" id="number-input" aria-describedby="helper-text-explanation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mr-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="ancho" required />
                <input type="number" id="number-input" aria-describedby="helper-text-explanation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Cantidad" required />
            </div>
            <h4 class="mt-6 text-xl text-center">¿Tienes Diseño?</h4>
            <br>

            <div class="flex -mt-4 flex-place-content-center justify-center">
                <input type="radio" id="has-design" name="design" value="true"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="has-design" class="ms-2 text-sm font-medium text-gray-400 dark:text-gray-500">SI</label>

                <input type="radio" id="no-design" name="design" value="false" checked
                    class="ml-10 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="no-design" class="ms-2 text-sm font-medium text-gray-400 dark:text-gray-500">NO</label>
            </div>

            <div class="flex mt-2 mb-28">
                <label for="file_input" class="text-center text-white font-bold">Sube tu Diseño </label>
                <div class="flex mt-2 items-center justify-center w-full h-10 bg-no-repeat bg-contain bg-center rounded-lg cursor-pointer border border-gray-300 bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    id="file-upload">
                    <img src="image/iconos/libro.png" alt="Archivo" class="w-10 z-30">

                    <span id="file-name" class="text-sm text-gray-900 ml-2"></span>

                    <input
                        class="block w-full text-sm text-gray-900 opacity-0 border-0 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file">
                </div>
            </div>

            <div class="grid grid-cols-4 border border-violet-600  bg-slate-500 rounded-lg sm:max-w-5/6">
                <div class="row-[1/4] border border-yellow-600 ">
                    <img src="image/iconos/Oc.png" alt="">

                </div>

                <div class="col-start-2 col-span-1 border border-red-600" >
                    <h4 class="text-center text-white uppercase text-xs absolute mx-auto ml-11 mt-2 ">neto</h4>
                </div>

                <div class="col-start-3 col-span-2" >
                        <input type="number" id="neto" placeholder="$"
                        class="h-8 col-start-2 col-span-2  bg-orange-400 1  mr-4 rounded-none rounded-l-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <div class="col-start-2 col-span-1 border border-red-600" >
                    <h4 class="text-center text-white uppercase text-xs absolute mx-auto ml-11 mt-2 ">19%</h4>
                </div>
                
                <div class="col-start-3 col-span-2" >
                        <input type="number" id="iva" placeholder="$"
                        class="h-8 col-start-2 col-span-2  bg-orange-400 1  mr-4 rounded-none rounded-l-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                
                <div class="col-start-2 col-span-1 border border-red-600" >
                    <h4 class="text-center text-white uppercase text-lg absolute mx-auto ml-5 mt-1 ">total</h4>
                </div>
                
                <div class="col-start-3 col-span-2" >
                        <input type="number" id="total" placeholder="$"
                        class="h-8 col-start-2 col-span-2  bg-orange-400 1  mr-4 rounded-none rounded-l-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                
            </div>

           


        </div>
    </form>





</x-app-layout>



@include('template.footer')
