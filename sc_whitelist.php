<?php
/*
Plugin Name: Whitelist the Bakery
Description: Shortcake Bakery allows whitelisting of scripts and iframes. Here's the list we support.
Version: 0.1
*/
add_filter( 'shortcake_bakery_whitelisted_script_domains', function(){
    return array(
      'ajax.googleapis.com',
      'storify.com',
    );
    });
    
    add_filter( 'shortcake_bakery_whitelisted_iframe_domains', function(){
    return array(
      'tv.hwdsb.on.ca',
      'storify.com',      
    );
    });
