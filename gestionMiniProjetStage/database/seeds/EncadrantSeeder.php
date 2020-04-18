<?php

use App\Http\Controllers\encadrantController;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EncadrantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //hardcoded data just for some tests
        DB::table('encadrant')->insert([
            'nomEnc' => 'Ech-Chadi',
            'prenomEnc' => 'Said',
            'email' => 'saidech@gmail.com',
            'phone' => '0666445521',
            'nbr_group' => '5',
            'id_depart' => '1',

        ]);
    }
}
