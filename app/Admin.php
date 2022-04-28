<?php
	
	namespace App;

	use Illuminate\Database\Eloquent\Factories\HasFactory;
	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Support\Facades\DB;

	class Admin extends Model{

		public function scopeRetrieveRole($request){

    		$role = DB::table('role')->pluck("rolename","roleid");
    		return $role;
    	}

		public function scopeRetrieveAdmin(){

        	$result = DB::select('SELECT * FROM users;');	
       		return $result;
    	}

        public function InsertAdmin($request){
 
            $name = $request->input('name');
            $email = $request->input('email');
            $password = $request->input('password');

            $result = DB::insert('INSERT INTO users (name,email,password) VALUES (?,?,?)', [$name, $email, $password]);

            return $result;
        }

    	public function AdminUpdate($request){

    		$id = $request->input('id');
    		$name = $request->input('name');
			$email = $request->input('email');
    		$password = $request->input('password');

    		$result =DB::update('UPDATE users SET name = ?, email = ?, password = ? WHERE id = ?', [$name, $email, $password, $id]);

    		return $result;
    	}

        public function DeleteAdmin($request){

            $id = $request->input('id');
            $result = DB::delete('DELETE FROM users WHERE id = ?', [$id]);
            return $result;
        } 
	}

?>