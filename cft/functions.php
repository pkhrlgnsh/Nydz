<?php
// Enqueue child theme styles with time as version
function my_astra_child_enqueue_styles() {
    // Parent theme stylesheet
    $parent_style = 'astra-style'; // This is the handle of Astra's main stylesheet

    // Enqueue parent theme stylesheet
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2');
    // Enqueue child theme stylesheet with time as version
    wp_enqueue_style('child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        time() // Using current time as version
    );
}

add_action('wp_enqueue_scripts', 'my_astra_child_enqueue_styles');
