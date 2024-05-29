@extends('ssadmin.layout_ssadmin')
@section('ssadmin')
<div class=" sm:ml-64">
        <div class="flex flex-col items-center justify-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0 dark:bg-gray-900">
            <h1 style="font-size: 24px; font-weight: bold;">Register Client</h1>
            <div class="w-full px-4 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-lg dark:bg-gray-800 sm:rounded-lg"> 
                
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                
                    <!-- Client Name -->
                    <div>
                        <x-input-label for="client" :value="__('Client Name')" />
                        <x-text-input id="client" class="block w-full mt-1" type="text" name="client" :value="old('client')" required autofocus autocomplete="client" />
                        <x-input-error :messages="$errors->get('client')" class="mt-2" />
                    </div>
                
                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                
                    <!-- phone -->
                    <div class="mt-4">
                        <x-input-label for="phone" :value="__('Phone')" />
                        <x-text-input id="phone" class="block w-full mt-1" type="text" name="phone" :value="old('phone')" required autocomplete="phone"/>
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>
                
                    <!--Available Classes -->
                    <div class="mt-4">
                        <x-input-label for="available_classes" :value="__('Available Classes')" />
                        <x-text-input id="available_classes" class="block w-full mt-1" type="text" name="available_classes" :value="old('available_classes')" required autocomplete="available_classes"/>
                        <x-input-error :messages="$errors->get('available_classes')" class="mt-2" />
                    </div>
                
                    <!--Register -->
                    <div class="flex items-center mt-4">
                        <p class="mr-2 dark:text-white">Is Register?</p>
                        @php
                            $registerRadios = [
                                [
                                    'id' => 'register-yes',
                                    'value' => 'yes',
                                    'label' => 'Yes',
                                    'checked' => old('register') === 'yes',
                                    'disabled' => false,
                                ],
                                [
                                    'id' => 'register-no',
                                    'value' => 'no',
                                    'label' => 'No',
                                    'checked' => old('register') === 'no',
                                    'disabled' => false,
                                ],
                            ];
                        @endphp
                        <x-radio-button-group :radios="$registerRadios" name="register" />
                    </div>
                
                    <!--Payment-->
                    <div class="flex items-center mt-4">
                        <p class="mr-2 dark:text-white">Is Need Payment?</p>
                        @php
                            $paymentRadios = [
                                [
                                    'id' => 'payment-yes',
                                    'value' => 'yes',
                                    'label' => 'Yes',
                                    'checked' => old('payment') === 'yes',
                                    'disabled' => false,
                                ],
                                [
                                    'id' => 'payment-no',
                                    'value' => 'no',
                                    'label' => 'No',
                                    'checked' => old('payment') === 'no',
                                    'disabled' => false,
                                ],
                            ];
                        @endphp
                        <x-radio-button-group :radios="$paymentRadios" name="payment" />
                    </div>
                
                    <!--Active Status-->
                    <div class="flex items-center mt-4">
                        <p class="mr-2 dark:text-white">Is Active?</p>
                        @php
                            $statusRadios = [
                                [
                                    'id' => 'active-yes',
                                    'value' => 'yes',
                                    'label' => 'Yes',
                                    'checked' => old('active_status') === 'yes',
                                    'disabled' => false,
                                ],
                                [
                                    'id' => 'active-no',
                                    'value' => 'no',
                                    'label' => 'No',
                                    'checked' => old('active_status') === 'no',
                                    'disabled' => false,
                                ],
                            ];
                        @endphp
                        <x-radio-button-group :radios="$statusRadios" name="active_status" />
                    </div>
                
                    <div class="flex items-center justify-center mt-4">
                        <x-save-button class="mr-2">
                            Save
                        </x-save-button>
                
                        <x-clear-button>
                            Clear
                        </x-clear-button>
                    </div>
                </form>
                
           </div>
    </div>
 </div>
       

@endsection