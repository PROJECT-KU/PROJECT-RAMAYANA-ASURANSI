@include('layout/head')
<title>@yield('title')</title>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        @include('layout/section/navbartop')
        @include('layout/section/sidebar')
        @yield('content')
        @include('layout/section/footer')
        @yield('custom-script')
    </div>
</body>

@include('layout/footer')