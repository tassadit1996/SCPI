<?php
add_action('after_setup_theme', function() {
    register_nav_menu('header', 'Navigation principale', 'scpi');
});
add_action('widgets_init', function() {
    register_sidebar([
        'id' => 'footer',
        'name'=>'Pied de page', 'scpi',
        'before_title' => '<div class="footer__title">',
        'after_title'=>'</div>',
        'before_widget' => '<div class="footer__col">',
        'after_widget'=>'</div>'
    ]);
});



