<?php

function my_theme_setup() {
    register_nav_menus(
        array('site-menu' => 'Header menu')
    );
}
add_action('after_setup_theme', 'my_theme_setup');
