<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Movie;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $movies = Movie::get();
        return view('index', compact('movies'));
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

    public function profile() {
        return view('profile');
    }

    public function review_check(Request $request) {
        $valid = $request->validate([
            'comment' => 'required|min:4|max:500',
        ]);

        $review = new Comment();
        $review->comment = $request->input('comment');
        $review->movie_slug = $request->input('movie_slug');
        $review->name = 'test';
        $review->image = 'test';
        $review->save();

        // return redirect()->route('review');
    }

}