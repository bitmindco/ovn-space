<?php
/*
=================================================
Shk Corporate Theme Options 
=================================================
*/

add_action( 'wp_enqueue_scripts', 'shk_corporate_enqueue_styles' );
function shk_corporate_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

/*
=================================================
Include BreadCrumb files
=================================================
*/
include_once('inc/breadcrumb.php');
?>