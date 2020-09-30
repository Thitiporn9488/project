<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incub;
use App\User;
use Illuminate\Routing\Redirector;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;


class IncubatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $incubs = Incub::all()->toArray(); 
        session_start();
        $farmer = (isset($_SESSION['id_farmer'])) ? $_SESSION['id_farmer'] : '';

        $incubs=DB::select("SELECT * FROM incubs,users where incubs.id_farmer=users.id_farmer and incubs.id_farmer='$farmer'");
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
            'name_in' => 'required','unique:users'
            ]); 

            session_start();
            $id_farmer = $_SESSION['id_farmer'];

            $incub = new Incub;
            $incub ->id_in=$request->id_in;
            $incub ->name_in=$request->name_in;
            $incub ->id_farmer=$id_farmer;
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
        
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($no_in)
    {
        $incubs = DB::select("SELECT * FROM incubs where incubs.no_in='$no_in'");  
        // print_r ($incub);
	    return view('incub.edit', compact('incubs', 'no_in'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_in(Request $request, $no_in)
    {
       $incub = new Incub;
       $id_in=$request->id_in;
       $name_in=$request->name_in;
       

        DB::update("UPDATE users,incubs SET name_in='$name_in' WHERE users.id_farmer=incubs.id_farmer
                    AND projects.user_id=img_project.p_id AND ");
        return redirect()->route('incub.index')->with('success', 'อัพเดทเรียบร้อย');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_in)
    {
        $incub = Incub::where('no_in',$no_in);
        $incub->delete(); 
        return redirect()->route('incub.index')->with('success', 'ลบข้อมูลเรียบร้อย'); 
    }

    
}
