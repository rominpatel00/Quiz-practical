<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->has('userId')){
            return redirect('/users');;
        }
        return view("auth/login");
    }

    public function verify(Request $request)
    {

        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
        );
        $user = Users::where('email',$request->input('email'))->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('userId',$user->id);
                $request->session()->put('username',$user->username);
                $request->session()->put('role',$user->role);
                // $request->session()->put('userId',$user->id);

                if($user->role != 1){
                    return redirect('/quiz');
                }
                return redirect('/users');
            }else{

                return back()->with('fail','Password not matched.');
            }
        }else{
            return back()->with('fail','This email is not register');
        }
    }

    public function logout(Request $request){
        if($request->session()->has('userId')){
            session()->pull('userId'); 
            Auth::logout();
            return redirect('/login');;
        }
    }
    
  
}
