<?php
add_action('customize_register', function (WP_Customize_Manager $manager) {
    $manager->add_section('scpi_appearance', [
        'title' => __('Theme appearance')
    ]);

    $manager->add_setting('logo');

    $manager->add_control(new WP_Customize_Image_Control($manager, 'logo', [
        'label' => __('Logo', 'scpi'),
        'section' => 'scpi_appearance'
    ]));
});