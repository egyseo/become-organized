<!-- SIGN UP
    ================================================================ -->
  <section id="contact-us" data-type="background" data-speed="2">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 cta">
          <h2>Would you like to know more about us?</h2>
          <p>
            <button class="btn btn-lg btn-block cta-button" data-toggle="modal" data-target="#myModal">Yes, sign me up!</button>
          </p>
        </div>
      </div>
    </div>
  </section>

<!-- FOOTER
================================================================ -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="info-container">
            <h3>Contact Us:</h3>
            <p class="info"> jessica@becomeorganized.net</p>
            <p class="info"> 703-581-4382</p>
        	</div>
          <div class="social-links">
            <a href="https://www.facebook.com/beorganizednow/" class="badge social facebook" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>

            <a href="https://twitter.com/beorganizednow" class="badge social twitter" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>

            <a href="https://www.pinterest.com/becomeorganized/" class="badge social pinterest" target="_blank">
              <i class="fab fa-pinterest"></i>
            </a>

            <a href="https://www.yelp.com/biz/become-organized-new-york" class="badge social yelp" target="_blank">
              <i class="fab fa-yelp"></i>
            </a>

            <a href="https://www.instagram.com/becomeorganized/" class="badge social instagram" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
					</div>
        </div>
        <div class="col-sm-4">
					<div class="footer-logos">
						<div class="napo-logo">
							<img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/NAPO-member.png" alt="NAPO Logo">
						</div>
						<div class="homeguide-logo">
							<a href="https://homeguide.com" target="_blank"><img src="//cdn.homeguide.com/assets/images/tmp/homeguide-2018.png" width="150"></a>
						</div>
					</div>
        </div>
        <div class="col-sm-4">
          <p>
            <a href="/">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/BOLogoType_White_thick.png" class="footer-logo" alt="Become Organized">
            </a>
            <p class="footer-slogan">Organizing the Small Spaces in Manhattan &amp; Beyond</p>
            <p class="copyright">&copy; <?php echo date('Y'); ?> Become Organized</p>
          </p>
        </div>
      </div>
    </div>
  </footer>

<!-- MODAL
================================================== -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing List</h4>
			</div><!-- modal-header -->
			
			<div class="modal-body">
				<p>Simply enter your name and email to subscribe!</p>
				
        <form class="form-inline" role="form" action="https://becomeorganized.us17.list-manage.com/subscribe/post" method="POST">
          
          <input type="hidden" name="u" value="5ab058a1c7cec129256da1710">
          <input type="hidden" name="id" value="7ed893ecba">

					<div class="form-group">
						<label class="sr-only" for="subscribe-name">Your first name</label>
						<input type="text" name="MERGE1" class="form-control" id="subscribe-name" placeholder="Your first name">
					</div><!-- form-group -->
					<div class="form-group">
						<label class="sr-only" for="subscribe-email">and your email</label>
						<input type="text" name="MERGE0" class="form-control" id="subscribe-email" placeholder="and your email">
					</div><!-- form-group -->
					
					<input type="submit" class="btn cta-button" value="Subscribe!">
				</form>
				
				<hr>
				
				<p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
			</div><!-- modal-body -->
			
		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal -->

<!-- BOOTSTRAP CORE JAVASCRIPT
================================================================ -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous">
	</script>

  <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/main.js"></script>

<?php wp_footer(); ?> 
</body>

</html>