			<!-- footer -->
			<footer class="footer" role="contentinfo">
					<div class="main-fluid">
							<div class="row-fluid">
								<div class="span3">
									<h4>Menu</h4>
									<nav class="site-nav--footer" role="navigation"><?php wp_nav_menu(array( 'theme_location' => 'footer-menu')); ?></nav>
								</div>
								<div class="span3">
									<h4>Properties</h4>
									<nav class="site-nav--footer" role="navigation">
										<ul>
											<li><a href="<?php echo site_url(); ?>//property/search-property/search-results/?keysearch=north_berwick&pricefrom=0&priceto=2500000&bedRoomsMin=0&bedRoomsMax=6&property_type=&nv=on">Properties in North Berwick</a></li>
											<li><a href="<?php echo site_url(); ?>/property/search-property/search-results/?keysearch=dunbar&pricefrom=0&priceto=2500000&bedRoomsMin=0&bedRoomsMax=6&property_type=&nv=on">Properties in Dunbar</a></li>
											<li><a href="<?php echo site_url(); ?>/property/search-property/search-results/?keysearch=haddington&pricefrom=0&priceto=2500000&bedRoomsMin=0&bedRoomsMax=6&property_type=&nv=on">Properties in Haddington</a></li>
											<li><a href="<?php echo site_url(); ?>/property/search-property/search-results/?keysearch=tranent&pricefrom=0&priceto=2500000&bedRoomsMin=0&bedRoomsMax=6&property_type=&nv=on">Properties in Tranent</a></li>
										</ul>
									</nav>
								</div>
								<div class="span4 offset2">
									<h4>Our offices</h4>
									<ul class="contact-info--footer">
										<li><address>39 High St, Dunbar, EH42 1EW<br  />T: 01368 862376</address></li>
										<li><address>18 Hardgate, Haddington EH41 3JS<br  />T: 01620 825368</address></li>
										<li><address>22 Hardgate, Haddington EH41 3JR<br  />T: 01620 824996</address></li>
										<li><address>8 Westgate, North Berwick EH39 4AF<br  />T: 01620 892307</address></li>
										<li><address>121 High St, Tranent EH33 1LW<br  />T: 01875 611616</address></li>
									</ul>
							</div>
						</div>
					</div>
			</footer>
			<div class="row-fluid row-footer-logos">
				<div class="main-fluid">
					<a class="btn--footer-logo" href="https://espc.com/properties?orgid=38540" target="blank" title="ESPC"><img class="image--footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/espc-logo.png" alt="ESPC" /></a>
					<a class="btn--footer-logo" href="https://espc.com/properties?orgid=38540" target="blank" title="ESPC"><img class="image--footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/zoopla-logo.png" alt="Zoopla" /></a>
					<a class="btn--footer-logo" href="https://espc.com/properties?orgid=38540" target="blank" title="ESPC"><img class="image--footer-logo image--footer-logo__large" src="<?php echo get_template_directory_uri(); ?>/img/s1homes-logo.png" alt="Zoopla" /></a>
					<a class="btn--footer-logo" href="https://espc.com/properties?orgid=38540" target="blank" title="ESPC"><img class="image--footer-logo image--footer-logo__large" src="<?php echo get_template_directory_uri(); ?>/img/primelocation-logo.png" alt="Zoopla" /></a>
					<a class="btn--footer-logo" href="http://www.solicitorsforolderpeoplescotland.co.uk/" target="blank" title="Solicitors for Older People Scotland"><img class="image--footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/sops-logo.png" alt="Solicitors for Older People Scotland" /></a>
					<a class="btn--footer-logo" href="https://www.lawscot.org.uk/" target="blank" title="Law Society of Scotland"><img class="image--footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/lsos-logo.png" alt="Law Society of Scotland" /></a>
				</div>
			</div>
			<div class="row-fluid row-dark row-copyright">
				<div class="main-fluid">
					<div class="span6">
						<p class="copyright">&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <a href="<?php echo site_url(); ?>/terms-conditions/">Terms &#38; Conditions</a></p>
					</div>
					<div class="span6">
						<p class="espcdesign">Site by <a href="http://www.espcdesign.com" target="_blank">ESPC Design Collective</a></p>
					</div>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
		<script type="text/javascript">

				jQuery(document).ready(function($) {
						var ptitle = $('.property-single__title').attr('data-title');
						var psummary = $('.summary').attr('data-summary');
						document.title = ptitle;
						$('meta[name=description]').attr('content', psummary);
				});

		</script>
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
