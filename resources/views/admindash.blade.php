 
<!DOCTYPE HTML>
<html>
<head>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
 
<link href="{{asset('admin/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{asset('admin/css/style.css') }}" rel='stylesheet' type='text/css' />
<link href="{{asset('admin/css/font-awesome.css') }}" rel="stylesheet"> 
<script src="{{asset('admin/js/jquery.min.js') }}"> </script>
<!-- Mainly scripts -->
<script src="{{asset('admin/js/jquery.metisMenu.js') }}"></script>
<script src="{{asset('admin/js/jquery.slimscroll.min.js') }}"></script>
<!-- Custom and plugin javascript -->
<link href="{{asset('admin/css/custom.css') }}" rel="stylesheet">
<link href="{{asset('css/admindash.css') }}" rel="stylesheet">

<script src="{{asset('admin/js/custom.js') }}"></script>
<script src="{{asset('admin/js/screenfull.js') }}"></script>
  <script src="{{asset('admin/js/jquery.nicescroll.js')}}"></script>
  <script src="{{asset('admin/js/scripts.js')}}"></script>
  <!--//scrolling js-->
  <script src="{{asset('admin/js/bootstrap.min.js')}}"> </script>

  <style type="text/css">
    .form-control,.fi{
  font-family: Kantipur;
  font-size: x-large;
  font-weight: bold;
    }
  </style>
 
</head>
<body>
<div id="wrapper">


<!----->

<div id="myModal3" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New</h4>
      </div>
      <div class="modal-body">
        <form method="post" id="addnotice2" class="form-group">
          @csrf
          <input type="text" class="form-control fi" name="noticeName" required>
         
          <button type="submit" class="btn btn-success">Add</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="index.html">Admin</a></h1>         
         </div>
       <div class=" border-bottom">
          <div class="full-left">
            <section class="full-top">
        <button id="toggle"><i class="fa fa-arrows-alt"></i></button> 
      </section>
      <form class=" navbar-left-right">
              <input type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
              <input type="submit" value="" class="fa fa-search">
            </form>
            <div class="clearfix"> </div>
           </div>
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
     
       <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="drop-men" >
            <ul class=" nav_1">
               
            <li class="dropdown at-drop">
                  <a href="#" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i class="fa fa-globe"></i> <span class="number">5</span></a>
                  <ul class="dropdown-menu menu1 " role="menu">
                    <li><a href="#">
                   
                      <div class="user-new">
                      <p>New user registered</p>
                      <span>40 seconds ago</span>
                      </div>
                      <div class="user-new-left">
                    
                      <i class="fa fa-user-plus"></i>
                      </div>
                      <div class="clearfix"> </div>
                      </a></li>
                    <li><a href="#">
                      <div class="user-new">
                      <p>Someone special liked this</p>
                      <span>3 minutes ago</span>
                      </div>
                      <div class="user-new-left">
                    
                      <i class="fa fa-heart"></i>
                      </div>
                      <div class="clearfix"> </div>
                    </a></li>
                    <li><a href="#">
                      <div class="user-new">
                      <p>John cancelled the event</p>
                      <span>4 hours ago</span>
                      </div>
                      <div class="user-new-left">
                    
                      <i class="fa fa-times"></i>
                      </div>
                      <div class="clearfix"> </div>
                    </a></li>
                    <li><a href="#">
                      <div class="user-new">
                      <p>The server is status is stable</p>
                      <span>yesterday at 08:30am</span>
                      </div>
                      <div class="user-new-left">
                    
                      <i class="fa fa-info"></i>
                      </div>
                      <div class="clearfix"> </div>
                    </a></li>
                    <li><a href="#">
                      <div class="user-new">
                      <p>New comments waiting approval</p>
                      <span>Last Week</span>
                      </div>
                      <div class="user-new-left">
                    
                      <i class="fa fa-rss"></i>
                      </div>
                      <div class="clearfix"> </div>
                    </a></li>
                    <li><a href="#" class="view">View all messages</a></li>
                  </ul>
                </li>
          <li class="dropdown">
                  <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">{{Auth::user()->name}}<i class="caret"></i></span><img src="images/wo.jpg"></a>
                  <ul class="dropdown-menu " role="menu">
                    <li><a href="profile.html"><i class="fa fa-user"></i>Edit Profile</a></li>
                    <li><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox</a></li>
                    <li><a href="calendar.html"><i class="fa fa-calendar"></i>Calender</a></li>
                    <li><a href="/adminlogout"><i class="fa fa-clipboard"></i>Logout</a></li>
                  </ul>
                </li>
               
            </ul>
         </div><!-- /.navbar-collapse -->
      <div class="clearfix">
       
     </div>
    
        <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
        
                    <li>
                        <a href="index.html" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                    </li>
                   
 
           <li>
                        <a href="/services" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">Services</span> </a>
                    </li>
                    
                    <li>
                        <a href="gallery.html" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Gallery</span> </a>
                    </li>
                     <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i> <span class="nav-label">Pages</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="404.html" class=" hvr-bounce-to-right"> <i class="fa fa-info-circle nav_icon"></i>Error 404</a></li>
                            <li><a href="faq.html" class=" hvr-bounce-to-right"><i class="fa fa-question-circle nav_icon"></i>FAQ</a></li>
                            <li><a href="blank.html" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Blank</a></li>
                       </ul>
                    </li>
                     <li>
                        <a href="layout.html" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Grid Layouts</span> </a>
                    </li>
                   
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="forms.html" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Basic forms</a></li>
                            <li><a href="validation.html" class=" hvr-bounce-to-right"><i class="fa fa-check-square-o nav_icon"></i>Validation</a></li>
                        </ul>
                    </li>
                   
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Settings</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="signin.html" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Signin</a></li>
                            <li><a href="signup.html" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Singup</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
      </div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
      <!--banner--> 
        <div class="banner">
       
        <h2>
        <a href="index.html">Home</a>
        <i class="fa fa-angle-right"></i>






        </h2>
        </div>
    <!--//banner-->
    <!--content-->
    <div class="content-top  table-responsive">
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addNotice">
Add Notice
</button>

