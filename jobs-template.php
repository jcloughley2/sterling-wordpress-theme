<?php
/* Template Name: Jobs Landing Page */
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
	<h2 class="panel-title">Jobs</h2> 
		<div class="job-content">
			<?php query_posts('cat=3&order=ASC'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
			<article class="jobs-post">
					<span class="position-company"><?php the_meta(); ?></span>
					<span class="position-title lightbox-trigger" rel="<?php the_permalink();?>" id="post-<?php the_ID(); ?>"><?php the_title(); ?></span> 
			</article>
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>