<?php

// php artisan make:controller UserController

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    // public function index(){
        // return 'This is the index method from the UserController.';

        // return view('student.user');

        //Model Binding
        // $users = User::all();
        // return view('student.user', compact('users'));

    //     return view('student/user', ['name' => 'James', 'age' => '18']);
    // }
    
    // public function create(){
    //     // return 'This is the index method from the UserController.';
    //     return view('student.user-create');
    // }

    public function welcome(){
        
        return view('welcome');
    }

    public function features(){
        
        return view('guests.features');
    }

    public function versions(){
        
        return view('guests.versions');
    }

    public function history(){
        
        return view('guests.history');
    }

    public function about(){
        
        return view('guests.about');
    }
}
