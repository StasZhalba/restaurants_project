<?php

namespace App\Http\Controllers;

use App\Cuisine;
use App\Dish;
use App\Image;
use App\Menu;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

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


		return redirect(route('admin.restaurants'));
	}

	public function saveRestaurant(Request $request, $id)
	{
		$this->validate(request(), [
			'restaurant_name' => 'required',
			'cuisine_id' => 'required',
			'restaurant_address' => 'required',
			'restaurant_seats' => 'required',
			'restaurant_owner' => 'required',
			'restaurant_description' => 'required'
		]);
		$restaurant = Restaurant::find($id);
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


		return redirect(route('admin.restaurants'));
	}

	public function delete($del_rest_id)
	{
		$del_rest_row = Restaurant::select('restaurant_name')->where('id', $del_rest_id)->get();
		$del_rest = $del_rest_row[0];
		$del_rest_name = $del_rest->restaurant_name;
		Restaurant::where('id', $del_rest_id)->delete();
		$images = Image::where('restaurantId', $del_rest_id)->get();
		foreach ($images as $image) {
			Storage::disk('uploads')->delete($image->fileName);
			Image::where('restaurantId', $del_rest_id)->delete();
			Menu::where('restaurant_id', $del_rest_id)->delete();
		}

		return view('restaurants', compact('del_rest_name'));
	}

	public function edit($id){
		$cuisines = Cuisine::all();
		$dishes = Dish::all();
    	$restaurant = Restaurant::find($id);

    	return view('admin.editRestaurant', [
    		'restaurant' => $restaurant,
		    'cuisines' => $cuisines,
		    'dishes' => $dishes,

	    ]);
	}

	public function editImg($id){
		$restaurant = Restaurant::find($id);
		return view('admin.editImgRestaurant', ['restaurant' => $restaurant]);
	}

	public function deleteImg($id){
		$image = Image::find($id);
		if ($image != null) {
			Storage::disk('uploads')->delete($image->fileName);
			$image->delete();
		}
		return redirect(route('admin.restaurantEditImg', ['id' => $image->restaurantId]));
	}

    public function dashboard(){
    	return view('admin.dashboard');
    }
}
