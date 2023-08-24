<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body>
    <!-- quickview-modal -->
    @include('core.components.modal')
    <!-- mobile-menu -->
    {{-- @include('includes.mobile-menu') --}}
    <div class="site">
        <!-- mobile site__header -->
        @include('includes.mobile-site-header')
        <!-- desktop site__header -->
        @include('includes.desktop-site-header')
        <!-- site__body -->
        @include('includes.site-body')
        @include('includes.footer')
    </div>
</body>

</html>
