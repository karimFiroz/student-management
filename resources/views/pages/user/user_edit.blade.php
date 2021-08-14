 @extends('layouts.master')
@section('title','user_Update')
@section('main_content')


<h2 align="center">Update User</h2>

 <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                Update User
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">

<form action="{{route('user_update',$user->id)}}" method="post"class="needs-validation" novalidate>
    @csrf

<div class="form-group">
    <label for="uname">1.Name:</label>
    <input type="text" class="form-control"value="{{$user->name}}" id="name" placeholder="Enter Name" name="name">
  </div>

<div class="form-group">
    <label for="Email">2.Email:</label>
    <input type="text" class="form-control"value="{{$user->email}}" id="email" placeholder="Enter Email" name="email">
  </div>

  <div class="form-group">
    <label for="pwd">3.Password:</label>
    <input type="password" class="form-control" id="password"value="{{$user->password}}" placeholder="Enter password" name="password">
  </div>

  <div class="form-group">
    <label for="address">4.Address:</label>
    <input type="text" class="form-control"value="{{$user->address}}" id="password" placeholder="Enter address" name="address">
  </div>

<div class="form-group">
    <label for="pwd">5.Mobile:</label>
    <input type="password" class="form-control" id="mobile"value="{{$user->mobile}}" placeholder="Enter Mobile No" name="mobile">
  </div>

  <button type="submit" class="btn btn-primary">Update User</button>
</form>
    </div>
                        </div>
                    </div>
              
@endsection