<!-- The Modal -->
<div class="modal" id="addNotice">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add New Notice</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="form-group" action="/addNotice" method="post">
          @csrf
          <input type="text" name="notice" required class="form-control">
          <input type="submit" name="submit" class="btn btn-success" value="Add">
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
          				<table class="table table-striped table1" style="width: 100%; padding: 0px; margin:0px;">
 					<tr  >
          <th>;'rgf</th>
          <th>k|tLls|of</th>
					</tr>
 
				    		<tbody >
					@foreach($notices as $notice)
					<tr >
            <td  ><?php echo $notice->notice; ?></td>

 
            <td>
              <a href="/notice/delete/<?php echo $notice->id; ?>"> <i class="fa fa-trash"></i> </a>
               <i  style="margin-left: 20px;" type="button" class="fa fa-edit" data-toggle="modal" data-target="#notice{{$notice->id}}"></i> 
            </td>

 

<!-- The Modal -->
<div class="modal" id="notice{{$notice->id}}">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Notice</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="form-group editNotice" method="post" action="/editNotice">
          @csrf
          {{method_field('patch')}}
          <input type="text" name="notice" placeholder="{{$notice->notice}}" class="form-control">
          <input type="text" name="id" value="{{$notice->id}}" hidden>
          <input type="submit" name="submit" value="submit" class="form-control">

        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
					</tr>
					@endforeach
				</tbody>
                    </table>


      </div>
    <!---->
  <div class="row" style="padding: 40px;">
 
  </div>  
    </div>
    <!----->
 

   
    <!---->
<div class="copy">
            <p> &copy; 2016 Minimal. All Rights Reserved .</p>
      </div>
    </div>
    <div class="clearfix"> </div>
       </div>
     </div>
<!---->
<!--scrolling js-->
</body>
</html>

