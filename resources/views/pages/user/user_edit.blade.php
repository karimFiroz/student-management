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
    <label for="user_id">1.Uaer_ID:</label>
    <input type="text" class="form-control"value="{{$user->user_id}}" id="user_id" placeholder="Enter User ID" name="user_id">
  </div>


<div class="form-group">
    <label for="group_id">2.Group_ID:</label>
    <input type="text" class="form-control"value="{{$user->group_id}}" id="user_id" placeholder="Enter Group ID" name="group_id">
  </div>



  <div class="form-group">
    <label for="group">3.Group:</label>
    <input type="text" class="form-control"value="{{$user->group}}" id="group" placeholder="Enter Group" name="group">
  </div>


<div class="form-group">
    <label for="uname">4.Name:</label>
    <input type="text" class="form-control"value="{{$user->name}}" id="name" placeholder="Enter Name" name="name">
  </div>

<div class="form-group">
    <label for="Email">5.Email:</label>
    <input type="text" class="form-control"value="{{$user->email}}" id="email" placeholder="Enter Email" name="email">
  </div>

  <div class="form-group">
    <label for="pwd">6.Password:</label>
    <input type="password" class="form-control" id="password"value="{{$user->password}}" placeholder="Enter password" name="password">
  </div>

  <div class="form-group">
    <label for="address">7.Address:</label>
    <input type="text" class="form-control"value="{{$user->address}}" id="password" placeholder="Enter address" name="address">
  </div>

<div class="form-group">
    <label for="mobile">8.Mobile:</label>
    <input type="text" class="form-control" id="mobile"value="{{$user->mobile}}" placeholder="Enter Mobile No" name="mobile">
  </div>

  <button type="submit" class="btn btn-primary">Update User</button>
</form>
    </div>
                        </div>
                    </div>
              
@endsection