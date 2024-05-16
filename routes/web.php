<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Member\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Member\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Member\TableController as MemberTableController;
use App\Http\Controllers\Member\ReservationController as MemberReservationController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
     return view('home');
 })->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth','admin')->name('admin.')->prefix('admin')->group(function () {
    Route::get('/',[AdminController::class,'index'])->name('index');
    Route::resource('/categories',CategoryController::class);
    Route::resource('/members',UserController::class);
    Route::resource('/menus',MenuController::class);
    Route::resource('/tables',TableController::class);
    Route::resource('/reservations',ReservationController::class);
    Route::resource('/events',EventController::class);

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/home',[HomeController::class,'show']);
Route::post('/home',[HomeController::class,'index'])->name('home');
Route::get('/reservation',[MemberReservationController::class,'show'])->name('reservation.create');
Route::post('/reservation',[MemberReservationController::class,'store'])->name('reservation.store');
Route::get('/tables',[MemberTableController::class,'index'])->name('tables.index');
Route::get('/tables/{tables}',[MemberTableController::class,'show'])->name('tables.show');
Route::get('/contact', function () {
    return view('memberview.contact');
});
Route::get('/about', function () {
    return view('memberview.about');
});

Route::fallback(function () {
    return view('404');
});

Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.send');

require __DIR__.'/auth.php';
