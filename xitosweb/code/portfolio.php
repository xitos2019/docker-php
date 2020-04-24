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
                        <li><a href="services.php">Services</a></li>
                        <li class="active"><a href="portfolio.php">Portfolio</a></li>                       
                        <li><a href="contact-us.php">Contact</a></li>                          
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
    <section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>Portfolio</h2>
               <p class="lead"> Our Recent and Creative Work</p>
            </div>
        

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Photography</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li>
            </ul><!--/#portfolio-filter-->

            <?php   
	           $results = $mysqli->query("SELECT * FROM products");
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
                   
                    
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->
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
