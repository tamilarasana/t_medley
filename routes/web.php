<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\Blog\BlogDetails;
use App\Http\Controllers\Blog\BlogListing;
use App\Http\Controllers\Dashboard\Admin\BlogController;
use App\Http\Controllers\Dashboard\SuperAdmin\CategoryController;
use App\Http\Controllers\Dashboard\SuperAdmin\SubCategoryController;
use App\Http\Controllers\Dashboard\User\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartlistController;





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


Route::get('/', [CommonController::class, 'index'])->name('welcome');

Route::get('/our-story', [CommonController::class, 'ourStory'])->name('our.story');

Route::get('/faq', [CommonController::class, 'faq'])->name('faq');
Route::get('/suggestion', [CommonController::class, 'suggestion'])->name('suggestion');
Route::get('/purchase-policy', [CommonController::class, 'purchasePolicy'])->name('purchase.policy');
Route::get('/order-cancellation', [CommonController::class, 'orderCancellation'])->name('order.cancellation');
Route::get('/shipping-info', [CommonController::class, 'shippingInfo'])->name('shipping.info');
Route::get('/disclaimer', [CommonController::class, 'disclaimer'])->name('disclaimer');
Route::get('/cookies-policy', [CommonController::class, 'cookiesPolicy'])->name('cookies.policy');
Route::get('/terms-conditions', [CommonController::class, 'terms'])->name('terms');
Route::get('/contact-us', [CommonController::class, 'contactUs'])->name('contact.us');
Route::get('/privacy-policy', [CommonController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/send-suggestion', [CommonController::class, 'sendSuggestion'])->name('send.suggestion');

Route::get('listing/{category}', [ListingController::class, 'index'])->name('listing');

Route::get('details/{subcategory}', [DetailsController::class, 'index'])->name('details');

Route::get('about-us', [CommonController::class, 'aboutUs'])->name('about');

Route::get('blog/listing', [BlogListing::class, 'index'])->name('blog.listing');

Route::get('blog/details/{blog}', [BlogDetails::class, 'index'])->name('blog.details');

Route::get('add-to-cart/{id}', [CartlistController::class, 'addToCart'])->name('add.to.cart');
Route::get('cart', [CartlistController::class, 'cart'])->name('cart');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// User Dashboard
Route::prefix('dashboard/user')->group(function () {
    Route::name('dashboard.user.')->group(function () {
    	Route::middleware(['user'])->group(function () {
			Route::get('/', [UserController::class, 'index'])->name('index');
    		Route::get('/fill/cart/{subcategory?}', [App\Http\Controllers\CartController::class, 'fillCart'])->name('fill.cart');
		});
	});
});

// Admin Dashboard
Route::prefix('dashboard/blogs')->group(function () {
    Route::name('dashboard.admin.')->group(function () {
    	Route::middleware(['admin'])->group(function () {
			Route::get('/', [BlogController::class, 'index'])->name('blogs');
			Route::post('/blog/store', [BlogController::class, 'store'])->name('blogs.store');
			Route::post('/blog/update/{blog}', [BlogController::class, 'update'])->name('blogs.update');
			Route::get('/blog/destroy/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');

		});
	});
});

// SuperAdmin Dashboard
Route::prefix('dashboard/tea')->group(function () {
    Route::name('dashboard.superadmin.')->group(function () {
    	Route::middleware(['superadmin'])->group(function () {
			Route::get('/', [CategoryController::class, 'index'])->name('category');
			Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
			Route::post('/category/update/{category}', [CategoryController::class, 'update'])->name('category.update');
			Route::get('/category/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');

			Route::get('/sub-category/{category}', [SubCategoryController::class, 'index'])->name('subcategory');
			Route::post('/sub-category/store', [SubCategoryController::class, 'store'])->name('subcategory.store');
			Route::post('/sub-category/update/{subcategory}', [SubCategoryController::class, 'update'])->name('subcategory.update');
			Route::get('/sub-category/destroy/{subcategory}', [SubCategoryController::class, 'destroy'])->name('subcategory.destroy');

		});
	});
});
