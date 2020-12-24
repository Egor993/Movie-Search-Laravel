<?php

namespace App\Http\Controllers;

use App\User;
use App\Movie;
use App\Favorite_movies;
use Illuminate\Http\Request;
use Image;

class ProfileController extends Controller
{

    public function profile(Request $request) {
        $user = auth()->user();
        $last_add = Movie::take(3)->get();
        $movies = Favorite_movies::where('user', $user->name)->get();
        return view('profile')->with(compact('user'))->with(compact('movies'))->with(compact('last_add'));
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