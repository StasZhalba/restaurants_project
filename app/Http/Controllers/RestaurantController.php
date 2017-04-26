<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Restaurant;

use App\Comment;

use App\Point;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use App\Image;

use Illuminate\Support\Facades\Storage;

use App\User;

use App\Dish;

use App\Menu;

class RestaurantController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show', 'search', 'sort', 'showDishes']);
    }

    public function index()
    {
    	$restaurants = Restaurant::paginate(5);
    	return view('restaurants', compact('restaurants'));
    }

    public function show(Restaurant $restaurant)
    {
    	$restaurants = Restaurant::select('images.fileName', 'restaurants.id AS id', 'restaurants.restaurant_name', 'cuisines.id AS cuisine_id', 'cuisines.cuisine_name', 'restaurants.restaurant_address', 'restaurants.restaurant_seats', 'restaurants.restaurant_owner', 'restaurants.description', 'restaurants.rating', 'restaurants.created_at', 'restaurants.updated_at')
                ->leftJoin('cuisines', 'restaurants.cuisine_id', 'cuisines.id')
                ->leftJoin('images', 'restaurants.id', 'images.restaurantId')
                    ->where('restaurants.id', '=', $restaurant->id)->get();

        $restaurant = $restaurants[0];

        $comments = Comment::select('comments.body', 'comments.created_at', 'users.name AS user_name')
            ->leftJoin('restaurants', 'comments.restaurant_id', 'restaurants.id')
            ->leftJoin('users', 'comments.user_id', 'users.id')
                ->where('restaurant_id', $restaurant->id)->get();

        DB::table('restaurants')->whereId($restaurant->id)->increment('views');

        return view('show_restaurant', compact(['restaurants', 'restaurant', 'comments']));
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
                'description' => 'required'
            ]);
        $restaurant = new Restaurant;
        $restaurant->restaurant_name = request('restaurant_name');
        $restaurant->cuisine_id = request('cuisine_id');
        $restaurant->user_id = auth()->id();
        $restaurant->restaurant_address = request('restaurant_address');
        $restaurant->restaurant_seats = request('restaurant_seats');
        $restaurant->restaurant_owner = request('restaurant_owner');
        $restaurant->description = request('description');
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

    public function addComment(Restaurant $restaurant)
    {
        $this->validate(request(), [
                'body' => 'required|min:2'
            ]);
        $comment = new Comment;
        $comment->body = request('body');
        $comment->user_id = auth()->id();
        $comment->restaurant_id = $restaurant->id;
        $comment->save();
        return back();
    }

    public function search()
    {
        $this->validate(request(), [
                'search' => 'required|min:1'
            ]);
        $restaurants = Restaurant::where('restaurant_name', 'like', '%' . request('search') . '%')->get();
        return view('restaurants', compact('restaurants'));
    }

    public function sort($order_by, $desc = false)
    {
        if ($desc) {
            $restaurants = Restaurant::orderBy($order_by, $desc)->get();
        } else {
            $restaurants = Restaurant::orderBy($order_by)->get();
        }
        return view('restaurants', compact('restaurants'));
    }

    public function storePoint($restaurant, $user_point)
    {
        $exist = Point::where('user_id', auth()->id())->where('restaurant_id', $restaurant)->get();
        if (count($exist)) {
            return back()->withErrors(['Rate error', "You can't rate twice"]);
        } 
        $point = new Point;
        $point->restaurant_id = $restaurant;
        $point->user_id = auth()->id();
        $point->point = $user_point;
        $point->save();
        $this->storeRating($restaurant);
        return redirect()->back()->with('message', 'Your evaluation added successfully.');
    }

    public function storeRating($restaurant)
    {
        $rows_points = Point::where('restaurant_id', $restaurant)->get();
        $summ = 0;
        foreach ($rows_points as $row_point) {
            $summ += $row_point->point;
        }
        $rating = $summ / count($rows_points);
        $new_rating = Restaurant::find($restaurant);
        $new_rating->rating = $rating;
        $new_rating->save();
    }

    public function showDishes($restaurant)
    {
        $dishes = Menu::leftJoin('dishes', 'menus.dish_id', 'dishes.id')
            ->where('restaurant_id', $restaurant)->get();
        return view('dishes', compact('dishes'));
    }

}
