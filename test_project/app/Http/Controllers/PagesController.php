<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function about()
    {
        $first_name = "鷺澤";
        $last_name = "文香";

        return view('pages.about', compact('first_name','last_name'));
        
        //return view('pages.about');
    }
}
