<?php
ob_start();
 /* Following fucntion will start rthe session automatically after user login */
session_start();

 /* inlcuded configration file to  connect the database  */
include 'include/config.php';

 /* Session checker file included to check whether the user session exits or not */
include 'include/sessionchecker.php';

//If the form is submitted
if(isset($_POST['submit'])) {
             $subject = trim($_POST['subject']);
             $comments = trim($_POST['message']);
			 
          //If there is no error, send the email
$dbc = mysql_connect("Localhost", "root", ""); // connect to database
mysql_select_db("shop_db", $dbc);	

$sql = "SELECT `email` FROM `users`"; // select only the username field from the table "users_table"
$result = mysql_query($sql); // process the query

$username_array = array(); // start an array

while($row = mysql_fetch_array($result)){ // cycle through each record returned
  $username_array[] = $row['email']; // get the username field and add to the array above with surrounding quotes
}

$username_string = implode(",", $username_array); // implode the array to "stick together" all the usernames with a comma inbetween each

echo $username_string;
	
    if(!isset($hasError)) {
        $emailTo = $username_string; // Put your own email address here
        $body = "Subject: $subject \n\nComments:\n $comments";
		$headers = "MIME-Version: 1.0 \r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
        $headers .= 'From: Luxury Gifts info@luxurygifts.co.uk' . "\r\n" . 'Reply-To: ' . $email;
		$headers .='X-Mailer: PHP/' . phpversion();

        mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
		
		/* Error meesages */ 
$msg5 = "Email Alert Sent  to  all Users Succesfully!!!";

/* Pass the message to next page  */ 
header("Location:email.php?msg5=$msg5");
    }
}
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
							<li class="active">Email</li>
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
									Send Email
								</small>
							</h1>
						</div><!-- /.page-header -->
                    
						<div class="row">
						
						<span>
                        <?php 
                        if(isset($_GET['msg']))
                        echo "<p class ='alert alert-success'> ".$_GET['msg']." </p>";
                        ?>
                        </span>
							                 
							<form id="form1" class="stdform" method="post" action="" enctype="multipart/form-data" >
							
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Email</label>
                                <div class="controls"><input type="text" name="title" id="title" class="input-large" value="" /></div>
                            </div>
                                                       
                             <div class="par control-group">
                                    <label class="control-label" for="firstname">Content</label>
                                <div class="controls"><textarea name="content" cols="100" rows="25" > 
                                this is the test form  to send email to all users 
                                
                                <br/>
                                <p>
                                Luxury Gifts, great horton road, <br/>
                                Bradford, BD7<br/>
                                Phone:0000 111 2222<br/>
                                Email:info@luxurygifts.co.uk<br/>
                                Web:http://luxurygifts.co.uk/<br/></p>

								</textarea></div>
                            </div>
                                             
                            <p class="stdformbutton">
                            <input type="hidden" id="id" name="id" value="" />
                            <input type="submit" class="btn btn-primary" value="Send Email" />
                            </p>
						   </form>
														
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
