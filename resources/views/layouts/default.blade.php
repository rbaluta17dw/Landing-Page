<!DOCTYPE html>
<html lang="en">
<head>
	@include('includes.head')
	<title>@yield('title')</title>
</head>
<body>
	<header id="header">
		@include('includes.header')
	</header>

	@yield('content')

	<footer id="footer">
		@include('includes.footer')
	</footer>
		@yield('top')
		@include('includes.scripts')
</body>
</html>
