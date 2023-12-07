<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login; 
use App\Livewire\Auth\Register;

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

Route::get('/', function (){
    return redirect()->route('login');
})->name('dashboard'); 

Route::get('/login', Login::class)->middleware('guest')->name('login');
Route::get('/register', Register::class)->middleware('guest')->name('register'); 



require __DIR__.'/auth.php';
