<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Illuminate\Support\Facades\DB;

use App\Cuisine;

use App\Restaurant;

class CuisineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show', 'showRestaurants', 'search']);
    }

    public function index()
    {
    	$cuisines = Cuisine::all();
    	return view('cuisines', compact('cuisines'));
    }

    public function show(Cuisine $cuisine)
    {
    	return view('show_cuisine', compact('cuisine'));
    }

    public function showRestaurants($cuisine_id)
    {
    	$restaurants = Restaurant::where('cuisine_id', $cuisine_id)->get();
    	return view('show_cuisine_rest', compact('restaurants'));
    }

    public function store()
    {
        $this->validate(request(), [
                'cuisine_name' => 'required'
            ]);
        $cuisine = new Cuisine;
        $cuisine->cuisine_name = request('cuisine_name');
        $cuisine->save();

        return view('add_cuisine', compact('cuisine'));
    }

    public function delete($del_cuis_id)
    {
        $del_cuis_row = Cuisine::select('cuisine_name')->where('id', $del_cuis_id)->get();
        $del_cuis = $del_cuis_row[0];
        $del_cuis_name = $del_cuis->cuisine_name;
        Cuisine::where('id', $del_cuis_id)->delete();
        return view('cuisines', compact('del_cuis_name'));
    }

    public function search()
    {
        $this->validate(request(), [
                'search' => 'required|min:1'
            ]);
        $cuisines = Cuisine::where('cuisine_name', 'like', '%' . request('search') . '%')->get();
        return view('cuisines', compact('cuisines'));
    }


}
