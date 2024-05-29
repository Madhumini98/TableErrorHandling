<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManualEntryController extends Controller
{
    public function ManualEntry(){
        return view("sadmin.manual_entry");
    } //end method
}
