 @extends('layouts.main')

 @section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://responsiveslides.com/responsiveslides.min.js"></script>


<script>
  $(function() {
    $(".rslides").responsiveSlides();
  });
</script>

<style type="text/css">
.rslides {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  padding: 0;
  margin: 0;
  }

.rslides li {
  -webkit-backface-visibility: hidden;
  position: absolute;
  display: none;
  width: 100%;
  left: 0;
  top: 0;
  }

.rslides li:first-child {
  position: relative;
  display: block;
  float: left;
  }

.rslides img {
  display: block;
  height: auto;
  float: left;
  width: 100%;
  border: 0;
  }
.col-md-12{
    padding-right: 0px;
    padding-left: 0px;
}
</style>
<div class="ams col-md-12" >
	<ul class="rslides">
	  <li><img src="/img/2.jpg" style="height:auto;width:100%;max-height:350px;"/></li>
	  <li><img src="/img/3.jpg" style="height:auto;width:100%;max-height:350px;"/></li>
	  <li><img src="/img/4.jpg" style="height:auto;width:100%;max-height:350px;"/></li>
	  <li><img src="/img/6.jpg" style="height:auto;width:100%;max-height:350px;"/></li>
	</ul>
</div>


<div class="col-md-12" style="height:50px"></div>    
<div class="col-md-12 border-black-1px margin ">
	<div class="container">
	<div class="col-md-4 text-layout-justify border-black-1px home-block">
	<!--	<img typeof="foaf:Image" src="img/p1.jpg" alt="" height="auto" width="100%"> -->
		<span style="font-size: 20px;color: #428BCA;">Quality development Engineers</span><br/>
		Avane Technologies is an established IT service provider since 2012 with offices in India and Germany. We are specialized in developing bespoke software solutions for Mobile, Web and Standalone Back office systems to suit the business needs of our customers. Today we are a strong team and our highly skilled talent pool possess the right mix of technical competence and experience to understand our clients business needs to provide them the right solutions.
	</div>
	<div class="col-md-4 text-layout-justify border-black-1px home-block">
	<!--	<img typeof="foaf:Image" src="img/p2.jpg" alt="" height="auto" width="100%"> -->
		<span style="font-size: 20px;color: #428BCA;">24 x 7 Technical support</span><br/>	
		Avane Technologies is an established IT service provider since 2012 with offices in India and Germany. We are specialized in developing bespoke software solutions for Mobile, Web and Standalone Back office systems to suit the business needs of our customers. Today we are a strong team and our highly skilled talent pool possess the right mix of technical competence and experience to understand our clients business needs to provide them the right solutions.
	</div>
	<div class="col-md-4 text-layout-justify border-black-1px home-block">
	<!--	<img typeof="foaf:Image" src="img/p3.jpg" alt="" height="auto" width="100%"> -->
		<span style="font-size: 20px;color: #428BCA;">Digital Content Development</span><br/>
		Avane Technologies is an established IT service provider since 2012 with offices in India and Germany. We are specialized in developing bespoke software solutions for Mobile, Web and Standalone Back office systems to suit the business needs of our customers. Today we are a strong team and our highly skilled talent pool possess the right mix of technical competence and experience to understand our clients business needs to provide them the right solutions.
	</div>
</div>
</div>
<div class="col-md-12" style="height:50px"></div>

@stop
