<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="/" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('manager/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('manager/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="/" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('manager/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('manager/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="/admin" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li> <!-- end Dashboard Menu -->
                <li class="menu-title"><span data-key="t-menu">Pages</span></li>
                @if (!empty(Auth::guard('admins')->user()))
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarApps">
                    <i class="ri-apps-2-line"></i> <span data-key="t-apps">Profile</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ Route('admin.profile.show', ['id' => Auth::guard('admins')->user()->id]) }}" class="nav-link" data-key="t-PROFILE"> Detail </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ Route('admin.profile.show', ['id' => Auth::guard('admins')->user()->id]) }}" class="nav-link" data-key="t-PROFILE"> Setting</a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Categories</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.categories.index') }}" class="nav-link"
                                    data-key="t-horizontal">Index</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.categories.create') }}" class="nav-link"
                                    data-key="t-horizontal">Add</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarProduct" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarProduct">
                        <i class="bx bx bxs-data"></i> <span data-key="t-layouts">Products</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarProduct">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.product.index') }}" class="nav-link"
                                    data-key="t-horizontal">Index</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ Route('admin.product.create') }}" class="nav-link"
                                    data-key="t-detached">Create</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarBlogs" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarBlogs">
                        <i class="bx bx bxl-blogger"></i> <span data-key="t-layouts">Blogs</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarBlogs">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.product.index') }}" class="nav-link"
                                    data-key="t-horizontal">Index</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ Route('admin.product.create') }}" class="nav-link"
                                    data-key="t-detached">Create</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarBlogs" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarBlogs">
                        <i class="bx bx bxl-blogger"></i> <span data-key="t-layouts">Comments</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarBlogs">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.product.index') }}" class="nav-link"
                                    data-key="t-horizontal">Index</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
