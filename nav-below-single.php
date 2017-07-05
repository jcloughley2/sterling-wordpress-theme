<nav id="nav-below" class="navigation" role="navigation">

	<?php $prev = get_previous_post( true ); ?>

	<?php if ( is_object( $prev ) ) : ?>


			<button class="post-prev" rel="<?php echo esc_url( get_permalink( $prev->ID ) ); ?>">Previous</button>

	<?php endif; ?>

	<?php $next = get_next_post( true ); ?>

	<?php if ( is_object( $next ) ) : ?>


			<button class="post-next" rel="<?php echo esc_url( get_permalink( $next->ID ) ); ?>">Next</button>
 

	<?php endif; ?>

</nav>