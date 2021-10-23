<!-- /.sidebar-shortcuts -->
<div class="sidebar-shortcuts" id="sidebar-shortcuts">
    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
        <button class="btn btn-success"><i class="ace-icon fa fa-signal"></i> </button>
        <button class="btn btn-info"><i class="ace-icon fa fa-pencil"></i></button>
        <button class="btn btn-warning"><i class="ace-icon fa fa-users"></i></button>
        <button class="btn btn-danger"><i class="ace-icon fa fa-cogs"></i></button>
    </div>

    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
        <span class="btn btn-success"></span>
        <span class="btn btn-info"></span>
        <span class="btn btn-warning"></span>
        <span class="btn btn-danger"></span>
    </div>
</div>
<!-- /.sidebar-shortcuts -->

<ul class="nav nav-list">
    <li class="">
        <a href="#">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Bảng điều khiển </span>
        </a>
        <b class="arrow"></b>
    </li>

    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-list"></i>
            <span class="menu-text"> Slide </span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="{{route('ListOfSlide')}}">
                    <i class="menu-icon fa fa-caret-right"></i>Slide List
                </a>
            </li>
            <li class="">
                <a href="{{route('CreateSlide')}}">
                    <i class="menu-icon fa fa-caret-right"></i>Slide detail
                </a>
            </li>
        </ul>
    </li>

    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-pencil-square-o"></i>
            <span class="menu-text"> About Me </span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="{{route('ListOfAbout')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    About me list
                </a>
                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="{{route('CreateAbout')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    About me detail
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>

    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-list-alt"></i>
            <span class="menu-text"> New category</span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <b class="arrow"></b>
        <ul class="submenu">
            <li class="">
                <a href="{{route('ListOfNewCategory')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    New Category list
                </a>
                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="{{route('CreateNewCategory')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    New Category detail
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>

    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-picture-o"></i>
            <span class="menu-text"> New</span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <b class="arrow"></b>
        <ul class="submenu">
            <li class="">
                <a href="{{route('ListOfNew')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    New list
                </a>
                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="{{route('CreateNew')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    New detail
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>

    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-picture-o"></i>
            <span class="menu-text"> Menu </span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <b class="arrow"></b>
        <ul class="submenu">
            <li class="">
                <a href="{{route('ListOfMenu')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Menu list
                </a>
                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="{{route('CreateMenu')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Menu detail
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>
</ul>
</div>