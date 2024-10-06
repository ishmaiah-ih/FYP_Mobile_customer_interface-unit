<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TokenLogic;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::middleware('auth')->get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');


//frontController
//Route::get('/user_dashboard', [FrontController::class, 'welcome'])->name('welcome');
Route::get('/top-up', [FrontController::class, 'topUp_get'])->name('top-up_get');
Route::post('/top-up', [FrontController::class, 'topUp'])->name('top-up');

Route::get('/history', [FrontController::class, 'history'])->name('history');
Route::get('/profile', [FrontController::class, 'profile'])->name('profile');
Route::get('/contact-us', [FrontController::class, 'contactUs'])->name('contact-us');
Route::get('/alerts', [FrontController::class, 'alerts'])->name('alerts');
Route::get('/token_display', [FrontController::class, 'token_display'])->name('display.token');


Route::middleware('auth')->get('/admin/dashboard', [DashboardController::class, 'admin_index'])->name('admin.index');

// routes/web.php

Route::get('/admin/billing', [DashboardController::class, 'billing'])->name('billing');
Route::get('/delete_user/{id}', [DashboardController::class, 'delete_user'])->name('delete.user');
Route::get('/delete_token/{id}', [DashboardController::class, 'delete_token'])->name('delete.token');



//contact admin
Route::post('/', [ContactController::class, 'store'])->name('contact');
Route::get('/admin/messages', [ContactController::class, 'show_messages'])->name('contacts.all');


//Token Logic
//
//Route::post('/top-up', [TokenLogic::class, 'handleTopUp'])->name('top-up');
//Route::post('/encrypt-token', [TokenLogic::class, 'encryptToken'])->name('encrypt-token');
Route::post('/top-up', [TokenLogic::class, 'topUp'])->name('top-up')->middleware('auth');;
