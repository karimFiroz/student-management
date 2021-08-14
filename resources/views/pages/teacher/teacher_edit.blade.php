 @extends('layouts.master')
@section('title','teacher_Update')
@section('main_content')

<h2>Update Student</h2>

 <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                Update teacher
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">
                              
<form action="{{route('teacher_update',$teacher->id)}}" method="post" class="needs-validation" novalidate>
    @csrf

  <div class="form-group">
    <label for="teacherId">1.Teacher ID:</label>
    <input type="text" class="form-control" value="{{$teacher->teacher_id}}"id="reg_id" placeholder="Enter Teacher ID" name="teacher_id">
  </div>



 <div class="form-group">
    <label for="indexId">2.Index ID:</label>
    <input type="text" class="form-control"  value="{{$teacher->index_id}}" id="index_id" placeholder="Enter Teacher Index No" name="index_id">
  </div>

<div class="form-group">
    <label for="uname">3.Name:</label>
    <input type="text" class="form-control" value="{{$teacher->name}}"  id="name" placeholder="Enter Name" name="name">
  </div>


<div class="form-group">
    <label for="designation">4.Designation:</label>
    <input type="text" class="form-control"  value="{{$teacher->designation}}" id="designation" placeholder="Enter Designation" name="designation">
  </div>


  <div class="form-group">
    <label for="uname">5.Email:</label>
    <input type="text" class="form-control" id="email" value="{{$teacher->mname}}"  placeholder="Enter Mother's Name" name="email">
  </div>

<div class="form-group">
    <label for="uname">6.Qualification:</label>
    <input type="text" class="form-control" value="{{$teacher->degree}}"  id="degree" placeholder="Enter Department" name="degree">
  </div>



<div class="form-group">
    <label for="uname">7.Address:</label>
    <input type="text" class="form-control" id="address" value="{{$teacher->address}}"  placeholder="Enter Address" name="address">
  </div>

  <div class="form-group">
    <label for="password">8.Password:</label>
    <input type="text" class="form-control"  value="{{$teacher->password}}" id="password" placeholder="Enter password" name="password">
  </div>

<div class="form-group">
    <label for="mobile">9.Mobile:</label>
    <input type="text" class="form-control" value="{{$teacher->mobile}}"  id="mobile" placeholder="Enter Mobile No" name="mobile">
  </div>

  <button type="submit" class="btn btn-primary">Update Teacher</button>
</form>
    </div>
   </div>
  </div>

@endsection