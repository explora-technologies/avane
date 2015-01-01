<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300italic,300,100italic,100,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	 @include('include.head')
<head>
<body>
	@include('include.navigation')
		@yield('content')
	@include('include.footer')
</body>

<script type="text/javascript">
$(function() {
    $('ul.showdiv').each(function() {
        var $select = $('<select />');

        $(this).find('a').each(function() {
            var $option = $('<option />');
            $option.attr('value', $(this).attr('href')).html($(this).html());
            $select.append($option);
        });
        $(this).replaceWith($select);
    });

    $('select').on('change', function (e) {    
    var valueSelected = this.value;    
    window.location.href = valueSelected;
});
});






</script>
</html>
