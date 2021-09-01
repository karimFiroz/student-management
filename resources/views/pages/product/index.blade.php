 @extends('layouts.master')
@section('title','All products')
@section('main_content')



 @if(Session('message'))
<div class="alert alert-success" role="alert">
{{Session('message')}}
</div>
@endif
     <main>
                    <div class="container-fluid px-4">
                        <h2 class="mt-4"align="center">All Products</h2>
                   
                        <div class="card mb-4">
                            <div class="card-body">
            <center><a class="btn btn-info" href="{{route('product_create')}}"><strong> <i class="fa fa-plus"></i></strong></a></center>
                            
    <a href="{{route('file-upload')}}"target=" _blank">Upload</a>|
    <a href="{{route('delete-file')}}">Delete</a>
                       
                            </div>
                       
                        </div>
                               <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table  class="table table-responsive table-hover">
                                    <thead>
                                        <tr>
                                             <th>Action</th>
                                            <th>SN</th>
                                            <th>ID</th>
                                            <th>Product_ID</th>
                                            <th>Category_ID</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Cost_Price</th>
                                            <th>Price</th>
                                            <th>image</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Action</th>
                                            <th>SN</th>
                                            <th>ID</th>
                                            <th>Product_ID</th>
                                            <th>Category_ID</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Cost_Price</th>
                                            <th>Price</th>
                                            <th>image</th>
                                            
                                        </tr>
                                    </tfoot>
                                    
                                    <tbody>
                                        @php $i = 0; @endphp
                                        @foreach($products as $product)
                                         @php $i++ @endphp
                                        <tr>
                                            <td>
  <a href="{{route('product_edit', $product->id)}}"class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
<a href="{{route('product_show',$product->id)}}"class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
  <form class="form-inline"onclick="return confirm('Are you sure delete? ')" action="{{route('product_delete', $product->id)}}" method="post">
  @csrf
 <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
</form>
                
                                        </td>
                                            <td>{{ $i }}</td>
                                            <td>{{$product->id}}</td>
                                            <td>{{$product->product_id}}</td>
                                            <td>{{$product->category_id}}</td>
                                            <td>{{$product->title}}</td>
                                            <td>{{$product->description}}</td>
                                            <td>{{$product->cost_price}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->image}}</td>
                                          
                                            
                                            <td>
     <?php
                                                
     echo "<img src='storage/app/{{$product->image}}' height='100' width='100'>";
         ?>
                                             </td>

                                            
                                        </tr>
                                      @endforeach 
                                       
                                    </tbody>
                                     
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
					@endsection