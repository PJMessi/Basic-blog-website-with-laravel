<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\mailtrap;
use App\User;
use App\Message;

class pagesController extends Controller
{
    public function index()
    {
        $messages = Message::get()->take(-3);
        return view('pages.index')->with('messages', $messages);
    }

    public function contact()
    {
        return view('pages.contact');
    }
    
    public function blog()
    {
        return view('pages.blog');
    }

    public function blogInner()
    {
        return view('pages.blogInner');
    }

}
