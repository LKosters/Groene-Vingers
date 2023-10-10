<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\nieuwsberichtenController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\DemoController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('lang/home', [LangController::class, 'index']);
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');

Route::resource('dashboard-nieuwsberichten', nieuwsberichtenController::class);


//Route::get('/', function () {
//    return view('homepage');
//})->name('Home');

Route::get('/',[HomeController::class,'index'])->name('Home');
Route::get('/dashboard',[DashboardController::class,'index'])->name('Dashboard');

Route::get('/overons', function () {
    return view('overons');
})->name('Over ons');
Route::get('/currency',[DemoController::class,'index'])->name('currency');

Route::get('/contact', function () {
    return view('contact');
})->name('Contact');

Route::get('/onzeproducten', function () {
    return view('onzeproducten');
})->name('Over producten');

Route::get('/product', function () {
    return view('product');
})->name('Product');;

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('Dashboard');

//Route::get('/dashboard-nieuwsberichten', function () {
//    return view('dashboard-nieuwsberichten');
//})->middleware(['auth', 'verified'])->name('dashboard-nieuwsberichten');

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
