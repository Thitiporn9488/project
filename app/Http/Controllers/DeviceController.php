<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;
use Illuminate\Routing\Redirector;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Device::all()->toArray(); 
        return view('device.index', compact('devices')); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('device.create');   
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
            'id_device' => 'required', 
            'key' => 'required','unique:users'
            ]); 
    
            $device = new Device
            ([ 'id_device' => $request->get('id_device'),
            'key' => $request->get('key')
             ]); 
            $device->save();
            return redirect('device')->with('success', 'บันทึกข้อมูลเรียบร้อย'); 
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
        $device = Device::find($id);  
	    return view('device.edit', compact('device', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_device)
    {
        $this->validate($request, 
        [ 'id_device' => 'required', 
        'key' => 'required'
         ]); 
        
        $device = Device::find($id_device); 
        $device->id_device = $request->get('id_device'); 
        $device->key = $request->get('key');
        $device->save(); 
        return redirect()->route('device.index')->with('success', 'อัพเดทเรียบร้อย');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_device)
    {
        $device =Device::where('id_device',$id_device);
        $device->delete(); 
        return redirect()->route('device.index')->with('success', 'ลบข้อมูลเรียบร้อย'); 
    }
}