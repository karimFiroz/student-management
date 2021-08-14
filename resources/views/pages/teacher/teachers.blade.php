 @extends('layouts.master')
@section('title','All Students')
@section('main_content')
  
 <main>
                    <div class="container-fluid px-4">
                        <h2 class="mt-4"align="center">Teacher Registration</h2>
                       
                        <div class="card mb-4">
                            <div class="card-body">
            <center><a class="btn btn-info" href="{{route('teacher_create')}}"><strong> Create teacher</strong></a></center>
                               
                       
                            </div>
                       
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">
                                <table  class="table table-responsive table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ID</th>
                                            <th>Teacher_ID</th>
                                            <th>Index_ID</th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Email</th>
                                            <th>Degree</th>
                                            <th>Address</th>
                                            <th>Mobile</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>ID</th>
                                            <th>Teacher_ID</th>
                                            <th>Index_ID</th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Email</th>
                                            <th>Degree</th>
                                            <th>Address</th>
                                            <th>Mobile</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    
                                    <tbody>
                                        @php $i = 0; @endphp
                                        @foreach($teachers as $teacher)
                                         @php $i++ @endphp
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{$teacher->id}}</td>
                                            <td>{{$teacher->teacher_id}}</td>
                                            <td>{{$teacher->index_id}}</td>
                                            <td>{{$teacher->name}}</td>
                                            <td>{{$teacher->designation}}</td>
                                            <td>{{$teacher->email}}</td>
                                            <td>{{$teacher->degree}}</td>
                                            <td>{{$teacher->address}}</td>
                                            <td>{{$teacher->mobile}}</td>
                                            <td>
                 <a href="{{route('teacher_edit',$teacher->id)}}"class="btn btn-success btn-sm">Edit</a> 
         <form class="form-inline"onclick="return confirm('Are you sure delete? ')" action="{{route('teacher_delete',$teacher->id)}}" method="post">
        @csrf
        <input type="submit" class="btn btn-danger btn-sm" value="Delete"/></form> 
               
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