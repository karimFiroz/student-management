 @extends('layouts.master')
@section('title','All Students')
@section('main_content')



 @if(Session('message'))
<div class="alert alert-success" role="alert">
{{Session('message')}}
</div>
@endif
     <main>
                    <div class="container-fluid px-4">
                        <h2 class="mt-4"align="center">Student Registration</h2>
                   
                        <div class="card mb-4">
                            <div class="card-body">
            <center><a class="btn btn-info" href="{{route('student_create')}}"><strong> <i class="fa fa-plus"></i></strong></a></center>
                            
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
                                            <th>Reg_ID</th>
                                            <th>Roll</th>
                                            <th>Name</th>
                                            <th>Fname</th>
                                            <th>Mname</th>
                                            <th>Department</th>
                                            <th>Info</th>
                                            <th>Academy</th>
                                            <th>password</th>
                                            <th>Mobile</th>
                                            <th>image</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Action</th>
                                           <th>SN</th>
                                            <th>ID</th>
                                            <th>Reg_ID</th>
                                            <th>Roll</th>
                                            <th>Name</th>
                                            <th>Fname</th>
                                            <th>Mname</th>
                                            <th>Department</th>
                                            <th>Info</th>
                                            <th>Academy</th>
                                            <th>password</th>
                                            <th>Mobile</th>
                                            <th>image</th>
                                            
                                        </tr>
                                    </tfoot>
                                    
                                    <tbody>
                                        @php $i = 0; @endphp
                                        @foreach($students as $student)
                                         @php $i++ @endphp
                                        <tr>
                                            <td>
  <a href="{{route('student_edit', $student->id)}}"class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>

  <form class="form-inline"onclick="return confirm('Are you sure delete? ')" action="{{route('student_delete', $student->id)}}" method="post">
  @csrf
 <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
</form>
                
                      </td>
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
                                            <td>{{$student->password}}</td>
                                            <td>{{$student->mobile}}</td>
                                            
                                            <td>
     <?php
                                                
     echo "<img src='storage/app/{{$student->image}}' height='100' width='100'>";
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