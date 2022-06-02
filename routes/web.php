<?php

use App\Http\Livewire\User\HomeComponent;
use App\Http\Livewire\User\ContactComponent;
use App\Http\Livewire\User\Learnjapan\LearnJapanComponent;
use App\Http\Livewire\User\Learnjapan\FeaturedFactsComponent;
use App\Http\Livewire\User\Learnjapan\LifeStyleComponent;
use App\Http\Livewire\User\Learnjapan\JobandCareerComponent;
use App\Http\Livewire\User\Studyplan\StudyPlanComponent;

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
Route::get('/contactus',ContactComponent::class)->name('contactus');

// learnjapan
Route::get('/learnjapan',LearnJapanComponent::class)->name('learnjapan');
Route::get('/featuredfacts',FeaturedFactsComponent::class)->name('featuredfacts');
Route::get('/lifestyle',LifeStyleComponent::class)->name('lifestyle');
Route::get('/jobandcareer',JobandCareerComponent::class)->name('jobandcareer');

// Studyplan
Route::get('/studyplan',StudyPlanComponent::class)->name('studyplan');


Route::get('/dashboard',AdminComponent::class)->name('dashboard');


