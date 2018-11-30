<?php
ob_start();
$page_title = "View Content";
include "includes/header2.php";
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
 ?>

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

					</div>
				</div>
				<div class="comment-top">
						<h2>Comment</h2>
						<div class="media-left">
						  <a href="#">
							<img src="images/si.png" alt="">
						  </a>
						</div>
					<div class="media-body">
						  <h4 class="media-heading">Richard Spark</h4>
						  <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
					  <!-- Nested media object -->
						<div class="media">
							<div class="media-left">
							  <a href="#">
								<img src="images/si.png" alt="">
							  </a>
						 </div>
							<div class="media-body">
						  <h4 class="media-heading">Joseph Goh</h4>
						  <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
						  <!-- Nested media object -->
						  <div class="media">
							<div class="media-left">
							  <a href="#">
								<img src="images/si.png" alt="">
								 </a>
							</div>
							<div class="media-body">
							  <h4 class="media-heading">Melinda Dee</h4>
						  <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
							</div>
						  </div>
						</div>
					</div>
				  <!-- Nested media object -->
					  <div class="media">
						<div class="media-left">
						  <a href="#">
							<img src="images/si.png" alt="">
						  </a>
						</div>
						<div class="media-body">
						  <h4 class="media-heading">Rackham</h4>
						  <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
						</div>
					  </div>
					</div>
				</div>
				<div class="comment">
					<h3>Leave a Comment</h3>
					<div class=" comment-bottom">
						<form>
							<input type="text" placeholder="Name">
							<input type="text" placeholder="Email">
							<input type="text" placeholder="Subject">
							<textarea placeholder="Message" required=""></textarea>
							<input type="submit" value="Send">
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- technology-right -->
	<div class="col-md-3 technology-right-1">
				<div class="blo-top">
					<div class="tech-btm">
					<img src="images/banner1.jpg" class="img-responsive" alt=""/>
					</div>
				</div>
				<div class="blo-top">
					<div class="tech-btm">
					<h4>Sign up to our newsletter</h4>
					<p>Pellentesque dui, non felis. Maecenas male</p>
						<div class="name">
							<form>
								<input type="text" placeholder="Email" required="">
							</form>
						</div>
						<div class="button">
							<form>
								<input type="submit" value="Subscribe">
							</form>
						</div>
							<div class="clearfix"> </div>
					</div>
				</div>

				<div class="blo-top1">
					<div class="tech-btm">
					<h4>Latest stories of the week </h4>
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
				<a class="twitter-timeline" data-tweet-limit="3" href="https://twitter.com/Ptech4rice?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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
