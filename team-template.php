<?php
/* Template Name: Team Landing Page */
?>

<?php get_header(); ?>

<?php include 'lightbox.php';?>

<section class="panel-introduction panel-section" role="main">
	<div class="compartment">
		<h1 class="introduction-title"><?php the_field('introduction_title'); ?></h1>
		<div class="introduction-tagline"><?php the_field('introduction_tagline'); ?></div>
	</div>
</section>

<section class="panel-image panel-section" style="background-image: url(<?php the_field('image_1_background'); ?>);" role="main"></section>

<section class="panel-teal panel-section" role="main">
	<div class="compartment">
		<h2 class="panel-title"><?php the_field('spotlight_1_title'); ?></h2>
		<div class="spotlight-text"><?php the_field('spotlight_1_text'); ?></div>
	</div>
</section>

<section class="panel-white panel-section" role="main">
	<div class="compartment">  
		<h2 class="panel-title">Who We Are</h2> 
		<div class="profiles-content" role="main">
			<?php query_posts('cat=7&order=ASC'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
				<article class="lightbox-trigger profile-post" rel="<?php the_permalink();?>"  id="post-<?php the_ID(); ?>">
					<div class="bg-img" style="background-image:url(<?php echo $thumbnail[0]; ?>);"></div>
					<header class="header">
						<h3 class="profile-name"><?php the_title(); ?></h3> 
						<span class="profile-role"><?php the_meta(); ?></span>
					</header>
				</article>
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
		</div>
		<div class="profiles-content" role="main">
			<?php query_posts('cat=8&order=ASC'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
				<article class="lightbox-trigger profile-post" rel="<?php the_permalink();?>"  id="post-<?php the_ID(); ?>">
					<div class="bg-img" style="background-image:url(<?php echo $thumbnail[0]; ?>);"></div>
					<header class="header">
						<h3 class="profile-name"><?php the_title(); ?></h3> 
						<span class="profile-role"><?php the_meta(); ?></span>
					</header>
				</article>
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>
</section>

<section class="panel-teal panel-section" role="main">
	<div class="compartment">
		<h2 class="panel-title"><?php the_field('2x3_grid_introduction'); ?></h2>
		<div class="six-listing">
			<div class="tile icon-heart-white">
				<span class="icon-space"></span>
				<div class="tile-text"><?php the_field('2x3_grid_tile_1'); ?></div>
			</div>
			<div class="tile icon-ribbon-white">
				<span class="icon-space"></span>
				<div class="tile-text"><?php the_field('2x3_grid_tile_2'); ?></div>
			</div>
			<div class="tile icon-target-white">
				<span class="icon-space"></span>
				<div class="tile-text"><?php the_field('2x3_grid_tile_3'); ?></div>
			</div>
			<div class="tile icon-hands-white">
				<span class="icon-space"></span>
				<div class="tile-text"><?php the_field('2x3_grid_tile_4'); ?></div>
			</div>
			<div class="tile icon-lightbulb-white">
				<span class="icon-space"></span>
				<div class="tile-text"><?php the_field('2x3_grid_tile_5'); ?></div>
			</div>
			<div class="tile icon-stone-white">
				<span class="icon-space"></span>
				<div class="tile-text"><?php the_field('2x3_grid_tile_6'); ?></div>
			</div>  
		</div>
	</div>
</section>

<section class="panel-image panel-section" style="background-image: url(<?php the_field('image_2_background'); ?>);" role="main"></section>

<section class="panel-white panel-section panel-slim" role="main">
	<div class="compartment">
		<h2 class="panel-title"><?php the_field('spotlight_2_title'); ?></h2>
		<div class="spotlight-text"><?php the_field('spotlight_2_text'); ?></div>
	</div>
</section>

<?php get_footer(); ?>