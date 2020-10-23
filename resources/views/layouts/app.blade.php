<!doctype html>
<html lang="en" class="fixed left-sidebar-top">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Helsinki</title>
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <!--load progress bar-->
    <script src="{{asset('public/admin')}}/vendor/pace/pace.min.js"></script>
    <link href=" {{asset('public/admin')}}/vendor/pace/pace-theme-minimal.css" rel="stylesheet" />

    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{asset('public/admin')}}/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('public/admin')}}/vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="{{asset('public/admin')}}/vendor/animate.css/animate.css">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--Notification msj-->
    <link rel="stylesheet" href="{{asset('public/admin')}}/vendor/toastr/toastr.min.css">
    <!--Magnific popup-->
    <link rel="stylesheet" href="{{asset('public/admin')}}/vendor/magnific-popup/magnific-popup.css">
        <!--pNotify-->
    <link rel="stylesheet" href="{{asset('public/admin')}}/vendor/pnotify/pnotify.custom.css">
    <!-- bootstrap toggle switch -->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
      <!--dataTable-->
    <link rel="stylesheet" href="{{asset('public/admin')}}/vendor/data-table/media/css/dataTables.bootstrap.min.css">
    <!--TEMPLATE css-->
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{asset('public/admin')}}/stylesheets/css/style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



</head>

