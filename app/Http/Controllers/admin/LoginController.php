<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }
    public function loginuser(Request $request){
        if($request->name =='fatma' && $request->password =='123'){
            $request->session()->put('loginIn',$request->name);
            return redirect('dashboard');
        }else{
            return back()->with('fail','username or password are wrong');
        }
        
    }
 
    public function logout(){
        if(Session::has('loginIn')){
            Session::pull('loginIn');
            return redirect('/'); 
        }
       
    }
}
