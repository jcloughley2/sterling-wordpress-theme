<?php
/* Template Name: Contact Landing Page */
?>

<?php get_header(); ?>
<section class="introduction-section panel-section" role="main">
	<div class="compartment">
		<h1 class="introduction-title"><?php the_field('introduction_title'); ?></h1>
		<div class="introduction-tagline"><?php the_field('introduction_tagline'); ?></div>
	</div>
</section>

<section class="content-section panel-section"" role="main">
		<div class="compartment">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!--<header class="header">
<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>-->
<section class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</div>
</section>
<?php get_footer(); ?>