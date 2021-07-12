<?php

function eighty_sheet_enqueue() {
//	Stylesheets Sheets
	wp_enqueue_style( 'eighty-nine', get_template_directory_uri() . '/css/eighty-nine.css', [], '1.0.0', 'all' );

//	Scripts Sheets
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', includes_url() . '/js/jquery/jquery.js', [], '', true );
	wp_enqueue_script( 'jquery-migrate', includes_url() . '/js/jquery/jquery-migrate.js', [], '', true );
	wp_enqueue_script( 'eighty-nine', get_template_directory_uri() . '/js/eighty-nine.js', ['jquery'], '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'eighty_sheet_enqueue' );