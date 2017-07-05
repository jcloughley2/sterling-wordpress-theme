<?php
/* Template Name: Clients Landing Page */
?>

<?php get_header(); ?>

<section class="panel-introduction panel-section" role="main">
	<div class="compartment">
		<h1 class="introduction-title"><?php the_field('introduction_title'); ?></h1>
		<div class="introduction-tagline"><?php the_field('introduction_tagline'); ?></div>
	</div>
</section>

<section class="panel-white panel-section" role="main">
	<div class="compartment">   
		<div class="client-content">
			<?php query_posts('cat=5'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<button class="lightbox-trigger client-type-post" rel="<?php the_permalink();?>"  id="post-<?php the_ID(); ?>"><span><?php the_title(); ?></span></button>

			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>
</section>

<section class="panel-teal panel-section" role="main">
	<div class="compartment">
		<h2 class="panel-title"><?php the_field('2x3_grid_introduction'); ?></h2>
		<div class="three-listing">
			<div class="tile"><?php the_field('2x3_grid_tile_1'); ?></div>
			<div class="tile"><?php the_field('2x3_grid_tile_2'); ?></div>
			<div class="tile"><?php the_field('2x3_grid_tile_3'); ?></div>
		</div>
	</div>
</section>

<section class="slider-section panel-section" role="main">
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