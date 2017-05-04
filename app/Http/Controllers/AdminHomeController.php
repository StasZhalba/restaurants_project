<?php

namespace App\Http\Controllers;

use App\Cuisine;
use App\Dish;
use App\Image;
use App\Menu;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminHomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('auth:admin');
	}

	public function index(){
		$totalViews = DB::table('restaurants')->sum('views');
		$totalPoints = DB::table('points')->count();
    	return view('admin.dashboard', [
    		'totalViews' => $totalViews,
		    'totalPoints' => $totalPoints
	    ]);
    }

    public function restaurants(){
		$restaurants = Restaurant::all();
		return view('admin.restaurants', [
			'restaurants' => $restaurants,
		]);
    }

    public function restaurantAdd(){
	    $cuisines = Cuisine::all();
	    $dishes = Dish::all();
	    return view('admin.addRestaurant', [
		    'cuisines' => $cuisines,
		    'dishes' => $dishes,
	    ]);
    }

	public function store(Request $request)
	{
		$this->validate(request(), [
			'restaurant_name' => 'required',
			'cuisine_id' => 'required',
			'restaurant_address' => 'required',
			'restaurant_seats' => 'required',
			'restaurant_owner' => 'required',
			'image' => 'required',
			'restaurant_description' => 'required'
		]);
		$restaurant = new Restaurant;
		$restaurant->restaurant_name = $request->restaurant_name;
		$restaurant->cuisine_id = $request->cuisine_id;
		$restaurant->user_id = auth()->id();
		$restaurant->restaurant_address = $request->restaurant_address;
		$restaurant->restaurant_seats = $request->restaurant_seats;
		$restaurant->restaurant_owner = $request->restaurant_owner;
		$restaurant->description = $request->restaurant_description;
		$restaurant->save();

		if ($request->hasFile('image')){
			foreach ($request->file('image') as $value) {
				$path = $value->store('images', 'uploads');
				$image = new Image();
				$image->fileName = $path;
				$image->restaurantId = $restaurant->id;
				$image->save();
			}
		}

		$dishes_array = request('dish_id');
		for ($i=0; $i < count($dishes_array); $i++) {
			if ($dishes_array[$i] === null) {
				continue;
			} else {
				$menu = new Menu;
				$menu->restaurant_id = $restaurant->id;
				$menu->dish_id = $dishes_array[$i];
				$menu->save();
			}
		}


		return view('add_restaurant', compact('restaurant'));
	}

    public function dashboard(){
    	return view('admin.dashboard');
    }
}
