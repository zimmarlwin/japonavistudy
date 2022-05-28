<?php

use App\Http\Livewire\User\HomeComponent;
use App\Http\Livewire\Admin\AdminComponent;

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

Route::get('/',HomeComponent::class)->name('home');
Route::get('/dashboard',AdminComponent::class)->name('dashboard');


