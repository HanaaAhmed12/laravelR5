<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StudentController;
use App\Models\Student;

Route::get('students', [StudentController::class, 'index'])->name('students');
Route::get('addStudents', [StudentController::class, 'create'])->name('addStudent');
Route::post('insertStudent',[StudentController::class, 'store'])->name('insertStudent');
Route::get('editStudents/{id}',[StudentController::class, 'edit'])->name('editStudents');
Route::put('updateStudents/{id}',[StudentController::class, 'update'])->name('updateStudents');
Route::get('showStudents/{id}',[StudentController::class, 'show'])->name('showStudents');
Route::delete('delStudents',[StudentController::class, 'destroy'])->name('delStudents');

Route::get('trashStudent',[StudentController::class, 'trash'])->name('trashStudent');
Route::get('restoreStudent/{id}',[StudentController::class, 'restore'])->name('restoreStudent');
Route::delete('forceDeleteStudent',[StudentController::class, 'forceDelete'])->name('forceDeleteStudent');

Route::get('/students/{id}/courses', [StudentController::class, 'showCourses'])->name('courses');


















// 5 *******************************************************************************************
Route::get('clients', [ClientController::class, 'index'])->name('clients');
Route::get('addClients', [ClientController::class, 'create'])->name('addClient');
Route::post('insertClient',[ClientController::class, 'store'])->name('insertClient');
Route::get('editClients/{id}',[ClientController::class, 'edit'])->name('editClients');
Route::put('updateClients/{id}',[ClientController::class, 'update'])->name('updateClients');
Route::get('showClients/{id}',[ClientController::class, 'show'])->name('showClients');
Route::delete('delClients',[ClientController::class, 'destroy'])->name('delClients');

// 6 ************************************************************************************************
Route::get('trashClient',[ClientController::class, 'trash'])->name('trashClient');
Route::get('restoreClient/{id}',[ClientController::class, 'restore'])->name('restoreClient');
Route::delete('forceDeleteClient',[ClientController::class, 'forceDelete'])->name('forceDeleteClient');
















// 4 *******************************************************************************************
// Route::get('clients', [ClientController::class, 'index'])->name('clients');;
// Route::get('addClients', [ClientController::class, 'create'])->name('addClient');
// Route::post('insertClient',[ClientController::class, 'store'])->name('insertClient');;

// 2 *********************************************************************************
// Route::get('students', [StudentController::class, 'create']);
// Route::post('addStudents', [StudentController::class, 'store'])->name('storeStudent');
// Route::get('insertClient',[ClientController::class, 'store']);
// 2 **********************************************************************************










// 1 *****************************************************************************************************************
Route::get('/', function () {
    return view('stacked');
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

Route::get('Hanaa/{name?}', function ($name = "") {
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
Route::prefix("colors")->group(function (){
    Route::get('red' , function(){
        return "Color Is Red";
    });
    Route::get('blue' , function(){
        return "Color Is Blue";
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
Route::post('submit1', [FormController::class, 'form'])->name('submitForm');
Route::get('test30',[MyController::class, 'my_data']);
// 1 ****************************************************************************************************************