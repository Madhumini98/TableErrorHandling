@extends('ssadmin.layout_ssadmin')
@section('ssadmin')
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
            <h1 class="text-lg font-bold text-black dark:text-white">Client Page</h1>
            <div class="flex items-center justify-end">
                <x-add-button href="{{ route('ssadmin.register_client') }}">
                    {{ __('Add') }}
                </x-add-button>
            </div>

            <div class="grid grid-cols-1 gap-4">
                <div>
                    <h2 class="font-size: 5px font-bold text-black dark:text-white">Client Information</h2>
                    <x-table :headers="$clientHeaders" :records="$clientRecords" class="w-full" />
                </div>
            </div>
        </div>
        <div class="p-4 mt-14">
            <div class="flex items-center justify-end">
            </div>

            <div class="grid grid-cols-1 gap-4">
                <div>
                    <h2 class="font-size: 5px font-bold text-black dark:text-white">API & Device ID</h2>
                    <x-table :headers="$apiHeaders" :records="$apiRecords" class="w-full" />
                </div>
            </div>
        </div>
        <div class="p-4 mt-14">
            <div class="flex items-center justify-end">
            </div>

            <div class="grid grid-cols-1 gap-4">
                <div>
                    <h2 class="font-size: 5px font-bold text-black dark:text-white">User Account Information</h2>
                    <x-table :headers="$clientsAccountsHeaders" :records="$clientsAccountsRecords" class="w-full" />
                </div>
                
            </div>
        </div>
    </div>
@endsection
