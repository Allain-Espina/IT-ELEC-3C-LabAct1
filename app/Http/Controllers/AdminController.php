<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//diffForHumans (Date Format)

class AdminController extends Controller
{
    //
    public function dashboard(){
        $userID = intval(Auth::user()->id);
        // $userID = User::where('id', '=', Auth::user()->id)->get();
        $userPosts = Post::latest()->where('user_id', $userID)->paginate(10);
        // $userPosts = Post::where('id', '=', Auth::user()->id)->get();
        return view('dashboard', compact('userPosts'));
        // return dd($userPosts);
    }

    public function userList(){
            //Eloquent ORM (Object Relational Mapping)
        $users = User::all();
        // return view('admins/userList', compact('users'));
        return view('admins.userList', compact('users'));
    }

    // public function create(){
    //     return view('create-post]');
    // }

    // public function modify(){
    //     return view('modify-post');
    // }
}
