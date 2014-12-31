 @extends('layouts.main')

 @section('content')
  <div class="col-md-12 breadcrumbs">
    <!--=== Breadcrumbs ===-->
    <div class="">
        <div class="container">
            <h1 class="pull-left">Testing</h1>
            
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->
</div>

<div class="col-md-12 pad-data">
<div class="container">
<div class="pad-data col-md-3 col-md-push-9">
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
<div class="col-md-9 col-sm-9 pad-data col-md-pull-3">
    <div class="main-header">
      Bespoke Software Development
    </div>
<div class="subtitle">
   Superior QA delivered
</div>
<div class="main_content">
  Our testing practice follow  stringent and proven verification 
    and validation methodologies for Quality Assurance..

Our testing capabilities include but not limited to:

1. Unit Tests and Integration Tests

Unit Tests play a very vital role in producing quality product. They ensure that all internal components are
 built as per specification. However, the greatest advantage is that these unit tests, being automated test scripts,
  can be effectively used for Regression tests. Integration Tests are again white box tests that operate at a higher 
  level than the unit tests. For example, if Unit tests operate at the class level, then Integration tests operate at
  the module level. Integration tests often test the interfaces of subsystems or modules. We have extensive experience 
  in writing useful and effective unit  and Integration Test suites.

2. Functional Tests 
Functional tests are black box tests which verifies that all of the functionality is met. It is very common
 that functionality tests reduce to User Interface based tests. We have certified testers to conduct functionality
  level tests.

3. Regression Tests 
Regular regression testing is critical to quality assurance of software projects and products. Surprisingly,
 regression testing is not widely practiced. Many verify critical functionality once, and then assume the software 
 and applications will continue to work unless they are intentionally modified. Our team works closely with clients 
 to develop customer specific guidelines for regression system usage throughout a project’s lifecycle.  Regression 
 is closely linked with functional testing. Internally we use Unit Test suites and automated functional tests to
  ensure thorough and regular regression tests.

4. Usability Tests 
Usability testing is a continuous process to ensure that applications and web sites remain effective and user-friendly
in all usage environments. This kind of tests generally involves measuring how well test subjects respond in areas like 
efficiency, accuracy, recall, and emotional response.

5. User Acceptance Tests 
User Acceptance tests are an integral part of our testing process.  This is the final testing for requirement validation 
and is often done in a simulated environment or real-world conditions before a software application is released to end 
users. User Acceptance tests provide assurance that the delivered system meets business requirements.

6. Application Vulnerability Tests 
Security vulnerability testing is of utmost important for public web applications. Our testing processes for web
 applications include tests for the following common attacks: Directory traversal attacks, Injection flaws, 
 SQL insertion attacks, verification and validation, buffer overflow vulnerabilities, cross-site scripting attacks, 
 session & cookies management issues.

7. Load Tests 
Load Tests help determine how an application performs under load or stress. This verifies and validates key
attributes of the software, such as scalability and reliability. Performance tests help verify application
 compliance against non functional requirements and are also useful to benchmark applications. We have certified 
 staff in performance test tools like LoadRunner.

8. Automated Tests
Automated software testing plays a crucial role in build verification tests, regression tests and testing 
which include many simple and repetitive steps. Our team is well-versed with different automation tools like QTP,
 Selenium, LoadRunner etc.
</div>
</div>
</div>
</div>
@stop
