<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ ('/') }}">{{ config('app.name') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ ('/') }}">{{ Str::limit(config('app.name'), 2, '') }}</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ (request()->is('admin/dashboard')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
            </li>
            <li class="menu-header">Main Menu</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-archive"></i> <span>Master Data</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('posts.index') }}">Users</a></li>
                    <li><a class="nav-link" href="layout-top-navigation.html">Permission</a></li>
                    <li><a class="nav-link" href="layout-transparent.html">Roles</a></li>
                </ul>
            </li>
            <li class="{{ (request()->is('admin/posts*')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('posts.index') }}"><i class="fas fa-newspaper"></i> <span>Posts</span></a>
            </li>
        </ul>
    </aside>
</div>
