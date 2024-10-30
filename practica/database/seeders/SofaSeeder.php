<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SofaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=array('material'=>"tela",'dimensiones'=>"20",'capacidad'=> "2",'color'=>"negro");
       DB::table('sofas')->insert($data);
    }
}
