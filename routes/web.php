<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});



Route::get('/moh', function() {
    return 'ff';
})->name('mohammed');


Route::get('/test', function() {
    return 'fuck';
});
// Route::get('users/{id}', [UserController::class, 'index'])->name('user.index');
// Route::get('user', 'UserController@index')->name('user');
// Route::post('user', 'UserController@index')->name('user');



















