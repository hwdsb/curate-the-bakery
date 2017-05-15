<?php
/*
Plugin Name: Curate the Bakery
Description: Shortcake Bakery offers lots of sweets. The dentist has arrived to clean house.
Version: 0.1
*/

add_filter( 'shortcake_bakery_shortcode_classes', function() {
	return array(
		//'Shortcake_Bakery\Shortcodes\ABC_News',
		'Shortcake_Bakery\Shortcodes\Facebook',
		'Shortcake_Bakery\Shortcodes\Flickr',
		//'Shortcake_Bakery\Shortcodes\Giphy',
		//'Shortcake_Bakery\Shortcodes\GoogleDocs',
		//'Shortcake_Bakery\Shortcodes\Guardian',
		//'Shortcake_Bakery\Shortcodes\Iframe',
		'Shortcake_Bakery\Shortcodes\Image_Comparison',
		//'Shortcake_Bakery\Shortcodes\Infogram',
		'Shortcake_Bakery\Shortcodes\Instagram',
		'Shortcake_Bakery\Shortcodes\Live_Photo',
		//'Shortcake_Bakery\Shortcodes\Livestream',
		//'Shortcake_Bakery\Shortcodes\PDF',
		//'Shortcake_Bakery\Shortcodes\Playbuzz',
		//'Shortcake_Bakery\Shortcodes\Rap_Genius',
		//'Shortcake_Bakery\Shortcodes\Scribd',
		//'Shortcake_Bakery\Shortcodes\Script',
		//'Shortcake_Bakery\Shortcodes\Silk',
		'Shortcake_Bakery\Shortcodes\SoundCloud',
		'Shortcake_Bakery\Shortcodes\Twitter',
		//'Shortcake_Bakery\Shortcodes\Videoo',
		'Shortcake_Bakery\Shortcodes\Vimeo',
		//'Shortcake_Bakery\Shortcodes\Vine',
		'Shortcake_Bakery\Shortcodes\YouTube',
	);
});

add_filter( 'shortcake_bakery_show_add_embed', '__return_false' );
