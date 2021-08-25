<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use DB; 
use Session;
session_start();
use illuminate\Support\Facades\Redirect;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index()
    {
        $admins=Admin::orderBy('id','desc')->get();
        return view('pages.admin.index')->with('admins', $admins);
    }

   
public function admin_login()
{

    
      $admin_id=Session::get('admin_id');

    if($admin_id ==NULL)
    {
        return view('pages.admin.admin_login');
    }else{
return redirect()->route('dashboard')->send();
    }

}


public function adminLoginCheck(Request $request)
{
    $email=$request->email;
    $password=$request->password;

    $result=DB::table('admins')
    ->where('email', $email)
    ->where('password', $password)
    ->first();
if($result){

Session::put('admin_id',$result->admin_id);
Session::put('name',$result->name);

return redirect()->route('dashboard');
}else{
    Session::put('exception','User id or Password invalid!');
    return redirect()->route('admin_login');
}

    return view('pages.admin.dashboard');
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function admin_create()
    {
        return view('pages.admin.admin_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
       public function admin_store(Request $request)
    {
        //Check validation
        $this->validate($request,[
    
'name'=>'required|string|max:15',
'password'=>'required|min:6',
'email'=> 'required|email'

        ]);
        $admin=new Admin();
         $admin->admin_id=$request->admin_id;
         $admin->group_id=$request->group_id;
         $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->address=$request->address;
        $admin->password=$request->password;
        $admin->phone=$request->phone;
        $admin->save();
       return redirect()->route('admins');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
   public function admin_edit($id)
    {
       $admin= Admin::find($id);
        return view('pages.admin.admin_edit')->with('admin',$admin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
     public function Admin_update(Request $request, $id)
      {
        $admin=Admin::find($id);
        $admin->admin_id=$request->admin_id;
        $admin->group_id=$request->group_id;
         $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->address=$request->address;
        $admin->password=$request->password;
        $admin->phone=$request->phone;
        $admin->save();
       return redirect()->route('admins');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function admin_delete($id)
    {
       $admin=Admin::find($id);
       $admin->delete();
       return redirect()->route('admins');
    }
}
