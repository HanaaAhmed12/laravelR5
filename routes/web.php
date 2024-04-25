<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\FormController;

Route::post('submit1', [FormController::class, 'form'])->name('submitForm');

Route::get('test30',[MyController::class, 'my_data']);




Route::get('/', function () {
    return view('welcome');
});

// Route::get('Hanaa/{id?}', function ($id = 0) {
//     return 'Welcome to my website ' . $id;
// })->where(['id' => '[0-9]+']);

// Route::get('Hanaa/{id?}', function ($id = 0) {
//     return 'Welcome to my website ' . $id;
// })->whereNumber('id');

Route::get('job/{name?}', function ($name) {
    return 'My job is ' . $name . '.';
})->whereAlpha('name');

Route::get('Hanaa/{name?}', function ($name) {
    return 'My name is: ' . $name;
})->whereIn('name' , ['Hany' , 'Ahmed' , 'Samia']);


Route::prefix('cars')->group(function () {
    Route::get('Toyota', function() {
        return 'Category is Toyota ';
    });
    Route::get('Hummer', function() {
        return 'Category is Hummer ';
    });
});
// Route::fallback(function(){
//     return redirect('/');
// });

// Route::get('test10', function(){
//     return view('test');
// });

Route::get('form', function(){
    return view('form1');
});
// reform ->link url.
// reform1 -> method post -> action.
Route::post('reform', function(){
    return 'Data received';
})->name('reform1');