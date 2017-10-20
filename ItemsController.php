<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemRequest;

class ItemsController extends Controller
{
    //
    public function index()
    { 
        if(isset($_GET['days']))
        {
            $set = $_GET['days'];
            $items = DB::table('items')->where('days',$set)->where('delflg','0')->paginate(10);
        }else{
            $items = DB::table('items')->paginate(10);
        }
        
        return view('items.index', compact('items'));
    }
    
    public function create()
    {
        return view('items.create');
    }
    
    public function store(ItemRequest $request)
    {
        $rules = [
            'circle' => 'required',
        ];
        $this->validate($request, $rules);

        Item::create($request->all());

        return redirect('items');
    }
    
     public function edit($id)
    {
        $item = Item::findOrFail($id);
        
        return view('items.edit', compact('item'));
    }

     public function update(ItemRequest $request)
    {
    
        $item = Item::findOrFail($request->id);
        $update = $request->all();
        
        if(!empty($request->delflg))
        {
            $update['delflg'] = 1;
            $item->update($update);
        }
        $item->update($update);

        $items = DB::table('items')->paginate(10);
        
        return view('items.index',compact('items'));
    }
}
