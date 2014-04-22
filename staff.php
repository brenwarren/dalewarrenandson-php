<?php
include('header.php'); 
?>

<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

<header>  
        <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container hidden-xs">
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">Dale Warren &amp; Son Ltd</a>
                      </div>
                      <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                          
                          <li class="active"><a href="#">Home</a></li>
                          <li class="dropdown hidden-xs">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="wood-burner-services.php">Wood Burners</a></li>
                              <li><a href="heating-services.php">Heating</a></li>
                              <li><a href="plumbing-services.php">Plumbing</a></li>
                            </ul>
                          </li>
                          <li><a href="about.php">About</a></li>
                          <li><a href="contact-and-location.php">Contact</a></li>
                          <li><a href="staff.php">Staff</a></li>
                        </ul>
                      </div><!--/.navbar-collapse -->
                </div>


                <div class="container visible-xs">
                      <div class="navbar-header">
                        
                        <a class="navbar-brand" href="http://dalewarrenandson.com">Dale Warren &amp; Son Ltd</a>
                      </div>
                      
                        <div style="margin-bottom:5px; font-size: 1.1em">
                          <a href="http://dalewarrenandson.com">Home</a>
                         <a href="about.php" style="margin-left: 10px; margin-right:10px">About</a>
                         <a href="contact-and-location.php">Contact</a>
                         <a style="margin-left:10px"href="staff.php">Staff</a>
                        </div>
                      
                </div>


        </div>
    </header>  

<h2 class="section-heading" style="text-align: center">Staff Area</h2>
<div class="well" style="padding-left:10px; padding-top:10px">
<a class="btn btn-lg heating-bg-color" style="margin-top:10px; font-size: 1.1em;" href="http://dalewarrenandson.com/webmail" target="_blank">Open Webmail</a>
<a class="btn btn-lg woodburner-bg-color" style="margin-top:10px; margin-left:10px; font-size: 1.1em;" href="calendar/index.php?action=login" target="_blank">Work Schedule</a>
</div>

<?php include('footer.php');?>


