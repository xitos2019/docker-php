<?php
 /* Following fucntion will start rthe session automatically after user login */
session_start();

 /* inlcuded configration file to  connect the database  */
include 'include/config.php';

 /* Session checker file included to check whether the user session exits or not */
/*include 'include/sessionchecker.php';*/

?>

<!DOCTYPE html>
<html lang="en">


  <!--  header section -->
  <?php include 'include/header.php';?>    
  <!-- /header section -->

	<body class="no-skin">
		
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
							<li class="active">Products</li>
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
								Manage
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Add New Product
								</small>
							</h1>
						</div><!-- /.page-header -->
                    
						<div class="row">
							
							<div class="col-xs-12">
							
							
							<span>
   <?php 
   if(isset($_GET['msg']))
  echo "<p class ='alert alert-success'> ".$_GET['msg']." </p>";
  ?>
  </span>
                 <?php
					
	$results = $mysqli->query("select * from seo");	
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			?>
                
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" action="seo_query.php" method="post" enctype="multipart/form-data">							
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> SEO Tags </label>
										<div class="col-sm-9">
										<textarea class="col-xs-10 col-sm-5" rows="5"  id="tags" name="tags"><?php echo $obj->keywords; ?></textarea>
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description </label>

										<div class="col-sm-9">
										<textarea class="col-xs-10 col-sm-5" rows="5"  id="des" name="des"><?php echo $obj->description; ?></textarea>
											
										</div>
									</div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>

									<div class="hr hr-24"></div>
									
							</div>
							
							 <?php   
                    }
    
                    }
	               ?>
														
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
