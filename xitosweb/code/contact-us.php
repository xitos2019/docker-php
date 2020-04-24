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
                        <li><a href="portfolio.php">Portfolio</a></li>                       
                        <li class="active"><a href="contact-us.php">Contact</a></li>                          
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="contact-info">
        <div class="center">                
            <h2>How to Reach Us?</h2>
			<span>
                            <?php 
                            if(isset($_GET['msg']))
                            echo "<p class ='alert alert-success'> ".$_GET['msg']." </p>";
                            ?>
                            </span>
            <p class="lead"></p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/d/embed?mid=1F2v7J_Coa_CCxgAjxhhwuAkQHCY" width="640" height="480"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>Head Office</h5>
                                    <p>Unit 5, Upminster trading Park <br>
                                    Warly street, Upminster Rm143pj, Uk</p>
                                    <p>Phone:020-82438913<br>
                                    Email Address:info@xitos.co.uk</p>
                                </address>

                                
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Drop Your Message</h2>
                <p class="lead"></p>
            </div> 
            <div class="row contact-wrap">                 
                           
                
                <form id="main" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name <b style="color:#c81a1a">*</b></label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email <b style="color:#c81a1a">*</b></label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject <b style="color:#c81a1a">*</b></label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message <b style="color:#c81a1a">*</b></label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

     <!--  footer section -->
  <?php include 'inc/footer.php';?>    
  <!-- /footer section -->
  
   <!--  java section -->
  <?php include 'inc/java.php';?>    
  <!-- /java section -->
</body>
</html>