<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('clients')->insert([
           //slt
           [
            'client'=> 'Slt',
            'email'=> 'info@slt.lk',
            'phone'=> '+94115895547',
            'available_classes'=> 'A,E,F',
            'register'=> 'yes',
            'payment'=> 'yes',
            'active_status'=> 'yes',
           ],
           //mobitel
           [
            'client'=> 'Mobitel',
            'email'=> 'interns.slt@gmail.com',
            'phone'=> '+94777777777',
            'available_classes'=> 'A,E,F',
            'register'=> 'yes',
            'payment'=> 'yes',
            'active_status'=> 'yes',
           ], 
           
           ]);
    
    }
}
