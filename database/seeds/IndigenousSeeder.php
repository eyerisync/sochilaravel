<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Indigenous;

class IndigenousSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Indigenous::create([
        	'indigenous'	=>	'NO',
        ]);
    }
}
