<?php

/*
Plugin Name: _ANDYP - Taxonomy Extra Fields
Plugin URI: http://londonparkour.com
Description: <em>All Taxonomies - Taxonomy Extra Fields (Images, etc...)</em>
Version: 1.0
Author: Andy Pearson
Author URI: http://londonparkour.com
*/


define( 'ANDYP_TAXONOMY_EXTRA_PATH', __DIR__ );
define( 'ANDYP_TAXONOMY_EXTRA_URL', plugins_url( '/', __FILE__ ) );

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                    Register with ANDYP Plugins                          │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/andyp_plugin_register.php';

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                         Use composer autoloader                         │
// └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/vendor/autoload.php';

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                        	   Initialise    		                     │
// └─────────────────────────────────────────────────────────────────────────┘
new \andyp\taxonomy\extra\initialise;
