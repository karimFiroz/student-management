@extends('layouts.master')
@section('title','All Students')
@section('main_content')
  

{{--Sidebar+content start--}}

<div class="container margin-top-20">
  <div class="row">



    <div class="col-md-4">
@include('partials.sidebar')
<a href="http://localhost:8000/">Home Page</a>
    </div>





                  <div class="col-md-8">



                    <div class="widget">
                        <h3 align="center">MOBILE</h3>
                      <div class="row">

          





                        <div class="col-md-3">
                          <div class="card">
    <img class="card-img-top feacher-img" src="{{ asset('images/products/'.'1.png')  }}" alt="samsung galaxy">
                          <div class="card-body">
                        <h4 class="card-title">
                      
                        </h4>

                        <p class="card-text">
                        
                        </p>
                  <a href="#" class="btn btn-outline-success">See Profile</a>
                              </div>
                            </div>
                        </div>







                      </div>
                    </div>
                </div>

  
  </div>

</div>
     
	  @endsection