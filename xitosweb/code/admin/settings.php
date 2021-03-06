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
							<li class="active">Settings</li>
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
									Settings
								</small>
							</h1>
						</div><!-- /.page-header -->
                    
						<div class="row">
							
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<span>
                            <?php 
                            if(isset($_GET['msg1']))
                            echo "<p class='alert alert-success''> ".$_GET['msg1']." </p>";
                            ?>
                            </span>
								
								<?php   
							   $results = $mysqli->query("SELECT * FROM settings");
								 if ($results) { 
							   //fetch results set as object and output HTML
								 while($obj = $results->fetch_object())
								  {
								 ?>
								
								<form class="form-horizontal" role="form" action="setting_update.php" method="post" enctype="multipart/form-data">
								
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Title</label>

										<div class="col-sm-9">
											<input type="text" id="title" name="title" value="<?php echo $obj->title; ?>" class="col-xs-10 col-sm-5" required />
										</div>
									</div>
									
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Admin Username  </label>

										<div class="col-sm-9">
											<input type="text" id="username" name="username" value="<?php echo $obj->username; ?>" class="col-xs-10 col-sm-5" required />
										</div>
									</div>
									
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Admin Email </label>

										<div class="col-sm-9">
											<input type="text" id="email" name="email" value="<?php echo $obj->email; ?>" class="col-xs-10 col-sm-5" required />
										</div>
									</div>
									
                                    <div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Weblink </label>

										<div class="col-sm-9">
											<input type="text" id="url" name="url" value="<?php echo $obj->url; ?>" class="col-xs-10 col-sm-5" required />
										</div>
									</div>
									
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Address </label>

										<div class="col-sm-9">
											<input type="text" id="address" name="address" value="<?php echo $obj->address; ?>" class="col-xs-10 col-sm-5" required />
										</div>
									</div>
									
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mobile </label>

										<div class="col-sm-9">
											<input type="text" id="mobile" name="mobile" value="<?php echo $obj->mobile; ?>" class="col-xs-10 col-sm-5" required />
										</div>
									</div>


									<div class="space-4"></div>
									
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Image </label>

										<div class="col-sm-9">
											<input type="file" id="filep" name="filep" value="<?php echo $obj->image; ?>" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Facebook </label>

										<div class="col-sm-9">
											<input type="text" id="facebook" name="facebook" value="<?php echo $obj->facebook; ?>" class="col-xs-10 col-sm-5" required />
										</div>
									</div>
									
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Twitter </label>

										<div class="col-sm-9">
											<input type="text" id="twitter" name="twitter" value="<?php echo $obj->twitter; ?>" class="col-xs-10 col-sm-5" required />
										</div>
									</div>
									
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Google+ </label>

										<div class="col-sm-9">
											<input type="text" id="google" name="google" value="<?php echo $obj->google; ?>" class="col-xs-10 col-sm-5" required />
										</div>
									</div>
									
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> LinkedIn </label>

										<div class="col-sm-9">
											<input type="text" id="linkedin" name="linkedin" value="<?php echo $obj->linkedin; ?>" class="col-xs-10 col-sm-5" required />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description </label>

										<div class="col-sm-9">
										<textarea class="col-xs-10 col-sm-5" rows="5"  id="des" name="des"><?php echo $obj->des; ?></textarea>
											
										</div>
									</div>

									

									<div class="space-4"></div>

									

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Update
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>

									<div class="hr hr-24"></div>
								</form>	
								<?php		
								
								   }
								  }
								?> 
							</div>
														
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
