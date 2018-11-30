<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-left">
				<h6>About Us</h6>
				<p>ArtHut is a digital home for all arts.</p>
				<p>We create a platform for budding and developed artists of all kind to showcase the story and voice in their heads.</p>
			</div>
			<div class="col-md-4 footer-middle">
			<h4>Twitter Feed</h4>
			<div class="mid-btm">
				<p>Consectetur adipisicing</p>
				<p>Sed do eiusmod tempor</p>
				<a href="https://w3layouts.com/">https://w3layouts.com/</a>
			</div>

				<p></p>
				<p>Sed do eiusmod tempor</p>
				<a href="https:/mckodev.com.ng">https://Mckodev</a>

			</div>
			<div class="col-md-4 footer-right">
				<h4>Quick Links</h4>
				<li><a href="index">Home</a></li>
				<li><a href="about">About Us</a></li>
				<li><a href="news">News</a></li>

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
					<p>© 2018 Arthut.| Powered by <a href="http://mckodev.com.ng">Mckodev</a></p>
				</div>
			</div>


</body>
</html>
