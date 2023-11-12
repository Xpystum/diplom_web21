<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\password;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::controller(IndexController::class)->group(function () {
    Route::post('/items-menu', 'menuItems');
    Route::post('/category-products', 'categoryProducts');
    Route::post('/items-product', 'productItems');
    Route::post('/brands-product', 'brandsItems');
    Route::post('/all-items', 'allItems');
    Route::post('/relevance-product', 'relevanceProduct');
    Route::post('/brands', 'brands');
});


Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'registerUser')->name('auth.RegisterUser');
    Route::post('/auth', 'authUser')->name('auth.LoginUser');
    Route::post('/token', 'tokenUser')->name('auth.TokenUser');
});



// Route::get('/token', function(){

//     $user = App\Models\User::where('email', 'test@example.com')->first();
//     $token = $user->createToken('my_token');
//     dd($token);

//     /*
//     $user->password = Hash::make('123');
//     $user->save();*/
// });








