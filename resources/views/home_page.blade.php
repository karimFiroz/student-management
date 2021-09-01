<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mini Point Of Sale</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('public/backend')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="{{asset('public/backend')}}/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('public/backend')}}/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Mini Point Of Sale</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin_login')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{asset('public/backend')}}/#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Admins</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="{{route('admin_login')}}">Admin Login</a>
                        <a class="collapse-item" href="#">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{asset('public/backend')}}/#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Users</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="{{route('index')}}">User Login</a>
                        <a class="collapse-item" href="#">Borders</a>
                        <a class="collapse-item" href="#">Animations</a>
                        <a class="collapse-item" href="#">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="{{route('about')}}">About Us</a>
                        <a class="collapse-item" href="{{route('contact')}}">Contact Us</a>
                        <a class="collapse-item" href="#">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="#">404 Page</a>
                        <a class="collapse-item" href="#">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item  -->
        
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{asset('public/backend')}}/charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="{{asset('public/backend')}}/#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="{{asset('public/backend')}}/#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="{{asset('public/backend')}}/#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{asset('public/backend')}}/#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{asset('public/backend')}}/#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="{{asset('public/backend')}}/#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="{{asset('public/backend')}}/#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="{{asset('public/backend')}}/#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="{{asset('public/backend')}}/img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{asset('public/backend')}}/#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="{{asset('public/backend')}}/img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{asset('public/backend')}}/#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="{{asset('public/backend')}}/img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{asset('public/backend')}}/#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="{{asset('public/backend')}}/https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="{{asset('public/backend')}}/#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="{{asset('public/backend')}}/#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
    

          
           <?php

$admin=Session::get('name');
if(isset($admin))
{
    echo "<strong>Now Login As:</strong>".' '. $admin.'<br />';
}
    ?>




                              </span>
    <img src="{{asset('public')}}/images/favicon.png" alt="karim">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{asset('public/backend')}}/#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="{{asset('public/backend')}}/#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="{{asset('public/backend')}}/#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('logout')}}"
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"></h1>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<!--******************************************************************************************************-->


