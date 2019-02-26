<!DOCTYPE html>
<!-- saved from url=(0055)http://radixtouch.in/templates/admin/smart/source/full/ -->
<html lang="en" class="mdl-js"><!-- BEGIN HEAD --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="description" content="Responsive Admin Template">
    <meta name="author" content="SmartUniversity">
    <title>Online Library | </title>
    <!-- google font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- icons -->
    <link href="{!! asset('css/smart/css') !!}" rel="stylesheet" type="text/css">
    <!-- icons -->
    <link   href="{!! asset('css/smart/simple-line-icons.min.css') !!}"  rel="stylesheet" type="text/css">

    <link href="{!! asset('css/smart/material-icon.css') !!}"  rel="stylesheet" type="text/css">
    <!--bootstrap -->
    <link href="{!! asset('css/smart/bootstrap.min.css') !!}"  rel="stylesheet" type="text/css">
    <link  href="{!! asset('css/smart/summernote.css') !!}"  rel="stylesheet">
    <!-- Material Design Lite CSS -->
    <link  href="{!! asset('css/smart/material.min.css') !!}" rel="stylesheet">
    <link  href="{!! asset('css/smart/material_style.css') !!}" rel="stylesheet" >
    <!-- inbox style -->
    <link href="{!! asset('css/smart/inbox.min.css') !!}" rel="stylesheet" type="text/css">
    <!-- Theme Styles -->
    <link href="{!! asset('css/smart/theme_style.css') !!}" rel="stylesheet" id="rt_style_components" type="text/css">
    <link href="{!! asset('css/smart/style.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/smart/plugins.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/smart/responsive.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/smart/theme-color.css') !!}" rel="stylesheet" type="text/css">

    <!-- google font -->
    <!-- icons -->
    <link href="{!! asset('css/smart/material-icon.css') !!}" rel="stylesheet" type="text/css">
    <link href="" rel="stylesheet" type="text/css">

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            'appUrl' => url('/'),
            'siteUser' => auth()->user(),
        ]); ?>
    </script>
    <!-- Theme Styles -->
    <!-- icons -->
    <!-- dropzone -->
    <link href="{!! asset('css/smart/dropzone.css') !!}" rel="stylesheet" type="text/css">S <!-- favicon -->
    <link rel="shortcut icon" href="">
    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md page-full-width header-white white-sidebar-color logo-indigo">
