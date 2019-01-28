<?php

	$news_sub = news_sub($conn);
	$insights = insights($conn);
 ?>


<!DOCTYPE HTML>
<html>
<head>
<title> Arthut| <?php echo $page_title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Art, arthut, culture, articles" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<!--start-main-->
           <div class="header">
		        <div class="header-top">
			        <div class="container">
								<div class="logo">
									<a href="index.html"> <img src="images/logo.png" width="100" height="50" alt=""> </a>
		                        </div>

						<div class="social">
							<ul>
								<li><a href="https://facebook.com/arthutng" class="facebook"> </a></li>
								<li><a href="https://twitter.com/arthutng" class="facebook twitter"> </a></li>
								<!-- <li><a href="https://" class="instagram"> </a></li> -->
								<!-- <li><a href="#" class="facebook in"> </a></li> -->

								<!-- <li><a href="#" class="facebook yout"> </a></li> -->
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>

<!--head-bottom-->
<div class="head-bottom">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index">Home</a></li>
						<!-- <li><a  <?php// echo 'href=blog?data=blog'; ?>>Articles</a></li> -->
						<li class="dropdown">
										<a <?php echo 'href=blog?data=insight'; ?> class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Features <span class="caret"></span></a>
									 <ul class="dropdown-menu">
											<?php foreach ($insights as $key => $value) {
												extract($value);
										 ?>
								 <li><a <?php echo 'href=blog?hid='.$hash_id.'&data=insight'; ?>>		<?php echo $package_name; ?> </a></li>
								 <?php } ?>
										</ul>
									</li>
									<li class=""><a href="contact">Submit</a></li>
									<li class=""><a href="contact">Contact</a></li>
						<li class="dropdown">
							<a <?php echo 'href=blog?data=news'; ?> class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<?php foreach ($news_sub as $key => $value) {
									extract($value);
								?>
							<li><a <?php echo 'href=blog?hid='.$hash_id.'&data=news'; ?>><?php echo $news_category; ?> </a></li>
							<?php  } ?>
							</ul>
						</li>

						<!-- <li class=""><a href="contact">Contact</a></li> -->
					</ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</div>
<!--head-bottom-->
</div>
<?php
$stmtt =  $conn->prepare("SELECT * FROM frontage");
$stmtt->execute();
$row = $stmtt->fetch(PDO::FETCH_BOTH); ?>
<!-- banner -->
<div class="banner" style="background-image:url(<?php echo $row['image'] ?>)">
	<div class="container">
		<h2><?php echo $row['header_title'] ?></h2>
		<p style="color:white;"><?php echo $row['text'] ?></p>
		<!-- <a <?php echo 'href=blog?data=blog'; ?>>READ ARTICLE</a> -->
	</div>
</div>
