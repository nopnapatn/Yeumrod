<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('user.home.index');
Route::post('/cars/show', [CarController::class, 'index'])->name('user.car.index');
Route::post('/select/car/{car}', [FormController::class, 'create'])->name('user.form.create');
Route::post('/payment/{form}/create', [PaymentController::class, 'create'])->name('user.payment.create');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// user & admin
Route::put('/myforms/{form}/cancel', [FormController::class, 'cancelForm'])->name('form.cancelForm');

// user
Route::get('/myforms', [FormController::class, 'index'])->name('user.form.index');
Route::post('/myforms/{form}', [FormController::class, 'update'])->name('user.form.update');

Route::get('reports/{form}/show', [ReportController::class, 'show'])->name('user.report.show');

// admin
Route::get('/users', [ProfileController::class, 'index'])->name('admin.user.index');

Route::get('/payments', [PaymentController::class, 'index'])->name('admin.payment.index');

Route::get('reports', [ReportController::class, 'index'])->name('admin.report.index');
Route::get('reports/{form}/create', [ReportController::class, 'create'])->name('admin.report.create');

Route::get('/forms', [FormController::class, 'index'])->name('admin.form.index');
Route::get('/forms/pending', [FormController::class, 'pending'])->name('admin.form.pending');
Route::get('/forms/partially', [FormController::class, 'partially'])->name('admin.form.partially');
Route::get('/forms/ontrip', [FormController::class, 'ontrip'])->name('admin.form.ontrip');
Route::get('/forms/endtrip', [FormController::class, 'endtrip'])->name('admin.form.endtrip');
Route::get('/forms/cancel', [FormController::class, 'cancel'])->name('admin.form.cancel');
Route::put('/forms/{form}', [FormController::class, 'update'])->name('admin.form.update');

Route::get('/cars', [CarController::class, 'index'])->name('car.index');
Route::get('/cars/create', [CarController::class, 'create'])->name('car.create');
Route::post('/cars/create', [CarController::class, 'store'])->name('car.store');
Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('car.edit');
Route::put('/cars/{car}/edit', [CarController::class, 'update'])->name('car.update');

Route::get('/drivers', [DriverController::class, 'index'])->name('driver.index');
Route::get('/drivers/create', [DriverController::class, 'create'])->name('driver.create');
Route::post('/drivers/create', [DriverController::class, 'store'])->name('driver.store');
Route::get('/drivers/{driver}/edit', [DriverController::class, 'edit'])->name('driver.edit');
Route::put('/drivers/{driver}/edit', [DriverController::class, 'update'])->name('driver.update');
