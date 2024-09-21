<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AboutUSController;


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

// Volunteers Controllers
Route::get('volunteer/index', [VolunteerController::class, 'index'])->name('volunteer.index');

Route::get('/volunteer/{id}', [VolunteerController::class, 'show'])->name('volunteer.show');

// Volunteers Controllers

// Project Controllers 

Route::get('/project', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.show');

// Project Controllers

// About Us Controllers 
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about.index');

// About Us Controllers 
