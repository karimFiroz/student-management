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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
