<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Health extends Model
{
    protected $table = "childs";

    protected $fillable = ['id', 'zone', 'mothersname', 'childsname', 'ind_id', 'sex_id', 'birthdate', 'actualdate', 'weight','height','ageinmonths','weightst','heightst','weightforlengthst'];

    public function scopeRetrieveUser(){

    	$result = DB::select('SELECT * FROM childs,sex,indigenous WHERE childs.sex_id = sex.sex_id AND childs.ind_id = indigenous.ind_id;');

    	return $result;
    }

    public function scopeRetrieveWeight(){

    	$result = DB::select('SELECT COUNT(*) 
        FROM childs
        WHERE weightst = UW;');

    	return $result;
    }

    public function scopeRetrieveSex($request){

    	$sex = DB::table('sex')->pluck("sex","sex_id");
    	return $sex;
    }

    public function scopeRetrieveIndigenous($request){

    	$indigenous = DB::table('indigenous')->pluck("indigenous","ind_id");
    	return $indigenous;
    }

    public function DeleteChild($request){

    	$child_id = $request->input('child_id');

    	$result = DB::delete('DELETE FROM childs WHERE child_id = ?', [$child_id]);

    	return $result;
    }

    public function InsertChild($request){

        $id = $request->input('id'); 
    	$zone = $request->input('zone');
    	$mothersname = $request->input('mothersname');
    	$childsname = $request->input('childsname');
        $ind_id = $request->input('ind_id');
    	$sex_id = $request->input('sex_id');
    	$birthdate = $request->input('birthdate');
        $actualdate = $request->input('actualdate');
    	$weight = $request->input('weight');
    	$height = $request->input('height');
        $ageinmonths = $request->input('ageinmonths');

    	$result = DB::insert('INSERT INTO childs (id,zone,mothersname,childsname,ind_id,sex_id,birthdate,actualdate,weight,height,ageinmonths) 
							  VALUES (?,?,?,?,?,?,?,?,?,?,?)', [$id, $zone, $mothersname, $childsname, $ind_id, $sex_id, $birthdate, $actualdate, $weight, $height, $ageinmonths]);

    	return $result;
    }

    public function UpdateChild($request){

        $child_id = $request->input('child_id');
        $zone = $request->input('zone');
        $mothersname = $request->input('mothersname');
        $childsname = $request->input('childsname');
        $weight = $request->input('weight');
        $height = $request->input('height');
        $ageinmonths = $request->input('ageinmonths');

        $result = DB::update('UPDATE childs SET zone = ?, mothersname = ?, childsname = ?, weight = ?, height = ?, ageinmonths = ? WHERE child_id = ?', 
        [$zone, $mothersname, $childsname, $weight, $height, $ageinmonths, $child_id]);

        return $result;
    }
    
    public function CalculateStatus($request){

        $child_id = $request->input('child_id');
        $weightst = $request->input('weightst');
        $heightst = $request->input('heightst');
        $weightforlengthst = $request->input('weightforlengthst');

        $result = DB::update('UPDATE childs SET weightst = ?, heightst = ?, weightforlengthst = ? WHERE child_id = ?', [$weightst, $heightst, $weightforlengthst, $child_id]);

        return $result;
    }
}

?>