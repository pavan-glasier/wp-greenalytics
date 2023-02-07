<?php 

add_action( 'wp_enqueue_scripts', 'greenalytics_theme_enqueue_styles' );
function greenalytics_theme_enqueue_styles() {
    $parenthandle = 'parent-style'; // This is 'greenalytics-style' for the greenalytics theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}
?>