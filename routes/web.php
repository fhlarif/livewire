<?php

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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/',function(){
   echo 'Welcome';
})->name('register.success');

/* Registration */
/* Full-Page Components */
Route::get('/register',App\Http\Livewire\Auth\Register::class)->name('livewire.register');
/* Components */
// Route::get('/register',function(){
//     return view('register');
// })->name('livewire.register');


