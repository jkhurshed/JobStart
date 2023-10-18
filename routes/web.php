<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobTypeController;

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
Route::get('/', [MainController::class, 'index']) ->name('index');
Route::get('/about_page', [AboutController::class, 'about_page']) ->name('about_page');

Route::get('/jobs', [JobController::class, 'index']) -> name('jobs_post');
Route::get('/jobs-get', [JobController::class, 'get']) -> name('job_get');
Route::post('/jobs_create', [JobController::class, 'create']) -> name('jobs_create');

Route::get('job_types', [JobTypeController::class, 'index']) -> name('job_types');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
