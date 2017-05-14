<?php get_header(); ?>
	<p>LALALALA</P>
<section class="services-section panel-section" role="main">

	<div class="compartment">
	<?php the_field('service_content'); ?>
	</div>
</section>

<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>


<?php get_sidebar(); ?>
<?php get_footer(); ?>