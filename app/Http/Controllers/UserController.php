<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $users=User::orderBy('id','desc')->get();
        return view('pages.user.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function user_create()
    {
        return view('pages.user.user_create');
    }

    
    public function user_store(Request $request)
    {
        //Check validation
        $this->validate($request,[
    
'name'=>'required|string|max:15',
'password'=>'required|min:6',
'email'=> 'required|email'

        ]);
        $user=new User();
         $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->address=$request->address;
        $user->mobile=$request->mobile;
        $user->save();
       return redirect()->route('users');
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
   public function user_edit($id)
    {
       $user= User::find($id);
        return view('pages.user.user_edit')->with('user',$user);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function user_update(Request $request, $id)
      {
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->address=$request->address;
        $user->mobile=$request->mobile;
        $user->save();
       return redirect()->route('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function user_delete($id)
    {
       $user=User::find($id);
       $user->delete();
       return redirect()->route('students');
    }
}
