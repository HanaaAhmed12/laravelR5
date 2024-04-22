<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('Hanaa/{id}', function ($id) {
    return view('welcome to my website' . $id);
});