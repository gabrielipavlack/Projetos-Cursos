<footer>
			<nav class="nav-footer">
			<?php 
$args = array(
	'menu' => 'principal',
	'container' => false
);
wp_nav_menu( $args );

?>
			</nav>

<!-- função do PHP Wordpress para pegar o ano atual -->
			<p><?php bloginfo('name'); ?> © <?php echo date("Y"); ?>. Alguns direitos reservados.</p>
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>