

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('partials.meta')

   

    <title>@yield('title','pageName')</title>
     <!-- Bootstrap CSS -->
    @include('partials.style')
  </head>
  <body>
    
    <div class="wrapper"><!--wrapper start-->

    {{--navbar start--}}
    @include('partials.nav')
    {{--navbar end--}}

{{--sidebar+content Start--}}
<div class="container">
    
    <div class="row">
        
<div class="col-md-3 margin-top-20">
  <h4>Menu</h4>
@include('partials.left-sidebar')
</div>




<div class="col-md-9">

@yield('main_content')

  </div>

 




</div>
    </div>

    
</div>


{{--sidebar+content end--}}
  
   @include('partials.footer')
</div><!--wrapper end-->
   
 @include('partials.script')
    
  </body>
</html>
   
                               