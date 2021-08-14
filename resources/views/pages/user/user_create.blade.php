 @extends('layouts.master')
@section('title','user_Registration')
@section('main_content')


<h2 align="center">User Registration</h2>

 <div class="container-fluid px-4">
                        <div style="padding: 30px 60px;" class="card mb-4">
                            <div class="card-body">
                                Create User
                            </div>
                        </div>
                        <div style="padding: 30px 60px;" class="card mb-4">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">

<form action="{{route('user_store')}}" method="post"class="needs-validation" novalidate>
	
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
  @csrf

<div class="form-group">
    <label for="uname">1.Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name"required>
  </div>

<div class="form-group">
    <label for="Email">2.Email:</label>
    <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email"required>
  </div>

  <div class="form-group">
    <label for="pwd">3.Password:</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password"required>
  </div>

  <div class="form-group">
    <label for="address">4.Address:</label>
    <input type="text" class="form-control" id="password" placeholder="Enter address" name="address"required>
  </div>

<div class="form-group">
    <label for="pwd">5.Mobile:</label>
    <input type="password" class="form-control" id="mobile" placeholder="Enter Mobile No" name="mobile"required>
  </div>

  <button type="submit" class="btn btn-primary">Register User</button>
</form>
    </div>
                        </div>
                    </div>
              
@endsection