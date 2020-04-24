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
							<li class="active">Projects</li>
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
									Add New Projects
								</small>
							</h1>
						</div><!-- /.page-header -->
                    
						<div class="row">
							
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" action="product_query.php" method="post" enctype="multipart/form-data">
								
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Title</label>

										<div class="col-sm-9">
											<input type="text" id="title" name="title" placeholder="Title" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Category </label>

										<div class="col-sm-9">
											<input type="text" id="category" name="category" placeholder="Category" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Client </label>

										<div class="col-sm-9">
											<input type="text" id="client" name="client" placeholder="Client" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Skills </label>

										<div class="col-sm-9">
											<input type="text" id="skills" name="skills" placeholder="Skills" class="col-xs-10 col-sm-5" />
										</div>
									</div>
								
								<div class="space-4"></div>
									
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date </label>

										<div class="col-sm-9">
											<input type="text" id="date" name="date" placeholder="Date" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									
								<div class="space-4"></div>
									
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Link </label>

										<div class="col-sm-9">
											<input type="text" id="link" name="link" placeholder="Link" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Image 1 </label>

										<div class="col-sm-9">
											<input type="file" id="filep" name="filep" placeholder="Image 1" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Image 2 </label>

										<div class="col-sm-9">
											<input type="file" id="filep1" name="filep1" placeholder="Image 2" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Image 3 </label>

										<div class="col-sm-9">
											<input type="file" id="filep2" name="filep2" placeholder="Image 3" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Short Description </label>

										<div class="col-sm-9">
										<textarea class="col-xs-10 col-sm-5" rows="5"  id="des" name="des"></textarea>
											
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description </label>

										<div class="col-sm-9">
										<textarea class="col-xs-10 col-sm-5" rows="5"  id="description" name="description"></textarea>
											
										</div>
									</div>

									

									<div class="space-4"></div>

									

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
