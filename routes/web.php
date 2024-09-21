<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VolunteerController;

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
    return view('homepage');
});

// Volunteers Controllers
Route::get('volunteer/index', [VolunteerController::class, 'index'])->name('volunteer.index');

Route::get('/volunteer/{id}', [VolunteerController::class, 'show'])->name('volunteer.show');

// Volunteers Controllers
