 @extends('layouts.main')

 @section('content')
  <div class="col-md-12 breadcrumbs">
    <!--=== Breadcrumbs ===-->
    <div class="">
        <div class="container">
            <h1 class="pull-left">Gaming services</h1>
           
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->
</div>

<div class="col-md-12 pad-data">
<div class="container">
<div class="pad-data col-md-3">
<div class="bs-example">
    <ul class="list-group">
                <a href="developmentService"><li  class="list-group-item {{{ (Request::is('developmentService') ? 'active' : '') }}}">Bespoke Software Development</li></a>
        <a href="UserExperienceService"><li  class="list-group-item {{{ (Request::is('UserExperienceService') ? 'active' : '') }}}">User Experience Design</li></a>
        <a href="StaffService"><li  class="list-group-item {{{ (Request::is('StaffService') ? 'active' : '') }}}">Staff Augmentation</li></a>
        <a href="TestingService"><li  class="list-group-item {{{ (Request::is('TestingService') ? 'active' : '') }}}">Testing and Validation</li></a>
        <a href="GamingService"><li  class="list-group-item {{{ (Request::is('GamingService') ? 'active' : '') }}}">Gaming</li></a>
    </ul>
</div>
</div>
<div class="col-md-89 col-sm-9 pad-data">
    <div class="main-header">
      Gaming Platform
    </div>
<div class="subtitle">
   Where the winner settle
</div>
<div class="main_content">We offer highly-entertaining, top-performance, end-to-end gaming solutions to
 operators in the PC/Console gaming, e-learning, web and mobile platforms. Our service ranges from 
 conceptualization, design consulting in the early stages of game development, to testing and integration.
  We deliver top-quality gaming artifacts including graphic design, character development, animation,
   level design, programming, physics, game engine and testing.

Our core team has strong expertise in Flash, 3ds MAX, Action Script 3.0, Flash Lite, J2ME, JSR 184, FBML, 
Gamebryo and Unity3D technologies and have extensive experience in developing flash, 3d games for Mobile, PC,
 Web and Console.

We thrive by delivering always on time, meeting the needs of our clients and end-gamers using all possible resources, 
tools, technologies and skills. It is our mission to create fun and action packed next-Gen games and to entice the 
world of gamers young and old alike. We are into developing 3D game apps for Android and IPhone.
 
</div>
</div>
</div>
</div>
@stop