<div id="app">
<div class="page-wrapper">

    <!-- start header -->
    <div class="page-header navbar navbar-fixed-top">
        <div class="page-header-inner ">
            <!-- logo start -->
            <div class="page-logo">
                <a href="http://radixtouch.in/templates/admin/smart/source/full/index.html">
                    <span class="logo-icon material-icons fa-rotate-45">school</span>
                    <span class="logo-default">Smart</span> </a>
            </div>
            <!-- logo end -->
            <ul class="nav navbar-nav navbar-left in">
                <li><a href="http://radixtouch.in/templates/admin/smart/source/full/#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
            </ul>
            <form class="search-form-opened" action="http://radixtouch.in/templates/admin/smart/source/full/#" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." name="query">
                    <span class="input-group-btn">
                          <a href="javascript:;" class="btn submit">
                             <i class="icon-magnifier"></i>
                           </a>
                        </span>
                </div>
            </form>
            <!-- start mobile menu -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span></span>
            </a>
            <!-- end mobile menu -->
            <!-- start header menu -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li><a href="javascript:;" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
                    <!-- start language menu -->
                    <li class="dropdown language-switch">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="./Smart University _ ALL STUDENTS_files/gb.png" class="position-left" alt=""> English <span class="fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="deutsch"><img src="./Smart University _ ALL STUDENTS_files/de.png" alt=""> Deutsch</a>
                            </li>
                            <li>
                                <a class="ukrainian"><img src="./Smart University _ ALL STUDENTS_files/ua.png" alt=""> Українська</a>
                            </li>
                            <li>
                                <a class="english"><img src="./Smart University _ ALL STUDENTS_files/gb.png" alt=""> English</a>
                            </li>
                            <li>
                                <a class="espana"><img src="./Smart University _ ALL STUDENTS_files/es.png" alt=""> España</a>
                            </li>
                            <li>
                                <a class="russian"><img src="./Smart University _ ALL STUDENTS_files/ru.png" alt=""> Русский</a>
                            </li>
                        </ul>
                    </li>
                    <!-- end language menu -->
                    <!-- start notification dropdown -->
                    <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge headerBadgeColor1"> 6 </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3><span class="bold">Notifications</span></h3>
                                <span class="notification-label purple-bgcolor">New 6</span>
                            </li>
                            <li>
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto;"><ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283" style="overflow: hidden; width: auto;">
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">just now</span>
                                                <span class="details">
                                                <span class="notification-icon circle deepPink-bgcolor"><i class="fa fa-check"></i></span> Congratulations!. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">3 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle purple-bgcolor"><i class="fa fa-user o"></i></span>
                                                <b>John Micle </b>is now following you. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">7 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle blue-bgcolor"><i class="fa fa-comments-o"></i></span>
                                                <b>Sneha Jogi </b>sent you a message. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">12 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle pink"><i class="fa fa-heart"></i></span>
                                                <b>Ravi Patel </b>like your photo. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">15 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle yellow"><i class="fa fa-warning"></i></span> Warning! </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">10 hrs</span>
                                                <span class="details">
                                                <span class="notification-icon circle red"><i class="fa fa-times"></i></span> Application error. </span>
                                            </a>
                                        </li>
                                    </ul><div class="slimScrollBar" style="background: rgb(158, 165, 171); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                <div class="dropdown-menu-footer">
                                    <a href="javascript:void(0)"> All notifications </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- end notification dropdown -->
                    <!-- start message dropdown -->
                    <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge headerBadgeColor2"> 2 </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3><span class="bold">Messages</span></h3>
                                <span class="notification-label cyan-bgcolor">New 2</span>
                            </li>
                            <li>
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto;"><ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283" style="overflow: hidden; width: auto;">
                                        <li>
                                            <a href="http://radixtouch.in/templates/admin/smart/source/full/#">
                                                <span class="photo">
                                                	<img src="./Smart University _ ALL STUDENTS_files/prof2.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Sarah Smith </span>
                                                	<span class="time">Just Now </span>
                                                </span>
                                                <span class="message"> Jatin I found you on LinkedIn... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://radixtouch.in/templates/admin/smart/source/full/#">
                                                <span class="photo">
                                                	<img src="./Smart University _ ALL STUDENTS_files/prof3.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> John Deo </span>
                                                	<span class="time">16 mins </span>
                                                </span>
                                                <span class="message"> Fwd: Important Notice Regarding Your Domain Name... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://radixtouch.in/templates/admin/smart/source/full/#">
                                                <span class="photo">
                                                	<img src="./Smart University _ ALL STUDENTS_files/prof1.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Rajesh </span>
                                                	<span class="time">2 hrs </span>
                                                </span>
                                                <span class="message"> pls take a print of attachments. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://radixtouch.in/templates/admin/smart/source/full/#">
                                                <span class="photo">
                                                	<img src="./Smart University _ ALL STUDENTS_files/prof8.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Lina Smith </span>
                                                	<span class="time">40 mins </span>
                                                </span>
                                                <span class="message"> Apply for Ortho Surgeon </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://radixtouch.in/templates/admin/smart/source/full/#">
                                                <span class="photo">
                                                	<img src="./Smart University _ ALL STUDENTS_files/prof5.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Jacob Ryan </span>
                                                	<span class="time">46 mins </span>
                                                </span>
                                                <span class="message"> Request for leave application. </span>
                                            </a>
                                        </li>
                                    </ul><div class="slimScrollBar" style="background: rgb(158, 165, 171); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                <div class="dropdown-menu-footer">
                                    <a href="http://radixtouch.in/templates/admin/smart/source/full/#"> All Messages </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- end message dropdown -->
                    <!-- start manage user dropdown -->
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" class="img-circle " src="./Smart University _ ALL STUDENTS_files/dp.jpg">
                            <span class="username username-hide-on-mobile"> Kiran </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="http://radixtouch.in/templates/admin/smart/source/full/user_profile.html">
                                    <i class="icon-user"></i> Profile </a>
                            </li>
                            <li>
                                <a href="http://radixtouch.in/templates/admin/smart/source/full/#">
                                    <i class="icon-settings"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a href="http://radixtouch.in/templates/admin/smart/source/full/#">
                                    <i class="icon-directions"></i> Help
                                </a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="http://radixtouch.in/templates/admin/smart/source/full/lock_screen.html">
                                    <i class="icon-lock"></i> Lock
                                </a>
                            </li>
                            <li>
                                <a href="http://radixtouch.in/templates/admin/smart/source/full/login.html">
                                    <i class="icon-logout"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end manage user dropdown -->
                    <li class="dropdown dropdown-quick-sidebar-toggler">
                        <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- start horizontal menu -->
        <div class="navbar-custom">
            <div class="hor-menu hidden-sm hidden-xs">
                <ul class="nav navbar-nav">
                    <li class="mega-menu-dropdown active open">
                        <a href="" class="dropdown-toggle"> <i class="material-icons">dashboard</i> HOME!
                            <i class="fa fa-angle-down"></i>
                            <span class="selected"></span>
                            <span class="arrow open"></span>
                        </a>
                        <ul class="dropdown-menu" style="min-width: 200px;">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-12">

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="mega-menu-dropdown ">
                        <a href="" class="dropdown-toggle"> <i class="material-icons">CATEGORY</i>
                            <i class="fa fa-angle-down"></i>
                            <span class="arrow "></span>
                        </a>
                        <ul class="dropdown-menu" style="min-width: 200px;">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="mega-menu-submenu">
                                                <li class="nav-item">
                                                    <a href="" class="nav-link "> <span class="title">Add Category</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link "> <span class="title">Manage Category</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="mega-menu-dropdown ">
                        <a href="" class="dropdown-toggle"> <i class="material-icons">AUTHOR</i>
                            <i class="fa fa-angle-down"></i>
                            <span class="arrow "></span>
                        </a>
                        <ul class="dropdown-menu" style="min-width: 200px;">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="mega-menu-submenu">
                                                <li class="nav-item">
                                                    <a href="" class="nav-link "> <span class="title">Add Author</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link "> <span class="title">Manage Author</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="mega-menu-dropdown ">
                        <a href="" class="dropdown-toggle"> <i class="material-icons">BOOKSHELVES</i>
                            <i class="fa fa-angle-down"></i>
                            <span class="arrow "></span>
                        </a>
                        <ul class="dropdown-menu" style="min-width: 200px;">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="mega-menu-submenu">
                                                <li class="nav-item">
                                                    <a href="" class="nav-link "> <span class="title">Add Bookshelf</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link "> <span class="title">Manage Bookshelves</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="mega-menu-dropdown ">
                        <a href="" class="dropdown-toggle"> <i class="material-icons">Books</i>
                            <i class="fa fa-angle-down"></i>
                            <span class="arrow "></span>
                        </a>
                        <ul class="dropdown-menu" style="min-width: 200px;">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="mega-menu-submenu">
                                                <li class="nav-item">
                                                    <a href="" class="nav-link "> <span class="title">Add Book</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link "> <span class="title">Manage Books</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="mega-menu-dropdown ">
                        <a href="" class="dropdown-toggle"> <i class="material-icons">ISSUEBOOK</i>
                            <i class="fa fa-angle-down"></i>
                            <span class="arrow "></span>
                        </a>
                        <ul class="dropdown-menu" style="min-width: 200px;">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="mega-menu-submenu">
                                                <li class="nav-item">
                                                    <a href="" class="nav-link "> <span class="title">Add Book</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="" class="nav-link "> <span class="title">Manage Books</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="mega-menu-dropdown ">
                        <a href="" class="dropdown-toggle"> <i class="material-icons">REG STUDENTS</i>
                            <i class="fa fa-angle-down"></i>
                            <span class="arrow "></span>
                        </a>
                        <ul class="dropdown-menu" style="min-width: 200px;">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="mega-menu-submenu">
                                                <li class="nav-item">
                                                    <a href="" class="nav-link "> <span class="title">Add Srudent</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                </ul>
            </div>
        </div>
        <!-- end horizontal menu -->
    </div>
    <!-- end header -->
    <!-- start color quick setting -->
    <div class="quick-setting-main">
        <button class="control-sidebar-btn btn" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></button>
        <div class="quick-setting display-none">
            <ul id="themecolors">
                <li><p class="selector-title">Main Layouts</p></li>
                <li class="complete"><div class="theme-color layout-theme">
                        <a href="" data-theme="light"><span class="head"></span><span class="cont"></span></a>
                        <a href="" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
                    </div></li>
                <li><p class="selector-title">Sidebar Color</p></li>
                <p class="selector-title">Header Brand color</p>

                <p class="selector-title">Header color</p>

            </ul>
        </div>
    </div>
    <!-- end color quick setting -->
    <!-- start page container -->
    <div class="page-container">
        <!-- start sidebar menu -->
        <!-- end sidebar menu -->
        <!-- start page content -->
        <div class="page-content-wrapper">
            <div class="page-content" style="min-height:369px">

                <!-- start widget -->
                <div class="state-overview">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-b-green">
                                <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Total Students</span>
                                    <span class="info-box-number">450</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 45%"></div>
                                    </div>
                                    <span class="progress-description">
						                    45% Increase in 28 Days
						                  </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-b-yellow">
                                <span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">New Students</span>
                                    <span class="info-box-number">155</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 40%"></div>
                                    </div>
                                    <span class="progress-description">
						                    40% Increase in 28 Days
						                  </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-b-blue">
                                <span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Total Course</span>
                                    <span class="info-box-number">52</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 85%"></div>
                                    </div>
                                    <span class="progress-description">
						                    85% Increase in 28 Days
						                  </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-b-pink">
                                <span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Fees Collection</span>
                                    <span class="info-box-number">13,921</span><span>$</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <span class="progress-description">
						                    50% Increase in 28 Days
						                  </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <!-- end widget -->
                <!-- chart start -->
                <div class="row">

                </div>
                <!-- Chart end -->
                <!-- start course list -->
                <div class="row">


                </div>
                <!-- End course list -->
                <div class="row">
                    <!-- Quick Mail start -->

                    <!-- Quick Mail end -->
                    <!-- Activity feed start -->

                    <!-- Activity feed end -->
                </div>

                @yield('content')


            <!-- end new student list -->
            </div>
        </div>
        <!-- end page content -->
        <!-- start chat sidebar -->
        <div class="chat-sidebar-container" data-close-on-body-click="false">
            <div class="chat-sidebar">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="http://radixtouch.in/templates/admin/smart/source/full/#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab"> <i class="material-icons">chat</i>Chat
                            <span class="badge badge-danger">4</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="http://radixtouch.in/templates/admin/smart/source/full/#quick_sidebar_tab_3" class="nav-link tab-icon" data-toggle="tab"> <i class="material-icons">settings</i> Settings
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- Start User Chat -->
                    <div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel" id="quick_sidebar_tab_1">
                        <div class="chat-sidebar-list">
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 552px;"><div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd" data-wrapper-class="chat-sidebar-list" data-height="503" style="height: 553px; overflow: auto; width: auto;">
                                    <div class="chat-header"><h5 class="list-heading">Online</h5></div>
                                    <ul class="media-list list-items">
                                        <li class="media"><img class="media-object" src="./Smart University _ ALL STUDENTS_files/prof3.jpg" width="35" height="35" alt="...">
                                            <i class="online dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">John Deo</h5>
                                                <div class="media-heading-sub">Spine Surgeon</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-success">5</span>
                                            </div> <img class="media-object" src="./Smart University _ ALL STUDENTS_files/prof1.jpg" width="35" height="35" alt="...">
                                            <i class="busy dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Rajesh</h5>
                                                <div class="media-heading-sub">Director</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="./Smart University _ ALL STUDENTS_files/prof5.jpg" width="35" height="35" alt="...">
                                            <i class="away dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Jacob Ryan</h5>
                                                <div class="media-heading-sub">Ortho Surgeon</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-danger">8</span>
                                            </div> <img class="media-object" src="./Smart University _ ALL STUDENTS_files/prof4.jpg" width="35" height="35" alt="...">
                                            <i class="online dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Kehn Anderson</h5>
                                                <div class="media-heading-sub">CEO</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="./Smart University _ ALL STUDENTS_files/prof2.jpg" width="35" height="35" alt="...">
                                            <i class="busy dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Sarah Smith</h5>
                                                <div class="media-heading-sub">Anaesthetics</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="./Smart University _ ALL STUDENTS_files/prof7.jpg" width="35" height="35" alt="...">
                                            <i class="online dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Vlad Cardella</h5>
                                                <div class="media-heading-sub">Cardiologist</div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="chat-header"><h5 class="list-heading">Offline</h5></div>
                                    <ul class="media-list list-items">
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-warning">4</span>
                                            </div> <img class="media-object" src="./Smart University _ ALL STUDENTS_files/prof6.jpg" width="35" height="35" alt="...">
                                            <i class="offline dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Jennifer Maklen</h5>
                                                <div class="media-heading-sub">Nurse</div>
                                                <div class="media-heading-small">Last seen 01:20 AM</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="./Smart University _ ALL STUDENTS_files/prof8.jpg" width="35" height="35" alt="...">
                                            <i class="offline dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Lina Smith</h5>
                                                <div class="media-heading-sub">Ortho Surgeon</div>
                                                <div class="media-heading-small">Last seen 11:14 PM</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-success">9</span>
                                            </div> <img class="media-object" src="./Smart University _ ALL STUDENTS_files/prof9.jpg" width="35" height="35" alt="...">
                                            <i class="offline dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Jeff Adam</h5>
                                                <div class="media-heading-sub">Compounder</div>
                                                <div class="media-heading-small">Last seen 3:31 PM</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="./Smart University _ ALL STUDENTS_files/prof10.jpg" width="35" height="35" alt="...">
                                            <i class="offline dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Anjelina Cardella</h5>
                                                <div class="media-heading-sub">Physiotherapist</div>
                                                <div class="media-heading-small">Last seen 7:45 PM</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div><div class="slimScrollBar" style="background: rgb(158, 165, 171); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 420.862px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                        </div>
                        <div class="chat-sidebar-item" data-height="NaN" style="height: 503px; overflow-y: auto;">
                            <div class="chat-sidebar-chat-user">
                                <div class="page-quick-sidemenu">
                                    <a href="javascript:;" class="chat-sidebar-back-to-list">
                                        <i class="fa fa-angle-double-left"></i>Back
                                    </a>
                                </div>
                                <div class="chat-sidebar-chat-user-messages" data-height="389" style="height: 389px; overflow-y: auto;">
                                    <div class="post out">
                                        <img class="avatar" alt="" src="./Smart University _ ALL STUDENTS_files/dp.jpg">
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:10</span>
                                            <span class="body-out"> could you send me menu icons ? </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="./Smart University _ ALL STUDENTS_files/prof5.jpg">
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:10</span>
                                            <span class="body"> please give me 10 minutes. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="./Smart University _ ALL STUDENTS_files/dp.jpg">
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:11</span>
                                            <span class="body-out"> ok fine :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="./Smart University _ ALL STUDENTS_files/prof5.jpg">
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:22</span>
                                            <span class="body">Sorry for
													the delay. i sent mail to you. let me know if it is ok or not.</span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="./Smart University _ ALL STUDENTS_files/dp.jpg">
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:26</span>
                                            <span class="body-out"> it is perfect! :) </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="./Smart University _ ALL STUDENTS_files/dp.jpg">
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:26</span>
                                            <span class="body-out"> Great! Thanks. </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="./Smart University _ ALL STUDENTS_files/prof5.jpg">
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:27</span>
                                            <span class="body"> it is my pleasure :) </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-sidebar-chat-user-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type a message here...">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn deepPink-bgcolor">
                                                <i class="fa fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End User Chat -->
                    <!-- Start Setting Panel -->
                    <div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 552px;"><div class="chat-sidebar-settings-list slimscroll-style" data-height="NaN" style="height: 553px; overflow-y: auto; overflow-x: hidden; width: auto;">
                                <div class="chat-header"><h5 class="list-heading">Layout Settings</h5></div>
                                <div class="chatpane inner-content ">
                                    <div class="settings-list">
                                        <div class="setting-item">
                                            <div class="setting-text">Sidebar Position</div>
                                            <div class="setting-set">
                                                <select class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                                    <option value="left" selected="selected">Left</option>
                                                    <option value="right">Right</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Header</div>
                                            <div class="setting-set">
                                                <select class="page-header-option form-control input-inline input-sm input-small ">
                                                    <option value="fixed" selected="selected">Fixed</option>
                                                    <option value="default">Default</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Sidebar Menu </div>
                                            <div class="setting-set">
                                                <select class="sidebar-menu-option form-control input-inline input-sm input-small ">
                                                    <option value="accordion" selected="selected">Accordion</option>
                                                    <option value="hover">Hover</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Footer</div>
                                            <div class="setting-set">
                                                <select class="page-footer-option form-control input-inline input-sm input-small ">
                                                    <option value="fixed">Fixed</option>
                                                    <option value="default" selected="selected">Default</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-header"><h5 class="list-heading">Account Settings</h5></div>
                                    <div class="settings-list">
                                        <div class="setting-item">
                                            <div class="setting-text">Notifications</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events is-checked is-upgraded" for="switch-1" data-upgraded=",MaterialSwitch,MaterialRipple">
                                                        <input type="checkbox" id="switch-1" class="mdl-switch__input" checked="">
                                                        <div class="mdl-switch__track"></div><div class="mdl-switch__thumb"><span class="mdl-switch__focus-helper"></span></div><span class="mdl-switch__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple"><span class="mdl-ripple"></span></span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Show Online</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events is-checked is-upgraded" for="switch-7" data-upgraded=",MaterialSwitch,MaterialRipple">
                                                        <input type="checkbox" id="switch-7" class="mdl-switch__input" checked="">
                                                        <div class="mdl-switch__track"></div><div class="mdl-switch__thumb"><span class="mdl-switch__focus-helper"></span></div><span class="mdl-switch__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple"><span class="mdl-ripple"></span></span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Status</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events is-checked is-upgraded" for="switch-2" data-upgraded=",MaterialSwitch,MaterialRipple">
                                                        <input type="checkbox" id="switch-2" class="mdl-switch__input" checked="">
                                                        <div class="mdl-switch__track"></div><div class="mdl-switch__thumb"><span class="mdl-switch__focus-helper"></span></div><span class="mdl-switch__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple"><span class="mdl-ripple"></span></span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">2 Steps Verification</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events is-checked is-upgraded" for="switch-3" data-upgraded=",MaterialSwitch,MaterialRipple">
                                                        <input type="checkbox" id="switch-3" class="mdl-switch__input" checked="">
                                                        <div class="mdl-switch__track"></div><div class="mdl-switch__thumb"><span class="mdl-switch__focus-helper"></span></div><span class="mdl-switch__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple"><span class="mdl-ripple"></span></span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-header"><h5 class="list-heading">General Settings</h5></div>
                                    <div class="settings-list">
                                        <div class="setting-item">
                                            <div class="setting-text">Location</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events is-checked is-upgraded" for="switch-4" data-upgraded=",MaterialSwitch,MaterialRipple">
                                                        <input type="checkbox" id="switch-4" class="mdl-switch__input" checked="">
                                                        <div class="mdl-switch__track"></div><div class="mdl-switch__thumb"><span class="mdl-switch__focus-helper"></span></div><span class="mdl-switch__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple"><span class="mdl-ripple"></span></span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Save Histry</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events is-checked is-upgraded" for="switch-5" data-upgraded=",MaterialSwitch,MaterialRipple">
                                                        <input type="checkbox" id="switch-5" class="mdl-switch__input" checked="">
                                                        <div class="mdl-switch__track"></div><div class="mdl-switch__thumb"><span class="mdl-switch__focus-helper"></span></div><span class="mdl-switch__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple"><span class="mdl-ripple"></span></span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Auto Updates</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events is-checked is-upgraded" for="switch-6" data-upgraded=",MaterialSwitch,MaterialRipple">
                                                        <input type="checkbox" id="switch-6" class="mdl-switch__input" checked="">
                                                        <div class="mdl-switch__track"></div><div class="mdl-switch__thumb"><span class="mdl-switch__focus-helper"></span></div><span class="mdl-switch__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple"><span class="mdl-ripple"></span></span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="slimScrollBar" style="background: rgb(158, 165, 171); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end chat sidebar -->
    </div>
    <!-- end page container -->
    <!-- start footer -->
    <div class="page-footer">
        <div class="page-footer-inner"> 2018 © Library Management designed by
            <a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">Raylinks</a>
        </div>
        <div class="scroll-to-top" style="display: block;">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- end footer -->
