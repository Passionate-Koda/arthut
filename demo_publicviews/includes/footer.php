<?php include 'search-plugin/search-plugin.php'; ?>
<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-left">
				<h6>About Us</h6>
				<p>ArtHut is a digital home for all arts.</p>
				<p>We create a platform for budding and developed artists of all kind to showcase the story and voice in their heads.</p>
			</div>

			<div class="col-md-4 footer-right">
				<h4>Quick Links</h4>
				<li class="active"><a href="index">Home</a></li>
			<li class=""><a href="blog?data=insight">Blog</a></li>
			<li class=""><a href="submit">Submit</a></li>
			<li class=""><a href="contact">Contact</a></li>
			<li class=""><a href="blog?data=news">News</a></li>

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- footer -->


<!-- footer-bottom -->
	<div class="foot-nav">
	<div class="container">
		<ul>
			<?php foreach ($insights as $key => $value) {
				extract($value);
		 ?>
 <li><a <?php echo 'href=blog?hid='.$hash_id.'&data=insight'; ?>>		<?php echo $package_name; ?> </a></li>
 <?php } ?>
			<div class="clearfix"></div>
		</ul>
		</div>
				</div>
<!-- footer-bottom -->
			<div class="copyright">
				<div class="container">
					<p>© <?php   $date = getdate(date("U")); echo $date['year'] ?> Arthut.| Powered by <a href="http://mckodev.com.ng">Mckodev</a></p>
				</div>
			</div>
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
  t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
  return t;
}(document, "script", "twitter-wjs"));</script>

</body>
</html>
