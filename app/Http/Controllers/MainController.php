<?php

namespace App\Http\Controllers;

use App\Comment;
use App\User;
use App\Movie;
use App\Favorite_movies;
use Illuminate\Http\Request;
use Image;

class MainController extends Controller
{
    public function index(Request $request) {
    	$search = $request->input('search');
    	$movies = Movie::paginate(5);
    	if (isset($search)) {
    		$movies = $movies = Movie::where('name', 'LIKE', '%' . $search . '%')->paginate(5);
    	}
        
        return view('index', compact('movies'), compact('search'));
    }

    public function jenre($code) {
        $movies = Movie::where('code', $code)->get();
        return view('index', compact('movies'));
    }

    public function movie_single($slug) {
        $comments = Comment::where('movie_slug', $slug)->get();
        $movies = Movie::where('slug', $slug)->first();
        return view('movie_single', compact('movies'), compact('comments') );
    }

    public function profile(Request $request) {
        $user = auth()->user();
        $movies = Favorite_movies::where('user', $user->name)->get();
        return view('profile', compact('user'), compact('movies'));
    }

    public function login() {
        return view('auth.login');
    }

    public function register() {
        return view('auth.register');
    }

    public function review_check(Request $request) {
        $valid = $request->validate([
            'comment' => 'required|min:4|max:500',
        ]);

        $review = new Comment();
        $review->comment = $request->input('comment');
        $review->movie_slug = $request->input('movie_slug');
        $review->name = $user->name;
        $review->image = 'test';
        $review->save();

        // return redirect()->route('review');
    }

    public function favorite_add($slug) {
        $user = auth()->user();

        $movies = Movie::where('slug', $slug)->first();

        $favorite = new Favorite_movies();
        $favorite->name = $movies->name;
        $favorite->slug = $slug;
        $favorite->image = $movies->image;
        $favorite->user = $user->name;
        $favorite->save();

        // return redirect()->route('review');
    }

    public function upload_avatar(Request $request) {
        $user = auth()->user();
        if ($request->hasfile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save( public_path('/avatars/'.$filename));
            $user->image = $filename;
            $user->save();
        }
        return redirect()->route('profile');
    }

}