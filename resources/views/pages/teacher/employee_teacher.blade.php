 @extends('layouts.master')
@section('title','All employee')
@section('main_content')


 <div class="widget">
      <h1>Teachers and Employee List</h1>
      <div class="row">





@foreach( $teachers as  $teacher)



 <div class="col-md-3">
    <div class="card">

  @foreach($teacher->images as $image)
  <img class="card-img-top feature-img" src="{{asset('public/images/teachers/'. $image->image )}}">
  @endforeach
  
  <div class="card-body">
    <h5 class="card-title">{{$teacher->designation}}</h5>
    <p class="card-text">{{$teacher->name}}</p>
    <p class="card-text">{{$teacher->degree}}</p>
    <p class="card-text">{{$teacher->mobile}}</p>
    <a href="#" class="btn btn-outline-warning">See Profile</a>
  </div>
</div>
</div>


@endforeach




          </div>
      
     
      </div>
	  @endsection