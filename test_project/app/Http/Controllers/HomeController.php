<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Member;
use App\Http\Requests\MemberRequest;
use App\Http\Requests\ItemRequest;

use App\User;
use App\Item;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session_start();
        $users = User::where('email', $_SESSION['email'])->get();
        
        foreach($users as $user)
        {
            $_SESSION['id'] = $user->id;
            $_SESSION['name'] = $user->name;
        }
        
        
        $items = DB::table('items')->paginate(10);
        
        return view('items.index',compact('items'));
        //return view('home');
    }
}
