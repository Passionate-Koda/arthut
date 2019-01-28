<?php
ob_start();
$page_title = "Home";
$page_name = "home";
include "includes/header.php";
	$data = "insight";
 	$info = data2($conn, $data);




 ?>

 <div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">

		<div class="tech-no" style="width:100%">
						<?php
					foreach ($info as $key => $value) {
						extract($value);
						 $bd = previewBody($body, 20);


				 ?>
			<!-- technology-top -->
			<!-- <div class="soci">
				<ul>
					<li><a href="#" class="facebook-1"> </a></li>
					<li><a href="#" class="facebook-1 twitter"> </a></li>
					<li><a href="#" class="facebook-1 chrome"> </a></li>
					<li><a href="#"><i class="glyphicon glyphicon-envelope"> </i></a></li>
					<li><a href="#"><i class="glyphicon glyphicon-print"> </i></a></li>
					<li><a href="#"><i class="glyphicon glyphicon-plus"> </i></a></li>
				</ul>
			</div> -->
			 <div class="tc-ch" style="width:90%">

				<!-- 	<div class="tch-img">
						<a href="singlepage.html"><img src="images/1.jpg" class="img-responsive" alt=""/></a>
					</div> -->
					<a <?php echo 'href=viewBlog?hid='.$hash_id.'&data'.$data.''; ?>>  <div style="background:url(<?php echo $image_1; ?>); height:300px; width: 100%; background-size: cover; background-position: center; background-repeat: no-repeat;" ></div>

				<!-- 	<a class="blog blue" href="singlepage.html">Technology</a> -->
					<h3><a <?php echo 'href=viewBlog?hid='.$hash_id.'&data='.$data.''; ?>><?php echo $title; ?></a></h3>
						<p><?php echo $bd; ?> </p>
					<!-- <h3><a href="singlepage.html">Lorem Ipsum is simply</a></h3> -->
				<!-- 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud eiusmod tempor incididunt ut labore et dolore magna aliqua exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<p>Ut enim ad minim veniam, quis nostrud eiusmod tempor incididunt ut labore et dolore magna aliqua exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->

						<div class="blog-poast-info">
							<ul>
								<li><i class="glyphicon glyphicon-user"> </i><a class="admin" href="#"> <?php echo $author;  ?> </a></li>
								<li><i class="glyphicon glyphicon-calendar"> </i><?php echo $date_created; ?></li>
						<!-- 		<li><i class="glyphicon glyphicon-comment"> </i><a class="p-blog" href="#">3 Comments </a></li>
								<li><i class="glyphicon glyphicon-heart"> </i><a class="admin" href="#">5 favourites </a></li>
								<li><i class="glyphicon glyphicon-eye-open"> </i>1.128 views</li> -->
							</ul>
						</div>
			</div>
			<div class="clearfix"></div>
			<?php } ?>

			<!-- technology-top -->
			<!-- technology-top -->

			<!-- technology-top -->
			</div>
		</div>
		<!-- technology-right -->
		<div class="col-md-3 technology-right">
				<div class="blo-top1">
					<div class="tech-btm">
					<h4>Latest</h4>
					<?php
					foreach ($info as $key => $value) {
						extract($value);
						 $bd = previewBody($body, 20);

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
<?php
include "includes/footer.php";
 ?>
