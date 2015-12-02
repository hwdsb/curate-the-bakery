<?php
/*
Plugin Name: Curate the Bakery
Description: Shortcake Bakery is Awesome. Sites with dietary concerns can comment out the sweets they don't need.
Version: 0.1
*/
add_filter( 'shortcode_ui_shortcodes', function( $registered_shortcodes ) {
   unset( $registered_shortcodes['giphy'] );
   unset( $registered_shortcodes['infogram'] );
	 unset( $registered_shortcodes['facebook'] );
	 unset( $registered_shortcodes['playbuzz'] );
	 unset( $registered_shortcodes['rap-genius'] );
	 unset( $registered_shortcodes['scribd'] );
	 // unset( $registered_shortcodes['iframe'] );
	 unset( $registered_shortcodes['script'] );
	 // unset( $registered_shortcodes['pdf'] );
	 // unset( $registered_shortcodes['soundcloud'] );
	 // unset( $registered_shortcodes['twitter'] );
	 unset( $registered_shortcodes['videoo'] );
	 // unset( $registered_shortcodes['vimeo'] );
	 unset( $registered_shortcodes['vine'] );
	 // unset( $registered_shortcodes['youtube'] );
	 unset( $registered_shortcodes['guardian'] );
	 // unset( $registered_shortcodes['flickr'] );
	 unset( $registered_shortcodes['abc-news'] );
	 unset( $registered_shortcodes['livestream'] );
	 // unset( $registered_shortcodes['instagram'] );
	 unset( $registered_shortcodes['silk'] );
	 // unset( $registered_shortcodes['image-comparison'] );
   return $registered_shortcodes;
});
