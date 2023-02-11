<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// class crud route
Route::get('class',[ClassController::class, 'index'])->name('class.index');
Route::get('create/class',[ClassController::class, 'create'])->name('create.class');
Route::post('store/class',[ClassController::class, 'store'])->name('store.class');
Route::get('class/delete/{id}',[ClassController::class, 'delete'])->name('class.delete');
Route::get('edit/class/{id}',[ClassController::class, 'edit'])->name('edit.class');
Route::post('update/class/{id}',[ClassController::class, 'update'])->name('update.class');

// students crud route
Route::resource('students', StudentController::class);






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
