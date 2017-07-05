<?php
/*
Template Name: Profile Post
Template Post Type: post, page, product
 */
?>

<section class="profile-post-modal" id="content" role="main">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>
	<?php kdmfi_the_featured_image( 'featured-image-2', 'full' ); ?>
	<h2 class="panel-title"><?php the_title(); ?></h2> 
	<span class="profile-role"><?php the_meta(); ?></span>
</header>
<section class="entry-content">
<?php the_content(); ?>
<?php edit_post_link(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
</article>
<?php endwhile; endif; ?>
</section>
