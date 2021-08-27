<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\Group;
use Illuminate\Http\Request;
use DB;
class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
  
public function index()
    {
        $this->data['groups']=Group::all();
        return view('pages.group.groups',$this->data);
    }


    public function groups_create()
    {
       return view('pages.group.groups_create');
    }



    public function groups_store(Request $request)
    {
     $formData=$request->all();
    if(Group::create($formData)){
     Session::flash('message','Group created successfully!');
    }
     return redirect()->to('groups');
    }





public function groups_edit($id)
    {

        $group=Group::find($id);
        return view('pages.group.groups_edit')->with('group',$group);
    }


        public function groups_update(Request $request,$id)
    {
 
        $group=Group::find($id);

        $group->title=$request->title;
       
        $group->save();
        return redirect()->route('groups');
    }







     public function groups_delete($id)
    {
   if(Group::find($id)->delete()){
Session::flash('message','Group Deleted successfully!');
    return redirect()->route('groups');
   }
    }

 }