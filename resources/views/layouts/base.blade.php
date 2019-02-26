<!DOCTYPE html>
<!-- saved from url=(0070)http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html -->
<html lang="en" class="mdl-js"><!-- BEGIN HEAD --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="description" content="Responsive Admin Template">
    <meta name="author" content="SmartUniversity">
    <title>SCHOOL LIBRARY | </title>
    <!-- google font -->
    <link href="" rel="stylesheet" type="text/css">
    <!-- icons -->
    <link  href="{!! asset('css/smart/simple-line-icons.min.css') !!}" rel="stylesheet">
    <link  href="{!! asset('css/smart/css') !!}" rel="stylesheet">
    <link  href="{!! asset('css/smart/material-icon.css') !!}" rel="stylesheet">


    <link  href="{!! asset('css/smart/font-awesome.min.css') !!}" rel="stylesheet">
    <!--bootstrap -->
    <link  href="{!! asset('css/smart/bootstrap.min.css') !!}" rel="stylesheet">
    <!-- Material Design Lite CSS -->
    <link  href="{!! asset('css/smart/material.min.css') !!}" rel="stylesheet">
    <link  href="{!! asset('css/smart/material_style.css') !!}" rel="stylesheet" >
    <link href="{!! asset('css/smart/summernote.css') !!}" rel="stylesheet">
    <!-- Theme Styles -->
    <link href="{!! asset('css/smart/style.css') !!}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{!! asset('css/smart/material.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/smart/material_style.css') !!}">
    <link href="{!! asset('css/smart/style.css') !!}" rel="stylesheet" type="text/css">
    <link  href="{!! asset('css/smart/responsive.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/smart/theme_style.css') !!}" rel="stylesheet" type="text/css">

    <link href="{!! asset('css/smart/plugins.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/smart/theme-color.css') !!}" rel="stylesheet" type="text/css">

    <!-- favicon -->
    <link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico">
    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
<!-- END HEAD -->

<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
        'appUrl' => url('/'),
        'siteUser' => auth()->user(),
    ]); ?>
</script>

<!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" />
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!-- icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" />


<!--bootstrap -->


<!-- Material Design Lite CSS -->

<!-- inbox style -->

