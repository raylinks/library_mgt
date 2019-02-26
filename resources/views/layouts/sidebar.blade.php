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
                            <p> Kiran Patel</p>
                            <a href=""><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
                        </div>
                    </div>
                </li>
                <li class="nav-item start active open">
                    <a href="" class="nav-link nav-toggle">
                        <i class="material-icons">dashboard</i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link nav-toggle"> <i class="material-icons">CATEGORIES</i>
                        <span class="title">...</span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{route('library.addCategory')}}" class="nav-link "> <span class="title">Add category</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('library.manageCategory')}}" class="nav-link "> <span class="title">Manage Categries</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                <a href="" class="nav-link nav-toggle"> <i class="material-icons">AUTHORS</i>
                        <span class="title">...</span> <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{route('library.addAuthor')}}" class="nav-link "> <span class="title">Add Author</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('library.manageAuthor')}}" class="nav-link "> <span class="title">Manage Authors</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link nav-toggle"><i class="material-icons">BOOKSHELF</i>
                        <span class="title">...</span><span class="arrow"></span></a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{route('library.addShelf')}}" class="nav-link "> <span class="title">Add Shelf</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('library.manageShelf')}}" class="nav-link "> <span class="title">Manage Shelf</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link nav-toggle"> <i class="material-icons">BOOKS</i>
                        <span class="title">...</span> <span class="arrow"></span>
                        <span class="label label-rouded label-menu label-success">new</span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{route('library.addBooks')}}" class="nav-link "> <span class="title">Add Books</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('library.manageBooks')}}" class="nav-link "> <span class="title">Manage Books</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href=""><i class="material-icons">ISSUE BOOKS</i>
                                <span class="title">...</span> <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="{{route('library.issueBooks')}}" class="nav-link "> <span class="title">Issue New books </span>
                                    </a>
                                </li>
                                <
                                <li class="nav-item">
                                    <a href="{{route('library.manageIssuedBooks')}}" class="nav-link "> <span class="title">Manage Issued Books Assets</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link nav-toggle"> <i class="material-icons">REG STUDENTS</i>
                                <span class="title">...</span> <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="" class="nav-link "> <span class="title">All Library Assets</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="http://radixtouch.in/templates/admin/smart/source/dark/add_library.html" class="nav-link "> <span class="title">Add Library Asset</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="http://radixtouch.in/templates/admin/smart/source/dark/add_library_bootstrap.html" class="nav-link "> <span class="title">Add Asset Bootstrap</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="http://radixtouch.in/templates/admin/smart/source/dark/index.html#" class="nav-link nav-toggle"> <i class="material-icons">CHANGE PASSWORD</i>
                                <span class="title">...</span> <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="http://radixtouch.in/templates/admin/smart/source/dark/all_department.html" class="nav-link "> <span class="title">All Departments</span>
                                    </a>
                                </li>

                            </ul>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
