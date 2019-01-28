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
	 <?php if($page_title !="bb"){ ?>
		 <title>AATSARUMI - <?php echo $page_title ?></title>
	 <?php } ?>
		 <meta name="description" content="">
		 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


		  <?php if($page_name == "home"){
			 echo '<title>'.$page_title.'</title>
			 <meta name="description" content="ArtHut is a digital home for all arts. We create a platform for budding and developed artists of all kind to showcase the story and voice in their heads.">';

		 }elseif($page_name == "blog_view"){
			 // die(var_dump($blog));
			 $bd = previewBody($body, 22);
			 $rf = strip_tags($bd);
			 $cut = explode(' ',$title);
			 $metakeys = implode(',',$cut).",";
			 echo '<title>Arthut - '.ucwords($title).'</title>
			 <meta name="description" content="'.$rf.'" />
			 <meta name="title" content="'.ucwords($title).'">
			 <meta name="keywords" content="'.$metakeys.'blog,arthut">';
		 }else{
			 echo '<title>'.ucwords($page_title).'</title>
			 <meta name="description" content="ArtHut is a digital home for all arts. We create a platform for budding and developed artists of all kind to showcase the story and voice in their heads.">
			 <meta name="title" content="'.ucwords($page_title).'">
			 <meta name="keywords" content="arthut, blog">';
			 }

			 $uri = explode("/", $_SERVER['REQUEST_URI']);
				if($page_name == "home"){
					echo '<meta property="og:title" content="Arthut - Home" />
					<meta property="og:image" content="images/log.png" />
					<meta property="og:image:width" content="450"/>
					<meta property="og:image:height" content="298"/>
					<meta property="og:description" content="ArtHut is a digital home for all arts. We create a platform for budding and developed artists of all kind to showcase the story and voice in their heads." />';
					echo '<meta name="twitter:card" content="summary_large_image">
					<meta name="twitter:site" content="@arthutng">
					<meta name="twitter:title" content="Arthut - Home">
					<meta name="twitter:description" content="ArtHut is a digital home for all arts. We create a platform for budding and developed artists of all kind to showcase the story and voice in their heads.">
					<meta name="twitter:image" content="images/log.png">
					<meta name="twitter:image:width" content="280">
					<meta name="twitter:image:height" content="150">';
				}elseif($page_name == "blog_view"){
					 $bd = previewBody($body, 22);
					$rf = strip_tags($bd);
					echo '<meta property="og:title" content="Arthut - '.$title.'" />
					<meta property="og:type" content="article" />
					<meta property="og:image" content="https://arthut.com.ng/'.$image_1.'" />
					<meta property="og:image:width" content="450"/>
					<meta property="og:image:height" content="298"/>
					<meta property="og:description" content="'.$rf.'" />';
					echo '<meta name="twitter:card" content="summary_large_image">
					<meta name="twitter:site" content="@arthutng">
					<meta name="twitter:title" content="Arthut - '.$title.'">
					<meta name="twitter:description" content="'.$rf.'">
					<meta name="twitter:image" content="https://arthut.com.ng/'.$image_1.'">
					<meta name="twitter:image:width" content="280">
					<meta name="twitter:image:height" content="150">';
				}else{
					echo '<meta property="og:title" content="arthut" />
					<meta property="og:image" content="https://arthut.com.ng/images/log.png" />
					<meta property="og:image:width" content="200"/>
					<meta property="og:image:height" content="200"/>
					<meta property="og:description" content="ArtHut is a digital home for all arts. We create a platform for budding and developed artists of all kind to showcase the story and voice in their heads." />';
					echo '<meta name="twitter:card" content="summary" />
					<meta name="twitter:site" content="@arthutng" />
					<meta name="twitter:title" content="arthut" />
					<meta name="twitter:description" content="ArtHut is a digital home for all arts. We create a platform for budding and developed artists of all kind to showcase the story and voice in their heads.">
					<meta name="twitter:image" content="https://arthut.com.ng/images/log.png" />';
				}
 ?>
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Global site tag (gtag.js) - Google Analytics -->
 	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131077668-1"></script>
 	<script>
 	window.dataLayer = window.dataLayer || [];
 	function gtag(){dataLayer.push(arguments);}
 	gtag('js', new Date());
 	gtag('config', 'UA-131077668-1');
 </script>
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

						<div style="width:50%" class="social">
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
								<li class=""><a href="submit">Submit</a></li>
									<li class=""><a href="contact">Contact</a></li>
																		<li class=""><a href="blog?data=news">News</a></li>
									
						

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
<div class="banner" style="background-image:url(<?php echo $row['image'] ?>); background-size:cover; background-position:center; background-repeat:no-repeat;">
	<div class="container">
		<h2><?php echo $row['header_title'] ?></h2>
		<p style="color:white;"><?php echo $row['text'] ?></p>
		<!-- <a <?php echo 'href=blog?data=blog'; ?>>READ ARTICLE</a> -->
	</div>
</div>
