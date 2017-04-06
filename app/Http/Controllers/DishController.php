<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dish;

use Illuminate\Support\Facades\Storage;

use App\Menu;

class DishController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
    	$dishes = Dish::all();
    	return view('dishes', compact('dishes'));
    }

    public function addDish()
    {
    	return view('add_dish');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
	        'dish_name' => 'required',
	        'image' => 'required',
	        'description' => 'required'
	    ]);
		$dish = new Dish;
    	$dish->dish_name = request('dish_name');
    	$path = $request->file('image')->store('images', 'uploads');
    	$dish->file_name = $path;
    	$dish->description = request('description');
    	$dish->save();
		return back();
    }

    public function show($dish)
    {
    	$dish = Dish::where('id', $dish)->first();
    	return view('show_dish', compact('dish'));
    }

    public function delete($del_dish_id)
    {
        $del_dish_row = Dish::where('id', $del_dish_id)->first();
        $del_dish_name = $del_dish_row->dish_name;
        Storage::disk('uploads')->delete($del_dish_row->file_name);
        Dish::where('id', $del_dish_id)->delete();
        Menu::where('dish_id', $del_dish_id)->delete();
        $dishes = Dish::all();
        return view('dishes', compact(['del_dish_name', 'dishes']));
    }

}
