<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);



Route::get('/worship', function () {
    return view('user.worship');
});

Route::get('/home',[HomeController::class,'redirect']);
Route::get('/whatwebelieve',[HomeController::class,'about']);
Route::get('/leadership_team',[HomeController::class,'leadership_team']);
Route::get('/ministries&departments',[HomeController::class,'ministries']);
Route::get('/events',[HomeController::class,'events']);
Route::get('/sermons',[HomeController::class,'sermons']);

// Route::get('/contact-us', [ContactController::class, 'index']);
// Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.us.store');
Route::get('/contact', [ContactController::class,'index']);
Route::post('/contact', [ContactController::class,'store'])->name('contact.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
