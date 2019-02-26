<template>
    <div>
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="">
                        <span class="logo-icon material-icons fa-rotate-45">school</span>
                        <span class="logo-default">Smart</span> </a>
                </div>
                <!-- logo end -->
                <ul class="nav navbar-nav navbar-left in">
                    <li><a href="" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
                </ul>

                <!-- start mobile menu -->
                <a href="javascript:" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
                <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="javascript:" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
                        <!-- start language menu -->
                        <li class="dropdown language-switch">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="" class="position-left" alt=""> English <span class="fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="deutsch"><img src="" alt=""> Deutsch</a>
                                </li>

                            </ul>
                        </li>
                        <!-- end language menu -->
                        <!-- start notification dropdown -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-bell-o"></i>
                                <span class="badge headerBadgeColor1"> 6 </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3><span class="bold">Notifications</span></h3>
                                    <span class="notification-label purple-bgcolor">New 6</span>
                                </li>
                                <li>
                                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto;">
                                        <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283" style="overflow: hidden; width: auto;">
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">just now</span>
                                                <span class="details">
                                                <span class="notification-icon circle deepPink-bgcolor"><i class="fa fa-check">

                                                </i>
                                                </span> Congratulations!. </span>
                                            </a>
                                        </li>
                                    </ul>
                                        <div class="slimScrollBar" style="background: rgb(158, 165, 171); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
                                        <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
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
                                            <a href="">
                                                <span class="photo">
                                                	<img src="" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Sarah Smith </span>
                                                	<span class="time">Just Now </span>
                                                </span>
                                                <span class="message"> Jatin I found you on LinkedIn... </span>
                                            </a>
                                        </li>

                                    </ul><div class="slimScrollBar" style="background: rgb(158, 165, 171); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                    <div class="dropdown-menu-footer">
                                        <a href=""> All Messages </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end message dropdown -->
                        <!-- start manage user dropdown -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " src="">
                                <span class="username username-hide-on-mobile"> {{ loggedInUser.name }}</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a :href="'http://localhost:8000/profile'">
                                        <i class="icon-user"></i> Edit Profile </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="icon-settings"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-directions"></i> Help
                                    </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="">
                                        <i class="icon-lock"></i> Lock
                                    </a>
                                </li>
                                <li>
                                    <a :href="'http://raysoft.com.ng/logout'">
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
        </div>

    </div>
</template>
<script>
    import {getAuthenticated} from '../Utilities/Config'
    import {getNotifi} from '../Utilities/Config'
    export default{
        data(){
            return{
                notifications:'',
                auth:{},
                loggedInUser: []
            }
        },
        created(){
            this.authentic();
            this.notifiable();
        },

        methods:{
            authentic(){
                axios.get(getAuthenticated).then((res) => {
                    this.loggedInUser = res.data
                })
            },

            notifiable(){
                axios.get(getNotifi).then((res) => {
                    this.notifications = res.data
                })
            }

        }
    }
</script>