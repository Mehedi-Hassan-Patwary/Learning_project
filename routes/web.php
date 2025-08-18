<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/post', function () {
//     return view('post');
// });

// Route::get('/post/{id?}/comment/{commentId?}', function (string $id = null, string $commentId = null){
//         if($id){
//             return "<h1>Post ID : ".$id ."</h1><h2>Comment ID : ".$commentId."</h2>";
//         }else{
//             return "<h1>Post ID not found</h1>";
//         }
//     // return view('post');
//     // return view('post', ['id' => $id]);


// });

Route::get('/post/{id?}', function (string $id = null) {
    if($id){
        return "<h1>Post ID : ".$id ."</h1>";
    }else{
        return "<h1>Post ID not found</h1>";
    }
})->whereAlphaNumeric('id');

// Route::get('/user', [PageController::class, 'ShowUser']);

route::get('/', [UserController::class, 'show']);
