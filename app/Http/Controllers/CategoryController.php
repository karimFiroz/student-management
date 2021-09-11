<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index()
    {
        $categories=Category::orderBy('id','desc')->get();
        return view('pages.category.category')->with('categories', $categories);
    }


    public function category_create()
    {
       return view('pages.category.category_create');
    }



    public function category_store(Request $request)
    {


           //Check validation
        $this->validate($request,[


           'title'=>'string|required'

        ]);

        

     $formData=$request->all();
    if(Category::create($formData)){
     Session::flash('message','Category created successfully!');
    }
     return redirect()->to('category');
    }





public function category_edit($id)
    {

        $category=Category::find($id);
        return view('pages.category.category_edit')->with('category',$category);
    }


        public function category_update(Request $request,$id)
    {
 
        $category=Category::find($id);

        $category->title=$request->title;
       
        $category->save();
        return redirect()->route('category');
    }







     public function category_delete($id)
    {
   if(Category::find($id)->delete()){
Session::flash('message','Category Deleted successfully!');
    return redirect()->route('category');
   }
    }

 }
