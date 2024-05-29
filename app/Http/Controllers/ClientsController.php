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

    public function index(){
        $headers = [
            'client',
            'email',
            'phone',
            'register',
            'payment',
            'active_status',
        ];
        $dataArray= Client::all();
        $records = $dataArray->map(function ($client) {
            $clientData = [
              'client' => $client->client,
              'email' => $client->email,
              'phone' => $client->phone,
              'register' => $client->register,
              'payment' => $client->payment,
              'active_status' => $client->active_status,
            ];
            return $clientData;
          })->toArray();

          return view("ssadmin.clients", compact('headers', 'records'));
        
    }
}
