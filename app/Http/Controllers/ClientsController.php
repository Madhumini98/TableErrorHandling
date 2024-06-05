<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use League\Flysystem\AwsS3V3\S3ClientStub;

class ClientsController extends Controller
{
    public function Clients(){
        return view("ssadmin.clients");
    } //end method
    public function RegisterClient(){
        return view("ssadmin.register_client");
    } //end method

    public function store(Request $request){

        dd($request->all());

    }


}
