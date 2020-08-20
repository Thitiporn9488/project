<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::all()->toArray(); 
        return view('user.index', compact('users')); 
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.register');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

            $this->validate($request, [ 'name' => 'required', 
            'username' => 'required','unique:users',
            'password' => 'required', 
            'status' => 'required']); 

            $user = new User([ 'name' => $request->get('name'),
            'id_farmer' => $request->get('id_farmer'),
            'group' => $request->get('group'), 
            'username' => $request->get('username'),
            'password' => $request->get('password'),
            'status' => $request->get('status'),
             ]); 

            $user->save();
            return redirect()->route('user.index')->with('success', 'บันทึกข้อมูลเรียบร้อย');  


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);  
	    return view('user.edit', compact('user', 'id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, 
        [ 'name' => 'required', 
        'id_farmer' => 'required',
        'group' => 'required',
        'username' => 'required',
        'status' => 'required'
         ]); 
        
        $user = User::find($id); 
        $user->name = $request->get('name'); 
        $user->id_farmer = $request->get('id_farmer');
        $user->group = $request->get('group');
        $user->name = $request->get('username'); 
        $user->status = $request->get('status');
        $user->save(); 
        return redirect()->route('user.index')->with('success', 'อัพเดทเรียบร้อย'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id); 
        $user->delete(); 
        return redirect()->route('user.index')->with('success', 'ลบข้อมูลเรียบร้อย');     
    }
}

