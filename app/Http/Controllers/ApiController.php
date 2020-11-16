<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller {

    public function UpdateUser(Request $request){
	    $data = $request->all();
		$user_id = $data['user_id'];
		$name = $data['name'];
		
		$status = User::where('id', $user_id)->update([
		'name' => $name
		]);
        return response()->json(['status'=>$status]);
    }
	
	public function DeleteUser(Request $request){
	    $data = $request->all();
		$user_id = $data['user_id'];
		
		$status = User::where('id',$user_id)->delete();
        return response()->json(['status'=>$status]);
    }
	
	
	public function getUser(){
	    $users = User::all();
		$div = '';
		foreach($users as $user)
		{
			$div .= '<div><p>User ID: <strong>#'.$user->id.'</strong></p><p>Name: <strong>'.$user->name.'</strong></p><p>Email: <strong>'.$user->email.'</strong></p></div></br></br>';
		}
        return $div;
    }
}