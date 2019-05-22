<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Message;


class dashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        $user = auth()->user(); 
        

        if($user->name == 'The Admin' && $user->password == '$2y$10$xNOnI90Tg1rnvAKMspuTYOYZWqvt1tBdGFoD48us0P1UNKTocxYqG')
        {
            $messages = Message::orderBy('created_at', 'desc')->paginate(3);
            return view('adminDashboard')->with('messages', $messages);
        }

          
        return view('dashboard')->with('posts', $user->posts);
    }
}
