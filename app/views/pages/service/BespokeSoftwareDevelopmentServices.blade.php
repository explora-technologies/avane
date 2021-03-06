 @extends('layouts.main')

 @section('content')
  <div class="col-md-12 breadcrumbs">
    <!--=== Breadcrumbs ===-->
    <div class="">
        <div class="container">
            <h1 class="pull-left">Software Development</h1>
            <!--ul class="pull-right breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Service</li>
            </ul-->
        </div><!-- /container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->
</div>

<div class="col-md-12 pad-data">
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
      Bespoke Software Development
    </div>
<div class="subtitle">
    
Our intellect and drive to deliver great solutions 
</div>
<div class="main_content">Avane is a trusted technology partner in building and delivering efficient,
 enterprise-wide, scalable bespoke business systems and solutions across several technology platform. 
 With ever increasing business competition corporations worldwide are forced to increasingly rely upon
  reduced turnaround time. Our talented product engineering team have years of industry experience acquired 
  through various business engagements and successful project execution.
</br></br>
 Our delivery model adheres and complies
   with industry standard best practices. Our global delivery model targets to rollout effective solutions always 
   on time meeting or exceeding our customer’s expectations. We engage our customers in all key phases of
    our development process thereby enabling our customers to strategically control the growth of software 
    from initiation to rollout. This helps reducing development time, increased cost savings, early ROI,
     improved productivity and zero costly surprises and challenges.
</br></br>
 Our team has experience in diverse 
     software development methodologies and models like Agile, TDD, RUP, SCRUM, XP, Waterfall etc. 
     with experience in heterogeneous environments. Out of the many Agile methods available, we find XP-Extreme 
     Programming and Scrum best suited to provide our valuable clients the maximum benefit.  Taking alone any one 
     of the models has some inherent limitations; hence, we arrived at a hybrid blend taking the benefits of both models. 
     Among the different agile practices, we have adopted Test Driven Development and Continuous Integration.  Again, any one of these practices alone limits the flexibility in some development situations. So we have adapted to the best tenets of both, a blend that is difficult for our competitors to beat.
</br></br> We understand that some of our clients are price sensitive than others. With this in mind, we offer different models of collaboration. Each model has its own advantages and has an impact on the pricing. We help you build world-class seamlessly integrated products be it cloud, mobile, web, content management, standalone back-office solutions and as well we provide testing services. 
 
</div>
</div>

</div>
</div>
@stop
