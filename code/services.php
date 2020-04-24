<?php include 'inc/config.php';?> 
<!DOCTYPE html>
<html lang="en">
<!--  head section -->
  <?php include 'inc/head.php';?>    
  <!-- /head section -->


<body>

    <header id="header">
        <!--  topbar section -->
  <?php include 'inc/topbar.php';?>    
  <!-- /topbar section -->


        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo4.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li class="active"><a href="services.php">Services</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>                       
                        <li><a href="contact-us.php">Contact</a></li>                          
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->

    <section id="feature" class="transparent-bg">
        <div class="container">
                         
            <div class="center wow fadeInDown">
				<h2>Xitos Services</h2>
				<p class="lead"><?php   
	           $results = $mysqli->query("SELECT * FROM pages WHERE id= '3'");
                 if ($results) { 
               //fetch results set as object and output HTML
                 while($obj = $results->fetch_object())
                  {
			     ?>
                <p class="lead"><?php echo $obj->content; ?></p>
            <?php		
								
                       }
                      }
                    ?> </p>
			</div>

            <section>
        <div class="container">
            <div class="row">
                

                <div class="col-sm-6 wow fadeInDown">
                    <div class="accordion">
                        <h2>Our Services</h2>
                        <div class="panel-group" id="accordion1">
						
						<?php   
	           $results = $mysqli->query("SELECT * FROM pages WHERE id= '4'");
                 if ($results) { 
               //fetch results set as object and output HTML
                 while($obj = $results->fetch_object())
                  {
			     ?>
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  <?php echo $obj->title; ?>
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="images/services/services1.png">
                                        </div>
                                        <div class="media-body">
                                             <h4><?php echo $obj->title; ?></h4>
                                             <p><?php echo $obj->content; ?></p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>
						<?php		
								
							}
							}
							?>
							
							
							
							<?php   
	           $results = $mysqli->query("SELECT * FROM pages WHERE id= '5'");
                 if ($results) { 
               //fetch results set as object and output HTML
                 while($obj = $results->fetch_object())
                  {
			     ?>			
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  <?php echo $obj->title; ?>
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                              <div class="panel-body">										
                                            <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="images/services/services5.png">
                                        </div>
                                        <div class="media-body">
                                             <h4><?php echo $obj->title; ?></h4>
                                             <p><?php echo $obj->content; ?></p>
                                        </div>
                                  </div>
							  </div>
                            </div>
                          </div>
						  
						  <?php		
								
							}
							}
							?>
							
							<?php   
	           $results = $mysqli->query("SELECT * FROM pages WHERE id= '6'");
                 if ($results) { 
               //fetch results set as object and output HTML
                 while($obj = $results->fetch_object())
                  {
			     ?>			
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  <?php echo $obj->title; ?>
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">										
                                            <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="images/services/services3.png">
                                        </div>
                                        <div class="media-body">
                                             <h4><?php echo $obj->title; ?></h4>
                                             <p><?php echo $obj->content; ?></p>
                                        </div>
                                  </div>
							  </div>
                            </div>
                          </div>
						  
						  <?php		
								
							}
							}
							?>
							
							<?php   
	           $results = $mysqli->query("SELECT * FROM pages WHERE id= '7'");
                 if ($results) { 
               //fetch results set as object and output HTML
                 while($obj = $results->fetch_object())
                  {
			     ?>			
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                  <?php echo $obj->title; ?>
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse">
                              <div class="panel-body">										
                                            <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="images/services/services3.png">
                                        </div>
                                        <div class="media-body">
                                             <h4><?php echo $obj->title; ?></h4>
                                             <p><?php echo $obj->content; ?></p>
                                        </div>
                                  </div>
							  </div>
                            </div>
                          </div>
						  
						  <?php		
								
							}
							}
							?>

                        </div><!--/#accordion1-->
                    </div>
                </div>
				
				<div class="col-sm-6 wow fadeInDown">
                    <div class="skill">
                        <h2>Our Skills</h2>
                        <p>We cover a vast array of digital and online services making us a one stop shop for your online requirements</p>

                        <div class="progress-wrap">
                            <h3>Graphic Design</h3>
                            <div class="progress">
                              <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <span class="bar-width">85%</span>
                              </div>

                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>HTML</h3>
                            <div class="progress">
                              <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                               <span class="bar-width">95%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>CSS</h3>
                            <div class="progress">
                              <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="bar-width">80%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>Wordpress</h3>
                            <div class="progress">
                              <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="bar-width">90%</span>
                              </div>
                            </div>
                        </div>
                    </div>

                </div><!--/.col-sm-6-->

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#middle-->
       

            <div class="get-started center wow fadeInDown">
                <h2>Ready to get started</h2>
                <p class="lead"> If you have a question or need a custom quote. Please contact us by clicking the following link </p>
		<div class="request">
                    <h4><a href="contact-us.php">Request a free Quote</a></h4>
                </div>
            </div><!--/.get-started-->

            

            

        </div><!--/.container-->
    </section><!--/#feature-->


    <!--  footer section -->
  <?php include 'inc/footer.php';?>    
  <!-- /footer section -->
  
   <!--  java section -->
  <?php include 'inc/java.php';?>    
  <!-- /java section -->
</body>
</html>