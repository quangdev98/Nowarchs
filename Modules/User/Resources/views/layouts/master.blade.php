<!DOCTYPE html>
<html lang="en-US">
<head>
	@include("user::layouts.partials.meta")
</head>

<body class="home page-template page-template-page-templates page-template-home page-template-page-templateshome-php page page-id-43 elementor-default elementor-kit-75 elementor-page elementor-page-43">
    @include('user::layouts.partials.loadder')
    <!-- Navbar -->
    @include('user::layouts.partials.nav')
    <div class="content-wrapper">
        @include('user::layouts.partials.content_line')
        @yield('content')

        @include('user::layouts.partials.footer')
        @include("user::layouts.partials.scripts")
    </div>

</body>

</html>
