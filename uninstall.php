<?php

/**
 * Triggered when plugin uninstall
 * @package pcreative-plugin
 */

if( ! defined('WP_UNINSTALL_PLUGIN') ) {
    die;
}

//Borramos la info de la database wordpress mode.

$books = get_posts( array('post_type'=>'book', 'numberposts'=> -1));

foreach ( $books as $book ) {
    wp_delete_post($book->ID, true);    
}

//Borramos la info de la database SQL mode.

/* global $wpdb;

$wpdb->query("DELETE FROM wp_posts WHERE posts_type = 'book'");
$wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)"); */