<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardSadminController extends Controller
{
    public function DashboardSadmin(){
        return view("sadmin.dashboard_sadmin");
    } //end method
}