<body>
    <div class="wrap">
        <!-- page HEADER -->
        <!-- ========================================================= -->
        <div class="page-header">
            <!-- LEFTSIDE header -->
            <div class="leftside-header">
                <div class="logo">
                    <a href="{{ route('home')}}" class="on-click">
                       <h3> AmarBangla</h3>
                    </a>
                </div>
                <div id="menu-toggle" class="visible-xs toggle-left-sidebar" data-toggle-class="left-sidebar-open" data-target="html">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>
            <!-- RIGHTSIDE header -->
            <div class="rightside-header">
                <div class="header-middle"></div>
                <!--SEARCH HEADERBOX-->
                <div class="header-section" id="search-headerbox">
                    <input type="text" name="search" id="search" placeholder="Search...">
                    <i class="fa fa-search search" id="search-icon" aria-hidden="true"></i>
                    <div class="header-separator"></div>
                </div>
                <!--NOCITE HEADERBOX-->
                <div class="header-section hidden-xs" id="notice-headerbox">
                    <!--check list-->
                    <div class="notice" id="checklist-notice">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        <div class="dropdown-box basic">
                            <div class="drop-header">
                                <h3><i class="fa fa-check-square-o" aria-hidden="true"></i> To-Do List</h3>
                            </div>
                            <div class="drop-content">
                                <div class="widget-list list-to-do">
                                    <ul>
                                        <li>
                                            <div class="checkbox-custom checkbox-primary">
                                                <input type="checkbox" id="check-s1" value="option1">
                                                <label class="check" for="check-s1">Accusantium eveniet ipsam neque</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-custom checkbox-primary">
                                                <input type="checkbox" id="check-s2" value="option1" checked>
                                                <label class="check" for="check-s2">Lorem ipsum dolor sit</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-custom checkbox-primary">
                                                <input type="checkbox" id="check-s3" value="option1">
                                                <label class="check" for="check-s3">Dolor eligendi in ipsum sapiente</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-custom checkbox-primary">
                                                <input type="checkbox" id="check-s4" value="option1">
                                                <label class="check" for="check-s4">Natus recusandae vel</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-custom checkbox-primary">
                                                <input type="checkbox" id="check-s5" value="option1">
                                                <label class="check" for="check-s5">Adipisci amet officia tempore ut</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drop-footer">
                                <a>See all Items</a>
                            </div>
                        </div>
                    </div>
                    <!--messages-->
                    <div class="notice" id="messages-notice">
                        <i class="fa fa-comments-o" aria-hidden="true"><span class="badge badge-xs badge-top-right x-danger"><i class="fa fa-exclamation"></i></span>
                        </i>
                        <div class="dropdown-box basic">
                            <div class="drop-header ">
                                <h3><i class="fa fa-comments" aria-hidden="true"></i> Messages</h3>
                                <span class="badge x-danger b-rounded">120</span>
                            </div>
                            <div class="drop-content">
                                <div class="widget-list list-left-element">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><img alt="profile photo" src="images/avatar/avatar_1.jpg" /></div>
                                                <div class="text">
                                                    <span class="title">John Doe</span>
                                                    <span class="subtitle">hello world</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><img alt="profile photo" src="images/avatar/avatar_2.jpg" /></div>
                                                <div class="text">
                                                    <span class="title">Alice Smith</span>
                                                    <span class="subtitle">hello world</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><img alt="profile photo" src="images/avatar/avatar_3.jpg" /></div>
                                                <div class="text">
                                                    <span class="title">Klaus Wolf</span>
                                                    <span class="subtitle">hello world</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><img alt="profile photo" src="images/avatar/avatar_4.jpg" /></div>
                                                <div class="text">
                                                    <span class="title">Sun Li</span>
                                                    <span class="subtitle">hello world</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><img alt="profile photo" src="{{asset('public/admin')}}/images/avatar/avatar_5.jpg" /></div>
                                                <div class="text">
                                                    <span class="title">Sonia Valera</span>
                                                    <span class="subtitle">hello world</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drop-footer">
                                <a>See all messages</a>
                            </div>
                        </div>
                    </div>
                    <!--alerts notices-->
                    <div class="notice" id="alerts-notice">
                        <i class="fa fa-bell-o" aria-hidden="true"><span class="badge badge-xs badge-top-right x-danger">7</span></i>

                        <div class="dropdown-box basic">
                            <div class="drop-header">
                                <h3><i class="fa fa-bell-o" aria-hidden="true"></i> Notifications</h3>
                                <span class="badge x-danger b-rounded">7</span>

                            </div>
                            <div class="drop-content">
                                <div class="widget-list list-left-element list-sm">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><i class="fa fa-warning color-warning"></i></div>
                                                <div class="text">
                                                    <span class="title">8 Bugs</span>
                                                    <span class="subtitle">reported today</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><i class="fa fa-flag color-danger"></i></div>
                                                <div class="text">
                                                    <span class="title">Error</span>
                                                    <span class="subtitle">sevidor C down</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><i class="fa fa-cog color-dark"></i></div>
                                                <div class="text">
                                                    <span class="title">New Configuration</span>
                                                    <span class="subtitle"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><i class="fa fa-tasks color-success"></i></div>
                                                <div class="text">
                                                    <span class="title">14 Task</span>
                                                    <span class="subtitle">completed</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><i class="fa fa-envelope color-primary"></i></div>
                                                <div class="text">
                                                    <span class="title">21 Menssage</span>
                                                    <span class="subtitle"> (see more)</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drop-footer">
                                <a>See all notifications</a>
                            </div>
                        </div>
                    </div>
                    <div class="header-separator"></div>
                </div>
                <!--USER HEADERBOX -->
                <div class="header-section" id="user-headerbox">
                    <div class="user-header-wrap">
                        <div class="user-photo">
                            <img alt="profile photo" src="{{asset('public/admin')}}/images/avatar/avatar_user.jpg" />
                        </div>
                        <div class="user-info">
                            <span class="user-name"></span>
                            <span class="user-profile">Admin</span>
                        </div>
                        <i class="fa fa-plus icon-open" aria-hidden="true"></i>
                        <i class="fa fa-minus icon-close" aria-hidden="true"></i>
                    </div>
                    <div class="user-options dropdown-box">
                        <div class="drop-content basic">
                            <ul>
                                <li> <a href="pages_user-profile.html"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                                <li> <a href="pages_lock-screen.html"><i class="fa fa-lock" aria-hidden="true"></i> Lock Screen</a></li>
                                <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Configurations</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header-separator"></div>
                <!--Log out -->
                <div class="header-section">
                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" data-toggle="tooltip" data-placement="left" title="Logout"><i class="fa fa-sign-out log-out" aria-hidden="true"></i></a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </div>
            </div>
        </div>
        <!-- page BODY -->
        <!-- ========================================================= -->
        <div class="page-body">
            <!-- LEFT SIDEBAR -->
            <!-- ========================================================= -->
            <div class="left-sidebar">
                <!-- left sidebar HEADER -->
                <div class="left-sidebar-header">
                    <div class="left-sidebar-title">Navigation</div>
                    <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                        <span></span>
                    </div>
                </div>
                <!-- NAVIGATION -->
                <!-- ========================================================= -->
                <div id="left-nav" class="nano">
                    <div class="nano-content">
                        <nav>
                            <ul class="nav nav-left-lines" id="main-nav">
                                <!--HOME-->
                                <li class="{{ request()->is('home')? 'active-item':''}}"><a href="{{ route('home')}}"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>
                                <!--UI ELEMENTENTS-->
                               <li><a href="{{ route('users')}}">users</a></li>
                                <!--CHARTS-->
                                <li class=" has-child-item close-item {{ request()->is('Addnews/*') ? 'open-item':''}}">
                                    <a><i class="fa fa-list" aria-hidden="true"></i><span>Add News</span> </a>
                                    <ul class=" nav child-nav level-1">
                                        <li class="{{ request()->is('Addnews/all')? 'active-item':''}}"><a href="{{ route('addallnews')}}">Add all News</a></li>
                                        
                                        <li class="{{ request()->is('Addnews/manage')? 'active-item':''}}"><a href="{{ route('managenews')}}">Manage News</a></li>
                                    </ul>
                                </li>
                                 <li class=" has-child-item close-item {{ request()->is('Addbreaking/*') ? 'open-item':''}}">
                                    <a><i class="fa fa-list" aria-hidden="true"></i><span>Add Breaking News</span> </a>
                                    <ul class=" nav child-nav level-1">
                             <li class="{{ request()->is('Addbreaking/add')? 'active-item':''}}"><a href="{{ route('addbreakingnews')}}">Add Breaking News</a></li>
                             <li class="{{ request()->is('Addbreaking/manage')? 'active-item':''}}"><a href="{{ route('ManageBreakingnews')}}"> Manage Breakin</a></li>
                                        
                                    </ul>
                                </li>
                                 
                                <!--FORMS-->
                              

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- CONTENT -->
            <!-- ========================================================= -->
            @yield('content')
            <!--scroll to top-->
            <a href="#" class="scroll-to-top"><i class="fa fa-angle-double-up"></i></a>
        </div>
    </div>
    <!--BASIC scripts-->
    <!-- ========================================================= -->
   
  <!--  <script src="{{asset('public/admin')}}/vendor/jquery/jquery-1.12.3.min.js"></script>
