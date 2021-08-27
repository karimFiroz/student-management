 @extends('layouts.master')
@section('title','All Admins')
@section('main_content')


     <main>
                    <div class="container-fluid px-4">

                        <h2 class="mt-4"align="center">Admin Registration</h2>
                       
                        <div class="card mb-4">
                            <div class="card-body">
    <center><a class="btn btn-info" href="{{route('admin_create')}}"><strong><i class="fa fa-plus"></i> Create Admin</strong></a></center>
                               
                                
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">
                                <table  class="table table-responsive table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ID</th>
                                            <th>Admin_ID</th>
                                            <th>Group_ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                             <th>Address</th>
                                            <th>Password</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>ID</th>
                                            <th>Admin_ID</th>
                                            <th>Group_ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                             <th>Address</th>
                                            <th>Password</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    
                                    <tbody>
                                        @php $i = 0; @endphp
                                        @foreach($admins as $admin)
                                         @php $i++ @endphp
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{$admin->id}}</td>
                                            <td>{{$admin->admin_id}}</td>
                                            <td>{{$admin->group_id}}</td>
                                            <td>{{$admin->name}}</td>
                                            <td>{{$admin->email}}</td>
                                            <td>{{$admin->address}}</td>
                                            <td>{{$admin->password}}</td>
                                            <td>{{$admin->phone}}</td>
                                            <td>
                <a href="{{route('admin_edit',$admin->id)}}"class="btn btn-success btn-sm"><i class="fa fa-edit"></i>Edit</a> 
       <form class="form-inline"onclick="return confirm('Are you sure delete? ')" action="{{route('admin_delete',$admin->id)}}" method="post">
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
                </main>

					@endsection