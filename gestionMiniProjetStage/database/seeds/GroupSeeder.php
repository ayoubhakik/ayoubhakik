<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //hardcoderd data to show in the group view
        DB::table('group')->insert([
            'id_group' => '1',
            'nom_group' => 'G1',
            'grade' => 'not avilable for the moment',
            'note' => 'not avilable for the moment',
            'final_repport' => 'not avilable for the moment',
            'id_encadrant' => 'not avilable for the moment',
            'id_soutenance' => 'not avilable for the moment',
        ]);
    }
}
