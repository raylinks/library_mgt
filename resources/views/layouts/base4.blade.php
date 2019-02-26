<!DOCTYPE html>
<!-- saved from url=(0074)http://radixtouch.in/templates/admin/smart/source/dark/all_professors.html -->
<html lang="en" class="mdl-js"><!-- BEGIN HEAD --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="description" content="Responsive Admin Template">
    <meta name="author" content="SmartUniversity">
    <title>Online Library | </title>
    <!-- google font -->
    <link href="" rel="stylesheet" type="text/css">
    <!-- icons -->
    <link  href="{!! asset('css/smart1/css') !!}" rel="stylesheet">
    <link  href="{!! asset('css/smart1/material-icon.css') !!}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" >
    <!--bootstrap -->
    <link  href="{!! asset('css/smart1/bootstrap.min.css') !!}" rel="stylesheet">
    <!-- Material Design Lite CSS -->
    <link  href="{!! asset('css/smart1/material.min.css') !!}" rel="stylesheet">
    <link  href="{!! asset('css/smart1/material_style.css') !!}" rel="stylesheet" >
    <!-- Theme Styles -->
    <link href="{!! asset('css/smart1/style.css') !!}" rel="stylesheet" type="text/css">

    <link href="{!! asset('css/smart1/style.css') !!}" rel="stylesheet" type="text/css">
    <link  href="{!! asset('css/smart1/responsive.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/smart1/theme_style.css') !!}" rel="stylesheet" id="rt_style_components" type="text/css">

    <link href="{!! asset('css/smart1/plugins.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/smart1/dataTables.bootstrap4.min.css') !!}" rel="stylesheet" type="text/css">
    <!-- data tables -->

    <!-- favicon -->
    <link rel="shortcut icon" href="">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            'appUrl' => url('/'),
            'siteUser' => auth()->user(),
        ]); ?>
    </script>
</head>
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

                <li class="theme-option"><div class="theme-color header-theme">
                        <a href="" data-theme="header-white"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="header-dark"><span class="head"></span><span class="cont"></span></a>
                        <a href="" data-theme="header-blue"><span class="head"></span><span class="cont"></span></a>
                        <a href="http://radixtouch.in/templates/admin/smart/source/dark/all_professors.html#" data-theme="header-indigo"><span class="head"></span><span class="cont"></span></a>
                        <a href="" data-theme="header-cyan"><span class="head"></span><span class="cont"></span></a>
                        <a href="http://radixtouch.in/templates/admin/smart/source/dark/all_professors.html#" data-theme="header-green"><span class="head"></span><span class="cont"></span></a>
                        <a href="http://radixtouch.in/templates/admin/smart/source/dark/all_professors.html#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
                    </div></li>
            </ul>
        </div>
    </div>
    <!-- end color quick setting -->
    <!-- start page container -->
    <div class="page-container">
        <!-- start sidebar menu -->
        <side-bar></side-bar>
        <!-- start new student list -->
        <!-- start page content -->
        <div class="page-content-wrapper">
            <div class="page-content" style="min-height:1579px">
                <div class="page-bar">
                    <div class="page-title-breadcrumb">
                        <div class=" pull-left">
                            <div class="page-title">School Library</div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li><a class="parent-item" href="">Student</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active"></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tabbable-line">
                            <!-- <ul class="nav nav-tabs">
    <li class="active">
        <a href="#tab1" data-toggle="tab"> List View </a>
    </li>
    <li>
        <a href="#tab2" data-toggle="tab"> Grid View </a>
    </li>
</ul> -->
                            <ul class="nav customtab nav-tabs" role="tablist">
                                <li class="nav-item"><a href="" class="nav-link active" data-toggle="tab">List View</a></li>
                                <li class="nav-item"><a href="" class="nav-link" data-toggle="tab">Grid View</a></li>
                            </ul>
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="chat-sidebar-container" data-close-on-body-click="false">
            <div class="chat-sidebar">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="" class="nav-link active tab-icon" data-toggle="tab"> <i class="material-icons">chat</i>Chat
                            <span class="badge badge-danger">4</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link tab-icon" data-toggle="tab"> <i class="material-icons">settings</i> Settings
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- Start User Chat -->
                    <div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel" id="quick_sidebar_tab_1">
                        <div class="chat-sidebar-list">
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 552px;"><div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd" data-wrapper-class="chat-sidebar-list" data-height="502" style="height: 552px; overflow: auto; width: auto;">
                                    <div class="chat-header"><h5 class="list-heading">Online</h5></div>
                                    <ul class="media-list list-items">
                                        <li class="media"><img class="media-object" src="" width="35" height="35" alt="...">
                                            <i class="online dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">John Deo</h5>
                                                <div class="media-heading-sub">Spine Surgeon</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-success">5</span>
                                            </div> <img class="media-object" src="" width="35" height="35" alt="...">
                                            <i class="busy dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Rajesh</h5>
                                                <div class="media-heading-sub">Director</div>
                                            </div>
                                        </li>

                                    </ul>

                                </div><div class="slimScrollBar" style="background: rgb(158, 165, 171); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 419.702px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
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
                                                        <div class="mdl-switch__track"></div>
                                                        <div class="mdl-switch__thumb"><span class="mdl-switch__focus-helper"></span></div><span class="mdl-switch__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple"><span class="mdl-ripple"></span></span></label>
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
        <div class="scroll-to-top" style="display: none;">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- end footer -->
</div>

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


</body></html>