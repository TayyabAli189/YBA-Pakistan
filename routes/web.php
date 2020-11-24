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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('frontend.home.home');
});

Route::get('/home', [\App\Http\Controllers\Frontend\LawController::class,'view_home'])->name('frontend.index');
Route::get('/about us', [\App\Http\Controllers\Frontend\AboutController::class,'about'])->name('frontend.about.about');
Route::get('/event', [\App\Http\Controllers\Frontend\EventController::class,'event'])->name('frontend.event.event');
Route::get('detail/{id}', [\App\Http\Controllers\Frontend\EventController::class,'detail'])->name('frontend.event.detail');

//Route::get('/newpage', [\App\Http\Controllers\Frontend\NewPageController::class,'newpage'])->name('frontend.event.newpage');
Route::get('/cotact us',[\App\Http\Controllers\Frontend\ContactUsController::class,'contact_us'])->name('frontend.contact.contact');


// Backend Events
Route::get('/admin', [\App\Http\Controllers\Backend\EventController::class,'index'])->name('listing.event');
Route::get('delete/events/{id}', [App\Http\Controllers\Backend\EventController::class,'destroy'])->name('delete.event');
Route::get('add/event', [App\Http\Controllers\Backend\EventController::class,'create'])->name('create.event');
Route::post('add/event', [App\Http\Controllers\Backend\EventController::class,'store'])->name('store.event');
Route::get('edit/event/{id}', [App\Http\Controllers\Backend\EventController::class,'edit'])->name('edit.event');
Route::post('update/event/{id}', [App\Http\Controllers\Backend\EventController::class,'update'])->name('update.event');


//Route::resource('abouts', 'AboutController');
