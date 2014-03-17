<!DOCTYPE html>

<?php include('header.php'); ?>

    <!--  START OF Main jumbotron header section -->
    
    <div class="jumbotron header-bg-img">
      <div class="container-fluid">

         
        <div class="tagline-box">
            <p class="header-text">Dale Warren &amp; Son</p>
            <h1 class="tagline">Registered Plumbers &amp; Heating Installers Mid-Wales</h1>
            <a class="btn btn-primary btn-primary contact-btn">Contact us</a><br>
            <h2 class="tagline" style="font-size:1.3em; font-weight: 200">Domestic &amp; Commercial</h2>
            <br>
            <h1 style="font-size: 1em; font-weight: 200">Burners (Wood <span style="color: #7f8c8d">•</span> Gas <span style="color: #7f8c8d">•</span> Oil) <span style="color: #7f8c8d">•</span> Fires <span style="color: #7f8c8d">•</span> Solar <span style="color: #7f8c8d">•</span> Biomass
              <br>Installation &amp; Modifications<br><br>
            </h1>
        </div>
          
       
      </div>
    </div>

        <!-- Service buttons -->

        <div class="container-fluid" style="margin-bottom: 20px; margin-left: 15px">

          <div class="row">
             <div class="col-xs-1 glyphicon glyphicon-fire glyphicon-lg">
              </div>
              <div class="col-sm-11" style="padding-left: 0px">
                  <p><a class="btn btn-lg btn-block woodburner-bg-color" href="#woodburners">Wood Burners</a></p>
               </div>
          </div>

          <div class="row">
              <div class="col-xs-1 glyphicon glyphicon-certificate glyphicon-lg">
              </div>
              <div class="col-sm-11" style="padding-left: 0px">
                  <p><a class="btn btn-lg btn-block heating-bg-color btn-shadow-lg"  href="#heating">Heating</a></p>
              </div>
          </div>

          <div class="row">
              <div class="col-xs-1 glyphicon glyphicon-tint glyphicon-lg">
              </div>
              <div class="col-sm-11" style="padding-left: 0px">
                  <p><a class="btn btn-lg btn-block plumbing-bg-color" href="#plumbing">Plumbing</a></p>
               </div>
          </div>

        </div> 

        <!--  END OF Main jumbotron header section -->

        <!-- START OF SERVICE AREA AND SAFETY  & QUALITY  BOXES CONTAINER  --> 

      <div class="container-fluid row" style="">

        <div class="col-md-6" style="height:230px; margin-bottom: 8px">

          <div class="left-container" style="background-color: #D2D7D3; margin-left: 2px" >
            <h3>Service Area</h3>
            <span class="col-xs-1 glyphicon glyphicon-record info-box-icon"></span>            
          </div> 

          <div class="right-container">
            <h3 class="visible-xs box-header-xs" style="background-color: #D2D7D3">Service Area</h3>

            <!-- POPOUT MODAL GOOGLE MAP -->

            <!-- Button trigger modal -->

            <button class="btn btn-bren-grey btn-block" data-toggle="modal" data-target="#myModal">
            Service Area Map
            </button>

            <!-- Modal to display google map -->

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Location &amp; approximate service area</h4>
                  </div>
                  <div class="modal-body">
                    
                    <!-- google maps resolution and zoom for screens larger than 767 px -->

                    <img class="hidden-xs" src="http://maps.googleapis.com/maps/api/staticmap?center=Newtown,Powys&zoom=09&size=540x300&maptype=roadmap&markers=color:blue%7Clabel:D|Newtown,Powys&sensor=false" alt="Map of Newtown and surrounding area">

                    <!-- google maps resolution and zoom for screens smaller than 768 px -->

                    <img class="visible-xs" src="http://maps.googleapis.com/maps/api/staticmap?center=Newtown,Powys&zoom=08&size=250x250&maptype=roadmap&markers=color:blue%7Clabel:D|Newtown,Powys&sensor=false" alt="Map of Newtown and surrounding area">

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- END OF POPOUT MODAL GOOGLE MAP -->
            

            <!--  Popover to display map *** REMOVED SINCE IT WAS NOT SO EFFECTIVE ON SMALL SCREENS***

            <button id="map-popover" type="button" style="margin-bottom: 5px" class="btn btn-default btn-block" data-container="" data-toggle="popover" data-placement="bottom" data-html="true" data-content='<img src="http://maps.googleapis.com/maps/api/staticmap?center=Newtown,Powys&zoom=08&size=250x300&maptype=roadmap&markers=color:blue%7Clabel:D|Newtown,Powys&sensor=false">'>
            Service Area Map
            </button>

            -->

            <h5>Based in Newtown, Powys, Mid Wales.
              <small><br>Also covering the following areas:</small></h5>
            <p>Llanindloes, Welshpool, Montgomery, Llanfair Caereinion, Shrewsbury.</p>

            <!-- pop over for tip on service area coverage -->

            <button id="service-area-popover" type="button" style="margin-left: 0px" class="btn btn-more-services" data-container="" data-toggle="popover" data-placement="bottom" data-html="true" data-content='Your location not quite on the map? Please check with us. We can also reach out to cover most of the rest of Powys and Mid Wales.'>
            <span class="btn-bullet-1" style="color: #FFF">•</span>Other locations?
            </button>

            <!-- END OF pop over for tip on service area coverage   -->

          </div> 

        </div>

        <!-- Safety & Quality container -->

        <div class="col-md-6" style="height:230px">

          <div class="left-container" style="background-color: #95A5A6">
            <h3>Safety &amp; Quality</h3>
            <span class="col-xs-1 glyphicon glyphicon-ok info-box-icon"></span>           
          </div> 

          <div class="right-container" style="margin-right: 2px">
            <h3 class="visible-xs box-header-xs" style="background-color: #95A5A6">Safety &amp; Quality</h3>

             <!--  START OF MODAL TO DISPLAY DETAILS FOR SAFETY AND QUALITY ORGANISATIONS  -->

            <!-- Button trigger modal -->

            <button class="btn btn-bren-grey btn-block" data-toggle="modal" data-target="#safetyModal">
            Authorised service provider
            </button>

           

            <div class="modal fade" id="safetyModal" tabindex="-1" role="dialog" aria-labelledby="safetyModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="safetyModalLabel">Safety &amp; Quality Standards</h4>
                  </div>
                  <div class="modal-body">
                    
                    <h5><strong><a title="OFTEC" href="http://oftec.org/" target="_blank">OFTEC</a></strong></h5>

                
                    <blockquote>
                      <strong>OFTEC establishes the standards for competence within the domestic oil heating and cooking industry.

                      By ensuring the quality of people and businesses working in this area OFTEC maintains standards for reputable companies and consumers alike.</strong>
                    </blockquote>
                    
                    <h5><strong><a title="Gas Safe" href="http://www.gassaferegister.co.uk/" target="_blank">Gas Safe </a></strong></h5>
                    
                    
                    <blockquote>
                      <strong>Gas Safe is the official list of gas engineers who are registered to work safely and legally on boilers, cookers, fires and all other gas appliances.</strong>
                    </blockquote>
                    
                    <h5><strong><a title="HETAS" href="http://www.hetas.co.uk/" target="_blank">HETAS</a></strong></h5>

                    <blockquote>
                      <strong>HETAS are the official body recognised by Government to approve biomass and solid fuel domestic heating appliances, fuels and services including the registration of competent installers and servicing businesses.</strong>
                    </blockquote>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

             <!--  END OF MODAL TO DISPLAY DETAILS FOR SAFETY AND QUALITY ORGANISATIONS  -->

            <div class="safety-bg-img" style=""></div>     
           
            </div>
          </div>

         

      </div>

        <!-- END OF SERVICE AREA AND SAFETY  & QUALITY  BOXES CONTAINER  --> 


      <!-- START OF Services section -->

      <div class="service-container">
              <h2 style="text-align: center">Services</h2>

                 <!--   <div class="service-info-box" style="margin-bottom: 20px">  -->

                        <div class="left-container-services woodburner-bg-color" style="">
                          
                            <h3 class="avoid-menubar">Wood Burners</h3>
                        
                          <span class="col-xs-1 glyphicon glyphicon-fire info-box-icon"></span>
                          
                        </div> 

                            <div class="right-container-services woodburner-right-container">
                          
                                  <h3 class="visible-xs service-box-header-xs woodburner-bg-color ">Wood Burners</h3>
                                  
                                      <div class="services-text-box">
                                          <div id="woodburners">
                                            <h4 class="avoid-menubar" style="text-indent: 1em; color: #7f8c8d">Wood Fires and Burners</h4>
                                          </div>
                                          <ul>
                                            <li>Sourcing and installing</li>  
                                            <li>Flue liner installation</li>
                                            <li>Chimney stack - building and repair</li>
                                            <li>Stainless steel chimney - Installation of twin wall chimneys</li>
                                            <li>Building of fire places, fire surrounds and hearths</li>
                                            <li>Connecting your wood burner to heat the house and your hot water</li>
                                            <li>Maintenance and upgrades</li>
                                          </ul>
                                          <button id="woodburners-popover" type="button" style="margin-top: 20px" class="btn btn-more-services" data-container="" data-toggle="popover" data-placement="bottom" data-html="true" data-content="Please contact us to ask if you need help with something not listed, but you feel is related. We'll let you know quickly whether we can offer the service you need or not.">
                                           
                                          <span class="btn-bullet-1" style="color: #FFB46C">•</span>More services
                                          </button>

                                      </div>
                             
                              </div> 
                        
           <!-- END OF WOODBURNERS SECTION -->
        


         
                      <div class="left-container-services heating-bg-color" style="">
                        <h3>Heating</h3>
                        <span class="col-xs-1 glyphicon glyphicon-certificate info-box-icon"></span>
                      </div> 

                  <div style="margin-top: 5px"class="right-container-services heating-right-container">

                    <h3 class="visible-xs service-box-header-xs heating-bg-color" style="">Heating</h3>
        
                        <div class="services-text-box">
                                <div id="heating">
                                  <h4 class="avoid-menubar" style="text-indent: 1em; color: #7f8c8d">General Heating</h4>
                                </div>
                                 <ul>    
                                    <li>Gas, Oil, wood or coal heating systems and fires</li>
                                    <li>Full central heating systems installation</li>
                                    <li>Heating system repair´s</li>
                                    <li>Maintenanance and upgrades</li>
                                    <li>Installation of under floor heating</li>
                                  </ul>

                                  <h4 style="text-indent: 1em; color: #7f8c8d">Solar Heating</h4>

                                  <ul>
                                    <li>Installation and maintenance of solar systems</li>
                                  </ul>

                                <button id="heating-popover" type="button" style="margin-top: 20px" class="btn btn-more-services" data-container="" data-toggle="popover" data-placement="bottom" data-html="true" data-content="Please contact us to ask if you need help with something not listed, but you feel is related. We'll let you know quickly whether we can offer the service you need or not.">
                                <span class="btn-bullet-1" style="color: #5FC073">•</span>More services
                                </button>

                        </div>
                   
                  </div>  
        <!--  END OF HEATING SECTION  -->
          

         
                      <div class="left-container-services plumbing-bg-color" style="">
                        <h3>Plumbing</h3>
                        <span class="col-xs-1 glyphicon glyphicon-tint info-box-icon"></span>
                      </div> 

                   <div class="right-container-services plumbing-right-container">

                          <h3 class="visible-xs service-box-header-xs plumbing-bg-color" style="">Plumbing</h3>
        
                          <div class="services-text-box">

                              <div id="plumbing">
                                <h4 class="avoid-menubar" style="text-indent: 1em; color: #7f8c8d">Domestic Plumbing</h4>
                              </div>

                              <h4><small>General:</small></h4>
                              <ul>
                                <li>Installation of hot and cold water systems</li>
                                <li>Hot water cylinders (vented and un-vented)</li>
                                <li>Water filters, pumps, taps, toilets, baths, showers, sinks, wet rooms,washing machines,</li>
                                <li>dishwashers, pressure sets, water tanks, ball valves, pipe work</li>
                                <li>Installation repair and maintenance of all of the above.</li>
                              </ul>
                              <h4><small>Boilers:</small></h4>
                              <ul>
                                <li>Gas and oil boiler:  Installation, commissioning, servicing and repair</li>
                              </ul>
                              <h4><small>Bathrooms:</small></h4>
                              <ul>
                                <li>Full installation of bathrooms:  Including tiling, wet rooms and power showers</li>
                              </ul>

                              <h4 style="text-indent: 1em; color: #7f8c8d">Commercial Plumbing</h4>

                              <ul>
                                <li>Installation of black iron pipe work</li>
                                <li>Instalation and maintance of plant and boiler rooms</li>
                                <li>Biomass</li>
                              </ul>

                              <button id="plumbing-popover" type="button" style="margin-top: 20px" class="btn btn-more-services" data-container="" data-toggle="popover" data-placement="bottom" data-html="true" data-content="Please contact us to ask if you need help with something not listed, but you feel is related. We'll let you know quickly whether we can offer the service you need or not.">
                              <span class="btn-bullet-1" style="color: #C2B49A">•</span>More services
                              </button>

                          </div> <!-- end of services text box -->
                   
                    </div>  
                    <!-- END OF PLUMBING SECTION -->
          
    </div>  

    <!-- END OF SERVICES SECTION -->

      <hr>

    <!-- START OF EMAIL CONTACT FORM -->

<a href="form.php">SEND MESSAGE</a>


    

      <footer>
        <p>&copy; Company 2013</p>
      </footer>
          

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
      var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src='//www.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
  </body>
</html>
