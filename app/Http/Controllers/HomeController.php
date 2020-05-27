<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\InfoUser;
use App\Category;
use App\Page;
use App\Tag;
use App\Photo;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$users = User::all();
        //$user = User::find(2);
        //$category = Category::find(1);
        //$page = Page::find(1);
        //dd($User->info->bio);


        //dd($user->info);
        //dd($users);
        return view('home');
    }
}
