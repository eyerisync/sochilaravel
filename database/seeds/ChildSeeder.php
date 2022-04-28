<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Child;

class ChildSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Child::create([
            'id'	=>	'2',
        	'zone'	=>	'Zone 1',
        	'mothersname'	=>	'Odette Robredo',
        	'childsname' => 'Miya Robredo',
            'ind_id'	=>	'2',
            'sex_id'	=>	'3',
            'birthdate'	=>	'2022\02\14',
            'actualdate'	=>	'2022\03\20',
            'weight'	=>	'4.5',
            'height'	=>	'50',
            'ageinmonths'	=>	'1',
            'weightst'	=>	'N',  
            'heightst'	=>	'N',
            'weightforlengthst'	=>	'N',
        ]);
    }
}
