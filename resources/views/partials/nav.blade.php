<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container margin-top-20"><!--container start-->
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/')}}"><strong><h1 style="color:#000000;font-size:32px">Firoz Learning Home</h1></strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">




      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <li><li><a  href="{{url('/')}}/"><img src="{{asset('public')}}/images/home.png"height="30px"width="30px"></a></li></li>
       <!--  <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}"><strong>HOME</strong></a> -->
        </li>


        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('about')}}"><strong>About</strong></a>
        </li>


        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('contact')}}"><strong>Contact</strong></a>
        </li>
        

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <strong>Authentication</strong>
          </a>


          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{route('admin_login')}}">Admin Login</a></li>
            <li><hr class="dropdown-divider"></li>
            <li class="nav-item">
          <a class="nav-link" href="{{route('user_create')}}">User Registration</a>
        </li>
        <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{route('index')}}">User Login</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
          </ul>


        </li>
      </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <strong> Website</strong>
          </a>



          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="https://moontasir.com/"target="__blank">Moontasir Mahmood</a></li>
           <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="https://wordpress.firozlearninghome.com/"target="__blank">Wordpress Firoz Learning Home</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="http://resume.firozlearninghome.com/"target="__blank">Erfan-Ali Web</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="https://firozlearninghome.com/firozshah/"target="__blank">Firozshah School</a></li>
          </ul>


        </li>
      </ul>

 
  <div>
 <img src="{{asset('public')}}/images/favicon.png" alt="karim"> 
</div>
          
           <?php

$admin=Session::get('name');
if(isset($admin))
{
    echo "<strong>Now Login:</strong>".' '. $admin.'<br />';
}
    ?>



    <form class="d-flex">
       <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search">
  <div class="input-group-append">
    <button class="btn btn-success" type="submit">O</button> 
  </div>
</div>

      </form>

     
    </div>
  </div>
</div><!--container end-->
</nav>