<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
session_start();
use illuminate\Support\Facades\Redirect;
class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
         
        $this->authCheck();
    
         return view('pages.superAdmin.dashboard');
    }

private function authCheck(){

    $admin_id=Session::get('admin_id');

    if($admin_id !=NULL)
    {
    return;
    }else{
return redirect()->route('admin_login')->send();
    }
}


public function logout()
{
Session::put('admin_id','');
Session::put('name','');
Session::put('message','You are successfully logout!!');
return redirect()->route('admin_login');
    return view('pages.superAdmin.logout ');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
