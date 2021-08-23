<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function index()
    {
        return view('pages.auth.user_login');
    }





   public function user_login(Request $request)
    {
        $email=$request->email;
    $password=$request->password;

    $result=DB::table('users')
    ->where('email', $email)
    ->where('password', $password)
    ->first();
    // echo '<pre>';
    // print_r($result);
    // exit();
 if($result){
    return redirect()->route('welcome');
   }else{
    return redirect()->route('home_page');
   }
}








public function teacher_login()
    {
        return view('pages.auth.teacher_login');
    }




   public function check_teacher(Request $request)
    {
        $email=$request->email;
    $password=$request->password;

    $result=DB::table('teachers')
    ->where('email', $email)
    ->where('password', $password)
    ->first();
    // echo '<pre>';
    // print_r($result);
    // exit();
 if($result){
    return redirect()->route('welcome');
   }else{
    return redirect()->route('home_page');
   }

}


 
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
