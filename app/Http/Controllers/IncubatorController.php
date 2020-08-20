<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incub;
use App\User;
use Illuminate\Routing\Redirector;
use App\Http\Requests;


class IncubatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incubs = Incub::all()->toArray(); 
        return view('incub.index', compact('incubs')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('incub.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [ 
            'id_in' => 'required', 
            'name' => 'required','unique:users',
            'address' => 'required'
            ]); 
    
            $incub = new Incub
            ([ 'id_in' => $request->get('id_in'),
            'name' => $request->get('name'),
            'address' => $request->get('address')
             ]); 
            $incub->save();
            return redirect('incub')->with('success', 'บันทึกข้อมูลเรียบร้อย');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $user = DB::select("SELECT * FROM users WHERE id='$id'");
        return view('incub',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $incub = Incub::find($id);  
	    return view('incub.edit', compact('incub', 'id'));
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
        [ 'id_in' => 'required', 
        'name' => 'required',
        'address' => 'required'
         ]); 
        
        $incub = Incub::find($id); 
        $incub->id_in = $request->get('id_in'); 
        $incub->name = $request->get('name');
        $incub->address = $request->get('address');
        $incub->save(); 
        return redirect()->route('incub.index')->with('success', 'อัพเดทเรียบร้อย');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $incub = Incub::find($id); 
        $incub->delete(); 
        return redirect()->route('incub.index')->with('success', 'ลบข้อมูลเรียบร้อย'); 
    }
}