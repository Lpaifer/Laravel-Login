<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Rota Pública
Route::post('/', [LoginController::class, 'login'])-> name('login'); // POST - http://127.0.0.1:8000/api/
// {
// 	"email": "paiferlucas2212@gmail.com",
// 	"password": "123456a"
// }

// Rota privada
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::get('/users', [UserController::class, 'index']); // GET - http://127.0.0.1:8000/api/users?page=1

    Route::post('/logout/{user}', [LoginController::class, 'logout']);
});
