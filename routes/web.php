<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/Auth::routes(['verify' => true]);

Route::get('/', function () {
    return redirect()->route('products.index2');
});
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});

Auth::routes();

//routes for chat
// Route::get('/', 'HomeController@index');

//

// Route::get('/category','CategoryController@index')->name('category');
Route::resource('category', 'CategoryController');
//searching product
Route::get('/search', 'SiteController@search')->name('products.search');

//
//product get by ajax with cat id
Route::get('productsCat','SiteController@productsCat');

//route fo contact us
Route::post('/contact','SiteController@contactUs')->name('contact');
//
//site controller where user can see all products for purchase
//route for product review
Route::post('/review','ProductController@StoreReviewProduct')->name('review.store');
Route::get('/checkreview/{id}', 'ProductController@checkReview')->name('check.review');

//
Route::get('/products', 'SiteController@index')->name('products.index');
Route::get('/index2', 'SiteController@index2')->name('products.index2');
Route::get('/products/detail/{id}', 'SiteController@detail')->name('product.detail');
//for cart

// for renter dashboard


use App\Http\Middleware\Admin;

    Route::middleware([Admin::class])->group(function () {




	Route::resource('/product', 'ProductController');

	//favourit item
	Route::post('/faviurititem','ProductController@favouritItem')->name('favourit.item');
	Route::get('/getfaviurititem','ProductController@userFavourit')->name('favourit.get');
//
     
    Route::get('/RenterUsers', 'RenterController@RenterUsers')->name('RenterUsers');
    Route::get('/RenteeUsers', 'RenteeController@RenteeUsers')->name('RenteeUsers');


	Route::get('/mychat', 'HomeController@myChat')->name('mychat.inbox');
	Route::get('/load-latest-messages', 'MessagesController@getLoadLatestMessages');
	Route::post('/send', 'MessagesController@postSendMessage');
	Route::get('/fetch-old-messages', 'MessagesController@getOldMessages');


	    Route::get('/add/cart/{id}','CartController@addToCart');
		Route::get('/cartitem','CartController@cart')->name('cart.items');
		Route::get('remove-from-cart/{id}', 'CartController@remove')->name('cart.remove.item');
		//delete from cart icon route
		Route::get('remove/{id}', 'CartController@deleteitem')->name('icon.remove');

		Route::post('/checkout','CartController@checkout')->name('checkout.form');

		Route::post('/order/place','CartController@orderplace')->name('order.place');



		Route::get('/renterdetailview/{id}','RenterController@renterDetailview')->name('renter.detailview');
		Route::post('/renterorderstatus/{id}','RenterController@renterOrderstatus')->name('renter.status');

		// for rentee dashboard
		Route::get('/detailview/{id}','RenteeController@detailview')->name('order.detailview');
		Route::post('/orderstatus/{id}','RenteeController@orderstatus')->name('order.status');


    Route::get('/registeruser','AdminController@registerUser')->name('register.users');
	Route::delete('/registeruserdelete{id}','AdminController@registerDestroy')->name('register.delete');

	Route::get('/contactuserdisplay','AdminController@contactUserDisplay')->name('contact.display');
	Route::delete('/contactuserdelete{id}','AdminController@destroy')->name('contact.delete');

 
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::get('/editprofileadmin/{id}', 'AdminController@edit')->name('admin.edit');
    Route::post('/updateprofileadmin/{id}', 'AdminController@update')->name('admin.update');
   

// Route::get('/renter', 'RenterController@index')->name('renter');
    Route::resource('/renter', 'RenterController');

    Route::get('/rentee', 'RenteeController@index')->name('rentee');
    Route::get('/editprofile/{id}', 'RenteeController@edit')->name('rentee.edit');
    Route::post('/updateprofile/{id}', 'RenteeController@update')->name('rentee.update');
   
});







