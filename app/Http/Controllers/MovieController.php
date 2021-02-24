<?php

namespace App\Http\Controllers;

use App\Comment;
use App\User;
use App\Movie;
use App\Favorite_movies;
use Illuminate\Http\Request;

class MovieController extends Controller {

    public function movie_single($slug) {
        $user = auth()->user();
    	$last_add = Movie::take(12)->get();
        $comments = Comment::where('movie_slug', $slug)->get();
        if(isset($user)){
            $check = Favorite_movies::where('slug', $slug)->where('user', $user->name)->first();
        }
        else $check = null;
        foreach ($comments as &$comment) {
        	$user_comment = User::where('name', $comment->name)->first();
        	$comment->image = $user_comment->image;
        }
        $movie = Movie::where('slug', $slug)->first();
        return view('movie_single')->with(compact('movie'))->with(compact('user'))
            ->with(compact('comments'))->with(compact('last_add'))->with(compact('slug'))->with(compact('check'));
    }

    public function review_check(Request $request) {
    	$user = auth()->user();
        $valid = $request->validate([
            'comment' => 'required|min:4|max:500',
        ]);

        $review = new Comment();
        $review->comment = $request->input('comment');
        $review->movie_slug = $request->input('movie_slug');
        $review->name = $user->name;
        $review->image = $user->image;
        $review->save();

        return redirect('/'.$request['movie_slug']);
    }

	public function favorite_add($slug) {
		$user = auth()->user();
		$movies = Movie::where('slug', $slug)->first();
		$check = Favorite_movies::where('slug', $slug)->where('user', $user->name)->first();
		if($check == null){
			$favorite = new Favorite_movies();
			$favorite->name = $movies->name;
			$favorite->slug = $slug;
            $favorite->image = $movies->image;
            $favorite->user = $user->name;
            $favorite->date = $movies->date;
            $favorite->time = $movies->time;
            $favorite->country = $movies->country;
            $favorite->jenre = $movies->jenre;
            $favorite->acters = $movies->acters;
            $favorite->producer = $movies->producer;
            $favorite->description = $movies->description;
			$favorite->save();
		}
    }

}