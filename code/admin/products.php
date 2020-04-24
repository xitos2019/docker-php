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

						
					</div>

					<div class="page-content">
						
                        <div class="nav-search" id="nav-search">
							<form class="form-search" id="form-search" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
								<span class="input-icon">
									<input type="text" placeholder="Search ..." id="search" name="search" class="nav-search-input" id="nav-search-input"  />
									<i class="ace-icon fa fa-search nav-search-icon" onclick="document.getElementById('form-search').submit();"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
						<div class="page-header">
							<h1>
								Manage
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Projects
								</small>
							</h1>
							
						</div><!-- /.page-header -->
                    
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
									<div class="hr hr32 hr-dotted"></div>
							<span>
   <?php 
   if(isset($_GET['msg']))
  echo "<p class='alert alert-success'> ".$_GET['msg']." </p>";
  ?>
  </span>
   <span>
   <?php 
   if(isset($_GET['msg1']))
  echo "<p class='alert alert-danger'> ".$_GET['msg1']." </p>";
  ?>
  </span>
  <span>
   <?php 
   if(isset($_GET['msg4']))
  echo "<p style='color:red'> ".$_GET['msg4']." </p>";
  ?>
  </span>
  <span>
   <?php 
   if(isset($_GET['msg5']))
  echo "<p style='color:red'> ".$_GET['msg5']." </p>";
  ?>
  </span>
							<div class="row">
							<?php
							
							 if(empty($_POST['search'])) 
                             { 
						      $results = $mysqli->query("SELECT * FROM products ORDER BY id DESC");
							 }
							else {
								
								$results =  $results = $mysqli->query("SELECT * FROM products WHERE category AND title LIKE '%$_POST[search]%' or category LIKE '%$_POST[search]%'");
								
							}
							
							
							
							
							
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '
							<div class="col-xs-6 col-sm-4 col-md-3" style="height:500px">
															<div class="thumbnail search-thumbnail">
																<div class="slide_img"><img src="assets/images/man/'.$obj->img.'" alt="" height="200px" /></div>

																
																<div class="caption">
																	<div class="clearfix">
																		<span class="pull-right label label-grey info-label">'.$obj->category.'</span>

																		
																	</div>
   
																	<h3 class="search-title">
																		<a href="#" class="blue">'.$obj->title.'</a>
																	</h3>
																	<p>'.$obj->des.'...</p>
																</div>
																<div class="hidden-sm hidden-xs btn-group">
															

															
															<a href="editproducts.php?id='.$obj->id.'"> 
															<button class="btn btn-xs btn-info">
																<i class="ace-icon fa fa-pencil bigger-120">Edit</i>
															</button>
                                                            </a>
															<a href="delete_product.php?id='.$obj->id.'">
															<button class="btn btn-xs btn-danger">
																<i class="ace-icon fa fa-trash-o bigger-120"> Delete</i>
															</button>
                                                            </a>
															
														</div>
															</div>
														</div>
							
							';
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
