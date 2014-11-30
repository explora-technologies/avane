<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
	<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,100italic,400italic,500' rel='stylesheet' type='text/css'>
	 @include('include.head')
<head>
<body>
	@include('include.navigation')
		@yield('content')
	@include('include.footer')
</body>
</html>
