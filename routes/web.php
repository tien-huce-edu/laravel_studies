<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\HomeController;

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
// Route::get('/', fn() => view('welcome'));

// Route::get('/form', function () {
//     return view('form');
// });
// Route::post('/form', function () {
//     return "Hello World!";
// });
// Route::redirect('/here', '/form', 301);
// Route::view('show-form', 'form');

Route::get("/{id?}", [HomeController::class, 'index'])->name("home");
Route::get("/form", 'App\Http\Controllers\HomeController@showForm')->name("show-form");

Route::prefix('admin')->middleware('checkpermission')->group(function () {
    Route::get('form/{slug?}-{id?}.html', function ($slug = null, $id = null) {
        echo $slug . '<br/>' . $id;
        return view('form');
    })->where(['slug' => '[a-z0-9-]+', 'id' => '[0-9]+'])->name('admin.show-form');
    Route::get('form', function () {
        return view('form');
    });
});

