<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route:: get('/ola', function(){
    return "Olá Mundo";
});

Route::post('/clientes', [ClienteController::class, 'store']);