<script src="{{asset('public/admin')}}/vendor/bootstrap/js/bootstrap.min.js"></script> -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="{{asset('public/admin')}}/vendor/main.js"></script>

    <script src="{{asset('public/admin')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <script src="{{asset('public/admin')}}/vendor/nano-scroller/nano-scroller.js"></script>
    <!--TEMPLATE scripts-->
    <!-- ========================================================= -->
    <script src="{{asset('public/admin')}}/javascripts/template-script.min.js"></script>
    <script src="{{asset('public/admin')}}/javascripts/template-init.min.js"></script>
    <!-- SECTION script and examples-->
    <!-- ========================================================= -->
    <!--Notification msj-->
    <script src="{{asset('public/admin')}}/vendor/toastr/toastr.min.js"></script>
    <!--morris chart-->
    <script src="{{asset('public/admin')}}/vendor/chart-js/chart.min.js"></script>
    <!--Gallery with Magnific popup-->
    <script src="{{asset('public/admin')}}/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!--dataTable-->
<script src="{{asset('public/admin')}}/vendor/data-table/media/js/jquery.dataTables.min.js"></script>
<script src="{{asset('public/admin')}}/vendor/data-table/media/js/dataTables.bootstrap.min.js"></script>
<!--Examples-->
<script src="{{asset('public/admin')}}/javascripts/examples/tables/data-tables.js"></script>
    <!--Examples-->
    <script src="{{asset('public/admin')}}/javascripts/examples/dashboard.js"></script>
    <!-- frorm validator -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"> </script>
        <!--pNotify-->
    <script src="{{asset('public/admin')}}/vendor/pnotify/pnotify.custom.js"></script>
    <!--Examples-->
     <!--Examples-->
    <script src="{{asset('public/admin')}}/javascripts/examples/ui-elements/notifications-pnotify.js"></script>
    <!-- sweetalert -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
  $.validate({
    lang: 'en'
  });
</script>
<!-- bootstrap toggle switch -->
</body>

</html>