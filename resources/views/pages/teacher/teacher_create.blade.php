 @extends('layouts.master')
@section('title','teacher_create')
@section('main_content')

<h2 align="center">Create New Teacher</h2>

 <div class="container-fluid px-4">
                        <div style="padding: 30px 60px;" class="card mb-4">
                            <div class="card-body">
                                Create Teacher
                            </div>
                        </div>
                        <div style="padding: 30px 60px;" class="card mb-4">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">
<form action="{{route('teacher_store')}}" method="post" class="needs-validation" novalidate>


@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif
@csrf

  <div class="form-group">
    <label for="teacherId">1.Teacher ID:</label>
    <input type="text" class="form-control" id="teacher_id" placeholder="Enter Teacher ID" name="teacher_id">
  </div>

<div class="form-group">
    <label for="indexId">2.Index ID:</label>
    <input type="text" class="form-control" id="index_id" placeholder="Enter Index ID" name="index_id">
  </div>

 

<div class="form-group">
    <label for="teacherName">3.Teacher Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Teacher Name" name="name">
  </div>





<div class="form-group">
    <label for="designation">4.Designation:</label>
    <input type="text" class="form-control" id="designation" placeholder="Enter Designation" name="designation">
  </div>



<div class="form-group">
    <label for="email">5.Email:</label>
    <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
  </div>


 <div class="form-group">
    <label for="degree">6.Qualification:</label>
    <input type="text" class="form-control" id="email" placeholder="Enter Qualification" name="degree">
  </div>

<div class="form-group">
    <label for="address">7.Address:</label>
    <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
  </div>

  <div class="form-group">
    <label for="password">8.Password:</label>
    <input type="text" class="form-control" id="password" placeholder="Enter password" name="password">
  </div>

<div class="form-group">
    <label for="mobile">9.Mobile:</label>
    <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile No" name="mobile">
  </div>

  <button type="submit" class="btn btn-primary">Register Teacher</button>
</form>
    </div>
   </div>
  </div>
@endsection