<?php

use App\Livewire\SliderComponent;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\FormController;
use App\Http\Controllers\PayFormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::post('/submit-form', 'FormController@store')->name('form.submit');
// Route::get('submit', [FormController::class, 'create']);
Route::post('submit', [PayFormController::class, 'store']);


