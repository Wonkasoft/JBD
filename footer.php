			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container-fluid">
					<div class="row">
						<!-- sogin -->
						<div class="col-xs-12 text-center text-angle">
							"What will Jethro do? What will Hethro Play? What will Jethro SAY?"
						</div>

						<!-- Social Media Menu -->
						<div class="col-xs-12 text-center">
							<div class="col-xs-12 col-md-4 social-menu-footer">
								<a href="#"><img class="social-icon-footer" src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="" /> /JethroBoDidley &nbsp;</a>
							</div>
							<div class="col-xs-12 col-md-4 social-menu-footer">
								<a href="#"><img class="social-icon-footer" src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" alt="" /> @JethroBoDidley</a>
							</div>
							<div class="col-xs-12 col-md-4 social-menu-footer">
								<a href="#"><img class="social-icon-footer" src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="" /> @JethroBoDidley</a>
							</div>
						</div>
						<!-- copyright -->
						<div class="col-xs-12 text-center">
							<small><p class="copyright">
								&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. All rights reserved. |  Website: <?php _e('Created by', 'Wonkasoft'); ?>
								<a href="//wonkasoft.com" title="Wonkasoft" target="_blank">Wonkasoft</a>.
							</p></small>
							<!-- /copyright -->
						</div>

					</footer>
					<!-- /footer -->
				</div>
				<!-- end of container -->
			</div>
			<!-- end of row -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
			(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
				(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
				l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
			ga('send', 'pageview');
		</script>

	</body>
	</html>
