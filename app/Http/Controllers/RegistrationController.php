<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class RegistrationController extends Controller
{
	public function create()
    {
        return view('registration.create');
    }
	
	public function store(Request $request)
    {
		$validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed'
        ]);
		
		if ($validator->fails()) {
			return redirect()->to('/register')->withErrors($validator)->withInput();
		}else{
			$user = User::create(request(['name', 'email', 'password']));
			return view('registration.create', ['message'=>'Signup done successfully!']);
		} 
    }
}
