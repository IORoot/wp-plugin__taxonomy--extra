<?php

add_action( 'plugins_loaded', function() {
    do_action('register_andyp_plugin', [
        'title'     => 'Taxonomy Extra Fields',
        'icon'      => 'table-row-plus-after',
        'color'     => '#D0C8B3',
        'path'      => __FILE__,
    ]);
} );