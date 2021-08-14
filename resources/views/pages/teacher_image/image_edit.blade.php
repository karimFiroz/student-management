@extends('layouts.master')
@section('title','Image_Update')
@section('main_content')

<h2 align="center">Update Image</h2>

 <div class="container-fluid px-4">
                        <div style="padding: 30px 60px;" class="card mb-4">
                            <div class="card-body">
                                Update Image
                            </div>
                        </div>
                        <div style="padding: 30px 60px;" class="card mb-4">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">
<form action="{{route('image_update',$image->id)}}" method="post" class="needs-validation" novalidate>


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
    <label for="teacherId">1.Teacher ID:</label>
    <input type="text" class="form-control" id="id" placeholder="Enter registration ID" name="teacher_id"value="{{$image->teacher_id}}">
  </div>



 <div class="form-group">
    <label for="image">2.Image:</label>
    <input type="text" class="form-control" id="image" placeholder="Enter image with extention" name="image"value="{{$image->image}}">
  </div>



  <button type="submit" class="btn btn-primary">update Image</button>
</form>
    </div>
   </div>
  </div>
@endsection