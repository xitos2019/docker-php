<?php include 'inc/config.php';?> 
<!DOCTYPE html>
<html lang="en">

<!--  head section -->
  <?php include 'inc/head.php';?>    
  <!-- /head section -->

<body class="homepage">

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
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>                       
                        <li><a href="contact-us.php">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->

	<section id="main-slider" class="no-margin">
        <div class="carousel slide">
            
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Xitos develops software and IT solutions on time, on budget every time guaranteed!!!</h1>
                                    
                                    <a class="btn-slide animation animated-item-3" href="contact-us.php">GET A QUOTE</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                   <img src="images/slider/img4.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
       
    </section><!--/#main-slider-->
    

    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Welcome to Our Company!</h2>
				<?php   
	           $results = $mysqli->query("SELECT * FROM settings");
                 if ($results) { 
               //fetch results set as object and output HTML
                 while($obj = $results->fetch_object())
                  {
			     ?>
                <p class="lead"><?php echo $obj->des; ?></p>
            <?php		
								
                       }
                      }
                    ?> 
			</div>
               
        </div><!--/.container-->
    </section><!--/#feature-->

    <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Recent Works</h2>
                <p class="lead">we have extensive experience creating several web sites for large and small businesses, non-profit organizations, and personal clients</p>
            </div>

            <div class="row">
			
			<?php   
	           $results = $mysqli->query("SELECT * FROM products LIMIT 0, 04");
                 if ($results) { 
               //fetch results set as object and output HTML
                 while($obj = $results->fetch_object())
                  {
			     ?>
			
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="http://xitos.co.uk/admin/assets/images/man/<?php echo $obj->img; ?>" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#"><?php echo $obj->title; ?></a> </h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="http://xitos.co.uk/admin/assets/images/man/<?php echo $obj->img1; ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   
				<?php		
								
                       }
                      }
                    ?> 
                  
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->

    <section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Service</h2>
                <p class="lead">Our consultants work with clients to learn their unique business approach and apply our experience and technical expertise to provide the optimum technical solution for your business needs. </p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services1.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Software Development</h3>
                            <p>We have expertise in customised software applications <a href="services.php">Read More</a></p>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services5.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Web Applications</h3>
                            <p>Making your life easy with a web based application you can do your inventory control and accounting from <a href="services.php">Read More</a></p>
                        </div>
                    </div>
                </div>

				
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services3.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Custom Designed Web Sites</h3>
                            <p>we have extensive experience creating several websites <a href="services.php">Read More</a></p>
                        </div>
                    </div>
                </div>  

                                                                
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

    
    
    <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>If you have a question or need a custom quote. Please contact us by clicking <a href="contact-us.php">Here</a> or Call us on <button onclick="window.location='tel:+020-82438913';">+020-82438913</button> </h2>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->

    <!--  footer section -->
  <?php include 'inc/footer.php';?>    
  <!-- /footer section -->
  
   <!--  java section -->
  <?php include 'inc/java.php';?>    
  <!-- /java section -->

    
</body>
</html>