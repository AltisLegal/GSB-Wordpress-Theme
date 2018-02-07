<?php get_header(); ?>
<div class="row-fluid row--hero row--hero__property">
		<header class="main-fluid hero__content">
				<h1 class="hero__title">Property for sale</h1>
		</header>
		<div class="page__search-bar">
			<div class="main-fluid">
				<div class="sform__wrap">
			<span class="sform__intro">Find your perfect property...</span><?php echo do_shortcode( '[bdp mode="sideSearchSales"]' ); ?>
		</div>
			</div>
		</div>
</div>
<div class="main-fluid content-padding--gen">
	<div class="row-fluid">
		<div class="span10">
			<p class="opening-paragraph">Looking for your dream home in East Lothian? Whether you want to downsize, find a family home or simply relocate, we’ve got the perfect home for every taste and budget.</p>
			<p>From beautiful townhouses in Haddington and new build family homes in Dunbar, to resplendent townhouses in North Berwick and characterful cottages in Tranent, we offer an exciting range of properties across East Lothian and far beyond.</p>
			<p>Let our expert team guide you in finding your ideal home. Offering insightful local knowledge and a specialist understanding of the market, we make house hunting a pleasurable process.</p>
			<p>We are also trusted solicitors for numerous homeowners wishing to sell their properties.</p>
			<p>Take a look at our available properties for sale, or find out more about buying or selling your home today.</p>
			<a class="btn--ghost"><span>I want to buy a property</span></a><br  />
			<a class="btn--ghost"><span>I want to sell a property</span></a>
		</div>
	</div>
</div>
<div class="row-fluid row--bg-grey">
	<div class="main-fluid content-padding--gen">
		<div class="row-fluid">
			<div class="span12">
				<h3 class="center border-bottom__rich-green">Featured Properties</h3>
				<?php echo do_shortcode( '[bdp mode="featured"]' ); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
