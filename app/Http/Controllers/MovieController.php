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
        $check = Favorite_movies::where('slug', $slug)->where('user', $user->name)->first();
    	$last_add = Movie::take(3)->get();
        $comments = Comment::where('movie_slug', $slug)->get();
        foreach ($comments as &$comment) {
        	$user_comment = User::where('name', $comment->name)->first();
        	$comment->image = $user_comment->image;
        }
        $movies = Movie::where('slug', $slug)->first();
        return view('movie_single')->with(compact('movies'))->with(compact('user'))
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

        // return redirect()->route('review');
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
			$favorite->save();
		}
    }

}