 @extends('layouts.master')
@section('title','Mini Point of Sale')
@section('main_content')

 @if(Session('message'))
<div class="alert alert-success" role="alert">
{{Session('message')}}
</div>
@endif
     <main>
               
<div class="row clearfix page_header">
    <div class="col-md-12 text-right">
    <a class="btn btn-info" href="{{route('user_create')}}"><strong><i class="fa fa-plus"></i>New Sale</strong></a>
    <a class="btn btn-primary" href="{{route('user_create')}}"><strong><i class="fa fa-plus"></i>New purchase</strong></a>
    <a class="btn btn-success" href="{{route('user_create')}}"><strong><i class="fa fa-plus"></i>New Payment</strong></a>
    <a class="btn btn-secondary" href="{{route('user_create')}}"><strong><i class="fa fa-plus"></i>New Receipt</strong></a>
                        <h2 class="mt-4"align="center">User show</h2>

                        <div class="card mb-12">
                            <div class="card-body">
     <center><a class="btn btn-info" href="{{route('users')}}"><strong><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</strong></a></center>
                               
                              <div class="card shadow mb-12">
                        <div class="card-header py-12">
                            <h2><strong>{{$user->name}}</strong></h2>Information:
                        </div>
                        <div class="card-body" >
                            <div class="table-responsive">
             



       <table  class="table table-responsive table-hover" table-striped>
                                    
                                      

                                           <tr>
                                          <th>ID:</th>
                                              <td>{{$user->id}}</td>
                                          </tr>
                                           
                                              <tr>
                                         <th>User_ID:</th>
                                              <td>{{$user->user_id}}</td>
                                          </tr>
                                            
                                        <tr>
                                         <th>Group_ID:</th>
                                             <td>{{$user->group_id}}</td>
                                          </tr>
                                          <tr>

                                            <th>Group:</th>
                                             <td>{{$user->group}}</td>
                                         </tr>

                                         <tr>
                                            
                                            <th>Name:</th>
                                            <td>{{$user->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Email:</th>
                                             <td>{{$user->email}}</td>
                                         </tr>
                                         <tr>
                                            <th>Password:</th>
                                             <td>{{$user->password}}</td>
                                         </tr>
                                         <tr>
                                            <th>Address:</th>
                                             <td>{{$user->address}}</td>
                                         </tr>

                                         <tr>
                                            <th>Mobile:</th>
                                             <td>{{$user->mobile}}</td>
                                        </tr>
                                        </table
                                   


                       </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
  </div>
                   </div>
            </div>
                </main>

					@endsection