<?php
/**
 * @package pcreative-plugin
 */

 namespace Inc\Base;

 class Enqueue
 {
    public function register() {
         add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }
    public function enqueue()
    {
        // encolamos nuestros scripts
        wp_enqueue_style('styles-css', PLUGIN_URL . '/assets/style.css');
        wp_enqueue_script('script-js', PLUGIN_URL . '/assets/script.js');
    }
 }