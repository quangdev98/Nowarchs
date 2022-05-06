<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg">
<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    @include('admin::layouts.partials.meta')
    @include('admin::layouts.partials.style')
</head>
<body>
    {{--  <div id="layout-wrapper">  --}}
        @include('admin::layouts.partials.header')
        @include('admin::layouts.partials.sidebar')
        <div class="vertical-overlay"></div>
        <div class="main-content">
            <div class="page-content">
            @yield('content')
            </div>
        </div>
        @include('admin::layouts.partials.footer')
    {{--  </div>  --}}
    @include('admin::layouts.partials.scripts')
</body>
</html>
