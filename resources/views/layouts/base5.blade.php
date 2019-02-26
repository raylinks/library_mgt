<!DOCTYPE html>
<!-- saved from url=(0070)http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html -->
<html lang="en" class="mdl-js"><!-- BEGIN HEAD --><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            'appUrl' => url('/'),
            'siteUser' => auth()->user(),
        ]); ?>
    </script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="description" content="Responsive Admin Template">
    <meta name="author" content="SmartUniversity">
    <title>Online Library | </title>
    <!-- google font -->
    <link href="{!! asset('css/smart/simple-line-icons.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/smart/css') !!}" rel="stylesheet" type="text/css">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{!! asset('css/smart/simple-line-icons.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/smart/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/smart/material-icon.css') !!}" rel="stylesheet" type="text/css">
    <!--bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{!! asset('css/smart/bootstrap.min.css') !!}" rel="stylesheet" type="text/css">
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="{!! asset('css/smart/material.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/smart/material_style.css') !!}">
    <!-- Theme Styles -->
    <link href="{!! asset('css/smart/theme_style.css') !!}" rel="stylesheet" id="rt_style_components" type="text/css">
    <link href="{!! asset('css/smart/plugins.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/smart/style.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/smart/responsive.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/smart/theme-color.css') !!}" rel="stylesheet" type="text/css">
    <!-- favicon -->
    <link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico">
    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-dark dark-sidebar-color logo-dark dark-theme">
