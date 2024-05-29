<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardSecurityController extends Controller
{
    public function DashboardSecurity(){
        return view("security.dashboard_security");
    } //end method
}
