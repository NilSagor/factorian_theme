<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package factorian
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
		<?php if (is_active_sidebar('factorian_footer')): ?>
		
			<div class="row">
				<?php dynamic_sidebar('factorian_footer'); ?>
			</div>
		<?php endif; ?>
		<div class="row">
			<div class="col-md-12">
				<div class="copyright">
					<?php esc_html_e('© 2016 Your Site Name.','factorian_theme'); ?>
				</div>
			</div>
		</div>
		</div>


		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
