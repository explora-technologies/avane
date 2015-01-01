 @extends('layouts.main')

 @section('content')
  <div class="col-md-12 breadcrumbs">
    <!--=== Breadcrumbs ===-->
    <div class="">
        <div class="container">
            <h1 class="pull-left">Mobility</h1>
            
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
      Go Mobile
    </div>
<div class="subtitle">
 Engage your customers directly and handle IoT and big data with ease. 
</div>
<div class="main_content">Mobile technology is revolutionizing the way businesses interact with end-users, whether the end-user is a customer, employee, business partner, or a smart device like IP enabled Air conditioner, Television or an Automobile. This flood of data traffic from mobile phones and other IP enabled fragmented devices is ever growing exponentially and organizations face a proliferation of data to store and analyze. The collection and use of such large data flows has the potential to completely transform your business models and services. To tap into this opportunity many organizations are leveraging data analytics in operations that range from optimizing the value chain and manufacturing production to improving customer relationships. To innovate and to remain competitive in this rapidly growing mobile society, we help develop comprehensive mobile applications platform for your business. We are here to help you smoothly embrace this rapidly evolving mobile landscape.  
</div>
</div>
</div>
</div>
@stop