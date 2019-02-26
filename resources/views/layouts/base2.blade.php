<!DOCTYPE html>
<!-- saved from url=(0081)http://radixtouch.in/templates/admin/smart/source/dark/add_student_bootstrap.html -->
<html lang="en" class="mdl-js"><!-- BEGIN HEAD --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="description" content="Responsive Admin Template">
    <meta name="author" content="SmartUniversity">
    <title>Smart University | Bootstrap Responsive Admin Template</title>
    <!-- google font -->

    <link href="{!! asset('css/smart2/css') !!}" rel="stylesheet" type="text/css">
    <!-- icons -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{!! asset('css/smart2/material-icon.csss') !!}" rel="stylesheet" type="text/css">
    <!--bootstrap -->
    <link href="{!! asset('css/smart2/bootstrap.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/smart2/bootstrap-datepicker3.min.css') !!}" rel="stylesheet" type="text/css">
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="{!! asset('css/smart2/material.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/smart2/material_style.css') !!}">
    <!-- Theme Styles -->
    <link href="{!! asset('css/smart2//theme_style.css') !!}" rel="stylesheet" id="rt_style_components" type="text/css">
    <link href="{!! asset('css/smart2/style.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/smart2/plugins.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/smart2/formlayout.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/smart2/responsive.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/smart2/theme-color.css') !!}" rel="stylesheet" type="text/css">
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
    {{--<div class="quick-setting-main">
        <button class="control-sidebar-btn btn" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></button>
        <div class="quick-setting display-none">
            <ul id="themecolors">
                <li><p class="selector-title">Main Layouts</p></li>
                <li class="complete"><div class="theme-color layout-theme">
                        <a href="" data-theme="light"><span class="head"></span><span class="cont"></span></a>
                        <a href="" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
                    </div></li>
                <li><p class="selector-title">Sidebar Color</p></li>
                <li class="complete"><div class="theme-color sidebar-theme">
                        <a href="" data-theme="white"><span class="head"></span><span class="cont"></span></a>
                        <a href="" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
                        <a href="" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
                        <a href="" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
                        <a href="" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
                        <a href="" data-theme="green"><span class="head"></span><span class="cont"></span></a>
                        <a href="" data-theme="red"><span class="head"></span><span class="cont"></span></a>
                    </div></li>
                <li><p class="selector-title">Header Brand color</p></li>
                <li class="theme-option"><div class="theme-color logo-theme">
                        <a href="" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
                        <a href="" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
                        <a href="" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
                        <a href="" data-theme="logo-indigo"><span class="head"></span><span class="cont"></span></a>
                        <a href="" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
                        <a href="" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
                        <a href="" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
                    </div>
                </li>
                <li>
                    <p class="selector-title">Header color</p></li>
                <li class="theme-option"><div class="theme-color header-theme">
                        <a href="" data-theme="header-white"><span class="head"></span><span class="cont"></span></a>
                        <a href="" data-theme="header-dark"><span class="head"></span><span class="cont"></span></a>
                        <a href="" data-theme="header-blue"><span class="head"></span><span class="cont"></span></a>
                        <a href="" data-theme="header-indigo"><span class="head"></span><span class="cont"></span></a>
                        <a href="" data-theme="header-cyan"><span class="head"></span><span class="cont"></span></a>
                        <a href="" data-theme="header-green"><span class="head"></span><span class="cont"></span></a>
                        <a href="" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
                    </div></li>
            </ul>
        </div>
    </div>
   --}} <!-- end color quick setting -->
    <!-- start page container -->
    <div class="page-container">
        <!-- start sidebar menu -->
        <side-bar></side-bar>
        <!-- end sidebar menu -->
        <!-- start page content -->

        @yield('content')
    </div>
        <!-- end page content -->
        <!-- start chat sidebar -->
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

                    <!-- End User Chat -->
                    <!-- Start Setting Panel -->
                </div>
            </div>
        </div>
        <!-- end chat sidebar -->
    </div>
    <!-- end page container -->
    <!-- start footer -->
    <div class="page-footer">
        <div class="page-footer-inner"> 2018 © Library Management
            <a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">Raylinks</a>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- end footer -->
</div>

<!-- start js include path -->
<script src="{{asset('css/smart2/jquery.min.js')}}"></script>
<script src="{{asset('css/smart2/popper.js')}}"></script>
<script src="{{asset('css/smart2/jquery.blockui.min.js')}}"></script>
<script src=".{{asset('css/smart2/jquery.validate.min.js')}}"></script>
<script src="{{asset('css/smart2/additional-methods.min.js')}}/"></script>

<!-- bootstrap -->

<script src="{{asset('css/smart2//bootstrap.min.js')}}"></script>
<script src="{{asset('css/smart2/bootstrap-switch.min.js')}}"></script>
<script src="{{asset('css/smart2/bootstrap-datetimepicker.js')}}" charset="UTF-8"></script>
<script src="{{asset('css/smart2/bootstrap-datetimepicker-init.js')}}" charset="UTF-8"></script>

