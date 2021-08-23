





@extends('layouts.master')
@section('title','login teacher')
@section('main_content')
  <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Teacher Login</h3></div>


                                    <div class="card-body">




  <form action="{{route('check_teacher')}}" method="post"class="needs-validation" novalidate>
  
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
    <label for="Email">1.Email:</label>
    <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
  </div>

  <div class="form-group">
    <label for="pwd">2.Password:</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
  </div>

  <button type="submit" class="btn btn-primary">Login</button>
</form>


                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@endsection