<?php
ob_start();
$page_title = "View Content";
$page_name = "blog_view";

 if (isset($_GET['hid']) && isset($_GET['data'])) {
 		$hid = $_GET['hid'];
 		 $data = $_GET['data'];
 		 $info = getInfo($conn, $hid, $data);
 		 $info2 = data2($conn, $data);
 		 extract($info);
 		if (isset($info['headline']) && isset($info['link'])) {
 			$title = $info['headline'];
 			$author = $info['link'];
 		}elseif (isset($info['title']) && isset($info['author'])) {
 			$title = $title;
 			$author = $author;
 		}

 }
 include "includes/header2.php";
 ?>
 <style media="screen">
   .fblinka{
     display: inline-block;
       width: 40px;
       height: 40px;
       /* padding:3px; */
       line-height: 37px;
       text-align: center;
       background-color: #3B5998;
       color: #fff;
       border-radius: 50%;
       margin-bottom: 10px;
       border: 2px solid transparent;
       font-size: 15px;
       position: relative;
             margin: 10px;
   }
   .fblinka:hover{
     background-color: #fff;
     color: #3B5998;
       border: 2px solid #3B5998;
         margin-top: 20px;
   }
   .twlinka{
     display: inline-block;
       width: 40px;
       height: 40px;
			        /*padding:11px;*/
       line-height: 37px;
       text-align: center;
       background-color: #00ACED;
       color: #fff;
       border-radius: 50%;
       margin-bottom: 10px;
       border: 2px solid transparent;
       font-size: 15px;
       position: relative;
             margin: 10px;
   }
   .twlinka:hover{
     background-color: #fff;
     color: #00ACED;
       border: 2px solid #00ACED;
         margin-top: 20px;
   }
   .inlinka{
     display: inline-block;
       width: 40px;
       height: 40px;
       line-height: 37px;
       text-align: center;
       background-color: #0077B5;
       color: #fff;
			        /*padding:11px;*/
       border-radius: 50%;
       margin-bottom: 10px;
       border: 2px solid transparent;
       font-size: 15px;
       position: relative;
             margin: 10px;
   }
   .inlinka:hover{
     background-color: #fff;
     color: #0077B5;
       border: 2px solid #0077B5;
         margin-top: 20px;
   }
   .whlinka{
     display: inline-block;
       width: 40px;
       height: 40px;
       line-height: 37px;
       text-align: center;
       background-color: #27C34B;
       color: #fff;
       border-radius: 50%;
			        /*padding:11px;*/
       border: 2px solid transparent;
       font-size: 15px;
       position: relative;
       margin: 10px;
   }
   .whlinka:hover{
     background-color: #fff;
     color: #27C34B;
       border: 2px solid #27C34B;
             margin-top: 20px;
   }
 }
 </style>

<!-- technology -->
<div class="technology-1">
	<div class="container">
		<div class="col-md-9 technology-left">
			<div class="business">
				<div class=" blog-grid2">
					<div style="background:url(<?php echo $image_1; ?>); height:300px; width: 700px; background-size: cover; background-position: center; background-repeat: no-repeat;" class="img-responsive"></div>
					<!-- <img src=<?php  $image_1; ?> class="img-responsive" alt=""> -->
					<div class="blog-text">
						<h5><?php echo $title; ?></h5>
						<div class="blog-poast-info">
					<ul align="right">
					 	<li><i class="glyphicon glyphicon-user"> </i><a class="admin" href="#"> <?php echo $author;  ?> </a></li>
						<li><i class="glyphicon glyphicon-calendar"> </i><?php echo $date_created; ?></li>
					</ul>
					</div>
					<div class="blog-poast-info">
					</div>
						<p><?php echo $body; ?> </p>
						  <div style="margin-top:5px;" class="">
                  <p style="margin-bottom:2px">Share this with friends</p>
                <?php  $uro = $_SERVER['REQUEST_URI'];
                 ?>
                    <a href="#" id="blake" class="fblinka" ><i class="fa fa-facebook"></i></a>
                    <?php $urll= "https://arthut.com.ng/viewBlog?hid=".$_GET['hid']."&data=".$_GET['data']; ?>
                    <?php $ur = urlencode("https://arthut.com.ng/viewBlog?hid=".$_GET['hid']."&data=".$_GET['data'].""); ?>
                    <a target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $ur  ?>"  class="inlinka" ><i class="fa fa-linkedin"></i></a>

                    <a target="_blank" href="https://twitter.com/share?url=<?php echo $urll ?>&text=<?php echo "Arthut - ".strtoupper($title)?>&hashtags=arthut"  class="twlinka twitter-share" ><i class="fa fa-twitter"></i></a>
                    <a href='whatsapp://send?text=<?php echo "Arthut - ".strtoupper($title)." ".$urll ?> ' data-action="share/whatsapp/share"  class="whlinka" ><i class="fa fa-whatsapp"></i></a>
                </div>
                    <div class="fb-comments" data-mobile="true" data-href="https://arthut.com.ng/viewBlog?hid=<?php echo $_GET['hid'] ?>&data=blog" data-width="100%" data-numposts="10"></div>

					</div>
				</div>
			</div>
		</div>

		<!-- technology-right -->
	<div class="col-md-3 technology-right-1">



				<div class="blo-top1">
					<div class="tech-btm">
					<h4>Latest</h4>
					<?php
					$headline = "";
					foreach ($info2 as $key => $value) {
						extract($value);
						 $bd = previewBody($body, 20);
						 if ($headline && $link) {
						 	$title = $headline;
						 	$author = $link;
						 }elseif ($title && $author) {
						 	 $title = $title;
						 	 $author = $author;
						 }

				 ?>
						<div class="blog-grids">
							<div class="blog-grid-left">
									<a <?php echo 'href=viewBlog?hid='.$hash_id.'&data='.$data.''; ?>>  <div style="background:url(<?php echo $image_1; ?>); height:100px; width: 100px; background-size: cover; background-position: center; background-repeat: no-repeat;" class="img-responsive"></div></a>
								<!-- <a href="singlepage.html"><img src="images/6.jpg" class="img-responsive" alt=""/></a> -->
							</div>
							<div class="blog-grid-right">

								<h5><a <?php echo 'href=viewBlog?hid='.$hash_id.'&data='.$data.''; ?>><?php echo $title; ?></a></h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<?php } ?>

			<!-- 			<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.html"><img src="images/7.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">

								<h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.html"><img src="images/11.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">

								<h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.html"><img src="images/9.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">

								<h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.html"><img src="images/10.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">

								<h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div> -->
					</div>
				</div>
				<div class="blo-top1">
					<div class="tech-btm">
					<h4>Latest Tweets </h4>
				<a class="twitter-timeline" data-tweet-limit="3" href="https://twitter.com/arthutng?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
				</div>

		</div>
		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>
<!-- technology -->
<?php
include "includes/footer.php";
 ?>
  <script type="text/javascript">
    document.getElementById('blake').onclick = function(e){
      FB.ui({
        method: 'share',
    display: 'popup',
        href: 'https://arthut.com.ng/viewBlog?hid=<?php echo $_GET['hid'] ?>&data=<?php echo $_GET['data'] ?>',
      }, function(response){});
      e.preventDefault();
    }
    </script>