<div class="datetimepicker datetimepicker-dropdown-bottom-right dropdown-menu" style="left: 938.719px; z-index: 100009;"><div class="datetimepicker-minutes" style="display: none;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">22 April 2018</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="minute">8:00</span><span class="minute">8:05</span><span class="minute">8:10</span><span class="minute active">8:15</span><span class="minute">8:20</span><span class="minute">8:25</span><span class="minute">8:30</span><span class="minute">8:35</span><span class="minute">8:40</span><span class="minute">8:45</span><span class="minute">8:50</span><span class="minute">8:55</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-hours" style="display: none;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">22 April 2018</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="hour">0:00</span><span class="hour">1:00</span><span class="hour">2:00</span><span class="hour">3:00</span><span class="hour">4:00</span><span class="hour">5:00</span><span class="hour">6:00</span><span class="hour">7:00</span><span class="hour active">8:00</span><span class="hour">9:00</span><span class="hour">10:00</span><span class="hour">11:00</span><span class="hour">12:00</span><span class="hour">13:00</span><span class="hour">14:00</span><span class="hour">15:00</span><span class="hour">16:00</span><span class="hour">17:00</span><span class="hour">18:00</span><span class="hour">19:00</span><span class="hour">20:00</span><span class="hour">21:00</span><span class="hour">22:00</span><span class="hour">23:00</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-days" style="display: block;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">April 2018</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr><tr><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th><th class="dow">Su</th></tr></thead><tbody><tr><td class="day old">26</td><td class="day old">27</td><td class="day old">28</td><td class="day old">29</td><td class="day old">30</td><td class="day old">31</td><td class="day">1</td></tr><tr><td class="day">2</td><td class="day">3</td><td class="day">4</td><td class="day">5</td><td class="day">6</td><td class="day">7</td><td class="day">8</td></tr><tr><td class="day">9</td><td class="day">10</td><td class="day">11</td><td class="day">12</td><td class="day">13</td><td class="day">14</td><td class="day">15</td></tr><tr><td class="day">16</td><td class="day">17</td><td class="day">18</td><td class="day">19</td><td class="day">20</td><td class="day">21</td><td class="day today active">22</td></tr><tr><td class="day">23</td><td class="day">24</td><td class="day">25</td><td class="day">26</td><td class="day">27</td><td class="day">28</td><td class="day">29</td></tr><tr><td class="day">30</td><td class="day new">1</td><td class="day new">2</td><td class="day new">3</td><td class="day new">4</td><td class="day new">5</td><td class="day new">6</td></tr></tbody><tfoot><tr><th colspan="7" class="today">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">2018</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month active">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">2010-2019</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span class="year">2011</span><span class="year">2012</span><span class="year">2013</span><span class="year">2014</span><span class="year">2015</span><span class="year">2016</span><span class="year">2017</span><span class="year active">2018</span><span class="year">2019</span><span class="year old">2020</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div></div><div class="datetimepicker datetimepicker-dropdown-bottom-right dropdown-menu" style="left: 938.719px; z-index: 100019;"><div class="datetimepicker-minutes" style="display: none;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">22 April 2018</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="minute">8:00</span><span class="minute">8:05</span><span class="minute">8:10</span><span class="minute active">8:15</span><span class="minute">8:20</span><span class="minute">8:25</span><span class="minute">8:30</span><span class="minute">8:35</span><span class="minute">8:40</span><span class="minute">8:45</span><span class="minute">8:50</span><span class="minute">8:55</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-hours" style="display: none;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">22 April 2018</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="hour">0:00</span><span class="hour">1:00</span><span class="hour">2:00</span><span class="hour">3:00</span><span class="hour">4:00</span><span class="hour">5:00</span><span class="hour">6:00</span><span class="hour">7:00</span><span class="hour active">8:00</span><span class="hour">9:00</span><span class="hour">10:00</span><span class="hour">11:00</span><span class="hour">12:00</span><span class="hour">13:00</span><span class="hour">14:00</span><span class="hour">15:00</span><span class="hour">16:00</span><span class="hour">17:00</span><span class="hour">18:00</span><span class="hour">19:00</span><span class="hour">20:00</span><span class="hour">21:00</span><span class="hour">22:00</span><span class="hour">23:00</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-days" style="display: block;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">April 2018</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr><tr><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th><th class="dow">Su</th></tr></thead><tbody><tr><td class="day old">26</td><td class="day old">27</td><td class="day old">28</td><td class="day old">29</td><td class="day old">30</td><td class="day old">31</td><td class="day">1</td></tr><tr><td class="day">2</td><td class="day">3</td><td class="day">4</td><td class="day">5</td><td class="day">6</td><td class="day">7</td><td class="day">8</td></tr><tr><td class="day">9</td><td class="day">10</td><td class="day">11</td><td class="day">12</td><td class="day">13</td><td class="day">14</td><td class="day">15</td></tr><tr><td class="day">16</td><td class="day">17</td><td class="day">18</td><td class="day">19</td><td class="day">20</td><td class="day">21</td><td class="day today active">22</td></tr><tr><td class="day">23</td><td class="day">24</td><td class="day">25</td><td class="day">26</td><td class="day">27</td><td class="day">28</td><td class="day">29</td></tr><tr><td class="day">30</td><td class="day new">1</td><td class="day new">2</td><td class="day new">3</td><td class="day new">4</td><td class="day new">5</td><td class="day new">6</td></tr></tbody><tfoot><tr><th colspan="7" class="today">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">2018</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month active">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">2010-2019</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span class="year">2011</span><span class="year">2012</span><span class="year">2013</span><span class="year">2014</span><span class="year">2015</span><span class="year">2016</span><span class="year">2017</span><span class="year active">2018</span><span class="year">2019</span><span class="year old">2020</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div></div>
<!-- Common js-->
<script src="{{asset('css/smart2/app.js')}}"></script>
<script src="{{asset('css/smart2/form-validation.js')}}"></script>
<script src="{{asset('css/smart2/layout.js')}}"></script>
<script src="{{asset('css/smart2/theme-color.js')}}"></script>
<!-- Material -->
<script src="{{asset('css/smart2/material.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}" ></script>
<!-- end js include path -->

</body>
</html>