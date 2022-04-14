<nav class="navbar navbar-expand-md">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper navbar-brand valign">
            <a class="logo" href="{{ route('user.index') }}"> <img src="{{ asset('User/images/logo.png') }}" alt=""> </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span
                class="navbar-toggler-icon"><i class="ti-menu"></i></span> </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto ">
                <li id="menu-item-55"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-43 current_page_item menu-item-55 nav-item {{ Route::is('user.index') ? 'active' : '' }}">
                    <a title="Home" href="{{ route('user.index') }}" class="nav-link">Home</a>
                </li>
                <li id="menu-item-53"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53 nav-item {{ Route::is('user.about') ? 'active' : '' }}"><a
                        title="About" href="{{ route('user.about') }}" class="nav-link">About</a></li>
                <li id="menu-item-57"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-57 nav-item {{ Route::is('user.service') ? 'active' : '' }}"><a
                        title="Services" href="{{ route('user.service') }}" class="nav-link">Services</a></li>
                <li id="menu-item-56"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56 nav-item {{ Route::is('user.project.index') || Route::is('user.project.show') ? 'active' : ''}}"><a
                        title="Projects" href="{{ route('user.project.index') }}" class="nav-link">Projects</a></li>
                <li id="menu-item-58"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58 nav-item {{ Route::is('user.blog.index') || Route::is('user.blog.show') ? 'active' : ''}}"><a
                        title="Blog" href="{{ route('user.blog.index') }}" class="nav-link">Blog</a></li>
                <li id="menu-item-54"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54 nav-item {{ Route::is('user.contact') ? 'active' : '' }}"><a
                        title="Contact" href="{{ route('user.contact') }}" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
