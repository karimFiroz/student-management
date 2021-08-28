 @extends('layouts.master')
@section('title','groups_create')
@section('main_content')


  <div class="card shadow mb-4">
   <div class="card-header py-3">
          
                        </div>
                       
                        <div class="card-body">
                        	<div class="row justify-content-md-center">
                        		<div class="col-md-6">
                        			
                        	
          <form action="{{route('groups_store')}}" method="post">
          	@csrf
  <fieldset>
    <legend>Create New Group</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="Input Group Title">
    </div>
   
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
	</div>
         </div>
             </div>
                    </div>



@endsection