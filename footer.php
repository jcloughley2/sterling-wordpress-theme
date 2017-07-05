<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo">
	<div class="compartment">
		<div id="site-title">
			<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
		</div>
		<div id="site-desc">
			<p>Sterling Associates partners with nonprofit organizations to advance their missions and create lasting positive impact in communities.</p>
		</div>
		<div id="site-details">	
			<nav id="footer-menu">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			</nav>
			<div class="site-utility">
				<nav class="site-social">	
					<ul>
						<li><a href="http://www.facebook.com"></a></li>
						<li><a href="http://www.facebook.com"></a></li>
						<li><a href="http://www.facebook.com"></a></li>
					</ul>
				</nav>
				<div class="site-policy">
					<p>
						2017 sterling associates<br />
						All Rights Reserved.<br />
						<a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/all.js"></script>  