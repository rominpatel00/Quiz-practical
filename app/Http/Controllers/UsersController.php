<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::select('*')->get();
        session()->flash('message', 'Deleted Successfuly.');
        return view("users/user", ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view("users/add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                // extra some validations
                // 'required|regex:/(01)[0-9]{9}/' - for mobile 
                // 'required|regex:/(^[-0-9A-Za-z.,\/ ]+$)/' - for address

                'username' => 'required',
                'email' => 'required|email',
                'password' => 'required|regex:/[@$!%*#?&]/|regex:/[0-9]/|regex:/[A-Z]/|regex:/[a-z]/',
           
            ]
        );
        $users = new Users();
        $users->username = $request->input('username');
        $users->email = $request->input('email');
        $users->role = 2;
        $users->password = Hash::make($request->input('password'));
        $users->save();
        return redirect("/users")->with('status' , "Inserted Successfuly");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = Users::where('id',$id)->first();
        return view('/users/update', ['users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                // extra some validations
                // 'required|regex:/(01)[0-9]{9}/' - for mobile 
                // 'required|regex:/(^[-0-9A-Za-z.,\/ ]+$)/' - for address

                'username' => 'required',
                'email' => 'required|email',
                
            ]
        );
        
        $pwd = $request->input('password');
        if($pwd){
            $users = Users::where('id', $id)
            ->update(
            [
                'username'=>$request->input('username'),
                'email'=>$request->input('email'),
                'password'=>Hash::make($request->input('password')),
            ]);
        }
        else{
            $users = Users::where('id', $id)
        ->update(
        [
            'username'=>$request->input('username'),
            'email'=>$request->input('email'),
        ]);
        }
     if($users)
     { 
         return redirect("/users")->with('status', "Inserted Successfuly");
     }
     else
     {
         print_r("An error occurd");
     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Users::where('id',$id)->delete();
        if($result)
        {
            return redirect("/users");
            session()->flash('message', 'Deleted Successfuly.');
        }
        else
        {
            print_r("An error Occurd while deleting");
        }
    }
 
}
