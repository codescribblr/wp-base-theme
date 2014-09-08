<div class="footer">
	<div class="container">
		<div class="row">
          	<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'list-unstyled', 'container' => false ) ); ?>
		</div>

		<p class="copyright text-right">Copyright <?php echo date('Y'); ?> &copy; <?php bloginfo('name'); ?> &nbsp; | &nbsp; Powered By <a href="http://fuelingtheweb.com">Fueling the Web</a></p>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
