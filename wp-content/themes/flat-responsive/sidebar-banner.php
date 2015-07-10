<?php
/**
 * The Banner Sidebar
 * @package flat-responsive
 * @since 1.0.0
 */

if ( ! is_active_sidebar( 'banner-wide' ) ) {
	return;
}
?>

<?php dynamic_sidebar( 'banner-wide' ); ?>



