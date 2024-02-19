<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    function deviceList()
    {
        return Device::all();
    }
    function getId($id)
    {
        return Device::find($id);
    }
    function add(Request $request)
    {
        $device = new Device();
        $device->name = $request->name;
        $device->email = $request->email;
        $result = $device->save();
        if($result){
            return ["Result"=>"Data saved successfully"];
        }
        else{
            return ["Result"=>"Some problem is there"];
        }
    }
    function update(Request $request)
    {
        $device = Device::find($request->id);
        $device->name = $request->name;
        $device->email = $request->email;
        $result = $device->save();
        if($result)
        return ["Result"=>"Data updated successfully"];
    }
    function search($name)
    {
        return Device::where('name','like','%'. $name . '%')->get();
    }
}
