<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('client_types')->insert([
            'id'=>2,
            'Type'=>"User",
            'Description'=>"Normal users or end users.",
        ]);
        DB::table('client_types')->insert([
            'id'=>3,
            'Type'=>"Shop",
            'Description'=>"Shops are selling their products.",
        ]);
        DB::table('client_types')->insert([
            'id'=>4,
            'Type'=>"Garage",
            'Description'=>"Garages are provide car maintenace servies.",
        ]);
        DB::table('client_types')->insert([
            'id'=>5,
            'Type'=>"Trainer",
            'Description'=>"Trainers are getting some document of car maintenace servies.",
        ]);
        DB::table('client_types')->insert([
            'id'=>1,
            'Type'=>"Admin",
            'Description'=>"Admins are getting some document of car maintenace servies.",
        ]);
    }
}
