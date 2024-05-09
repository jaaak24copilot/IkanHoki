<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class temp extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('temp')->delete();
        $json = File::get("database/data/temp.json");
        $data = json_decode($json, true);
        foreach ($data as $obj => $value) {
            DB::table('temp')->insert([
                'temp_in' => $value['Temp In :'],
                'temp_out' => $value['Temp Out :'],
                'timestamp' => $obj,
            ]);
        }
    
    }
}