<!-- Theme Styles -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-dark dark-sidebar-color logo-dark dark-theme">
<div id="app">
<div class="page-wrapper">
    <!-- start header -->
    <user-dropdown></user-dropdown>
    <!-- end header -->
    <!-- start color quick setting -->


    <!-- end color quick setting -->
    <!-- start page container -->
    <div class="page-container">
        <!-- start sidebar menu -->
        <side-bar></side-bar>
        <!-- end sidebar menu -->
        <!-- start page content -->
        <div class="page-content-wrapper">
            <div class="page-content" style="min-height:1499px">
                <div class="page-bar">
                    <div class="page-title-breadcrumb">
                        <div class=" pull-left">
                            <div class="page-title">Dashboard</div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
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

                @yield('content')

            </div>
        </div>
        <!-- end page content -->
        <!-- start chat sidebar -->
        <div class="chat-sidebar-container" data-close-on-body-click="false">
            <div class="chat-sidebar">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab"> <i class="material-icons">chat</i>Chat
                            <span class="badge badge-danger">4</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#quick_sidebar_tab_3" class="nav-link tab-icon" data-toggle="tab"> <i class="material-icons">settings</i> Settings
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- Start User Chat -->
                    <div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel" id="quick_sidebar_tab_1">
                        <div class="chat-sidebar-list">
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 552px;"><div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd" data-wrapper-class="chat-sidebar-list" data-height="502" style="height: 552px; overflow: auto; width: auto;">
                                    <div class="chat-header"><h5 class="list-heading">Online</h5></div>

                                    <div class="chat-header"><h5 class="list-heading">Offline</h5></div>
                                    <ul class="media-list list-items">
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-warning">4</span>
                                            </div> <img class="media-object" src="./Smart University _ Black dashboard_files/prof6.jpg" width="35" height="35" alt="...">
                                            <i class="offline dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Jennifer Maklen</h5>
                                                <div class="media-heading-sub">Nurse</div>
                                                <div class="media-heading-small">Last seen 01:20 AM</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="./Smart University _ Black dashboard_files/prof8.jpg" width="35" height="35" alt="...">
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
                                            </div> <img class="media-object" src="./Smart University _ Black dashboard_files/prof9.jpg" width="35" height="35" alt="...">
                                            <i class="offline dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Jeff Adam</h5>
                                                <div class="media-heading-sub">Compounder</div>
                                                <div class="media-heading-small">Last seen 3:31 PM</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="./Smart University _ Black dashboard_files/prof10.jpg" width="35" height="35" alt="...">
                                            <i class="offline dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Anjelina Cardella</h5>
                                                <div class="media-heading-sub">Physiotherapist</div>
                                                <div class="media-heading-small">Last seen 7:45 PM</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div><div class="slimScrollBar" style="background: rgb(158, 165, 171); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 419.702px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                        </div>
                        <div class="chat-sidebar-item" data-height="NaN" style="height: 502px; overflow-y: auto;">
                            <div class="chat-sidebar-chat-user">
                                <div class="page-quick-sidemenu">
                                    <a href="javascript:;" class="chat-sidebar-back-to-list">
                                        <i class="fa fa-angle-double-left"></i>Back
                                    </a>
                                </div>
                                <div class="chat-sidebar-chat-user-messages" data-height="388" style="height: 388px; overflow-y: auto;">
                                    <div class="post out">
                                        <img class="avatar" alt="" src="./Smart University _ Black dashboard_files/dp.jpg">
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:10</span>
                                            <span class="body-out"> could you send me menu icons ? </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="./Smart University _ Black dashboard_files/prof5.jpg">
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:10</span>
                                            <span class="body"> please give me 10 minutes. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="./Smart University _ Black dashboard_files/dp.jpg">
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:11</span>
                                            <span class="body-out"> ok fine :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="./Smart University _ Black dashboard_files/prof5.jpg">
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:22</span>
                                            <span class="body">Sorry for
													the delay. i sent mail to you. let me know if it is ok or not.</span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="./Smart University _ Black dashboard_files/dp.jpg">
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:26</span>
                                            <span class="body-out"> it is perfect! :) </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="./Smart University _ Black dashboard_files/dp.jpg">
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:26</span>
                                            <span class="body-out"> Great! Thanks. </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="./Smart University _ Black dashboard_files/prof5.jpg">
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
                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 552px;"><div class="chat-sidebar-settings-list slimscroll-style" data-height="NaN" style="height: 552px; overflow-y: auto; overflow-x: hidden; width: auto;">
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
        <div class="page-footer-inner"> 2017 © Smart University Theme By
            <a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">Redstar Theme</a>
        </div>
        <div class="scroll-to-top" style="display: none;">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- end footer -->
</div>
<!-- start js include path -->
<!-- bootstrap -->
    <script src="{!! asset('css/smart/jquery.min.js')!!}"></script>
    <script src="{{asset('css/smart/jquery.blockui.min.js')}}"></script>
    <script src="{{asset('css/smart/popper.js')}}"></script>
    <script src="{{asset('css/smart/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('css/smart/popper.js')}}"></script>
    <script src="{{asset('css/smart/app.js')}}"></script>

    <script src="{!! asset('css/smart/bootstrap.min.js')!!}"></script>

    <script src="{!! asset('css/smart/bootstrap.min.js')!!}"></script>
    <script src="{{asset('css/smart/bootstrap-switch.min.js')}}"></script>
    <script src="{{asset('css/smart/jquery.sparkline.js')}}"></script>
    <script src="{{asset('css/smart/jquery.sparkline.js')}}"></script>
    <script src="{{asset('css/smart/bootstrap-switch.min.js')}}"></script>
<script src="{{asset('css/smart/utils.js')}}"></script>
<script src="{{asset('css/smart/layout.js')}}"></script>
<script src="{{asset('css/smart/theme-color.js')}}"></script>

<script src="{{asset('css/smart/material.min.js')}}"></script>

<script src="{{asset('css/smart/getmdl-select.js')}}"></script>
<script src="{{asset('css/smart/moment-with-locales.min.js')}}"></script>
<script src="{{asset('css/smart/datetimepicker.js')}}"></script>
<script src="{{asset('css/smart/bootstrap-material-datetimepicker.js')}}"></script>
<script src="{{asset('css/smart/dropzone-call.js')}}"></script>
<script src="{{asset('css/smart/dropzone.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}" ></script>

</div>

</body></html>