<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $results = $mysqli->query("select * from seo");	
	if ($results) { 	
    //fetch results set as object and output HTML
    while($obj = $results->fetch_object())
    {
	?>
	<meta name="Keywords" content="<?php echo $obj->keywords; ?> " /> 
    <meta name="description" content="<?php echo $obj->description; ?>">	
	<meta name="author" content="Xitos">
	 <?php   
    }
    }
	?>
    <title>Home | Xitos</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/globe.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

<!-- AddThis Smart Layers BEGIN -->
<!-- AddThis Smart Layers BEGIN -->
<!-- Go to http://www.addthis.com/get/smart-layers to customize -->


<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51e5ef0e75c55ac9"></script>
<script type="text/javascript">
  addthis.layers({
    'theme' : 'transparent',
    'share' : {
      'position' : 'left',
      'numPreferredServices' : 5
    }, 
    'follow' : {
      'services' : [
        {'service': 'facebook', 'id': 'pages/Web-Inventors/544811845554504'}
      ]
    },  
    'whatsnext' : {}  
  });
</script>
<!-- AddThis Smart Layers END -->
</head><!--/head-->