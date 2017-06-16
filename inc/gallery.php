<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16.06.17
 * Time: 14:38
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16.06.17
 * Time: 12:26
 */
if ( ! function_exists( 'gallery' ) ) {
    function gallery() {
        $labels = array(
            'name'                => _x( 'Альбомы', 'Post Type General Name', 'gallery' ),
            'singular_name'       => _x( 'Альбомы', 'Post Type Singular Name', 'gallery' ),
            'menu_name'           => __( 'Альбомы', 'gallery' ),
            'parent_item_colon'   => __( 'Родительский:', 'gallery' ),
            'all_items'           => __( 'Все альбомы', 'gallery' ),
            'view_item'           => __( 'Просмотреть', 'gallery' ),
            'add_new_item'        => __( 'Добавить новый альбом', 'gallery' ),
            'add_new'             => __( 'Добавить новый', 'gallery' ),
            'edit_item'           => __( 'Редактировать', 'gallery' ),
            'update_item'         => __( 'Обновить', 'gallery' ),
            'search_items'        => __( 'Найти', 'gallery' ),
            'not_found'           => __( 'Не найдено', 'gallery' ),
            'not_found_in_trash'  => __( 'Не найдено в корзине', 'gallery' ),
        );
        $args = array(
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'),
            'taxonomies'          => array( 'post' ), // категории, которые мы создадим ниже
            'public'              => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-format-gallery',
        );
        register_post_type( 'gallery', $args );
    }
    add_action( 'init', 'gallery', 0 ); // инициализируем
}