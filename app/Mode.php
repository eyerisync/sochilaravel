<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mode extends Model
{

    public function scopeRetrieveUser(){

    	$result = DB::select('SELECT * FROM userx;');

    	return $result;
    }
}
