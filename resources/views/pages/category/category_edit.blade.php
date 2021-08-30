 @extends('layouts.master')
@section('title','groups_edit')
@section('main_content')
<h3>Edit New Group</h3>

  <div class="card shadow mb-4">
   <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Edit Category</h6>
                        </div>
                       
                        <div class="card-body">
                        	<div class="row justify-content-md-center">
                        		<div class="col-md-6">
                        			
                        	
      <form action="{{route('category_update',$category->id)}}" method="post"class="needs-validation" novalidate>
    @csrf

<div class="form-group">
    <label for="title">Category Title:</label>
    <input type="text" class="form-control"value="{{$category->title}}" name="title">
  </div>





  <button type="submit" class="btn btn-primary">Update</button>
</form>
	</div>
         </div>
             </div>
                    </div>



@endsection