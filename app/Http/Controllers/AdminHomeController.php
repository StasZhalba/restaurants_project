<?php

namespace App\Http\Controllers;

use App\Cuisine;
use App\Dish;
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
		$cuis = Cuisine::all();
	    $dishes = Dish::all();
		return view('admin.restaurants', [
			'cuisines' => $cuis,
			'dishes' => $dishes,
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

    public function dashboard(){
    	return view('admin.dashboard');
    }
}