<h3>Importent Links:</h3>
 <div class="container">
  <div class="row">
    <div class="col-md-4">
      Tutorials  
          <ul>
            
    
            <li><a class="dropdown-item" href="https://www.youtube.com/c/RuhulAcademy/playlists"target="_blank">Ruhul Academy</a></li>
            
            
            <li><a class="dropdown-item" href="https://www.youtube.com/c/CreativeITInstitute/videos"target="_blank">Creative IT Institute</a></li>
            
        
            <li><a class="dropdown-item" href="https://www.youtube.com/c/NirobHasan/playlists"target="_blank">Nirob Hasan</a></li>
            
          
              <li><a class="dropdown-item" href="https://www.youtube.com/c/ManirujjamanAkashChanel/playlists"target="_blank">Monirujjaman</a></li>
              
              
               <li><a class="dropdown-item" href="https://www.youtube.com/playlist?list=PLjZmR8YqVGMfe7zeG7ul3hNjpuZH2s88h"target="_blank">Al Mamun Sarkar(Laravel)</a></li>
               
             
              <li><a class="dropdown-item" href="https://www.artofcse.com/"target="_blank">Laravel Source Code</a></li>
              
        
              <li><a class="dropdown-item" href="https://www.youtube.com/c/EduFlyz/playlists"target="_blank">Edu Flyz</a></li>
        
            
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCtWM-vtkrb2bpEF9J1O1fbQ"target="_blank">Graphics Design</a></li>
            

              <li><a class="dropdown-item" href="https://btechgeeks.com/"target="_blank">BTechGGeeks</a></li>
              
        
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCzmI_aDsHbBXPZzabrsM7sA/playlists"target="_blank">Training With Live Project</a></li>
            
            
            <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=5dIHUljeb_s&list=PL1AXcfXimFRF3qKaLqp_N6jSHKqHjgKDI&ab_channel=Klassroom"target="_blank">Laravel Tutorial</a></li>
           
           
            <li><a class="dropdown-item" href="https://www.youtube.com/user/learn24bd/playlists"target="_blank">Laravel LearnBD24</a></li>
           
           
            
            <li><a class="dropdown-item" href="http://www.outsourcinghelp.net/classnotes/"target="_blank">Free Outsourcing course</a></li>
            

            <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=iLAKRRL285k&list=PLJ-3-UkU_it-1zhisUmSicBi4i_fvn3uL&ab_channel=TalhaTraining"target="_blank">Talha training laravel</a></li>
            
            
            
           
           
            <li><a class="dropdown-item" href="https://www.canva.com/design/DAECwzwq0N0/8RQ-2nTwXiD0OxlJJ2naZg/edit?category=tACZCnmCPGY"target="_blank">Canva</a></li>
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UChzD5TZP7se95B9w7SOcm2g/playlists"target="_blank">Cpanel Tutorial</a></li>
           
          </ul>

 Social    
          <ul>     
                <li><a class="dropdown-item" href="https://www.facebook.com/"target="_blank">Facebook</a></li>
                
              
          <li><a class="dropdown-item" href="https://twitter.com/"target="_blank">Twitter</a></li>
          
            
              <li><a class="dropdown-item" href="https://www.instagram.com/"target="_blank">Instragram</a></li>
              
               
              <li><a class="dropdown-item" href="https://www.youtube.com/watch?v
            =lGCiQrfR00U&ab_channel=SOMOYTV"target="_blank">Youtube</a></li>    
                  
             
            <li><a class="dropdown-item" href="https://www.youtube.com/c/HujurTv24/playlists"target="_blank">Hujur TV 24</a></li>
            
          
            <li><a class="dropdown-item" href="https://www.youtube.com/c/ElamSeba/videos"target="_blank">Elam Seba</a></li>
           
        
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCzl54RQebnO4Ymfahi_eadQ/playlists"target="_blank">Daily Recitation</a></li>
            
           
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCqbaw9b7BffjNUh6uPd7uQw/featured"target="_blank">Torikot TV</a></li>
          
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCcm0MZDyUkiJKbYBP2t2FdA/videos"target="_blank">Islamic Story</a></li>
            
             <li><a class="dropdown-item" href="https://www.google.com/maps/place/%E0%A6%96%E0%A6%BE%E0%A6%A8+%E0%A6%86%E0%A6%AE+%E0%A6%AC%E0%A6%BE%E0%A6%97%E0%A6%BE%E0%A6%A8/@24.6952978,88.1626589,3a,90y,287.97h,86.96t/data=!3m6!1e1!3m4!1sCtJKuvICAd8C4fdrPvEjtQ!2e0!7i13312!8i6656!4m14!1m6!3m5!1s0x39fa4d53fba933f7:0xa6564f5a70e93c77!2z4KaX4KeL4Kaq4Ka-4Kay4Kao4KaX4KawIOCmleCnh-CmqOCnjeCmpuCnjeCmsOCngOCmr-CmvCDgppzgpr7gpq7gp4cg4Kau4Ka44Kac4Ka_4Kam4KWk!8m2!3d24.6967331!4d88.1633378!3m6!1s0x39fa4d52045a524f:0xeec3a1d591d53247!8m2!3d24.6917698!4d88.1637004!14m1!1BCgIgARICCAI?rapsrc=apiv3"target="_blank">Google Map</a></li>
               
            <li><a class="dropdown-item" href="https://www.instantstreetview.com/@24.695299,88.162665,260.93h,-28.48p,0.12z,CtJKuvICAd8C4fdrPvEjtQ"target="_blank">Street View</a></li>
            
            
                  
            <li><a class="dropdown-item" href="https://www.youtube.com/c/TravelShooters/videos"target="_blank">Travel Shooters</a></li>
            
             
            
        
          </ul>
         
          </div>
           <div class="col-md-4">
       
              
 Myself
            
          
          <ul>
            <li><a class="dropdown-item" href="https://karimfiroz.github.io/firoz/"target="_blank">My Web</a></li>
            
        
            <li><a class="dropdown-item" href="http://firozlearninghome.blogspot.com/"target="_blank">My Blog</a></li>
            
        
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCbFXTWcyecmV4_CT3AcsDPw/playlists"target="_blank">My Youtube Site</a></li>
            
    
            <li><a class="dropdown-item" href="https://www.youtube.com/c/HazratShaykhDrMushtaqueAhmed/videos"target="_blank">Dr.Mostaque Ahmed</a></li>
            
            <li><a class="dropdown-item" href="https://www.facebook.com/Minafarahusa/"target="_blank">Mina Farah</a></li>
            
    
            <li><a class="dropdown-item" href="https://www.youtube.com/sonyaath/playlists"target="_blank">Crime Petrol(India)</a></li>
            

            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCLbdDFdhsQNeCzrmzHnpIYQ"target="_blank">Crime Petrol(BD)</a></li>
            
    
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCqk3_x2FUhPHXU51wiR1IsA"target="_blank">Movie(BD)</a></li>
            
        
            <li><a class="dropdown-item" href="https://www.youtube.com/c/watchHitsHD/playlists"target="_blank">Movie(India)</a></li>
            
            
        
            <li><a class="dropdown-item" href="http://ntvconnect.ntvbd.com/"target="_blank">NTV Connect</a></li>
            
            <li><a class="dropdown-item" href="https://firozshah.github.io/school/"target="_blank">School Web</a></li>
            
            <li><a class="dropdown-item" href="https://firozshahschool.blogspot.com/"target="_blank">School Blog</a></li>
            

            <li><a class="dropdown-item" href="https://onlinecalculator.guru/maths-formulas/"target="_blank">Math Formula</a></li>
            
    
            <li><a class="dropdown-item" href="https://www.ncertbooks.guru/"target="_blank">BooKs</a></li>
            

            <li><a class="dropdown-item" href="https://www.ncertbooks.guru/cbse-ncert-solutions-pdf/"target="_blank">Solutions</a></li>
            
          
        </ul>
      

 
    
  
    Education
        
          <ul>
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UC0LC4WOqjRvf-LKk5sgCBug/playlists"target="_blank">Al Quran</a></li>
            

            <li><a class="dropdown-item" href="http://ihadis.com/"target="_blank">Hadis</a></li>
            

            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCYCQNElr-0y_0Y8g3sJfEzA"target="_blank">Tafsir Mahfil</a></li>
            

            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UC5WnwbpCHH25pWXr6kRUT2Q/playlists"target="_blank">English Speeking Course</a></li>
            
    
            <li><a class="dropdown-item" href="https://www.youtube.com/c/FahadHossainEdutubebd/videos"target="_blank">Amader School</a></li>
            
        
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCbwkFZgFll5NyoL0hcdrHPA"target="_blank">Mahadi Academy</a></li>
            

            <li><a class="dropdown-item" href="https://www.youtube.com/c/MottasinPahloviBUETian/playlists"target="_blank">BUETian</a></li>
            

            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UC5uRU31CY02ncfREI758orw"target="_blank">Technique Easy Education</a></li>
            
        
            <li><a class="dropdown-item" href="https://eduhlpline.com/"target="_blank">Edu Help Line</a></li>
              <li><a class="dropdown-item" href="https://almodina.com/"target="_blank">Al Modina</a></li>

            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCGjbt_d9NlH18MNMrC82qhw"target="_blank">Education Environment</a></li>

           <li><a class="dropdown-item" href="https://thedailycampus.com/"target="_blank">The Daily Campas</a></li> 

            <li><a class="dropdown-item" href=" http://resume.firozlearninghome.com/"target="_blank">Resume Template</a></li>
          </ul> 


        </div>
         <div class="col-md-4">
 News
            
          
          <ul>

            <li><a class="dropdown-item" href="https://www.youtube.com/c/iTuberlogy/videos"target="_blank">BD Darpon</a></li> 
            
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCd0sgSradUWXA02jLRDPOLw"target="_blank">Awaz-1</a></li>
            
            
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCuhrp5_cAfLtide2aBToQuw"target="_blank">BD Views</a></li>
    
            
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCmV8TCEMfnJpSC0tavFN_nQ"target="_blank">Open The Eyes</a></li>
            

            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCP-G6dMvKUYpJjRh88-fQIQ/videos"target="_blank">World News 24</a></li>
                    
            <li><a class="dropdown-item" href="https://www.w3newspapers.com/bangladesh/"target="_blank">Newspapers</a></li>
            
        
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCFhJrgJkASY7AX2vqRb3e2w"target="_blank">Tech World</a></li>
            
        
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCQXvFp1Cv_oMb2LJ5eQmbdA"target="_blank">BAC World News</a></li>
    
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UC-N4b49LAlPDBZ5A5-2Ci8A"target="_blank">Jahan News BD</a></li>

            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCbf0XHULBkTfv2hBjaaDw9Q"target="_blank">World News 18</a></li>
            

            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCB84-jL7GDD2LZ9U1WH1xAg"target="_blank">RBD News</a></li>
            
    
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCM-aLP2hGV_riMv1rFpAU5A"target="_blank">Bangla News Channel</a></li>
            
    
            <li><a class="dropdown-item" href="https://www.activenews24.com/"target="_blank">Active News</a></li>
            
        
            <li><a class="dropdown-item" href="https://www.desifree.tv/somoy-news/"target="_blank">Somoy TV</a></li>
           
           

            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCpYnRIF2FmVXFjxNFeuv1Og/videos"target="_blank">News Exposure</a></li>
           
           <li><a class="dropdown-item" href="https://onlinebanglaradio.com/bangla-audio-story/hello-8920-abc-radio/"target="_blank">Hello 8920</a></li>
           
           
          </ul>
    


