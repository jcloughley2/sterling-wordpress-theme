<?php
/* Template Name: Services Landing Page */
?>

<?php get_header(); ?>
<section class="introduction-section panel-section" role="main">
	<div class="compartment">
		<h1 class="introduction-title"><?php the_field('introduction_title'); ?></h1>
		<div class="introduction-tagline"><?php the_field('introduction_tagline'); ?></div>
	</div>
</section>

<section class="services-section panel-section" role="main">
	<div class="compartment">
		<header>
			<div class="services-title"><h2><?php the_field('2x3_grid_introduction'); ?></h2></div>
			<div class="services-text"><?php the_field('2x3_grid_description'); ?></div>
		</header>
		<div class="grid-2x3">
			<div class="tile"><?php the_field('2x3_grid_tile_1'); ?></div>
			<div class="tile"><?php the_field('2x3_grid_tile_2'); ?></div>
			<div class="tile"><?php the_field('2x3_grid_tile_3'); ?></div>
			<div class="tile"><?php the_field('2x3_grid_tile_4'); ?></div>
			<div class="tile"><?php the_field('2x3_grid_tile_5'); ?></div>
			<div class="tile"><?php the_field('2x3_grid_tile_6'); ?></div>  
		</div>
	</div>
</section>

<section class="spotlight-section panel-section spotlight-1" role="main">
	<div class="compartment">
		<div class="spotlight-title"><h2><?php the_field('spotlight_1_title'); ?></h2></div>
		<div class="spotlight-text"><?php the_field('spotlight_1_text'); ?></div>
	</div>
</section>

<section class="spotlight-section panel-section spotlight-2" role="main">
	<div class="compartment">
		<div class="spotlight-title"><h2><?php the_field('spotlight_2_title'); ?></h2></div>
		<div class="spotlight-text"><?php the_field('spotlight_2_text'); ?></div>
	</div>
</section>

<section class="image-section panel-section" style="background-image: url(<?php the_field('image_background'); ?>);" role="main">
	<div class="compartment">
		<div class="image-caption"><?php the_field('image_caption'); ?></div>
	</div>
</section>

<section class="slider-section panel-section"" role="main">
	<div class="compartment">
		<div class="slider-citation-container">
			<div class="slide-citation"><div class="slide-citation-inner"><?php the_field('slider_slide_1_citation'); ?></div></div>
			<div class="slide-citation"><div class="slide-citation-inner"><?php the_field('slider_slide_2_citation'); ?></div></div>
			<div class="slide-citation"><div class="slide-citation-inner"><?php the_field('slider_slide_3_citation'); ?></div></div>
		</div>
		<div class="slider-text-container">
			<div class="slide-text"><?php the_field('slider_slide_1_text'); ?></div>
			<div class="slide-text"><?php the_field('slider_slide_2_text'); ?></div>
			<div class="slide-text"><?php the_field('slider_slide_3_text'); ?></div>
		</div>
	</div>
</section>
<?php get_footer(); ?>