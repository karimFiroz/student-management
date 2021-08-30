 @extends('layouts.master')
@section('title','user_Registration')
@section('main_content')
<h2 align="center">User Registration</h2>

      



 <div class="container-fluid px-4">
                        <div style="padding: 30px 60px;" class="card mb-4">
                            <div class="card-body">



            @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
                            </div>
                        </div>
                        <div style="padding: 30px 60px;" class="card mb-4">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">

{!! Form::open(['route'=> 'user_store','method'=>'post']) !!} 


  <div class="form-group">
    <label for="user_id">.User_ID<span class="text-danger">*</span>:</label>
    
    <input type="text" class="form-control" id="user_id" placeholder="Enter User_ID" name="user_id">
  </div>


  <div class="form-group">
    <label for="group_id">2.Group_ID<span class="text-danger">*</span>:</label>
    <input type="text" class="form-control" id="group_id" placeholder="Enter Group_ID" name="group_id">
  </div>

  

  <div class="form-group">
    <label for="group">3.Group<span class="text-danger">*</span>:</label>

 {{Form::select('group_id',$groups,NULL,['class'=>'form-control','id'=>'group','placeholder'=>'Select Group'])}}
  </div>


<div class="form-group">
    <label for="uname">4.Name<span class="text-danger">*</span>:</label>
   {{Form::text('name',NULL,['class'=>'form-control','id'=>'name','placeholder'=>'Enter Name'])}}
  </div>

<div class="form-group">
    <label for="Email">5.Email:</label>
   {{Form::text('email',NULL,['class'=>'form-control','id'=>'email','placeholder'=>'Enter Email'])}}
  </div>

  <div class="form-group">
    <label for="pwd">6.Password:</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
  </div>

  <div class="form-group">
    <label for="address">7.Address:</label>
    {{Form::text('address',NULL,['class'=>'form-control','id'=>'address','placeholder'=>'Enter Address.'])}}
  </div>

<div class="form-group">
    <label for="mobile">8.Mobile:</label>
    {{Form::text('mobile',NULL,['class'=>'form-control','id'=>'mobile','placeholder'=>'Enter Mobile No.'])}}
  </div>

  <button type="submit" class="btn btn-primary">Register User</button>
 {!! Form::close() !!}

    </div>
                        </div>
                    </div>
              
@endsection