<?php

namespace App\Http\Controllers;

use App\Models\Teacher_image;
use Illuminate\Http\Request;

class TeacherImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images=Teacher_image::orderBy('teacher_id','desc')->get();
        return view('pages.teacher_image.images')->with('images', $images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function image_create()
    {
        return view('pages.teacher_image.image_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function image_store(Request $request)
    {
        $image=new Teacher_image();
        
        $image->teacher_id=$request->teacher_id;
        $image->image=$request->image;
        
       $image->save();
        return redirect()->route('images');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher_image  $teacher_image
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher_image $teacher_image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher_image  $teacher_image
     * @return \Illuminate\Http\Response
     */
     public function image_edit($id)
    {
        $image=Teacher_image::find($id);
        return view('pages.teacher_image.image_edit')->with('image', $image);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher_image  $teacher_image
     * @return \Illuminate\Http\Response
     */
   public function image_update(Request $request,$id)
    {
       $image=Teacher_image::find($id);

       $image->teacher_id=$request->teacher_id;
        $image->image=$request->image;
        $image->save();
        return redirect()->route('images');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher_image  $teacher_image
     * @return \Illuminate\Http\Response
     */
   public function image_delete($id)
    {
        $image=Teacher_image::find($id);
        $image->delete();
       return redirect()->route('images');
    }
}
