<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
use App\Models\API;
use App\Models\clients_accounts;

class SsadminController extends Controller
{
    public function SsadminDashboard()
    {
        $clientHeaders = [
            'client',
            'email',
            'phone',
            'register',
            'payment',
            'active_status',
        ];
        $clientData = Client::all();
        $clientRecords = $clientData->map(function ($client) {
            return [
                'client' => $client->client,
                'email' => $client->email,
                'phone' => $client->phone,
                'register' => $client->register,
                'payment' => $client->payment,
                'active_status' => $client->active_status,
            ];
        })->toArray();

        $apiHeaders = [
            'client',
            'API Key',
            'Device ID',
            'API status',
        ];
        $apiData = API::all();
        $apiRecords = $apiData->map(function ($api) {
            return [
                'client' => $api->client, // Assuming there's a client relation or field
                'API Key' => $api->api_key, // Assuming the field name is api_key
                'Device ID' => $api->device_id, // Assuming the field name is device_id
                'API status' => $api->api_status, // Assuming the field name is api_status
            ];
        })->toArray();

        $clientsAccountsHeaders = [
            'client',
            'email',
            'password',
            'role',
            'username',
        ];
        $clientsAccountsData = clients_accounts::all();
        $clientsAccountsRecords = $clientsAccountsData->map(function ($clients_accounts) {
            return [
                'client' => $clients_accounts->client,
                'email' => $clients_accounts->email,
                'password' => $clients_accounts->password,
                'role' => $clients_accounts->role,
                'username' => $clients_accounts->username,
            ];
        })->toArray();

        return view("ssadmin.clients", compact('clientHeaders', 'clientRecords', 'apiHeaders', 'apiRecords', 'clientsAccountsHeaders', 'clientsAccountsRecords'));
    }

    public function SsadminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
