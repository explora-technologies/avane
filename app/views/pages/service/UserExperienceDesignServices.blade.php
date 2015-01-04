 @extends('layouts.main')

 @section('content')
  <div class="col-md-12 breadcrumbs">
    <!--=== Breadcrumbs ===-->
    <div class="">
        <div class="container">
            <h1 class="pull-left">User experience</h1>
            
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->
</div>

<div class="col-md-12 pad-data ">
<div class="container">
<div class="col-md-3 col-md-push-9">

<div class="bs-example">
    <ul class="list-group showdiv">
                <a href="developmentService"><li  class="list-group-item {{{ (Request::is('developmentService') ? 'active' : '') }}}">Bespoke Software Development</li></a>
        <a href="UserExperienceService"><li  class="list-group-item {{{ (Request::is('UserExperienceService') ? 'active' : '') }}}">User Experience Design</li></a>
        <a href="StaffService"><li  class="list-group-item {{{ (Request::is('StaffService') ? 'active' : '') }}}">Staff Augmentation</li></a>
        <a href="TestingService"><li  class="list-group-item {{{ (Request::is('TestingService') ? 'active' : '') }}}">Testing and Validation</li></a>
        <a href="GamingService"><li  class="list-group-item {{{ (Request::is('GamingService') ? 'active' : '') }}}">Gaming</li></a>
    </ul>
    <ul class="list-group hidediv">
                <a href="developmentService"><li  class="list-group-item {{{ (Request::is('developmentService') ? 'active' : '') }}}">Bespoke Software Development</li></a>
        <a href="UserExperienceService"><li  class="list-group-item {{{ (Request::is('UserExperienceService') ? 'active' : '') }}}">User Experience Design</li></a>
        <a href="StaffService"><li  class="list-group-item {{{ (Request::is('StaffService') ? 'active' : '') }}}">Staff Augmentation</li></a>
        <a href="TestingService"><li  class="list-group-item {{{ (Request::is('TestingService') ? 'active' : '') }}}">Testing and Validation</li></a>
        <a href="GamingService"><li  class="list-group-item {{{ (Request::is('GamingService') ? 'active' : '') }}}">Gaming</li></a>
    </ul>
</div>
</div>

<div class="col-md-9 col-md-pull-3">
    <div class="main-header">
      User Experience Design Services
    </div>
<div class="subtitle">
   Together, let us define meaningful user experiences and outcomes. 
</div>
<div class="main_content">
In this era of user engagement, business houses hopes to have “two-way” communication with end users (consumers) via new devices, applications, platforms, media or social networks. But their true state in fact, is woefully one-sided and usually not to the advantage of our clients businesses.<br><br>

With the explosion of social media and smart devices, the end users (consumers) are becoming increasingly and extremely sophisticated, empowered and elusive. As a result, the dynamics that govern the relationship between brands and customers too are evolving. 
</br></br>

Functionality, connectedness, and experiences emerge as the lures for attention. For brands to compete for attention it takes something greater than mere presence in the right channels or support for most popular devices.
</br></br>

This is where we come in, our creative artists help our clients tap new opportunities and get total customer attention and engagement by providing end user a holistic experience. Today, smart and connected technology is not a luxury but an everyday commodity and consumer expectations are inflating. 
</br></br>

Kindly write to us. We help our clients strategize and define meaningful user experiences and outcomes. 
</br></br>
</div>
</div>
</div>
</div>
@stop
