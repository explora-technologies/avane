 @extends('layouts.main')

 @section('content')
 <div class="col-md-12 breadcrumbs">
    <!--=== Breadcrumbs ===-->
    <div class="">
        <div class="container">
            <h1 class="pull-left">Cloud</h1>
           
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->
</div>
<div class="col-md-12 pad-data">
<div class="container">
<div class="pad-data col-md-3 col-md-push-9">
<div class="bs-example">
    <ul class="list-group showdiv">
        <a href="cms"><li  class="list-group-item {{{ (Request::is('cms') ? 'active' : '') }}}">Content Management System</li></a>
        <a href="cloud"><li  class="list-group-item {{{ (Request::is('cloud') ? 'active' : '') }}}">Cloud Services</li></a>    
        <a href="gomobile"><li  class="list-group-item {{{ (Request::is('gomobile') ? 'active' : '') }}}">Mobility</li></a>
    </ul>
    <ul class="list-group hidediv">
        <a href="cms"><li  class="list-group-item {{{ (Request::is('cms') ? 'active' : '') }}}">Content Management System</li></a>
        <a href="cloud"><li  class="list-group-item {{{ (Request::is('cloud') ? 'active' : '') }}}">Cloud Services</li></a>    
        <a href="gomobile"><li  class="list-group-item {{{ (Request::is('gomobile') ? 'active' : '') }}}">Mobility</li></a>
    </ul>
</div>
</div>
<div class="col-md-9 col-sm-9 pad-data col-md-pull-3">
    <div class="main-header">
      Cloud
    </div>
<div class="subtitle">
   Have all business friendly benefits with a low TCO. 
</div>
<div class="main_content">On Demand IT Services, with a nominal retainer fee combined with agile model task based pricing to provide our most valuable clients the much needed scalable, agile and low cost ownership software solutions. Do you wish your business to soar high and at same time achieve economy of scale? Are you concerned about the huge infrastructure or computing power your business demands? Are you concerned about investing hugely on deprecating Capex assets? Are you looking to move to scalable, on demand softwares and services, within your budget? If you answer 'Yes' to any of these questions, then we believe your businesses IT needs could be well managed and maintained within cloud environment with a significantly low TCO. Make it someone else’s problem; there is just no technology for your business to worry about. We make it simpler like your car rental, no maintenance, no repairs, no long waiting period for breakdown assistance. We take care of everything and you rightly expect to be able to jump in and drive off. You sign up, you get to use the software without worrying about installing it, maintaining it, downloading updates or keeping it secure. You do not need a server or any other additional IT investments that larger software suites would require. 
</div>
</div>
</div>
</div>
@stop