<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\NftController as NftController;
use App\Http\Controllers\HomeController as HomeController;
use App\Http\Controllers\WalletController   as WalletController;
use App\Http\Controllers\ProfileController  as ProfileController;
use App\Http\Controllers\NftCollectionController as NftCollectionController;
use App\Http\Controllers\NftCategoryController as NftCategoryController;
use App\Http\Controllers\NftCreatorController as NftCreatorController;
use App\Http\Controllers\NftOwnerController as NftOwnerController;
use App\Http\Controllers\FrontController as FrontController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/', [FrontController::class, 'index'])->name('front.index');

//Route::get('/nfts', [FrontController::class, 'nfts'])->name('nfts');
Route::prefix('front')->group(function () {
    Route::get('/home', [FrontController::class, 'index'])->name('front.index');

    Route::get('/nfts', [FrontController::class, 'showAll'])->name('front.nfts');
    Route::get('/nfts', [FrontController::class, 'show'])->name('front.nfts.show')->where('nft', '[0-9]+');
    Route::get('/collections', [FrontController::class, 'showCollection'])->name('front.collection');
    Route::get('/sellNft/{nft}', [FrontController::class, 'sellNft'])->name('front.sellNft')->where('nft', '[0-9]+');
    Route::get('/buyNft', [FrontController::class, 'buyNft'])->name('front.buyNft')->where('nft', '[0-9]+');
});



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(
    [
        'auth', 'isAdmin'
    ]
)->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('nfts/index', [NftController::class, 'index'])->name('admin.nfts.index');
    Route::get('nfts/create', [NftController::class, 'create'])->name('admin.nfts.create');
    Route::post('/store', [NftController::class, 'store'])->name('admin.nfts.store');   
    Route::get('nfts/{nft}', [NftController::class, 'show']);
    Route::get('nfts/edit/{id}', [NftController::class, 'edit'])->name('admin.nfts.edit')->where('id', '[0-9]+');
    Route::post('/update', [NftController::class, 'update'])->name('admin.nfts.update');
    Route::delete('nfts/destroy', [NftController::class, 'destroy'])->name('admin.nfts.destroy');
    Route::get('/search', [NftController::class, 'search'])->name('admin.nfts.search');



});


