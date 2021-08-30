 @extends('layouts.master')
@section('title','All images')
@section('main_content')



 @if(Session('message'))
<div class="alert alert-success" role="alert">
{{Session('message')}}
</div>
@endif
     <main>
                    <div class="container-fluid px-4">
                        <h2 class="mt-4"align="center">Image Registration</h2>
                       
                        <div class="card mb-4">
                            <div class="card-body">
            <center><a class="btn btn-info" href="{{route('image_create')}}"><strong><i class="fa fa-plus"></i></strong></a></center>
                            <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table  class="table table-responsive table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ID</th>
                                            <th>Teacher_ID</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                              <th>#</th>
                                            <th>ID</th>
                                            <th>Teacher_ID</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </tfoot>
                                    
                                    <tbody>
                                        @php $i = 0; @endphp
                                        @foreach($images as $image)
                                         @php $i++ @endphp
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{$image->id}}</td>
                                            <td>{{$image->teacher_id}}</td>
                                            <td>{{$image->image}}</td>
                                            
                                             <td>
  <a href="{{route('image_edit', $image->id)}}"class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>

  <form class="form-inline"onclick="return confirm('Are you sure delete? ')" action="{{route('image_delete', $image->id)}}" method="post">
  @csrf
 <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
</form>
                
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