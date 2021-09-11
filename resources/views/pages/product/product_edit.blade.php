 @extends('layouts.master')
@section('title','Product_Update')
@section('main_content')

<h2>Update Product</h2>

 <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                Update Product
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">
                              
<form action="{{route('product_update',$product->id)}}" method="post" class="needs-validation" novalidate>
    @csrf

  <div class="form-group">
    <label for="uname">1.Product ID:</label>
    <input type="text" class="form-control" value="{{$product->product_id}}"id="product_id" placeholder="Enter Product ID" name="product_id">
  </div>

<div class="form-group">
    <label for="uname">2.Category ID:</label>
    <input type="text" class="form-control" value="{{$product->category_id}}"id="category_id" placeholder="Enter Category ID" name="category_id">
  </div>



<div class="form-group">
    <label for="uname">3.Category:</label>
    <input type="text" class="form-control" value="{{$product->category}}"id="category" placeholder="Enter Category" name="category">
  </div>



 <div class="form-group">
    <label for="uname">4.Title:</label>
    <input type="text" class="form-control"  value="{{$product->title}}" id="title" placeholder="Enter Product Title" name="title">
  </div>

<div class="form-group">
    <label for="uname">5.Description:</label>
    <input type="text" class="form-control" value="{{$product->description}}"  id="description" placeholder="Enter Product Description" name="description">
  </div>


<div class="form-group">
    <label for="funame">6.Cost Price:</label>
    <input type="text" class="form-control"  value="{{$product->cost_price}}" id="cost_price" placeholder="Enter Cost Price" name="cost_price">
  </div>


  <div class="form-group">
    <label for="uname">7.Price:</label>
    <input type="text" class="form-control" id="price" value="{{$product->price}}"  placeholder="Enter Price" name="price">
  </div>


  

<div class="form-group">
    <label for="image">8.Image:</label>
    <input type="text" class="form-control" value="{{$product->image}}"  id="image" placeholder="Enter image url" name="image">
  </div>



  <button type="submit" class="btn btn-primary">Update Product</button>
</form>
    </div>
   </div>
  </div>

@endsection