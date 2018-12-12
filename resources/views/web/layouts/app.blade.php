<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('web.layouts.head')
<body>
    <div class="@yield('wrapper-class')">
        @yield('content')
    </div>
    <!-- /.wp-page -->
    <!-- Optional JavaScript -->
    @include('web.layouts.js_footer')
    @stack('scripts')
</body>
</html>
