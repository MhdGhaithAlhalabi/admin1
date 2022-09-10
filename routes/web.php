<?php

use App\Http\Controllers\SideBarController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::get('/', function () {
    return view('welcome');
});
/*Route::group(['prefix' => LaravelLocalization::setLocale()], function() {
    Route::get('/dashboard', [SideBarController::class, 'Dashboard'])->name('Dashboard');
    Route::get('/message', [SideBarController::class, 'Message'])->name('Message');
    Route::get('/cart', [SideBarController::class, 'Cart'])->name('Cart');
    Route::get('/contact', [SideBarController::class, 'Contact'])->name('Contact');
    Route::get('/product', [SideBarController::class, 'Product'])->name('Product');
    Route::get('/menu', [SideBarController::class, 'Menu'])->name('Menu');
});*/


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    Route::get('/', function () {
        return view('dashboard');
    });
    Route::get('/dashboard', [SideBarController::class, 'Dashboard'])->name('Dashboard');
    Route::get('/customers', [SideBarController::class, 'Customers'])->name('Customers');
    Route::get('/product', [SideBarController::class, 'Product'])->name('Product');
    Route::get('/report', [SideBarController::class, 'Report'])->name('Report');
    Route::get('/contact', [SideBarController::class, 'Contact'])->name('Contact');
    Route::post('/test', [SideBarController::class, 'test'])->name('test');

});



