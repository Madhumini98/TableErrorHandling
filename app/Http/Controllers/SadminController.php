<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SadminController extends Controller
{
    public function SadminDashboard(){
        return view("sadmin.dashboard_sadmin");
    } //end method

    public function SadminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