TV
          
          <ul>
           
           <li><a class="dropdown-item" href="http://www.jagobd.com/ntveurope"target="_blank">All Bangla TV</a></li>
           
        
            <li><a class="dropdown-item" href="https://bengali.abplive.com/live-tv"target="_blank">ABP Ananda</a></li>
            
    
            <li><a class="dropdown-item" href="https://www.desifree.tv/news18-bangla/"target="_blank">News 18</a></li>
            
    
           
            
            
    
            <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=xwXvTkr794s&ab_channel=Zee24Ghanta"target="_blank">Gee 24 Ghanta</a></li>
            
            
            
            <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=jR52YpO3h_w&ab_channel=TV9Bangla"target="_blank">TV9 Bangla</a></li>
            
    
            <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=ZbqFXifTAUw&ab_channel=RepublicBangla"target="_blank">Republic Bangla</a></li>
        

            <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=Dz_lZxgIZu8&ab_channel=DBCNEWS"_blank">DBC News</a></li>
            
            
            
    
            <li><a class="dropdown-item" href="https://www.desifree.tv/ntv/"target="_blank">NTV</a></li>

            <li><a class="dropdown-item" href="http://www.zengatv.com/live/d5ef7715-3d77-4384-90fa-d46b353d035c.html"target="_blank">Zenga TV</a></li>
        
            <li><a class="dropdown-item" href="https://www.desifree.tv/pogo-tv/"target="_blank">Pogo TV</a></li>
            
            

        
            <li><a class="dropdown-item" href="https://www.youtube.com/c/BanglaNewsTodayBangla/videos"target="_blank">Bangla News Today</a></li>
            
    
            <li><a class="dropdown-item" href="https://radio.net.bd/"target="_blank">Bangla Radio</a></li>
            
        
             
          </ul>

</div>
            
         </div>
</div>


<!--******************************************************************************************************-->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; All Right Reserved 2021 By Md. Abdul Karim</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="{{asset('public/backend')}}/#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{asset('public/backend')}}/login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('public/backend')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('public/backend')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('public/backend')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('public/backend')}}/js/sb-admin-2.min.js"></script>

</body>

</html>