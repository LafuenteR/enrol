<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct(){
    	$this->middleware('guest',['except' => 'destroy']);
    }
    public function store(Request $request){
    	if(! auth()->attempt(request(['studentnumber','password']))){

    		return back()->withInput();
    	}
    return redirect('/about');
    }
    public function destroy(){
    	auth()->logout();
    	return view('welcome');
    }
}
