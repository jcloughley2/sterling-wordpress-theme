<?php
/* Template Name: Home */
?>

<?php get_header(); ?>

<section class="panel-introduction panel-section" role="main">
	<div class="compartment">
		<h1 class="introduction-title"><?php the_field('introduction_title'); ?></h1>
		<div class="introduction-tagline"><?php the_field('introduction_tagline'); ?></div>
	</div>
</section>

<section class="panel-image panel-section" style="background-image: url(<?php the_field('image_1_background'); ?>);" role="main"></section>

<section class="panel-teal panel-section spotlight-1" role="main">
	<div class="compartment">
		<h2 class="panel-title"><?php the_field('spotlight_1_title'); ?></h2>
		<div class="spotlight-text"><?php the_field('spotlight_1_text'); ?></div>
	</div>
</section>

<section class="panel-image panel-section" style="background-image: url(<?php the_field('image_2_background'); ?>);" role="main"></section>

<section class="panel-teal panel-section spotlight-2" role="main">
	<div class="compartment">
		<h2 class="panel-title"><?php the_field('spotlight_2_title'); ?></h2>
		<div class="spotlight-text"><?php the_field('spotlight_2_text'); ?></div>
	</div>
</section>

<section class="panel-white panel-section" role="main">
	<div class="compartment">
		<h2 class="panel-title"><?php the_field('2x3_grid_introduction'); ?></h2>
		<div class="grid-2x3">
			<div class="tile icon-heart">
				<span class="icon-space"></span>
				<div class="tile-text"><?php the_field('2x3_grid_tile_1'); ?></div>
			</div>
			<div class="tile icon-ribbon">
				<span class="icon-space"></span>
				<div class="tile-text"><?php the_field('2x3_grid_tile_2'); ?></div>
			</div>
			<div class="tile icon-target">
				<span class="icon-space"></span>
				<div class="tile-text"><?php the_field('2x3_grid_tile_3'); ?></div>
			</div>
			<div class="tile icon-hands">
				<span class="icon-space"></span>
				<div class="tile-text"><?php the_field('2x3_grid_tile_4'); ?></div>
			</div>
			<div class="tile icon-lightbulb">
				<span class="icon-space"></span>
				<div class="tile-text"><?php the_field('2x3_grid_tile_5'); ?></div>
			</div>
			<div class="tile icon-stone">
				<span class="icon-space"></span>
				<div class="tile-text"><?php the_field('2x3_grid_tile_6'); ?></div>
			</div> 
		</div>
	</div>
</section>

<?php get_footer(); ?>