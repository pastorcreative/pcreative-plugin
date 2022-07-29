<?php

namespace Inc\Pages;

class Admin
{       
        public function register() {
            add_action('admin_menu', array( $this, 'add_admin_pages' ));
        }
        public function add_admin_pages() {
            add_menu_page('PCreative Plugin', 'pCreative Plugin', 'manage_options','pcreative-plugin', array($this,'render_admin_pages'), 'dashicons-cloud', 110);
        }
        public function render_admin_pages(){
            require_once PLUGIN_PATH . 'templates/admin.php';
        }
}