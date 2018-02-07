<?php get_header(); ?>
<div class="row-fluid row--hero row--hero__slider">
	<div class="slick--slider">
		<div class="slick-slider--slide">
				<header class="main-fluid slider--slide__content">
					<div class="slide__content--inner">
						<h1 class="slider__title">Moving in 2018?</h1>
						<p class="slider__slogan">No up-front costs payable, fixed fees and no hidden costs*</p>
						<p class="slider__disclaimer">*Offer subject to terms and conditions</p>
						<a class="slider__button" href="<?php echo site_url(); ?>/moving-in-2018"><span>Click here for more information</span></a>
					</div>
				</header>
				<img class="image--hero-home" src="<?php echo get_template_directory_uri(); ?>/img/slider/dunbar-harbour.jpg" alt="The beach at North Berwick" />
		</div>
		<div class="slick-slider--slide">
				<header class="main-fluid slider--slide__content">
					<div class="slide__content--inner">
						<h1 class="slider__title">We know East Lothian</h1>
						<p class="slider__slogan">Our knowledge of East Lothian is unrivalled. We know the towns and villages that make the area so special, and we know the housing market inside out. Talk to your local experts.</p>
					</div>
				</header>
				<img class="image--hero-home" src="<?php echo get_template_directory_uri(); ?>/img/slider/north-berwick.jpg" alt="The beach at North Berwick" />
		</div>
		<div class="slick-slider--slide">
				<header class="main-fluid slider--slide__content">
					<div class="slide__content--inner">
						<h1 class="slider__title">Legal services you can trust</h1>
						<p class="slider__slogan">When you need some advice, we’re ready to help. From family law to conveyancing, we’ve got you covered. Get in touch for expert legal support today.</p>
					</div>
				</header>
				<img class="image--hero-home" src="<?php echo get_template_directory_uri(); ?>/img/slider/river-tyne-haddington.jpg" alt="Bridge over the River Tyne in Haddington" />
		</div>
		<div class="slick-slider--slide">
				<header class="main-fluid slider--slide__content">
					<div class="slide__content--inner">
						<h1 class="slider__title">Always a friendly face</h1>
						<p class="slider__slogan">Our staff love what they do. They’ve got the experience and expertise to help you every step of the way. Whether you’re buying or selling your home - let’s talk.</p>
					</div>
				</header>
				<img class="image--hero-home" src="<?php echo get_template_directory_uri(); ?>/img/slider/staff.jpg" alt="Internal signage at GSB" />
		</div>
	</div>
</div>
<!--<div class="row-fluid row--hero row--hero__home">
	<header class="main-fluid hero__content">
		<h1 class="hero__title">Unmatched Local Knowledge</h1>
		<p class="hero__slogan">GSB has been working in east-central Scotland for many years and has the experience to guide you smoothly through the legal terrain.</p>
	</header>
	<img class="image--hero-home" src="<?php echo get_template_directory_uri(); ?>/img/photos/north-berwick-beach.jpg" alt="The beach at North Berwick" />
</div>-->
<div class="row-fluid row--bg-mid-green">
	<div class="page__search-bar">
		<div class="main-fluid">
			<div class="sform__wrap">
				<div class="sform__toggle"><span class="sform__intro">Find your perfect property...<div class="sform__toggle--buy active">To Buy</div><div class="sform__toggle--let">To Let</div></span></div>
				<div class="sform__toggle--form sform__toggle--active"><?php echo do_shortcode( '[bdp mode="sideSearchSales"]' ); ?></div>
				<div class="sform__toggle--form"><?php echo do_shortcode( '[bdp mode="sideSearchLetting"]' ); ?></div>
			</div>
		</div>
	</div>
	</div>
	<div class="row-fluid row--bg-dark-green">
	<div class="main-fluid">
	<ul class="estate-agency-services">
		<li>
			<a href="<?php echo site_url(); ?>/free-pre-sale-valuation" class="card--service-ea">
				<h4 class="card__title">Free Pre-sale Valuation</h4>
			</a>
		</li>
		<li>
				<a class="card--service-ea" href="#matchEnquiry" data-toggle="modal" data-target="#matchEnquiry">
				<h4 class="card__title">Request Property Alerts</h4>
			</a>
		</li>
		<li>
				<a href="<?php echo site_url(); ?>/residential-conveyancing" class="card--service-ea">
				<h4 class="card__title">Legal Services</h4>
			</a>
		</li>
		<li>
				<a href="<?php echo site_url(); ?>/request-a-free-fee-estimate" class="card--service-ea">
				<h4 class="card__title">Request a free Fee Estimate</h4>
			</a>
		</li>
	</ul>
