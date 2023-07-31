<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Kategori_produkController;
use App\Http\Controllers\Order_detailController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\UserController;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [CustomerController::class, 'store'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::resource('produks', ProdukController::class);
Route::get('show_produk_by_id/{id}', [ProdukController::class, 'show_data_by_id'])->name('showDataById');
Route::get('keranjang', [OrderController::class, 'keranjang']);
Route::resource('satuans', SatuanController::class);
Route::resource('kategori_produks', Kategori_produkController::class);
Route::resource('customers', CustomerController::class);
Route::resource('orders', OrderController::class);
Route::resource('order_details', Order_detailController::class);
Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);
Route::get('customer_page/index', [ProdukController::class, 'detail_produk'])->name('customer_page.detail_produk');
Route::resource('pembayarans', PembayaranController::class);
Route::post('add-cart',[OrderController::class,'addToCart'])->name('add.cart');
Route::get('checkout/{id}',[OrderController::class,'checkout'])->name('chekout');
// Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
