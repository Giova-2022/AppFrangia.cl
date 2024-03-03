<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FRANGIA | Imprenta digital</title>
    <link rel="icon" href="favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<?php echo $__env->make('template.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<!-- carrusel-->

<div id="default-carousel" class="relative w-5/6 mx-auto mt-10 z-20 mb-20" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">

        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out bg-pink-500" data-carousel-item>

            <img src="<?php echo e(asset('images/slider/home/portada-2-ruedas.png')); ?>"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              
              
                <button class="absolute bg-pink-300 p-1 b rounded-lg uppercase bottom-10 right-10 cursor-point hover:bg-blue-400 hover:text-white">
                    comprar
                </button>
       
            </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out bg-blue- 500" data-carousel-item>
            <img src="<?php echo e(asset('images/slider/home/calendario-corporativo.png')); ?>"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">

            <button
                class="absolute bg-blue-300 p-1 b rounded-lg uppercase bottom-10 right-10 cursor-point hover:bg-blue-400 hover:text-white">
                comprar
            </button>

        </div>
        <!-- Item 3 -->
        <div class="hidden duration-800 ease-in-out bg-blue-500" data-carousel-item>

            <img src="<?php echo e(asset('images/slider/home/pendones.png')); ?>"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">

            <button
                class="absolute bg-blue-300 p-1 b rounded-lg uppercase bottom-10 right-10 cursor-point hover:bg-blue-400 hover:text-white">
                comprar
            </button>
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-900 ease-in-out bg-yellow-900" data-carousel-item>

            <img src="<?php echo e(asset('images/slider/home/letrero-2-ruedas.png')); ?>"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">

            <button
                class="absolute bg-yellow-300 p-1 b rounded-lg uppercase bottom-10 right-10 cursor-point hover:bg-blue-400 hover:text-white">
                Registrarme
            </button>
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo e(asset('images/slider/home/letreros.png')); ?>"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
            data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
            data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
            data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button ml-20"
        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4  dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

</body>



<?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\appfrangia.cl\resources\views/home.blade.php ENDPATH**/ ?>