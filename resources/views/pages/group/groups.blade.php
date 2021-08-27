 @extends('layouts.master')
@section('title','groups')
@section('main_content')



                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><a class="btn-info"href="{{route('groups_create')}}"><i class="fa fa-plus"></i>New Group</a></h6>
                        </div>
                        <div class="card-body">
  
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th class="text-right">Action</th>
                                         
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Title</th>
                                            <th class="text-right">Action</th>
                                          
                                        </tr>
                                    </tfoot>
                                    <tbody>
                    @foreach($groups as $group)
                                        <tr>
                                            <td>{{$group->id}}</td>
                                            <td>{{$group->title}}</td>
                                          <td class="text-right">
                                            <a href="{{route('groups_edit',$group->id)}}"class="btn btn-success btn-sm"><i class="fa fa-edit"></i>Edit</a>
                                            <form class="form-inline"onclick="return confirm('Are you sure delete? ')" action="{{route('groups_delete',$group->id)}}" method="post">
                                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Delete</button>
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