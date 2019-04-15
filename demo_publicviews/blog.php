<?php
ob_start();
$page_title = "Blog";
$page_name = "Blog";
include "includes/header2.php";
$record_per_page = 30;
$page = "";
if (isset($_GET['page'])) {
	$page = $_GET['page'];
}else{
	$page = 1;
}

$start_from = ($page - 1)*$record_per_page;

if (isset($_GET['hid']) && isset($_GET['data'])) {
	$hid = $_GET['hid'];
	$data = $_GET['data'];
	$info = information($conn, $data, $hid, $start_from, $record_per_page );
	$pagination = getPaginationForInformation($conn, $data, $hid, $record_per_page);
	$total_record = getTotalRecordForInformation($conn, $data, $hid, $record_per_page);
	$info2 = information2($conn, $data, $hid );
}elseif (isset($_GET['data'])) {
	$data = $_GET['data'];
	$info = data($conn, $data, $start_from, $record_per_page);
	$pagination = getPaginationForData($conn, $data, $record_per_page);
	$total_record = getTotalRecordForData($conn, $data, $record_per_page);
	$info2 = data2($conn, $data);

}else{
	header("index");
}

 $headline = "";
 //to get total record
if($page > 1){
 			$prev = $page - 1;
 		}else{
 			$prev = 1;
 		}
 		if($total_record > 1 &&  $page != $total_record){
 			$next = $page + 1;
 		}
 		else{
 			$next = $total_record;
 		}


 ?>


<!-- technology -->
<div class="technology-1">
	<div class="container">
		<div class="col-md-9 technology-left">

			<div class="vide-1">
				<?php
					foreach ($info as $key => $value) {
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
				<div class="rev">
					<div class="rev-img">
			<a <?php echo 'href=viewBlog?hid='.$hash_id.'&data'.$data.''; ?>>  <div style="background:url(<?php echo $image_1; ?>); height:200px; width: 200px; background-size: cover; background-position: center; background-repeat: no-repeat;" class="img-responsive"></div>
				<!-- <img src="images/4.jpg" class="img-responsive" alt=""> --></a>
				<div class="clearfix"></div>
					</div>
					<div class="rev-info">
						<h3><a <?php echo 'href=viewBlog?hid='.$hash_id.'&data='.$data.''; ?>><?php echo $title; ?></a></h3>
						<p><?php echo $bd; ?> </p>
					</div>
					<div class="clearfix"></div>
					<div class="blog-poast-info">
					<ul align="right">
					 	<li><i class="glyphicon glyphicon-user"> </i><a class="admin" href="#"> <?php echo $author;  ?> </a></li>
						<li><i class="glyphicon glyphicon-calendar"> </i><?php echo $date_created; ?></li>
					</ul>
					</div>
					<div class="blog-poast-info">
					</div>
					<!-- <div class="clearfix"></div> -->
				</div>
					<?php } ?>


<!-- 				<div class="rev">
					<div class="rev-img">
						<a href="singlepage.html"><img src="images/3.jpg" class="img-responsive" alt=""></a>
					</div>
					<div class="rev-info">
						<h3><a href="singlepage.html">Incididunt ut labore et dolore</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.isicing </p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="rev">
					<div class="rev-img">
						<a href="singlepage.html"><img src="images/2.jpg" class="img-responsive" alt=""></a>
					</div>
					<div class="rev-info">
						<h3><a href="singlepage.html">Incididunt ut labore et dolore</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.isicing </p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="rev">
					<div class="rev-img">
						<a href="singlepage.html"><img src="images/5.jpg" class="img-responsive" alt=""></a>
					</div>
					<div class="rev-info">
						<h3><a href="singlepage.html">Incididunt ut labore et dolore</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.isicing </p>
					</div>
					<div class="clearfix"></div>
				</div> -->
						<div class="clearfix"></div>

				<!-- <iframe src="https://player.vimeo.com/video/18624866?title=0&byline=0&portrait=0" width="100%" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
					<!-- <h3><a href="single.html"> Tempor incididunt ut labore et dolore magna aliqua</a></h3> -->
					<!-- 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud eiusmod tempor consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
						<!-- <div class="blog-poast-info"> -->
					<!-- 		<ul>
								<li><i class="glyphicon glyphicon-user"> </i><a class="admin" href="#"> Admin </a></li>
								<li><i class="glyphicon   glyphicon-calendar"> </i>30-12-2015</li>
								<li><i class="glyphicon glyphicon-comment"> </i><a class="p-blog" href="#">3 Comments </a></li>
								<li><i class="glyphicon glyphicon-heart"> </i><a class="admin" href="#">5 favourites </a></li>
								<li><i class="glyphicon glyphicon-eye-open"> </i>1.128 views</li>
							</ul> -->
						<!-- </div> -->
			</div>
			 <nav class='numbering'>
          <ul class='pagination paging'>
			<?php
			if (!isset($_GET["hid"])) {
				# code...

			  echo 	"<li>
          		<a href='blog?data=".$data."&page=".$prev."'aria-label='Previous'>
                <span aria-hidden='true'>&laquo;</span>
              	</a></li>";
              	foreach ($pagination as $key => $value) {
              	 	$i = $value;
             echo "<li class='active'><a href='blog?data=".$data."&page=".$i."'>".$i."</a></li>";
               }
             echo  "<li><a href='blog?data=".$data."&page=".$next."' aria-label='Next'>
              <span aria-hidden='true'>&raquo;</span>
              </a>
	       </li>";
	   }else{
	   			  echo 	"<li>
          		<a href='blog?hid=".$hid."&data=".$data."&page=".$prev."'aria-label='Previous'>
                <span aria-hidden='true'>&laquo;</span>
              	</a></li>";
              	foreach ($pagination as $key => $value) {
              	 	$i = $value;
             echo "<li class='active'><a href='blog?hid=".$hid."&data=".$data."&page=".$i."'>".$i."</a></li>";
               }
             echo  "<li><a href='blog?hid=".$hid."&data=".$data."&page=".$next."' aria-label='Next'>
              <span aria-hidden='true'>&raquo;</span>
              </a>
	       </li>";

	   }


			?>
			 </ul>
        </nav>
		</div>

		<!-- technology-right -->
		<div class="col-md-3 technology-right-1">
				<div class="blo-top">
					<div class="tech-btm">
					<!-- <img src="images/banner1.jpg" class="img-responsive" alt=""/> -->
					</div>
				</div>


				<div class="blo-top1">
					<div class="tech-btm">
					<h4>Latest</h4>
					<?php
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
				<script type="text/javascript">
  ( function() {
    if (window.CHITIKA === undefined) { window.CHITIKA = { 'units' : [] }; };
    var unit = {"calltype":"async[2]","publisher":"Emmiasky","width":300,"height":250,"sid":"Chitika Default"};
    var placement_id = window.CHITIKA.units.length;
    window.CHITIKA.units.push(unit);
    document.write('<div id="chitikaAdBlock-' + placement_id + '"></div>');
}());
</script>
<script type="text/javascript" src="//cdn.chitika.net/getads.js" async></script>
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
