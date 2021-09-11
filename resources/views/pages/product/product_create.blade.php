@extends('layouts.master')
@section('title','product_Register')
@section('main_content')

@if(Session('message'))
<div class="alert alert-success" role="alert">
{{Session('message')}}
</div>
@endif

 
    

<h2 align="center">Create New Product</h2>

 <div class="container-fluid px-4">
                        <div style="padding: 30px 60px;" class="card mb-4">
                            <div class="card-body">
                               
           @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
                            </div>
                        </div>
                        <div style="padding: 30px 60px;" class="card mb-4">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">
<form action="{{route('product_store')}}" method="post" class="needs-validation" novalidate>

@csrf
   

  <div class="form-group">
    <label for="uname">1.Product ID:</label>
    <input type="text" class="form-control" id="product_id" placeholder="Enter Product ID" name="product_id">
  </div>

 <div class="form-group">
    <label for="uname">2.Category ID:</label>
    <input type="text" class="form-control" id="category_id" placeholder="Enter Category ID" name="category_id">
  </div>

<div class="form-group">
    <label for="uname">3.Category:</label>
    <input type="text" class="form-control" id="category" placeholder="Enter Category" name="category">
  </div>



 <div class="form-group">
    <label for="uname">4.Title:</label>
    <input type="text" class="form-control" id="title" placeholder="Enter Product Title" name="title">
  </div>

<div class="form-group">
    <label for="uname">5.Description:</label>
    <input type="text" class="form-control" id="description" placeholder="Enter Product Description" name="description">
  </div>


<div class="form-group">
    <label for="funame">6.Cost Price:</label>
    <input type="text" class="form-control" id="cost_price" placeholder="Enter Cost Price" name="cost_price">
  </div>


  <div class="form-group">
    <label for="uname">7.Price:</label>
    <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price">
  </div>



<div class="form-group">
    <label for="image">8.Image:</label>
    <input type="text" class="form-control" id="image" placeholder="Enter image url" name="image">
  </div>



  <button type="submit" class="btn btn-primary">Register Product</button>
</form>
    </div>
   </div>
  </div>
   
@endsection


 