<?php

namespace App\Http\Controllers;

use App\Models\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
class ImageUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('imageUpload.image');
    }



 public function store(Request $request)    
    {
         // echo $request->file('image')->getClientOriginalName();
         // echo $request->file('image')->extension();
   echo $path = $request->file('image')->store('images');

        if(isset($path)){
          
        echo "<img src='storage/app/$path' height='100' width='100'>";

        echo '<a href="storage\app\images\$path">Delete</a>';
        }
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
   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageUpload  $imageUpload
     * @return \Illuminate\Http\Response
     */
    public function show(ImageUpload $imageUpload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImageUpload  $imageUpload
     * @return \Illuminate\Http\Response
     */
    public function edit(ImageUpload $imageUpload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImageUpload  $imageUpload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImageUpload $imageUpload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageUpload  $imageUpload
     * @return \Illuminate\Http\Response
     */
   public function delete()
    {
        Storage::delete('storage\app\images\$path');
    }
}
