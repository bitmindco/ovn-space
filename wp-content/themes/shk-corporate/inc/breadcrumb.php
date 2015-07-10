<?php
add_action('style_breadcrumb', 'shk_corporate_breadcrumb_fnc');

function shk_corporate_breadcrumb_fnc() {
	global $post;
	?>
	<div class="style_breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<?php
					include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
					if(is_plugin_active('woocommerce/woocommerce.php')) {
						if (is_shop()) {
							echo '<h1>'. __('Shop', 'shk-corporate').'</h1>';
						}
						else {
							if (!is_404()) { ?>
								<h1><?php the_title(); ?></h1>
							<?php }
							else {
								echo '<h1>'. __('Page Not Found', 'shk-corporate').'</h1>';
							}
						}
					}	
					else {
						if (!is_404()) { ?>
								<h1><?php the_title(); ?></h1>
							<?php }
							else {
								echo '<h1>'. __('Page Not Found', 'shk-corporate').'</h1>';
							}
					}
					
					

					?>
				</div>
				<div class="col-md-8 breadcrumb_items">
					<?php
					if(function_exists('bcn_display')) {
                        bcn_display();
                    }
                    ?>
                    
				</div>
			</div>
		</div>
	</div>
	<?php } ?>