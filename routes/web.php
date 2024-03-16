<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/terminosYcondiciones', function () {
    return view('terminosYcondiciones');
});


Route::get('/portafolio', function () {
    return view('portafolio');
});


Route::get('/contacto', function () {
    return view('contacto');
});

 Route::get('/', function () {
    return view('home');
});


Route::get('/compra', function () {
    return view('compra');
})->middleware('auth');

Route::get('/cotizacion', function () {
    return view('cotizacion');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //ruta de carrito de compra
    Route::get('/front/productos', [FrontController::class, 'productos']);
    Route::post('/compra', [App\Http\CartController::class, 'compra'])->name('compra');
    Route::get('/checkout', [App\Http\CartController::class, 'checkout'])->name('checkout');
    Route::get('/eliminar', [App\Http\CartController::class, 'eliminar'])->name('eliminar');
    Route::post('/borrarItem', [App\Http\CartController::class, 'borrarItem'])->name('borrarItem');

});


require __DIR__.'/auth.php';
