
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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
        <li  class="{{{ (Request::is('services') ? 'active' : '') }}}"><a href="services">Services</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">References<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li  class="{{{ (Request::is('/') ? 'active' : '') }}}"><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>

        <li  class="{{{ (Request::is('aboutus') ? 'active' : '') }}}"><a href="aboutus">About Us</a></li>
        <li  class="{{{ (Request::is('contactus') ? 'active' : '') }}}"><a href="contactus">Contact Us</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
</div>

