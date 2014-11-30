 @extends('layouts.main')

 @section('content')
  <div class="col-md-12 breadcrumbs">
    <!--=== Breadcrumbs ===-->
    <div class="">
        <div class="container">
            <h1 class="pull-left">Contact us</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Contact us</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->
</div>
<div class="col-md-12"> 
<article style="transform:none !important">

    </article>
</div>

<div class="col-md-12" > 
    <div class="container">
        <div class="col-md-6">
            Why choose avane ?
        </div>
        <div class="col-md-6">
            Address
        </div>
    </div>
</div>
<div class="col-md-12" > 
officials
</div>


<section id="wrapper">


<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    
<script>
function success(position) {
  var mapcanvas = document.createElement('div');
  mapcanvas.id = 'mapcontainer';
  mapcanvas.style.height = '400px';
  mapcanvas.style.width = '100%';

  document.querySelector('article').appendChild(mapcanvas);

  var coords = new google.maps.LatLng(13.1041763, 80.2767251);
  
  var options = {
    zoom: 15,
    center: coords,
    mapTypeControl: false,
    navigationControlOptions: {
        style: google.maps.NavigationControlStyle.SMALL
    },
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("mapcontainer"), options);

  var marker = new google.maps.Marker({
      position: coords,
      map: map,
      title:"Avane Global Pvt Ltd"
  });
}

if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(success);
} else {
  error('Geo Location is not supported');
}

</script>
</section>

@stop
