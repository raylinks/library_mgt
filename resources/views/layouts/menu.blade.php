
@if(Auth::user()->role_id==1)
<div class="navbar-custom">
    <div class="hor-menu hidden-sm hidden-xs">
        <ul class="nav navbar-nav">
            <li class="mega-menu-dropdown active open">
                <a href="" class="dropdown-toggle"> <i class="material-icons">dashboard</i>  Home
                    <i class="fa fa-angle-down"></i>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>

            </li>

            <li class="mega-menu-dropdown ">
                <a href="" class="dropdown-toggle"> <i class="material-icons">person</i>CATEGORY
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
                                            <a href="{{route('library.addCategory')}}" class="nav-link "> <span class="title">Add Category</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('library.manageCategory')}}" class="nav-link "> <span class="title">Manage Category</span>
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
                <a href="" class="dropdown-toggle"> <i class="material-icons">group</i>AUTHOR
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
                                            <a href="{{route('library.addAuthor')}}" class="nav-link "> <span class="title">Add Author</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('library.manageAuthor')}}" class="nav-link "> <span class="title">Manage Author</span>
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
                <a href="" class="dropdown-toggle"> <i class="material-icons">school</i>BOOKSHELVES
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
                                            <a href="{{route('library.addShelf')}}" class="nav-link "> <span class="title">Add BookShelf</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('library.manageShelf')}}" class="nav-link "> <span class="title">Manage BookShelves</span>
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
                <a href="" class="dropdown-toggle"> <i class="material-icons">local_library</i>BOOKS
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
                                            <a href="{{route('library.addBooks')}}" class="nav-link "> <span class="title">Add Book</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('library.manageBooks')}}" class="nav-link "> <span class="title">Manage Books</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            @endif
            <li class="mega-menu-dropdown ">
                <a href="" class="dropdown-toggle"> <i class="material-icons">business</i>ISSUE BOOK
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
                                            <a href="{{route('library.issueBooks')}}" class="nav-link "> <span class="title">Issue New Book</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('library.manageIssuedBooks')}}" class="nav-link "> <span class="title">Manage Issued Books</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>