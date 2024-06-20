<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route:: get('student',[StudentController::class,'index']);

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});