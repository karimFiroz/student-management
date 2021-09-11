 @extends('layouts.master')
@section('title','All Students')
@section('main_content')

     @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif 


   @if(Session('message'))
<div class="alert alert-success" role="alert">
{{Session('message')}}
</div>
@endif
 <main>
                    <div class="container-fluid px-4">
                        <h2 class="mt-4"align="center">Teacher Registration</h2>
                       
                        <div class="card mb-4">
                            <div class="card-body">
            <center><a class="btn btn-info" href="{{route('teacher_create')}}"><strong><i class="fa fa-plus"></i></strong></a></center>
                                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table  class="table table-responsive table-hover">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <thSL</th>
                                            <th>ID</th>
                                            <th>Teacher_ID</th>
                                            <th>Index_ID</th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Degree</th>
                                            <th>Address</th>
                                            <th>Mobile</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>Action</th>
                                            <th>SL</th>
                                            <th>ID</th>
                                            <th>Teacher_ID</th>
                                            <th>Index_ID</th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Degree</th>
                                            <th>Address</th>
                                            <th>Mobile</th>
                                           
                                        </tr>
                                    </tfoot>
                                    
                                    <tbody>
                                        @php $i = 0; @endphp
                                        @foreach($teachers as $teacher)
                                         @php $i++ @endphp
                                        <tr>
                                             <td>
  <a href="{{route('teacher_edit',$teacher->id)}}"class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>

  <form class="form-inline"onclick="return confirm('Are you sure delete? ')" action="{{route('teacher_delete',$teacher->id)}}" method="post">
  @csrf
 <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
</form>
                
                      </td>
                                            <td>{{ $i }}</td>
                                            <td>{{$teacher->id}}</td>
                                            <td>{{$teacher->teacher_id}}</td>
                                            <td>{{$teacher->index_id}}</td>
                                            <td>{{$teacher->name}}</td>
                                            <td>{{$teacher->designation}}</td>
                                            <td>{{$teacher->email}}</td>
                                            <td>{{$teacher->password}}</td>
                                            <td>{{$teacher->degree}}</td>
                                            <td>{{$teacher->address}}</td>
                                            <td>{{$teacher->mobile}}</td>
                                            
                                        </tr>
                                      @endforeach 
                                       
                                    </tbody>
                                     
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
	  @endsection