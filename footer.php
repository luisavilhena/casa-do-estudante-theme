	<footer>
		<address>
			<?php echo carbon_get_theme_option('address');  ?>
		</address>
		<div class="footer-social">
			<a target="_blank" href="<?php echo carbon_get_theme_option('email'); ?>">Fale conosco</a>
			<div>
				<a target="_blank" href="<?php echo carbon_get_theme_option('facebook'); ?>">
					<?php require('resources/icons/facebook.svg'); ?>
				</a>
				<a target="_blank" href="<?php echo carbon_get_theme_option('instagram'); ?>">
					<?php require('resources/icons/instagram.svg'); ?>
				</a>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>

	</body>
</html>
