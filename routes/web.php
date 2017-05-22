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
*/

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('admin_login', 'AdminAuth\LoginController@showLoginForm');
Route::post('admin_login', 'AdminAuth\LoginController@login');
Route::post('admin_login', 'AdminAuth\LoginController@logout');
Route::post('admin_password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
Route::get('admin_password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
Route::post('admin_password/reset', 'AdminAuth\ResetPasswordController@reset');
Route::get('admin_password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
Route::get('admin_register', 'AdminAuth\RegisterController@showRegisterForm');
Route::post('admin_register', 'AdminAuth\RegisterController@register');


Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function (){
	Route::get('/', 'AdminHomeController@index')->name('admin.dashboard');
	Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'AdminAuth\LoginController@login')->name('admin.login.submit');

	Route::prefix('restaurants')->group(function (){
		Route::get('/', 'AdminHomeController@restaurants')->name('admin.restaurants');
		Route::get('/add', 'AdminHomeController@restaurantAdd')->name('admin.restaurantAdd');
		Route::post('/store', 'AdminHomeController@store')->name('admin.restaurantStore');
		Route::put('/{id}/save/', 'AdminHomeController@saveRestaurant')->name('admin.restaurantSave');
		Route::get('/{del_rest_id}/delete', 'AdminHomeController@delete')->name('admin.restaurantDelete');
		Route::get('/edit/{id}', 'AdminHomeController@edit')->name('admin.restaurantEdit');
		Route::get('/edit/{id}/img', 'AdminHomeController@editImg')->name('admin.restaurantEditImg');
		Route::get('/delete/img/{id}', 'AdminHomeController@deleteImg')->name('admin.restaurantDeleteImg');

	});

	Route::prefix('cuisines')->group(function (){
		Route::get('/', 'AdminHomeController@cuisines')->name('admin.cuisines');
		Route::get('/add', 'AdminHomeController@cuisineAdd')->name('admin.cuisineAdd');
		Route::post('/store', 'AdminHomeController@cuisineStore')->name('admin.cuisineStore');
		Route::get('/{id}/delete', 'AdminHomeController@cuisineDelete')->name('admin.cuisineDelete');
	});

	Route::prefix('dishes')->group(function (){
		Route::get('/', 'AdminHomeController@dishes')->name('admin.dishes');
		Route::get('/add', 'AdminHomeController@dishAdd')->name('admin.dishAdd');
		Route::post('/store', 'AdminHomeController@dishStore')->name('admin.dishStore');
		Route::get('/{id}/delete', 'AdminHomeController@dishDelete')->name('admin.dishDelete');
	});
	});

Route::get('/', function(){
	return view('main');
});



Route::get('/contact', function(){
	return view('contact');
});

/***********************************************************/
/****************** Restaurants ****************************/
/***********************************************************/
Route::get('/restaurants', 'RestaurantController@index');

Route::get('/restaurants/{restaurant}', 'RestaurantController@show');

Route::get('/add_restaurant', function(){
	return view('add_restaurant');
});

Route::post('/add_restaurant/store', 'RestaurantController@store');

Route::get('/restaurants/{del_rest_id}/delete', 'RestaurantController@delete');

Route::post('/restaurants/{restaurant}/comments', 'RestaurantController@addComment');

Route::post('/restaurants/search', 'RestaurantController@search');

Route::get('/restaurants/sort/{order_by}', 'RestaurantController@sort');

Route::get('/restaurants/sort/{order_by}/{desc}', 'RestaurantController@sort');

Route::get('/restaurants/{restaurant}/{point}/rate', 'RestaurantController@storePoint');

Route::get('/restaurants/{restaurant}/show_dishes', 'RestaurantController@showDishes');


/***********************************************************/
/****************** Cuisines *******************************/
/***********************************************************/
Route::get('/cuisines', 'CuisineController@index');

Route::get('cuisines/{cuisine}', 'CuisineController@show');

Route::get('/cuisines/{cuisine_id}/restaurants', 'CuisineController@showRestaurants');

Route::get('/add_cuisine', function(){
	return view('add_cuisine');
});

Route::post('/add_cuisine/store', 'CuisineController@store');

Route::get('/cuisines/{del_cuis_id}/delete', 'CuisineController@delete');

Route::post('/cuisines/search', 'CuisineController@search');

/***********************************************************/
/****************** Dishes *********************************/
/***********************************************************/

Route::get('/dishes', 'DishController@index');

Route::get('/add_dish', 'DishController@addDish');

Route::post('/add_dish/store', 'DishController@store');

Route::get('/dishes/{dish}', 'DishController@show');

Route::get('/dishes/{del_dish_id}/delete', 'DishController@delete');

