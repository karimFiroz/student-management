 @extends('layouts.master')
@section('title','Admin_Registration')
@section('main_content')


<h2 align="center">Admin Registration</h2>

 <div class="container-fluid px-4">
                        <div style="padding: 30px 60px;" class="card mb-4">
                            <div class="card-body">
                                Create Admin
                            </div>
                        </div>
                        <div style="padding: 30px 60px;" class="card mb-4">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">

<form action="{{route('admin_store')}}" method="post"class="needs-validation" novalidate>
	
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
    <label for="admin_id">1.Admin_ID:</label>
    <input type="text" class="form-control" id="admin_id" placeholder="Enter Admin_ID" name="admin_id">
  </div>

<div class="form-group">
    <label for="group_id">2.Group_ID:</label>
    <input type="text" class="form-control" id="group_id" placeholder="Enter Group_ID" name="group_id">
  </div>


<div class="form-group">
    <label for="adminName">3.Admin Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Admin Name" name="name">
  </div>

<div class="form-group">
    <label for="Email">4.Admin's Email:</label>
    <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
  </div>


   <div class="form-group">
    <label for="address">5.Address:</label>
    <input type="text" class="form-control" id="address" placeholder="Enter Admins address" name="address">
  </div>

  <div class="form-group">
    <label for="password">6.Admin's Password:</label>
    <input type="text" class="form-control" id="password" placeholder="Enter password" name="password">
  </div>

 

<div class="form-group">
    <label for="phone">7.Mobile:</label>
    <input type="text" class="form-control" id="phone" placeholder="Enter Phone No" name="phone">
  </div>

  <button type="submit" class="btn btn-primary">Register Admin</button>
</form>
    </div>
                        </div>
                    </div>
              
@endsection