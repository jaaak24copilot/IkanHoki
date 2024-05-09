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
        DB::table('ph')->delete();
        $json = File::get("database/data/ph.json");
        $data = json_decode($json, true);
        foreach ($data as $obj => $value) {
            DB::table('ph')->insert([
                'ph' => $value['PH :'],
                'tds' => $value['TDS :'],
                'timestamp' => $obj,
            ]);
        }
    
    }
}
