<?php
 /* Following fucntion will start rthe session automatically after user login */
session_start();
 /* inlcuded configration file to  connect the database  */
include 'include/config.php';
 /* Session checker file included to check whether the user session exits or not */
include 'include/sessionchecker.php';
?>

<!DOCTYPE html>
<html lang="en">
  <!--  header section -->
  <?php include 'include/header.php';?>    
  <!-- /header section -->

	<body class="no-skin">
    <!--  FB SDK section -->
    <?php include 'include/fbsdk.php';?>    
    <!-- /FB SDK section -->

    <!--  Navbar section -->
    <?php include 'include/navbar.php';?>    
    <!-- /Navbar section -->
		

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
			
        <!--  Sidebar section -->
        <?php include 'include/sidebar.php';?>    
        <!-- /Sidebar section -->

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						

						<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									overview &amp; stats
								</small>
							</h1>
						</div><!-- /.page-header -->
                    
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
							
							<div class="row">
									<div class="space-6"></div>
 <div class="container">
    <div class="row">
        
                <div class="panel-body">
                    <div class="row">
                                             					
						<div class="col-xs-6 col-md-6">
                          <a href="products.php" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Projects</a>
                          <a href="new_product.php" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-bookmark"></span> <br/>Add new</a>
                     
						  <a href="pages.php" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-file"></span> <br/>Pages</a>
                          <a href="messages.php" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-comment"></span> <br/>Messages</a>
					   </div>
										
					   <div class="col-xs-6 col-md-6">
					   
					                   <div class="infobox infobox-orange2">
											<div class="infobox-chart">
												<span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
											</div>
											<div class="infobox-data">
											<?php
											$con=mysqli_connect("localhost","root","","shop_db");
                                            $results4 = $mysqli->query("SELECT * FROM pageview");
                                            if ($results4) { 
                                            //fetch results set as object and output HTML
                                            while($obj = $results4->fetch_object())                                           
                                            {                                                                                           
                                            ?>
												<span class="infobox-data-number"><?php echo $obj->counts;  ?></span>
												<div class="infobox-content">pageviews</div>
											<?php
											}
											}
                                            ?>
											</div>
											<div class="badge badge-success">
												7.2%
												<i class="ace-icon fa fa-arrow-up"></i>
											</div>
										</div>
										
										<div class="infobox infobox-blue">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-twitter"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">11</span>
												<div class="infobox-content">Twitter followers</div>
											</div>

											<div class="badge badge-success">
												+32%
												<i class="ace-icon fa fa-arrow-up"></i>
											</div>
										</div>
										
										<div class="infobox infobox-blue3">
											<div class="infobox-icon">
                                            <i class="ace-icon fa fa-facebook"></i>											
											</div>
											<div class="infobox-data">
											<div class="fb-like" data-href="https://www.facebook.com/Test-Shop-1877399189205162/" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true"></div>
											<div class="infobox-content">Facebook Likes</div>
											</div>
										</div>
										
												

                                       
										<div class="infobox infobox-blue2">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-comments"></i>
											</div>

											<div class="infobox-data">
											<?php
                                            $sql3="SELECT * FROM messages";
                                            if ($result3=mysqli_query($con,$sql3))
                                            {  
                                            $rowcount=mysqli_num_rows($result3);                                             
                                            ?>
											
												<span class="infobox-data-number"><?php echo $rowcount;  ?> </span>
												<div class="infobox-content">Total Messages</div>
											<?php
											}
                                            ?>
											</div>
										</div>
										
										

										<div class="space-6"></div>

										
                          
					   </div>
					   
					   
					   
					  
                    </div>
                    
                </div>
            
        </div>
    </div>
</div>
									

									<div class="vspace-12-sm"></div>

									
							</div><!-- /.row -->

								<div class="hr hr32 hr-dotted"></div>

								
							</div><!-- /.row -->

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			 <!--  Footer section -->
             <?php include 'include/Footer.php';?>    
             <!-- /Footer section -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

  <!--  JS section -->
  <?php include 'include/js.php';?>    
  <!-- /JS section -->
	</body>
</html>
