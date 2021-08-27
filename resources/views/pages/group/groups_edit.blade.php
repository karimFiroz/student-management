 @extends('layouts.master')
@section('title','groups_edit')
@section('main_content')
<h3>Edit New Group</h3>

  <div class="card shadow mb-4">
   <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Edit Group</h6>
                        </div>
                       
                        <div class="card-body">
                        	<div class="row justify-content-md-center">
                        		<div class="col-md-6">
                        			
                        	
      <form action="{{route('groups_update',$group->id)}}" method="post"class="needs-validation" novalidate>
    @csrf

<div class="form-group">
    <label for="title">Group Title:</label>
    <input type="text" class="form-control"value="{{$group->title}}" name="title">
  </div>





  <button type="submit" class="btn btn-primary">Update</button>
</form>
	</div>
         </div>
             </div>
                    </div>



@endsection