 @extends('layouts.main')

 @section('content')
  <div class="col-md-12 breadcrumbs">
    <!--=== Breadcrumbs ===-->
    <div class="">
        <div class="container">
            <h1 class="pull-left">Contact us</h1>
            
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->
</div>
<div class="col-md-12"> 
<article style="transform:none !important">

    </article>
</div>
<div class="col-md-12" style="height:50px"></div>
<div class="col-md-12" > 
    <div class="container">
        <div class="col-md-8 footer-padding">
             <h2 class="heading-md">Why choose Avane Global Pvt Ltd ? </h2>
        <p class="text-layout-justify">For enterprise level content management system, we use Liferay or Adobe CQ5 
          and for collaboration portals our choice is Sharepoint. We use Microsoft .NET and Sun Java J2EE framework to build complex 
          business applications for our large clients. For small to medium businesses, our preference is Symfony PHP framework for 
          web solutions. Our open source team uses Typo3 CMS when it comes to CMS driven projects and Magento commerce for internet
           shopping solutions. .</p>
        </div>
        <div class="col-md-4 footer-padding">
        <h4 class="heading-md ">Chennai</h4>
          <ul>
            <li>Avane Tech Pvt LTD</li> 
            <li>B9, Kanniah street </li>
            <li>Near Ambika Empire </li>
            <li>Vadapalani, chennai </li>
            <li>Phone: xxxxxxxxxxxxx </li>
            <li>Fax: xxxxxxxxxxxxxx </li>
            <li>Email: admin@avane.com</li>
          </ul>
            <h4 class="heading-md ">Thrissur</h4>
          <ul>
            <li>Avane Tech Pvt LTD</li> 
            <li>B9, Kanniah street </li>
            <li>Near Ambika Empire </li>
            <li>Vadapalani, chennai </li>
            <li>Phone: xxxxxxxxxxxxx </li>
            <li>Fax: xxxxxxxxxxxxxx </li>
            <li>Email: admin@avane.com</li>
          </ul>

        </div>
    </div>
</div>

<div class="col-md-12" style="height:50px"></div>

<section id="wrapper">


<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    
<script>
function success() {
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
  success()
} else {
  error('Geo Location is not supported');
}

</script>
</section>

@stop
