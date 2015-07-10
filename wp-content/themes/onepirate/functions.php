<?php

add_action( 'wp_enqueue_scripts', 'one_pirate_enqueue_styles' );
function one_pirate_enqueue_styles() {
	
	wp_enqueue_style( 'one_pirate_font_roboto', '//fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic');
	
	wp_enqueue_style( 'one_pirate_font_titillium', '//fonts.googleapis.com/css?family=Titillium+Web:400,300,300italic,200italic,200,400italic,600,600italic,700,700italic,900');
	
	wp_enqueue_style( 'zerif-style', get_template_directory_uri() . '/style.css', array('zerif_bootstrap_style') );

}

function one_pirate_custom_script_fix() {
	wp_enqueue_script('one_pirate_script', get_stylesheet_directory_uri() .'/js/one_pirate_script.js', array('jquery'), '201202067', true); 
	
	wp_enqueue_script('one_pirate_nicescroll',get_stylesheet_directory_uri().'/js/jquery.nicescroll.js',array('jquery'),'12121',true);
    wp_enqueue_script('one_pirate_nicescroll-script',get_stylesheet_directory_uri().'/js/zerif-nicescroll.js',array('jquery','one_pirate_nicescroll'),'12121',true);	
}

add_action( 'wp_enqueue_scripts', 'one_pirate_custom_script_fix' );