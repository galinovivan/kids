<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 13.06.17
 * Time: 11:10
 */

add_theme_support('post_thumbnails');
set_post_thumbnail_size(825, 510, true);

add_theme_support( 'post-formats', array(
    'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
) );

add_theme_support( 'custom-logo', array(
    'height'      => 248,
    'width'       => 248,
    'flex-height' => true,
) );


function kids_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Widget Area', 'twentyfifteen' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'kids_widgets_init' );
wp_enqueue_script( 'jquery' );

function kids_scrips() {
    wp_enqueue_style('kids_styles', get_template_directory_uri() . '/assets/css/common.css');
    wp_enqueue_script('bootstrap_custom', get_template_directory_uri() .
        '/assets/libs/bootstrap-sass/assets/javascripts/bootstrap.min.js');
}

add_action('wp_enqueue_scripts', 'kids_scrips');