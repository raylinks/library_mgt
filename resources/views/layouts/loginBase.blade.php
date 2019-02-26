<!DOCTYPE html>
<!-- saved from url=(0035)http://swlabs.co/edugate/login.html -->
<html lang="en" class="">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>ONLINE | LIBRARY</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LIBRARY FONT-->
    <link type="text/css" rel="stylesheet" href="{!! asset('css/edugatelogin/css') !!}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="{!! asset('css/edugatelogin/Glyphter.css') !!}">
    <!-- LIBRARY CSS-->
    <link type="text/css" rel="stylesheet" href="{!! asset('css/edugatelogin/animate.css') !!}">
    <link type="text/css" rel="stylesheet" href="{!! asset('css/edugatelogin/bootstrap.css') !!}">
    <link type="text/css" rel="stylesheet" href="{!! asset('css/edugatelogin/owl.carousel.css') !!}">
    <link type="text/css" rel="stylesheet" href="{!! asset('css/edugatelogin/jquery.selectbox.css') !!}">
    <link type="text/css" rel="stylesheet" href="{!! asset('css/edugatelogin/jquery.fancybox.css') !!}">
    <link type="text/css" rel="stylesheet" href="{!! asset('css/edugatelogin/jquery.fancybox-buttons.css') !!}">
    <link type="text/css" rel="stylesheet" href="{!! asset('css/edugatelogin/mediaelementplayer.min.css') !!}">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            'appUrl' => url('/'),
            'siteUser' => auth()->user(),
        ]); ?>
    </script>

    <!-- STYLE CSS    --><!--link(type="text/css", rel='stylesheet', href='assets/css/color-1.css', id="color-skins")-->
    <link type="text/css" rel="stylesheet" href="{!! asset('css/edugatelogin/color-1.css') !!}" id="color-skins">
    <script src="./Edugate _ Login_files/jquery-2.1.4.min.js.download"></script>
    <script src="./Edugate _ Login_files/js.cookie.js.download"></script>
    <script>if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
            $('#color-skins').attr('href', 'assets/css/' + Cookies.get('color-skin') + '.css');
        } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
            $('#color-skins').attr('href', 'assets/css/color-1.css');
        }


    </script>
    <style type="text/css">.fancybox-margin{margin-right:0px;}</style></head>
<body><!-- HEADER-->
<div id="app">
<header><!-- not include--></header>
<!-- WRAPPER-->

@yield('content')
<!-- FOOTER-->
</div>
<footer></footer>
<!-- THEME SETTING-->
<div class="theme-setting">
    <div class="theme-loading">
        <div class="theme-loading-content">
            <div class="dots-loader"></div>
        </div>
    </div>
    <a href="javascript:;" class="btn-theme-setting"><i class="fa fa-tint"></i></a>

    <div class="content-theme-setting"><h2 class="title">setting color</h2>
        <ul class="list-unstyled list-inline color-skins">
            <li data-color="color-1"></li>
            <li data-color="color-2"></li>
            <li data-color="color-3"></li>
            <li data-color="color-4"></li>
            <li data-color="color-5"></li>
            <li data-color="color-6"></li>
            <li data-color="color-7"></li>
            <li data-color="color-8"></li>
            <li data-color="color-9"></li>
            <li data-color="color-10"></li>
        </ul>
    </div>
</div>
<!-- LOADING--><!-- JAVASCRIPT LIBS-->
<script>if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
        $('.logo .header-logo img').attr('src', 'assets/images/logo-' + Cookies.get('color-skin') + '.png');
    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
        $('.logo .header-logo img').attr('src', 'assets/images/logo-color-1.png');
    }</script>
<script src="./Edugate _ Login_files/bootstrap.min.js.download"></script>
<script src="./Edugate _ Login_files/jquery-smoothscroll.js.download"></script>
<script src="./Edugate _ Login_files/owl.carousel.min.js.download"></script>
<script src="./Edugate _ Login_files/jquery.appear.js.download"></script>
<script src="./Edugate _ Login_files/jquery.countTo.js.download"></script>
<script src="./Edugate _ Login_files/wow.min.js.download"></script>
<script src="./Edugate _ Login_files/jquery.selectbox-0.2.min.js.download"></script>
<script src="./Edugate _ Login_files/jquery.fancybox.js.download"></script>
<script src="./Edugate _ Login_files/jquery.fancybox-buttons.js"></script>
<!-- MAIN JS-->
<script src="{{asset('css/edugatelogin/main.js')}}"></script>
<script src="{{ asset('js/app.js') }}"></script>

<!-- LOADING SCRIPTS FOR PAGE-->
</body></html>