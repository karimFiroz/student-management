 @extends('layouts.master')
@section('title','All Students')
@section('main_content')

     <main>
                    <div class="container-fluid px-4">
                        <h2 class="mt-4"align="center">Student Registration</h2>
                       
                        <div class="card mb-4">
                            <div class="card-body">
            <center><a class="btn btn-info" href="{{route('student_create')}}"><strong> Create student</strong></a></center>
                               
                       
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
                                            <th>Reg_ID</th>
                                            <th>Roll</th>
                                            <th>Name</th>
                                            <th>Fname</th>
                                            <th>Mname</th>
                                            <th>Department</th>
                                            <th>Info</th>
                                            <th>Academy</th>
                                            <th>Mobile</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th>#</th>
                                            <th>ID</th>
                                            <th>Reg_ID</th>
                                            <th>Roll</th>
                                            <th>Name</th>
                                            <th>Fname</th>
                                            <th>Mname</th>
                                            <th>Department</th>
                                            <th>Info</th>
                                            <th>Academy</th>
                                            <th>Mobile</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    
                                    <tbody>
                                        @php $i = 0; @endphp
                                        @foreach($students as $student)
                                         @php $i++ @endphp
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{$student->id}}</td>
                                            <td>{{$student->reg_id}}</td>
                                            <td>{{$student->roll}}</td>
                                            <td>{{$student->name}}</td>
                                            <td>{{$student->fname}}</td>
                                            <td>{{$student->mname}}</td>
                                            <td>{{$student->department}}</td>
                                            <td>{{$student->info}}</td>
                                            <td>{{$student->academy}}</td>
                                            <td>{{$student->mobile}}</td>
                                            <td>
                <a href="{{route('student_edit',$student->id)}}"class="btn btn-success btn-sm">Edit</a> 
         <form class="form-inline"onclick="return confirm('Are you sure delete? ')" action="{{route('student_delete',$student->id)}}" method="post">
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