<div id="app">
    <div class="page-wrapper">
        <!-- start header -->
        <user-dropdown></user-dropdown>
        <!-- end header -->
        <!-- start color quick setting -->
        <div class="quick-setting-main">
            <button class="control-sidebar-btn btn" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></button>
            <div class="quick-setting display-none">
                <ul id="themecolors">
                    <li><p class="selector-title">Main Layouts</p></li>
                    <li class="complete"><div class="theme-color layout-theme">
                            <a href="http://radixtouch.in/templates/admin/smart/source/light/dashboard3.html" data-theme="light"><span class="head"></span><span class="cont"></span></a>
                            <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
                        </div></li>
                    <li><p class="selector-title">Sidebar Color</p></li>
                    <li class="complete"><div class="theme-color sidebar-theme">
                            <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#" data-theme="white"><span class="head"></span><span class="cont"></span></a>
                            <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
                            <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
                            <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
                            <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
                            <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#" data-theme="green"><span class="head"></span><span class="cont"></span></a>
                            <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
                        </div></li>
                    <li><p class="selector-title">Header Brand color</p></li>
                    <li class="theme-option"><div class="theme-color logo-theme">
                            <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
                            <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
                            <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
                            <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#" data-theme="logo-indigo"><span class="head"></span><span class="cont"></span></a>
                            <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
                            <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
                            <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
                        </div></li>
                    <li><p class="selector-title">Header color</p></li>
                    <li class="theme-option"><div class="theme-color header-theme">
                            <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#" data-theme="header-white"><span class="head"></span><span class="cont"></span></a>
                            <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#" data-theme="header-dark"><span class="head"></span><span class="cont"></span></a>
                            <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#" data-theme="header-blue"><span class="head"></span><span class="cont"></span></a>
                            <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#" data-theme="header-indigo"><span class="head"></span><span class="cont"></span></a>
                            <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#" data-theme="header-cyan"><span class="head"></span><span class="cont"></span></a>
                            <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#" data-theme="header-green"><span class="head"></span><span class="cont"></span></a>
                            <a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
                        </div></li>
                </ul>
            </div>
        </div>
        <!-- end color quick setting -->
        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
            <side-bar></side-bar>
            <!-- end sidebar menu -->
            <!-- start page content -->
            @yield('content')
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
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 503px;"><div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd" data-wrapper-class="chat-sidebar-list" data-height="502" style="height: 503px; overflow: hidden; width: auto;">
                                        <div class="chat-header"><h5 class="list-heading">Online</h5></div>
                                        <ul class="media-list list-items">
                                            <li class="media"><img class="media-object" src="./5555_files/prof3.jpg" width="35" height="35" alt="...">
                                                <i class="online dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">John Deo</h5>
                                                    <div class="media-heading-sub">Spine Surgeon</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-status">
                                                    <span class="badge badge-success">5</span>
                                                </div> <img class="media-object" src="./5555_files/prof1.jpg" width="35" height="35" alt="...">
                                                <i class="busy dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Rajesh</h5>
                                                    <div class="media-heading-sub">Director</div>
                                                </div>
                                            </li>
                                            <li class="media"><img class="media-object" src="./5555_files/prof5.jpg" width="35" height="35" alt="...">
                                                <i class="away dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Jacob Ryan</h5>
                                                    <div class="media-heading-sub">Ortho Surgeon</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-status">
                                                    <span class="badge badge-danger">8</span>
                                                </div> <img class="media-object" src="./5555_files/prof4.jpg" width="35" height="35" alt="...">
                                                <i class="online dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Kehn Anderson</h5>
                                                    <div class="media-heading-sub">CEO</div>
                                                </div>
                                            </li>
                                            <li class="media"><img class="media-object" src="./5555_files/prof2.jpg" width="35" height="35" alt="...">
                                                <i class="busy dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Sarah Smith</h5>
                                                    <div class="media-heading-sub">Anaesthetics</div>
                                                </div>
                                            </li>
                                            <li class="media"><img class="media-object" src="./5555_files/prof7.jpg" width="35" height="35" alt="...">
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
                                                </div> <img class="media-object" src="./5555_files/prof6.jpg" width="35" height="35" alt="...">
                                                <i class="offline dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Jennifer Maklen</h5>
                                                    <div class="media-heading-sub">Nurse</div>
                                                    <div class="media-heading-small">Last seen 01:20 AM</div>
                                                </div>
                                            </li>
                                            <li class="media"><img class="media-object" src="./5555_files/prof8.jpg" width="35" height="35" alt="...">
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
                                                </div> <img class="media-object" src="./5555_files/prof9.jpg" width="35" height="35" alt="...">
                                                <i class="offline dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Jeff Adam</h5>
                                                    <div class="media-heading-sub">Compounder</div>
                                                    <div class="media-heading-small">Last seen 3:31 PM</div>
                                                </div>
                                            </li>
                                            <li class="media"><img class="media-object" src="./5555_files/prof10.jpg" width="35" height="35" alt="...">
                                                <i class="offline dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Anjelina Cardella</h5>
                                                    <div class="media-heading-sub">Physiotherapist</div>
                                                    <div class="media-heading-small">Last seen 7:45 PM</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><div class="slimScrollBar" style="background: rgb(158, 165, 171); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 348.497px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
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
                                            <img class="avatar" alt="" src="./5555_files/dp.jpg">
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:10</span>
                                                <span class="body-out"> could you send me menu icons ? </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="./5555_files/prof5.jpg">
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:10</span>
                                                <span class="body"> please give me 10 minutes. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="./5555_files/dp.jpg">
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:11</span>
                                                <span class="body-out"> ok fine :) </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="./5555_files/prof5.jpg">
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:22</span>
                                                <span class="body">Sorry for
													the delay. i sent mail to you. let me know if it is ok or not.</span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="./5555_files/dp.jpg">
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:26</span>
                                                <span class="body-out"> it is perfect! :) </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="./5555_files/dp.jpg">
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:26</span>
                                                <span class="body-out"> Great! Thanks. </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="./5555_files/prof5.jpg">
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
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 503px;"><div class="chat-sidebar-settings-list slimscroll-style" data-height="NaN" style="height: 503px; overflow: hidden; width: auto;">
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
                <a href="" target="_top" class="makerCss">Raylinks</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
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

    <!-- end js include path -->
</div>
</body></html>