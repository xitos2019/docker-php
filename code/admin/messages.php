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
							<li class="active">Messages</li>
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
									All Messages
								</small>
							</h1>
						</div><!-- /.page-header -->
                    
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
									
							
							<div class="row">
							<span>
                            <?php 
                            if(isset($_GET['msg']))
                            echo "<p class='alert alert-success'> ".$_GET['msg']." </p>";
                            ?>
                            </span>
							<span>
                            <?php 
                            if(isset($_GET['msg1']))
                            echo "<p class='alert alert-danger''> ".$_GET['msg1']." </p>";
                            ?>
                            </span>
							<?php
							
							if(empty($_POST['search'])) 
                             { 
						      $results = $mysqli->query("SELECT * FROM messages ORDER BY id DESC");
							 }
							else {
								
								$results =  $results = $mysqli->query("SELECT * FROM messages WHERE name LIKE '%$_POST[search]%'");
								
							}							
							
							
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '
							<div class="table-detail">
															<div class="row">
																

																<div class="col-xs-12 col-sm-7">
																	<div class="space visible-xs"></div>

																	<div class="profile-user-info profile-user-info-striped">
																		

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Name </div>

																			<div class="profile-info-value">
																				<i class="ace-icon fa fa-circle light-green"></i>
																				<span>'.$obj->name.'</span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> email </div>

																			<div class="profile-info-value">
																				<span>'.$obj->email.'</span>
																			</div>
																		</div>
																		
																		<div class="profile-info-row">
																			<div class="profile-info-name"> Message </div>

																			<div class="profile-info-value">
																				<span>'.$obj->message.'</span>
																			</div>
																		</div>
																		
																		<div class="profile-info-row">
																			<div class="profile-info-name"> Date </div>

																			<div class="profile-info-value">
																				<span>'.$obj->date.'</span>
																			</div>
																		</div>
																		
																		<div class="profile-info-row">
																			<div class="profile-info-name"> Actions </div>

																			<div class="profile-info-value">
																				<span><div class="hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="delete_message.php?id='.$obj->id.'">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div></span>
																			</div>
																		</div>

																		
																	</div>
																</div>

																<div class="col-xs-12 col-sm-3">
																	
																	
																	
																	
																	
						           <form role="form" action="message_query1.php" method="post" enctype="multipart/form-data">
								
								   <input type="hidden" id="id" name="id" value="'.$obj->id.'" class="col-xs-10 col-sm-5" />
								   <input type="hidden" id="email" name="email" value="'.$obj->email.'" class="col-xs-10 col-sm-5" />
									
										<fieldset>
									<textarea name="comment" style="height:100px;"></textarea>
									    </fieldset>
									
                                   <div class="clearfix">									
								   <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="submit">
									Send Message
								   <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
								   </button>
									</div>
									</form>
																	
																	
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
