<?php
/**
 * Provide a admin area view for the plugin
 *
 * Getting Started Responsive Addons for Elementor Tab
 *
 * @link       https://cyberchimps.com/
 * @since      5.0.3.2
 *
 * @package responsive
 */

?>
<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2 col-12">
			<div class="responsive-theme-rst-content">
				<div class="responsive-theme-text-content text-center">
					<img class="responsive-theme-responsive-logo" src="<?php echo esc_url( RESPONSIVE_THEME_URI ) . 'admin/images/rea.svg'; ?>" class="rounded mx-auto d-block" alt="">
					<div class="responsive-theme-brand-text mt-4">
						<p class="responsive-theme-rst-brand-name"><?php esc_html( 'Responsive Addons for Elementor' ); ?></p>
						<p class="responsive-theme-rst-brand-desc"><?php esc_html_e( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, voluptatibus cupiditate consequuntur dolore iusto ad sequi nesciunt harum illum. In hic, sequi nihil blanditiis nisi molestias quibusdam quidem odit exercitationem?', 'responsive' ); ?></p>
					</div>
					<div class="responsive-theme-rst-button-section">
						<?php echo Responsive_Plugin_Install_Helper::instance()->responsive_install_plugin_button( 'responsive-addons-for-elementor', 'rae', 'responsive_addons_for_elementor', 'Install & Activate' ); //phpcs:ignore ?>
						<div class="responsive-theme-rst-learn-more">
							<a href="https://wordpress.org/plugins/responsive-addons-for-elementor/" target="_blank"><?php esc_html_e( 'Learn More', 'responsive' ); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
