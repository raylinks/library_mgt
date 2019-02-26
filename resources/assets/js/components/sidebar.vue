<template>
    <div>

        <div class="sidebar-container">
            <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                <div id="remove-scroll">
                    <ul class="sidemenu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <li class="sidebar-toggler-wrapper hide">
                            <div class="sidebar-toggler">
                                <span></span>
                            </div>
                        </li>
                        <li class="sidebar-user-panel">
                            <div class="user-panel">
                                <div class="pull-left image">
                                    <img src="" class="img-circle user-img-circle" alt="User Image">
                                </div>
                                <div class="pull-left info">
                                    <p> {{ loggedInUser.name }}</p>
                                    <a href=""><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item start active open">
                            <a :href="`http://raysoft.com.ng/home`" class="nav-link nav-toggle">
                                <i class="material-icons">Home</i>
                                <span class="title"></span>

                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>

                        </li>



<span v-if="loggedInUser.role_id == 1">
                        <li class="nav-item">
                            <a href="" class="nav-link nav-toggle"> <i class="material-icons">Category</i>
                                <span class="title"></span> <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a :href="`http://raysoft.com.ng/addcategory`" class="nav-link "> <span class="title">Add category</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a :href="`http://raysoft.com.ng/managecategory`" class="nav-link "> <span class="title">Manage category</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link nav-toggle"> <i class="material-icons">Author</i>
                                <span class="title">...</span> <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a :href="`http://raysoft.com.ng/addauthor`" class="nav-link "> <span class="title">Add Author</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a :href="`http://raysoft.com.ng/manageauthor`" class="nav-link "> <span class="title">Manage Authors</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link nav-toggle"><i class="material-icons">Bookshelf</i>
                                <span class="title"></span><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a :href="`http://raysoft.com.ng/addshelf`" class="nav-link "> <span class="title">Add Bookshelve</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a :href="`http://raysoft.com.ng/manageshelf`" class="nav-link "> <span class="title">Manage Bookshelves</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link nav-toggle"> <i class="material-icons">Books</i>
                                <span class="title"></span> <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a :href="`http://raysoft.com.ng/addbooks`" class="nav-link "> <span class="title">Add Book</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a :href="`http://raysoft.com.ng/managebooks`" class="nav-link "> <span class="title">Manage Book</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link nav-toggle"> <i class="material-icons">Issue book</i>
                                <span class="title"></span> <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a :href="`http://raysoft.com.ng/issuebooks`" class="nav-link "> <span class="title">Issue Book</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a :href="`http://raysoft.com.ng/manage/issued/books`" class="nav-link "> <span class="title">Manage Issue Books</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link nav-toggle"> <i class="material-icons">Reg Students</i>
                                <span class="title"></span> <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a :href="`http://raysoft.com.ng/manage/reg/students`" class="nav-link "> <span class="title">Manage Registered<br>Students</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


</span>

                        <span v-if="loggedInUser.role_id == 2">
                        <li class="nav-item">
                            <a href="" class="nav-link nav-toggle"> <i class="material-icons">Issue book</i>
                                <span class="title"></span> <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a :href="`http://raysoft.com.ng/issuebooks`" class="nav-link "> <span class="title">Issue Book</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a :href="`http://raysoft.com.ng/manage/issued/id`"  class="nav-link "> <span class="title">Manage Issue Books</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

</span>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {getAuthenticated} from '../Utilities/Config'
    export default{
        data(){
            return{
                auth:{},
                loggedInUser: []
            }
        },
        created(){
            this.authentic();
        },

        methods:{
            authentic(){
                axios.get(getAuthenticated).then((res) => {
                    this.loggedInUser = res.data
                })
            }

        }
    }
</script>