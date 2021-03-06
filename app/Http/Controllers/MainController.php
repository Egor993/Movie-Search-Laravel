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
		$user = auth()->user();
    	$search = $request->input('search');
    	$movies = Movie::paginate(12);
    	$last_add = Movie::take(13)->get();
    	if (isset($search)) {
    		$movies = $movies = Movie::where('name', 'LIKE', '%' . $search . '%')->paginate(5);
    	}
        
        return view('index')->with(compact('movies'))->with(compact('search'))->with(compact('last_add'))->with(compact('user'));
    }

    public function jenre(Request $request, $code) {
    	$search = $request->input('search');
		$movies = Movie::where('code', $code)->paginate(8);
		$last_add = Movie::take(3)->get();
        if (isset($search)) {
    		$movies = $movies = Movie::where('name', 'LIKE', '%' . $search . '%')->where('code', $code)->paginate(5);
    	}
        return view('index')->with(compact('movies'))->with(compact('search'))->with(compact('code'))->with(compact('last_add'));
	}

}