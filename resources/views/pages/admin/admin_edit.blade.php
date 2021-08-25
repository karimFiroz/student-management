 @extends('layouts.master')
@section('title','Admin_Update')
@section('main_content')


<h2 align="center">Update Admin</h2>

 <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                Update Admin
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">

<form action="{{route('admin_update',$admin->id)}}" method="post"class="needs-validation" novalidate>
    @csrf

<div class="form-group">
    <label for="admin_id">1.Admin_ID:</label>
    <input type="text" class="form-control"value="{{$admin->admin_id}}" id="admin_id" placeholder="Enter Admin ID" name="admin_id">
  </div>


<div class="form-group">
    <label for="Group_id">2.Group_ID:</label>
    <input type="text" class="form-control"value="{{$admin->group_id}}" id="group_id" placeholder="Enter Group ID" name="group_id">
  </div>



<div class="form-group">
    <label for="uname">3.Name:</label>
    <input type="text" class="form-control"value="{{$admin->name}}" id="name" placeholder="Enter Admin Name" name="name">
  </div>

<div class="form-group">
    <label for="Email">4.Email:</label>
    <input type="text" class="form-control"value="{{$admin->email}}" id="email" placeholder="Enter Admin Email" name="email">
  </div>

 <div class="form-group">
    <label for="address">5.Address:</label>
    <input type="text" class="form-control"value="{{$admin->address}}" id="address" placeholder="Enter admin address" name="address">
  </div>


  <div class="form-group">
    <label for="pwd">6.Password:</label>
    <input type="password" class="form-control" id="password"value="{{$admin->password}}" placeholder="Enter password" name="password">
  </div>

 

<div class="form-group">
    <label for="phone">7.Phone:</label>
    <input type="text" class="form-control" id="phone"value="{{$admin->phone}}" placeholder="Enter Phone No" name="phone">
  </div>

  <button type="submit" class="btn btn-primary">Update Admin</button>
</form>
    </div>
                        </div>
                    </div>
              
@endsection