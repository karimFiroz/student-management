 @extends('layouts.master')
@section('title','Mini Point of Sale')
@section('main_content')

 @if(Session('message'))
<div class="alert alert-success" role="alert">
{{Session('message')}}
</div>
@endif
     <main>
               
<div class="row clearfix page_header">
    <div class="col-md-12 text-right">
    <a class="btn btn-info" href="{{route('product_create')}}"><strong><i class="fa fa-plus"></i>New Sale</strong></a>
    <a class="btn btn-primary" href="{{route('product_create')}}"><strong><i class="fa fa-plus"></i>New purchase</strong></a>
    <a class="btn btn-success" href="{{route('product_create')}}"><strong><i class="fa fa-plus"></i>New Payment</strong></a>
    <a class="btn btn-secondary" href="{{route('product_create')}}"><strong><i class="fa fa-plus"></i>New Receipt</strong></a>
                        <h2 class="mt-4"align="center">User show</h2>

                        <div class="card mb-12">
                            <div class="card-body">
     <center><a class="btn btn-info" href="{{route('product')}}"><strong><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</strong></a></center>
                               
                              <div class="card shadow mb-12">
                        <div class="card-header py-12">
                            <h2><strong>{{$product->title}}</strong></h2>Information:
                        </div>
                        <div class="card-body" >
                            <div class="table-responsive">
             



       <table  class="table table-responsive table-hover" table-striped>
                                    
                                      

                                           <tr>
                                          <th>ID:</th>
                                              <td>{{$product->id}}</td>
                                          </tr>
                                            <tr>
                                          <th>Product ID:</th>
                                              <td>{{$product->product_id}}</td>
                                          </tr>
                                              <tr>
                                         <th>Category_ID:</th>
                                              <td>{{$product->category_id}}</td>
                                          </tr>
                                           

                                        <tr>
                                         <th>Category:</th>
                                              <td>{{$product->category->title}}</td>
                                          </tr>


                                        <tr>
                                         <th>Title:</th>
                                             <td>{{$product->title}}</td>
                                          </tr>
                                          <tr>

                                            <th>Description:</th>
                                             <td>{{$product->description}}</td>
                                         </tr>

                                         <tr>
                                            
                                            <th>Cost_Price:</th>
                                            <td>{{$product->cost_price}}</td>
                                        </tr>
                                        <tr>
                                            <th>Price:</th>
                                             <td>{{$product->price}}</td>
                                         </tr>
                                         <tr>
                                            <th>Image:</th>
                                             <td>{{$product->image}}</td>
                                         </tr>
                                       
                                        </table
                                   


                       </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
  </div>
                   </div>
            </div>
                </main>

					@endsection