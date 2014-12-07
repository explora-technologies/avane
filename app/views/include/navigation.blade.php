
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<div class="col-md-12 border-black-1px">
<nav class="navbar" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="background-color:black;color:white">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
      	<img src="/img/logo2.png" style="min-width:170px;max-width:170px;height:44px" alt="" />
      </a>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="{{{ (Request::is('/') ? 'active' : '') }}}"><a href="/">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li  class="{{{ (Request::is('developmentService') ? 'active' : '') }}}"><a href="developmentService">Bespoke Software Development Services</a></li>
            <li  class="{{{ (Request::is('UserExperienceService') ? 'active' : '') }}}"><a href="UserExperienceService">User Experience Design Services</a></li>    
            <li  class="{{{ (Request::is('StaffService') ? 'active' : '') }}}"><a href="StaffService">Staff Augmentation Services</a></li>
            <li  class="{{{ (Request::is('TestingService') ? 'active' : '') }}}"><a href="TestingService">Testing and Validation Services</a></li>
            <li  class="{{{ (Request::is('GamingService') ? 'active' : '') }}}"><a href="GamingService">Gaming Services</a></li>
          </ul>
        </li >
        <!-- li  class="{{{ (Request::is('services') ? 'active' : '') }}}"><a href="services">Services</a></li -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Practices<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li  class="{{{ (Request::is('cms') ? 'active' : '') }}}"><a href="cms">Content Management System</a></li>
            <li  class="{{{ (Request::is('cloud') ? 'active' : '') }}}"><a href="cloud">Cloud Services</a></li>    
            <li  class="{{{ (Request::is('gomobile') ? 'active' : '') }}}"><a href="gomobile">Mobility</a></li>
          </ul>
        </li >
       
        <li  class="{{{ (Request::is('blog') ? 'active' : '') }}}"><a href="http://antivirus.rakeshpd.com">Blog</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li  class="{{{ (Request::is('aboutus') ? 'active' : '') }}}"><a href="aboutus">About Us</a></li>
             <li  class="{{{ (Request::is('career') ? 'active' : '') }}}"><a href="career">Career</a></li>
            <li  class="{{{ (Request::is('ManagementTeam') ? 'active' : '') }}}"><a href="ManagementTeam">Management Team</a></li>
          </ul>
        </li >

        <!-- li  class="{{{ (Request::is('contact_us') ? 'active' : '') }}}"><a href="contact_us">Contact Us</a></li-->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
</div>

