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

Auth::routes();

Route::get('/home', 'HomeController@index');

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

