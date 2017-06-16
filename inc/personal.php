<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16.06.17
 * Time: 12:26
 */
if ( ! function_exists( 'personal' ) ) {
    function personal() {
        $labels = array(
            'name'                => _x( 'Сотрудники', 'Post Type General Name', 'personal' ),
            'singular_name'       => _x( 'Сотрудники', 'Post Type Singular Name', 'personal' ),
            'menu_name'           => __( 'Сотрудники', 'personal' ),
            'parent_item_colon'   => __( 'Родительский:', 'personal' ),
            'all_items'           => __( 'Все сотрудники', 'personal' ),
            'view_item'           => __( 'Просмотреть', 'personal' ),
            'add_new_item'        => __( 'Добавить нового сотрудники', 'personal' ),
            'add_new'             => __( 'Добавить нового', 'personal' ),
            'edit_item'           => __( 'Редактировать', 'personal' ),
            'update_item'         => __( 'Обновить', 'personal' ),
            'search_items'        => __( 'Найти', 'personal' ),
            'not_found'           => __( 'Не найдено', 'personal' ),
            'not_found_in_trash'  => __( 'Не найдено в корзине', 'personal' ),
        );
        $args = array(
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes'),
            'taxonomies'          => array( 'post' ), // категории, которые мы создадим ниже
            'public'              => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-universal-access',
        );
        register_post_type( 'personal', $args );
    }
    add_action( 'init', 'personal', 0 ); // инициализируем
}