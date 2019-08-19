<?php

function tnt_enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'tnt_enqueue_parent_styles' );

function my_login_stylesheet() {
   wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri() . '/style-login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );


function query_js() {
 
	wp_enqueue_script( 'query_js', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), '3.4.1', true); 
}

function placeholder() {
   wp_enqueue_script( 'nineteen-child', get_stylesheet_directory_uri().'/script.js', array( 'jquery' ), 1.0 );
   }
add_action( 'login_enqueue_scripts', 'placeholder', 10 );


function dcms_insertar_google_fonts(){
    $url = "https://fonts.googleapis.com/css?family=Montserrat&display=swap";
    wp_enqueue_style('google_fonts', $url);
 }
add_action("login_enqueue_scripts", "dcms_insertar_google_fonts");



?>