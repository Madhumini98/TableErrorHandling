@extends('ssadmin.layout_ssadmin')
@section('ssadmin')
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
            <h1 class="text-lg font-bold text-black dark:text-white ">Client Page</h1>
            <div class="flex items-center justify-end">
                <x-add-button href="{{ route('ssadmin.register_client') }}">
                    {{ __('Add') }}
                </x-add-button>
            </div>

            <div class="grid grid-cols-3 gap-4 mb-4">
                <x-table :headers="$headers" :records="$records" />
            </div>
        </div>
    </div>
@endsection
