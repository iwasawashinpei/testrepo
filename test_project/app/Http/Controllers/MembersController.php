<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\MemberRequest;

class MembersController extends Controller
{
    //
    public function index()
    {
        session_start();
//      $members = Member::all();
        
        $members = Member::where('password', $_SESSION['password'])->get();
        	
        
        return view('members.index',compact('members'));
    }
    
    public function show($id)
    {
        $member = Member::findOrFail($id);
        
        return view('members.show',compact('member'));
    }
    
    public function create()
    {
        return view('members.create');
    }
    
    public function store(MemberRequest $request)
    {
        Member::create($request->all());

        return redirect('members');
    }
    
    public function edit($id)
    {
        $member = Member::findOrFail($id);
        
        return view('members.edit', compact('member'));
    }
    
    public function update($id, MemberRequest $request)
    {
        $member = Member::findOrFail($id);
        
        $member->update($request->all());
        
        return redirect(url('members', [$member->id]));
    }
    
    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        
        $member->delete();
        
        return redirect('members');
    }

    public function title()
    {
        return view('members.title');
    }
}
