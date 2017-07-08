<?php
/* Template Name: Clients Landing Page */
?>

<?php get_header(); ?>

<?php include 'lightbox.php';?>

<section class="panel-introduction panel-section" role="main">
	<div class="compartment">
		<h1 class="introduction-title"><?php the_field('introduction_title'); ?></h1>
		<div class="introduction-tagline"><?php the_field('introduction_tagline'); ?></div>
	</div>
</section>

<section class="panel-white panel-section" role="main">
	<div class="compartment">   
		<div class="client-content">
			<?php query_posts('cat=5&order=ASC'); ?>
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
		<div class="news-content">
			<?php query_posts('cat=6&posts_per_page=3'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<a href="<?php the_permalink();?>" target="_blank" class="news-post" id="post-<?php the_ID(); ?>">
				<h3 class="post-title truncate-35"><?php echo(get_the_title()); ?></h3>
				<p class="post-excerpt truncate-175"><?php echo(get_the_excerpt()); ?></p>
				<div class="post-details">
					<span class="post-thumb"><?php the_post_thumbnail(); ?></span>
					<span class="post-meta"><?php the_meta(); ?></span>
					<span class="post-date"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></span>
				</div>
			</a>
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
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
		<div class="icon-quotes slider-text-container">
			<div class="slide-text"><?php the_field('slider_slide_1_text'); ?></div>
			<div class="slide-text"><?php the_field('slider_slide_2_text'); ?></div>
			<div class="slide-text"><?php the_field('slider_slide_3_text'); ?></div>
		</div>
	</div>
</section>

<?php get_footer(); ?>