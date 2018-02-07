<?php get_header(); ?>
<div class="row-fluid row--hero row--hero__stripe">
		<header class="main-fluid hero__content--small">
				<h1 class="hero__title"><?php the_title(); ?></h1>
		</header>
</div>
<div class="main-fluid content-padding--gen">
	<div class="row-fluid">
		<div class="span8 offset2 center">
			<p class="opening-paragraph">If you'd like more information about our services, please use our form and we'll get back to you, or if you'd prefer to contact us direct feel free to give us a call.</p>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php echo do_shortcode( '[contact-form-7 id="66" html_class=”wpcf7__contact” title="Contact form 1"]' ); ?>
		</div>
	</div>
</div>
<div class="row-fluid row--bg-stripe">
	<div class="main-fluid content-padding--gen">
		<div class="row-fluid">
			<div class="span12">
				<div class="slick--office-nav">
				    <a>GSB Properties</a>
				    <a>Dunbar</a>
				    <a>Tranent</a>
				    <a>Haddington</a>
				</div>
				<div class="slick--office__wrap">
				<div class="slick--office">
				<div>
				  <div class="office">
						<div class="office__inner">
				    <h2>GSB Properties</h2>
						<h3>Haddington</h3>
						<address>18 Hardgate, Haddington, EH41 3JS</address>
				    <p>Tel: 01620 825 368</p>
						<h3>North Berwick</h3>
						<address>8 Westgate, North Berwick, EH39 4AF</address>
					 	<p>Tel: 01620 892 307</p>
				    <table class="opening-times">
				      <tr>
				        <td>Monday - Friday</td>
				        <td>9.00am - 5.00pm</td>
				      </tr>
				      <tr>
				        <td>Saturday</td>
				        <td>Closed</td>
				      </tr>
				      <tr>
				        <td>Sunday</td>
				        <td>Closed</td>
				      </tr>
				    </table>
						</div>
						<img class="image--office" src="<?php echo get_template_directory_uri(); ?>/img/photos/north-berwick-office-inner.jpg" alt="The beach at North Berwick" />
				  </div>

				</div>
				<div>
				  <div class="office">
						<div class="office__inner">
				    <h2>Dunbar</h2>
				    <p>Tel:  01368 862 376</p>
				    <address>39 High Street, Dunbar, EH42 1EW</address>
				    <table class="opening-times">
				      <tr>
				        <td>Monday - Friday</td>
				        <td>9.00am - 5.00pm</td>
				      </tr>
				      <tr>
				        <td>Saturday</td>
				        <td>Closed</td>
				      </tr>
				      <tr>
				        <td>Sunday</td>
				        <td>Closed</td>
				      </tr>
				    </table>
					</div>
						<img class="image--office" src="<?php echo get_template_directory_uri(); ?>/img/photos/north-berwick-office-inner.jpg" alt="The beach at North Berwick" />
				  </div>
				</div>
				<div>
				  <div class="office">
						<div class="office__inner">
				    <h2>Tranent</h2>
				    <p>Tel: 01875 611 616</p>
				    <address>121 High Street, Tranent, EH33 1LW</address>
				    <table class="opening-times">
				      <tr>
				        <td>Monday - Friday</td>
				        <td>9.00am - 5.00pm</td>
				      </tr>
				      <tr>
				        <td>Saturday</td>
				        <td>Closed</td>
				      </tr>
				      <tr>
				        <td>Sunday</td>
				        <td>Closed</td>
				      </tr>
				    </table>
					</div>
						<img class="image--office" src="<?php echo get_template_directory_uri(); ?>/img/photos/north-berwick-office-inner.jpg" alt="The beach at North Berwick" />
				  </div>
				</div>
				<div>
				  <div class="office">
						<div class="office__inner">
				    <h2>Haddington</h2>
				    <p>Tel: 01620 824 996</p>
				    <address>22 Hardgate, Haddington, EH41 3JR</address>
				    <table class="opening-times">
				      <tr>
				        <td>Monday - Friday</td>
				        <td>9.00am - 5.00pm</td>
				      </tr>
				      <tr>
				        <td>Saturday</td>
				        <td>9.30am - 12.30pm*</td>
				      </tr>
				      <tr>
				        <td>Sunday</td>
				        <td>Closed</td>
				      </tr>
							<tr>
				        <td style="font-size: 12px;"><i>*Property sales only</i></td>
				        <td></td>
				      </tr>
				    </table>
					</div>
						<img class="image--office" src="<?php echo get_template_directory_uri(); ?>/img/photos/north-berwick-office-inner.jpg" alt="The beach at North Berwick" />
				  </div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="row-fluid">
	<section class="map-responsive">
		<div id="contactmap"></div>
	</section>
</div>
<?php get_footer(); ?>
