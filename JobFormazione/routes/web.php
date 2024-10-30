<?php

use App\Http\Controllers\ProvaController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return "Questa è la pagina about";
});

Route::post('/form', function(){
    return "dati inviati";
});

Route::match(['get', 'post'], '/form2', function(){
    return "questa è la pagina form2";
});

Route::any('/home', function(){
    return "rotta metodi http";
});

Route::prefix('admin')->group(function(){
    Route::get('/users', function(){
        return "Gestione utenti";
    });
    Route::get('/settings', function(){
        return route('profile');
    });
});

Route::get('profile', function(){
    return "rotta personalizzata";
})-> name("profile");

Route::get('/prova',[ProvaController::class, 'prova']);

Route::post('/prova-data', [ProvaController::class, 'gestioneDati']);

Route::get('/home2', function(){
    return view('home');
});

Route::get('/esempio', function(){
    $items = ['item1', 'item2', 'item3'];
    $title = "pagina di esempio";
    $sumValue= "Qualcosa";
    $emptyArray=[];
    $nullVariable= null;
    return view('esempio', compact('items', 'title', 'sumValue', 'emptyArray', ));
});