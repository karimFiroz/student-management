 @extends('layouts.master')
@section('title','All Users')
@section('main_content')

 @if(Session('message'))
<div class="alert alert-success" role="alert">
{{Session('message')}}
</div>
@endif
     <main>
               

                        <h2 class="mt-4"align="center">User Registration</h2>
                       
                        <div class="card mb-4">
                            <div class="card-body">
    <center><a class="btn btn-info" href="{{route('user_create')}}"><strong><i class="fa fa-plus"></i></strong></a></center>
                               
                              <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table  class="table table-responsive table-hover">
                                    <thead>
                                        <tr>
                                             <th>Action</th>
                                            <th>SN</th>
                                            <th>ID</th>
                                            <th>User_ID</th>
                                            <th>Admin_ID</th>
                                            <th>Group_ID</th>
                                            <th>Group</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Address</th>
                                            <th>Mobile</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Action</th>
                                           <th>SN</th>
                                            <th>ID</th>
                                            <th>User_ID</th>
                                            <th>Admin_ID</th>
                                            <th>Group_ID</th>
                                            <th>Group</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Address</th>
                                            <th>Mobile</th>
                                            
                                        </tr>
                                    </tfoot>
                                    
                                    <tbody>
                                        @php $i = 0; @endphp
                                        @foreach($users as $user)
                                         @php $i++ @endphp
                                        <tr>
                                            <td>
       

             <a href="{{route('user_edit',$user->id)}}"class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a> 
        <a href="{{route('user_show',$user->id)}}"class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
        <form class="form-inline"onclick="return confirm('Are you sure delete? ')" action="{{route('user_delete',$user->id)}}" method="post">
        @csrf
      <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
        </form>
                                            </td>
                                             
                                            <td>{{ $i }}</td>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->user_id}}</td>
                                            <td>{{$user->admin_id}}</td>
                                            <td>{{$user->group_id}}</td>
                                            <td>{{$user->group}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->password}}</td>
                                            <td>{{$user->address}}</td>
                                           <td>{{$user->mobile}}</td>
                                            
                                        </tr>
                                      @endforeach 
                                       
                                    </tbody>
                                     
                                </table>
                       </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
                </main>

					@endsection