 @extends('layouts.main')

 @section('content')
 <div class="col-md-12 breadcrumbs">
    <!--=== Breadcrumbs ===-->
    <div class="">
        <div class="container">
            <h1 class="pull-left">CMS</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="#">Practices</a></li>
                <li class="active">cms</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->
</div>


<div class="col-md-12 pad-data">
<div class="container">
<div class="pad-data col-md-3">
<div class="bs-example">
    <ul class="list-group">
        <a href="cms"><li  class="list-group-item {{{ (Request::is('cms') ? 'active' : '') }}}">Content Management System</li></a>
        <a href="cloud"><li  class="list-group-item {{{ (Request::is('cloud') ? 'active' : '') }}}">Cloud Services</li></a>    
        <a href="gomobile"><li  class="list-group-item {{{ (Request::is('gomobile') ? 'active' : '') }}}">Mobility</li></a>
    </ul>
</div>
</div>
<div class="col-md-89 col-sm-9 pad-data">
    <div class="main-header">
      Content Management Solutions
    </div>
<div class="subtitle">
   Invest in a system that grows with your needs.
</div>
<div class="main_content">
Enterprise Content Management (ECM) is no longer just for large enterprises. 
The open source suite provides a silo of customizable components and we combine our talent, leverage and develop 
tailored\custom solutions to the business needs of our SMB clients. We practice assembly line techniques using the 
feature rich readymade components from OpenSource for quick and efficient delivery of web to portal to content 
management solutions..
We strive to build solutions with a wide economical margin for you and deliver software that is customized according to 
your requirements, to give you the competitive edge in your area of operations.
We rely on LAMP [Linux-Apache-MySQL-PHP] to deliver web solutions for our SMB clients and we use Magento Commerce,
 osCommerce, Zen Cart, X-Cart, Typo3 CMS, Drupal, and Joomla. Since an open source content management system offers 
 flexibility and creative freedom both in the standard set of embedded modules and with high-performance architecture.
We tap onto the power of Java/J2EE for building enterprise level, high performance, and large scale content management 
solutions. For enterprise level CMS based on Java, we choose Liferay and Adobe CQ5. These tools have the power to manage 
massive web content, digital assets and have potential to manage incredible amounts of information, internal and 
external websites and a multitude media asset.
Our services includes but not limited to: 
PHP Programming.
Bespoke J2EE applications.
Web Design and Web Development
Web Applications and Enterprise Portal Development
Content Management Systems
e-commerce Applications
Web Services.
</div>
</div>
</div>
</div>
@stop