</div>
</div>
<div class="main-fluid content-padding--gen">
	<div class="row-fluid">
		<h1 class="center">Welcome to<br /> <span>Garden Stirling Burnet</span></h1>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<p>Our intimate knowledge of East Lothian makes us your number one choice when buying or selling a property in the area. From cosy cottages and resplendent townhouses, to beautiful houses by the sea and large country homes - choose from our selection of homes just waiting to be snapped up.</p>
			<h3>Your local experts</h3>
			<p>At Garden Stirling Burnet we pride ourselves on helping our clients find their dream home. With X years of experience under our belt, we know the market incredibly well and can offer advice and inspiration every step of the way when you’re searching
				for a property.</p>
			<a class="btn--ghost" href="<?php echo site_url(); ?>/about-us/"><span>About Us</span></a>
		</div>
		<div class="span6">
			<div class="image-box--border image-box--med image-box--right">
				<img class="image--glow" src="<?php echo get_template_directory_uri(); ?>/img/photos/north-berwick-high-street.jpg" alt="The high street in North Berwick" />
			</div>
		</div>
	</div>
</div>
<div class="row-fluid row--bg-grey">
	<div class="main-fluid content-padding--gen">
		<div class="row-fluid">
			<div class="span12">
				<h3 class="center border-bottom__calm-green">Featured Properties</h3>
				<?php echo do_shortcode( '[bdp mode="featured"]' ); ?>
			</div>
		</div>
	</div>
</div>
<div class="row-fluid row-cta row--bg-nb">
	<div class="main-fluid">
		<div class="center">
			<div class="span10 offset1">
				<h2>Explore our guide to East Lothian</h2>
				<hr class="hr--white-fade" />
				<p>Using our vast local knowledge, we’ve put together a handy guide all about living in East Lothian. From North Berwick to Dunbar, you can find useful information on the most popular areas to live.</p>
				<a class="btn--ghost btn--white"  href="<?php echo site_url(); ?>/east-lothian"><span>Read more</span></a>
			</div>
		</div>
	</div>
</div>
<div class="main-fluid content-padding--gen">
	<div class="row-fluid center">
		<h2 class="border-bottom__rich-green">East Lothian Property Specialists</h2>
		<ul class="grid--featured">
			<li>
				<a  href="<?php echo site_url(); ?>/commercial-law" class="card__project--small">
					<img class="card__image" src="<?php echo get_template_directory_uri(); ?>/img/card-legal-services.jpg" alt="The high street in North Berwick"/>
					<section class="card__inner">
						<h4 class="card__title">Legal Services</h4>
					</section>
				</a>
			</li>
			<li>
				<a href="<?php echo site_url(); ?>/property/property-for-sale/" class="card__project--small">
					<img class="card__image" src="<?php echo get_template_directory_uri(); ?>/img/card-properties-for-sale.jpg" alt="The high street in North Berwick"/>
					<section class="card__inner">
						<h4 class="card__title">Properties for Sale</h4>
					</section>
				</a>
			</li>
			<li>
				<a href="<?php echo site_url(); ?>/east-lothian" class="card__project--small">
					<img class="card__image" src="<?php echo get_template_directory_uri(); ?>/img/card-living-east-lothian.jpg" alt="The high street in North Berwick"/>
					<section class="card__inner">
						<h4 class="card__title">Living in East Lothian</h4>
					</section>
				</a>
			</li>
			<li>
				<a href="<?php echo site_url(); ?>/about-us#team" class="card__project--small">
					<img class="card__image" src="<?php echo get_template_directory_uri(); ?>/img/card-meet-the-team.jpg" alt="The high street in North Berwick"/>
					<section class="card__inner">
						<h4 class="card__title">Meet the Team</h4>
					</section>
				</a>
			</li>
		</ul>
	</div>
</div>
<div class="row-fluid row--bg-stripe">
	<div class="main-fluid content-padding--gen">
		<div class="row-fluid">
			<div class="span12">
				<?php global $post; $args = array( 'posts_per_page' => 3 ); $postslist = get_posts( $args ); foreach ( $postslist as $post ) : setup_postdata( $post ); ?>
				<div class="latest-news center">
					<h3>Latest news</h3>
					<p class="latest-news-date">
						<?php echo get_the_date(); ?>
					</p>
					<h2 class="border-bottom__sea-blue"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
				</div>
				<?php endforeach; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
