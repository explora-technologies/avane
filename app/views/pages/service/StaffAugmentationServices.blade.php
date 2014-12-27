 @extends('layouts.main')

 @section('content')
  <div class="col-md-12 breadcrumbs">
    <!--=== Breadcrumbs ===-->
    <div class="">
        <div class="container">
            <h1 class="pull-left">Staff augmentation</h1>
           
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
      Staff Augmentation
    </div>
<div class="subtitle">
   Flex the inflexible assets 
</div>
<div class="main_content">Modern IT environment and eco-system is becoming more and more complex, so does the customer’s intricate business need and to deliver results. The challenges are never going to be the same. Such is the scenario which is more common today. Our customers need quality assistance and they need it fast in a much faster landscape. With our staff augmentation services, our customers are assured to get expert assistance. Our Staff Augmentation services provide the opportunity for our potential clients to select desired talent, skill and services needed for your every unique business requirements, short to long term, We offer certified and experienced professionals who work with you on-shore or remote to achieve your business needs. Our Staff Augmentation services relieves you from the headache and time consuming process like Hiring, Training, and all other administrative and miscellaneous overheads, yet you get a pool of well qualified, dyed-in-the-wool talent to work on your projects or products. Additionally, you will have access to a large pool of skilled multifaceted professionals across technologies to sustain and transform your business. Contact us anytime, to discuss how we could be of help. 
</div>
</div>
</div>
</div>
@stop
