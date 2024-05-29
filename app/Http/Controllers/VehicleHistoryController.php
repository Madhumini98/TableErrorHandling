<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleHistoryController extends Controller
{
    public function VehicleHistory(){
        return view("ssadmin.vehicle_history");
    } //end method

}