</div>
<!-- start js include path -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}" ></script>

    <script src="{{asset('css/smart/jquery.blockui.min.js')}}"></script>
    <script src="{{asset('css/smart/jquery.slimscroll.js')}}"></script>

    <script src="{{asset('css/smart/theme-color.js')}}"></script>
    <script src="{{asset('css/smart/popper.js')}}"></script>
    <script src="{{asset('css/smart/jquery.min.js')}}"></script>
<script src="{{asset('css/smart/bootstrap.min.js')}}"></script>
<script src="{{asset('css/smart/app.js')}}"></script>

<script src="{{asset('css/smart/material.min.js')}}"></script>
<script src="{{asset('css/smart/layout.js')}}"></script>
<script src="{{asset('css/smart/getmdl-select.js')}}"></script>
<script src="{{asset('css/smart/moment-with-locales.min.js')}}"></script>
<script src="{{asset('css/smart/datetimepicker.js')}}"></script>
<script src="{{asset('css/smart/bootstrap-material-datetimepicker.js')}}"></script>
<script src="{{asset('css/smart/dropzone-call.js')}}"></script>
<script src="{{asset('css/smart/dropzone.js')}}"></script>

<div class="note-popover popover in note-link-popover bottom">
    <div class="arrow">

    </div>

    <div class="popover-content note-children-container"><span><a target="_blank"></a>&nbsp;</span><div class="note-btn-group btn-group note-link"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Edit"><i class="note-icon-link"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Unlink"><i class="note-icon-chain-broken"></i></button></div></div></div><div class="note-popover popover in note-image-popover bottom">  <div class="arrow"></div>  <div class="popover-content note-children-container"><div class="note-btn-group btn-group note-imagesize"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Full"><span class="note-fontsize-10">100%</span></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Half"><span class="note-fontsize-10">50%</span></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Quarter"><span class="note-fontsize-10">25%</span></button></div><div class="note-btn-group btn-group note-float"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Left"><i class="note-icon-align-left"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Right"><i class="note-icon-align-right"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float None"><i class="note-icon-align-justify"></i></button></div><div class="note-btn-group btn-group note-remove"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Remove Image"><i class="note-icon-trash"></i></button></div></div></div><div class="note-popover popover in note-table-popover bottom">  <div class="arrow"></div>  <div class="popover-content note-children-container"><div class="note-btn-group btn-group note-add"><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1" title="" data-original-title="Add row below"><i class="note-icon-row-below"></i></button><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1" title="" data-original-title="Add row above"><i class="note-icon-row-above"></i></button><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1" title="" data-original-title="Add column left"><i class="note-icon-col-before"></i></button><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1" title="" data-original-title="Add column right"><i class="note-icon-col-after"></i></button></div><div class="note-btn-group btn-group note-delete"><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1" title="" data-original-title="Delete row"><i class="note-icon-row-remove"></i></button><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1" title="" data-original-title="Delete column"><i class="note-icon-col-remove"></i></button><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1" title="" data-original-title="Delete table"><i class="note-icon-trash"></i></button></div></div></div>
<!-- end js include path -->
</div>
</body>
</html>