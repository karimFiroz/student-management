<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Group;



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
        
          $this->data['groups']=Group::arrayForSelect();
       
      
        return view('pages.user.user_create',$this->data);
    }

    
    public function user_store(Request $request)
    {


        //Check validation
        $this->validate($request,[
            'group_id'=>'required',
            'name'=>'required|string|max:15',
            'password'=>'required|min:6',
            'phone'=>'required|numeric|unique:users',
            'email'=>'nullable|email|unique:users'
        ]);


        $user=new User();
         $user->user_id=$request->user_id;
         $user->group_id=$request->group_id;
         $user->group=$request->group;
         $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->address=$request->address;
        $user->mobile=$request->mobile;
        $user->save();
        return redirect()->route('index');
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
        $user->user_id=$request->user_id;
        $user->group_id=$request->group_id;
         $user->group=$request->group;
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
       return redirect()->route('users');
    }
}
