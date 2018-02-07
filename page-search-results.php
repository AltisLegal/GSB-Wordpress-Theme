<?php get_header(); ?>
<div class="row-fluid">
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
		<div class="span12">
			<ul class="property-results__tabs">
		    <li class="active"><a href="#listview" data-toggle="tab">View as list</a></li>
		    <li><a href="#mapview" data-toggle="tab">View on map</a></li>
		  </ul>
			<div id="listview" class="detail-tab active">
				<?php echo do_shortcode( '[bdp mode="results"]' ); ?>
			</div>
			<div id="mapview" class="detail-tab">
				<?php echo do_shortcode( '[bdp mode="resultsMap"]' ); ?>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	jQuery('a[data-toggle="tab"]').on('shown.bs.tab', function() {
		initializemap();
	});
</script>
<?php get_footer(); ?>
