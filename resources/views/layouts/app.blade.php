<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.fragments.head')
</head>
<body>

	<!-- navigation -->
    @include('layouts.fragments.nav')
    @include('layouts.includes.carousel')
    <!-- content -->
    @yield('content')
    <!-- scripts -->
    @include('layouts.fragments.scripts')
	@yield('script-add-on')
</body>
</html>
