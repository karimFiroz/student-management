<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::orderBy('id','desc')->get();
        return view('pages.product.index')->with('products', $products);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product_create()
    {
        return view('pages.product.product_create');
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function product_store(Request $request)
    {
  
      

           //Check validation
        $this->validate($request,[

           'product_id'=>'required',
            'category_id'=>'required',
'title'=>'string|required',
'description'=>'text|required',
'cost_price'=>'required',
'price'=>'required'

        ]);
      

     

      

        $product=new Product();
        
        $product->product_id=$request->product_id;
        $product->category_id=$request->category_id;
        $product->category=$request->category;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->cost_price=$request->cost_price;
        $product->price=$request->price;
        $product->image=$request->image;
     
        $product->save();
        return redirect()->route('product');
    }





    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
     public function product_show($id)
    {
    $this->data['product']=Product::find($id);
    return view('pages.product.show',$this->data); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function product_edit($id)
    {
        $product=Product::find($id);
        return view('pages.product.product_edit')->with('product',$product);
    }

    
    public function product_update(Request $request,$id)
    
    {//insery data into students table
        $product=Product::find($id);

        $product->product_id=$request->product_id;
        $product->category_id=$request->category_id;
        $product->category=$request->category;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->cost_price=$request->cost_price;
        $product->price=$request->price;
        $product->image=$request->image;

        $product->save();
        return redirect()->route('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function product_delete($id)
    {
       $product=Product::find($id);
       $product->delete();
       return redirect()->route('product');
    }
}
