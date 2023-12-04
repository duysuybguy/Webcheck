
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Menu</span></li>
                <li class="{{ Request::routeIs('homeAdmin') ? 'active' : '' }}">
                    <a href="/"><i class="feather-grid"></i> <span>Tổng quan</span></a>
                </li>
                <li class="{{ Request::routeIs('userManagement') ? 'active' : '' }}">
                    <a href="{{route('userManagement')}}"><i class="feather-calendar"></i> <span>Quản lý người dùng</span></a>
                </li>
                <li class="{{ Request::routeIs('chapterManagerment') ? 'active' : '' }}">
                    <a href="{{route('chapterManagerment')}}"><i class="feather-calendar"></i> <span>Quản lý chapter</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
