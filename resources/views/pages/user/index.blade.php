 @extends('layouts.master')
@section('title','All Users')
@section('main_content')


     <main>
                    <div class="container-fluid px-4">

                        <h2 class="mt-4"align="center">User Registration</h2>
                       
                        <div class="card mb-4">
                            <div class="card-body">
    <center><a class="btn btn-info" href="{{route('user_create')}}"><strong> Create User</strong></a></center>
                               
                                
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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Address</th>
                                            <th>Mobile</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th>#</th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Address</th>
                                            <th>Mobile</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    
                                    <tbody>
                                        @php $i = 0; @endphp
                                        @foreach($users as $user)
                                         @php $i++ @endphp
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->password}}</td>
                                            <td>{{$user->address}}</td>
                                            <td>{{$user->mobile}}</td>
                                            <td>
                <a href="{{route('user_edit',$user->id)}}"class="btn btn-success btn-sm">Edit</a> 
        <form class="form-inline"onclick="return confirm('Are you sure delete? ')" action="{{route('user_delete',$user->id)}}" method="post">
        @csrf
        <input type="submit" class="btn btn-danger btn-sm" value="Delete"/>
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