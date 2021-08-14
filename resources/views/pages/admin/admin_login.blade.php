@extends('layouts.master')
@section('title','login page')
@section('main_content')
  <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Admin Login</h3></div>


                                    <div class="card-body">




                                   {!! Form::open(['url' => '/admin-login-check']) !!}
                                            <div class="form-floating mb-3">
                                                <input class="form-control"name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">1.Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">2.Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <input class="form-control" type="submit" id="inputSubmit" value="Login" clas="btn btn-info btn-sm" />
                                            </div>
                               {!! Form::close() !!}


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