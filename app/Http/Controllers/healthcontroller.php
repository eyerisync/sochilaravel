<?php

namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	use App\Health;
	use App\Child;
	use Auth;
	use Excel;
	use App\Imports\ChildImport;
	//use Redirect,Response;

class healthcontroller extends Controller
{
    public function health(){

    	$sex = Health::retrieveSex();
		$indigenous = Health::retrieveIndigenous();

		$weightNCount['count'] = Child::where('weightst', 'N')->count();
		$weightUWCount['count'] = Child::where('weightst', 'UW')->count();
		$weightSUWCount['count'] = Child::where('weightst', 'SUW')->count();
		$weightOWCount['count'] = Child::where('weightst', 'OW')->count();

    	return view('healthview', compact('sex', 'indigenous', 'weightNCount', 'weightUWCount', 'weightSUWCount', 'weightOWCount'));

		$childs = Child::all();

		dd($childs);
    }

    public function showData(){

		$user = Health::RetrieveUser();

		return response()->json($user);
	}

	public function showWeight(){

		//$user = Health::RetrieveWeight();

		//return response()->json($user);

		//$weightCount = Child::where('weightst', '=', 'N')->count();
		//return view('healthview', compact('weightCount'));
	}

	public function delete_child(Request $request){

		$result = new Health();

		$result->DeleteChild($request);

		return response()->json($result);
	}

	public function insert_child(Request $request){

		$result = new Health();

		$result->InsertChild($request);

		return response()->json($result);
	}

	public function update_child(Request $request){

		$result = new Health();

		$result->UpdateChild($request);
		
		return response()->json($result);
	}

	public function calculate_status(Request $request){

		$result = new Health();

		$result->CalculateStatus($request);
		
		return response()->json($result);
	}

	public function upload(){
		
		return view('upload');
	}

	public function importForm(){
		
		return view('import-form');
	}

	public function import(Request $request){

		Excel::import(new ChildImport,$request->file);
		//return "Records are Imported Successfully!";
		$sex = Health::retrieveSex();
		$indigenous = Health::retrieveIndigenous();
    	return redirect('/main/health');
	}

	public function showChilds(Request $request)
    {
        if ($request->ajax()) {
            $data = Child::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('healthview');
    }

	public function edit($child_id)
	{
		$where = array('child_id' => $id);
		$childs = Child::where($where)->first();
		return Response::json($childs);
	}
}