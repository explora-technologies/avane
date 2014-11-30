 @extends('layouts.main')

 @section('content')

<script>
        var links = ["http://www.abc.com","http://www.def.com","http://www.ghi.com"];
        var images = ["http://localhost:3000/img/p2.jpg","http://localhost:3000/img/p3.jpg","http://localhost:3000/img/p4.jpg"];
        var i = 0;
        var renew = setInterval(function(){
            if(links.length == i){
                i = 0;
            }
            else {
            document.getElementById("bannerImage").src = images[i]; 
            document.getElementById("bannerLink").href = links[i]; 
            i++;

        }
        },6000);

        </script>

<div class="col-md-12 banner border-black-1px banner-image" style="padding-top:200px;max-height:400px">
	
	<center><div class="border-black-1px" style="width:150px;height:150px;max-height:150px;max-width:150px">

		<a id="bannerLink" href="http://www.abc.com" onclick="void window.open(this.href); return false;" style="overflow: hidden;">
		<img id="bannerImage" src="http://localhost:3000/img/p1.jpg" width="100%" height="100%" alt="some text" style="border-radius:50%">
		</a>

	</div></center>
	

</div>


<div class="col-md-12" style="height:50px"></div>    
<div class="col-md-12 border-black-1px margin ">
	<div class="container">
	<div class="col-md-4 text-layout-justify border-black-1px home-block">
		<img typeof="foaf:Image" src="img/p1.jpg" alt="" height="147" width="100%">
		<span style="font-size: 20px;color: #428BCA;">Quality development Engineers</span><br/>
		Avane Technologies is an established IT service provider since 2012 with offices in India and Germany. We are specialized in developing bespoke software solutions for Mobile, Web and Standalone Back office systems to suit the business needs of our customers. Today we are a strong team and our highly skilled talent pool possess the right mix of technical competence and experience to understand our clients business needs to provide them the right solutions.
	</div>
	<div class="col-md-4 text-layout-justify border-black-1px home-block">
		<img typeof="foaf:Image" src="img/p2.jpg" alt="" height="147" width="100%">
		<span style="font-size: 20px;color: #428BCA;">24 x 7 Technical support</span><br/>	
		Avane Technologies is an established IT service provider since 2012 with offices in India and Germany. We are specialized in developing bespoke software solutions for Mobile, Web and Standalone Back office systems to suit the business needs of our customers. Today we are a strong team and our highly skilled talent pool possess the right mix of technical competence and experience to understand our clients business needs to provide them the right solutions.
	</div>
	<div class="col-md-4 text-layout-justify border-black-1px home-block">
		<img typeof="foaf:Image" src="img/p3.jpg" alt="" height="147" width="100%">
		<span style="font-size: 20px;color: #428BCA;">Digital Content Development</span><br/>
		Avane Technologies is an established IT service provider since 2012 with offices in India and Germany. We are specialized in developing bespoke software solutions for Mobile, Web and Standalone Back office systems to suit the business needs of our customers. Today we are a strong team and our highly skilled talent pool possess the right mix of technical competence and experience to understand our clients business needs to provide them the right solutions.
	</div>
</div>
</div>
<div class="col-md-12" style="height:50px"></div>

@stop
