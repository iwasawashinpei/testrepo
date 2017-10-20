<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\ItemRequest;
use App\Http\Requests\UserRequest;

use App\Item;
use App\User;

class MypagesController extends Controller
{
    //
    public function index($id)
    {
        $user = User::findOrFail($id);
        $name = $user->name;
        
        if(isset($_GET['days']))
        {
            $set = $_GET['days'];
            $items = DB::table('items')->where('days','=',"{$set}")->where('buy_member1', 'like binary', "%{$name}%")
                                       ->orWhere('days','=',"{$set}")->where('buy_member2', 'like binary', "%{$name}%")
                                       ->orWhere('days','=',"{$set}")->where('buy_member3', 'like binary', "%{$name}%")
                                       ->orWhere('days','=',"{$set}")->where('buy_member4', 'like binary', "%{$name}%")
                                       ->orWhere('days','=',"{$set}")->where('buy_member5', 'like binary', "%{$name}%")
                                       ->orWhere('days','=',"{$set}")->where('buy_member6', 'like binary', "%{$name}%")
                                       ->orWhere('days','=',"{$set}")->where('buy_member7', 'like binary', "%{$name}%")
                                       ->orWhere('days','=',"{$set}")->where('buy_member8', 'like binary', "%{$name}%")
                                       ->orWhere('days','=',"{$set}")->where('buy_member9', 'like binary', "%{$name}%")
                                       ->orWhere('days','=',"{$set}")->where('buy_member10', 'like binary', "%{$name}%")
                                       ->paginate(10);

        }else{
            $items = DB::table('items')->where('buy_member1', 'like binary', "%{$name}%")
                                      ->orWhere('buy_member2', 'like binary', "%{$name}%")
                                      ->orWhere('buy_member3', 'like binary', "%{$name}%")
                                      ->orWhere('buy_member4', 'like binary', "%{$name}%")
                                      ->orWhere('buy_member5', 'like binary', "%{$name}%")
                                      ->orWhere('buy_member6', 'like binary', "%{$name}%")
                                      ->orWhere('buy_member7', 'like binary', "%{$name}%")
                                      ->orWhere('buy_member8', 'like binary', "%{$name}%")
                                      ->orWhere('buy_member9', 'like binary', "%{$name}%")
                                      ->orWhere('buy_member10', 'like binary', "%{$name}%")
                                      ->paginate(10);
       }
                                       
        return view('mypages.index', compact('items'));
    }
}
