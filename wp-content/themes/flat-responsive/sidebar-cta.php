<?php
/**
 * The Call to Action Sidebar
 * @package flat_responsive
 * @since 1.0.0
 */

if ( ! is_active_sidebar( 'cta' ) ) {
    return;
}
?>
<div class="fr_widgets_cta" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php dynamic_sidebar( 'cta' ); ?>
            </div>
        </div>
    </div>
</div>