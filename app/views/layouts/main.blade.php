<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
	 @include('include.head')
<head>
<body>
	@include('include.navigation')
		@yield('content')
	@include('include.footer')
</body>
</html>
