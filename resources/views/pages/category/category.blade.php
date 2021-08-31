 @extends('layouts.master')
@section('title','category')
@section('main_content')
 @if(Session('message'))
<div class="alert alert-success" role="alert">
{{Session('message')}}
</div>
@endif
<h2>Categories</h2>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                           <center> <h6 class="m-0 font-weight-bold text-primary"><a class="btn-info"href="{{route('category_create')}}"><i class="fa fa-plus"></i></a></h6></center>
                              <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                     <thead>
                                        <tr><th>SL</th>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th class="text-right">Action</th>
                                         
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr><th>SL</th>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th class="text-right">Action</th>
                                          
                                        </tr>
                                    </tfoot>
                                    <tbody>
                    @php $i = 0; @endphp
                    @foreach($categories as $category)
                     @php $i++ @endphp
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->title}}</td>
                                        <td class="text-right">
               <a href="{{route('category_edit',$category->id)}}"class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>                           
            <form class="form-inline"onclick="return confirm('Are you sure delete? ')" action="{{route('category_delete', $category->id)}}" method="post">
             @csrf
    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                            </form>
                                              
                                          </td>
                                        </tr>
                                       
                                    @endforeach
                                    
                                  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

               


@endsection