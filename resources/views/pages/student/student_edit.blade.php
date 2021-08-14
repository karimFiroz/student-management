 @extends('layouts.master')
@section('title','student_Update')
@section('main_content')

<h2>Update Student</h2>

 <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                Update student
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">
                              
<form action="{{route('student_update',$student->id)}}" method="post" class="needs-validation" novalidate>
    @csrf

  <div class="form-group">
    <label for="uname">1.Reg ID:</label>
    <input type="text" class="form-control" value="{{$student->reg_id}}"id="reg_id" placeholder="Enter registration ID" name="reg_id">
  </div>



 <div class="form-group">
    <label for="uname">2.Roll:</label>
    <input type="text" class="form-control"  value="{{$student->roll}}" id="roll" placeholder="Enter Roll" name="roll">
  </div>

<div class="form-group">
    <label for="uname">3.Name:</label>
    <input type="text" class="form-control" value="{{$student->name}}"  id="name" placeholder="Enter Name" name="name">
  </div>


<div class="form-group">
    <label for="funame">4.Father's Name:</label>
    <input type="text" class="form-control"  value="{{$student->fname}}" id="fname" placeholder="Enter Father's Name" name="fname">
  </div>


  <div class="form-group">
    <label for="uname">5.Mother's Name:</label>
    <input type="text" class="form-control" id="mname" value="{{$student->mname}}"  placeholder="Enter Mother's Name" name="mname">
  </div>

<div class="form-group">
    <label for="uname">6.Department:</label>
    <input type="text" class="form-control" value="{{$student->department}}"  id="department" placeholder="Enter Department" name="department">
  </div>

  <div class="form-group">
    <label for="uname">7.Information:</label>
    <textarea rows="10"{!!$student->info!!}class="form-control" id="info"   placeholder="Enter Information" name="info"></textarea>
  </div>

<div class="form-group">
    <label for="uname">8.Academy:</label>
    <input type="text" class="form-control" id="academy" value="{{$student->academy}}"  placeholder="Enter Academy name" name="academy">
  </div>

  <div class="form-group">
    <label for="password">9.Password:</label>
    <input type="text" class="form-control"  value="{{$student->password}}" id="password" placeholder="Enter password" name="password">
  </div>

<div class="form-group">
    <label for="mobile">10.Mobile:</label>
    <input type="text" class="form-control" value="{{$student->mobile}}"  id="mobile" placeholder="Enter Mobile No" name="mobile">
  </div>

  <button type="submit" class="btn btn-primary">Update Student</button>
</form>
    </div>
   </div>
  </div>

@endsection