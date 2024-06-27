<?php

use Illuminate\Http\Request;
use App\Http\API\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\API\MarketPlaceController;
use App\Http\API\ItemsController;
use App\Http\API\StartNewBusinessController;

Route:: middleware('auth:sanctum')->get('/user',function(Request $request){
    return $request->user();
});


Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

//New Business 
Route::get('getBusinesses', function () {
    $controller = new StartNewBusinessController();
    return $controller->getBusinesses();
});
Route::post('start',[StartNewBusinessController::class,'NewShop']);

//Market Place
Route::post('sell',[MarketPlaceController::class,'NewProduct']);

Route::get('getProducts', function () {
    $controller = new MarketPlaceController();
    return $controller->getProducts();
});

Route::post('items',[ItemsController::class,'NewItem']);

Route::get('getItems', function () {
    $controller = new ItemsController();
    return $controller->getItems();
});