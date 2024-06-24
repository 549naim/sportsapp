<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;

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
Route::get('/article', function () {
    return view('article');
});

// Route::get('event/{id}', function () {
//     return view('event');
// });

Route::get('event/{name}/{id}', [SiteController::class, 'index'])->name('event.index');
Route::get('eventitem/{name}/{id}/{event_id}', [SiteController::class, 'eventitem'])->name('event.eventitem');
