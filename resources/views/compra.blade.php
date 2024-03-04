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

    <div class="py-5">
        <div class="w-5/6 mx-auto sm:px-6 lg:px-8  ">
            <div class="bg-gradient-to-b from-gray-300 to-gray-100 rounded-xl overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 ">
                    <h3>{{ Auth::user()->name }} estas por realizar una orden de compra
                        <b> <a href="https://wa.me/56936384308" class=" text-blue-700 text-xs ">Necesito ayuda!</a></b>
                    </h3>

                </div>
            </div>
        </div>
    </div>


    <!--Formulario orden de compra-->
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Formulario de pedido</h1>

        <form action="/pedidos" method="post" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-2 gap-4">

                <div>
                    <label for="id_cot" class="block mb-2">ID Cotización</label>
                    <input type="number" name="id_cot" id="id_cot" class="border rounded-md p-2 w-full"
                        value="{{ old('id_cot') }}">
                </div>

                <div>
                    <label for="nombre" class="block mb-2">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="border rounded-md p-2 w-full"
                        value="{{ old('nombre') }}">
                </div>

                <div>
                    <label for="rut" class="block mb-2">Rut</label>
                    <input type="text" name="rut" id="rut" class="border rounded-md p-2 w-full"
                        value="{{ old('rut') }}">
                </div>

                <div>
                    <label for="categoria" class="block mb-2">Categoría</label>
                    <select name="categoria" id="categoria" class="border rounded-md p-2 w-full">
                        <option value="">Seleccione una categoría</option>
                        <option value="1">Opción 1</option>
                        <option value="2">Opción 2</option>
                        <option value="3">Opción 3</option>
                    </select>
                </div>

                <div>
                    <label for="producto" class="block mb-2">Producto</label>
                    <input type="text" name="producto" id="producto" class="border rounded-md p-2 w-full"
                        value="{{ old('producto') }}">
                </div>

                <div>
                    <label for="descripcion" class="block mb-2">Descripción</label>
                    <textarea name="descripcion" id="descripcion" class="border rounded-md p-2 w-full" rows="4">{{ old('descripcion') }}</textarea>
                </div>

                <div>
                    <label for="detalle" class="block mb-2">Detalle</label>
                    <textarea name="detalle" id="detalle" class="border rounded-md p-2 w-full" rows="4">{{ old('detalle') }}</textarea>
                </div>

                <div>
                    <label for="alto" class="block mb-2">Alto</label>
                    <input type="number" name="alto" id="alto" class="border rounded-md p-2 w-full"
                        value="{{ old('alto') }}">
                </div>

                <div>
                    <label for="ancho" class="block mb-2">Ancho</label>
                    <input type="number" name="ancho" id="ancho" class="border rounded-md p-2 w-full"
                        value="{{ old('ancho') }}">
                </div>

                <div>
                    <label for="img1" class="block mb-2">Imagen 1</label>
                    <input type="file" name="img1" id="img1" class="border rounded-md p-2 w-full">
                </div>

                <div>
                    <label for="img2" class="block mb-2">Imagen 2</label>
                    <input type="file" name="img2" id="img2" class="border rounded-md p-2 w-full">
                </div>

                <div>
                    <label for="cantidad" class="block mb-2">Cantidad</label>
                    <input type="number" name="cantidad" id="cantidad" class="border rounded-md p-2 w-full"
                        value="{{ old('cantidad') }}">
                </div>

                <div class="mb-3">
                    <label for="diseno" class="block mb-2">Diseño</label>
                    <div class="flex items-center">
                        <input type="radio" name="diseno" id="diseno_si" value="si" class="mr-2" checked>
                        <label for="diseno_si">Sí</label>
                        <input type="radio" name="diseno" id="diseno_no" value="no" class="ml-4 mr-2">
                        <label for="diseno_no">No</label>
                    </div>
                </div>
                <div class="contenedor-precio display-block w-40 ">
                    <div>
                        <label for="neto" class="block mb-2">Neto</label>
                        <input type="price" name="neto" id="neto" class="border rounded-md p-2 w-full"
                            value="{{ old('neto') }}" onkeyup="calcularIVA()">
                    </div>

                    <div>
                        <label for="iva" class="block mb-2">IVA (19%)</label>
                        <input type="price" name="iva" id="iva" class="border rounded-md p-2 w-full"
                            value="{{ old('iva') }}" readonly>
                    </div>

                    <div>
                        <label for="total" class="block mb-2">Total</label>
                        <input type="price" name="total" id="total" class="border rounded-md p-2 w-full"
                            value="{{ old('total') }}" readonly>
                    </div>

                </div>

                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear pedido</button>
        </form>
    </div>

    </div>
</x-app-layout>



@include('template.footer')
<script>
    function calcularIVA() {
        const neto = parseFloat(document.getElementById('neto').value); // Ensure numerical value
        if (isNaN(neto)) {
            alert('Ingrese un valor numérico válido para el neto.');
            return;
        }

        const iva = neto * 0.19;
        const total = neto + iva;

        document.getElementById('iva').value = iva.toFixed(2);
        document.getElementById('total').value = total.toFixed(2);
    }
</script>
