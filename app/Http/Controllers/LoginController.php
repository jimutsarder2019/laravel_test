<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class LoginController extends Controller
{
    public function create()
    {
        return view('login.create');
    }
    
    public function login()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
			
		if(auth()->user()->role == 1) {
			return redirect()->to( '/admin-dashboard' );
		}else{
			return redirect()->to( '/user/'.auth()->user()->id );
		}
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/login');
    }
}