<?php
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/style.css');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/main.js', [], false , true);
});