<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Request\AuthorsRequest;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\BookAuthorController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->prefix('v1')->group(function(){
    Route::get('/user', function(Request $request){
        return $request->user();
    });
    // cara rumit
    // Route::get('/authors/{author}', [AuthorsController::class, 'show']
    // );
    // Route::get('/authors', [AuthorsController::class, 'index']
    // );
    // Route::post('/authors', [AuthorsController::class, 'store']
    // );
    
    // cara simpel
    Route::apiResource('/authors', AuthorsController::class);

    Route::apiResource('/books', BooksController::class);

    Route::apiResource('/BookAuthor', BookAuthorController::class);
});

//author/{author}
//untuk satu spesifik autor



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });