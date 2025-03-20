<?php

/**
 * Plugin Name:       Wedding - Post Types
 * Plugin URI:        https://github.com/Ginagonzalezgut
 * Description:       Add Hotels Post Types
 * Author:            Gina González
 * Author URI:       https://github.com/Ginagonzalezgut
 * Version:           1.0.0.0
 * Text Domain:       wedding

 */



if (!defined('ABSPATH')) die();

// Registrar Custom Post Type
function wedding_Hotels_post_type()
{

    $labels = array(
        'name'                  => _x('Hotels', 'Post Type General Name', 'wedding'),
        'singular_name'         => _x('Hotel', 'Post Type Singular Name', 'wedding'),
        'menu_name'             => __('Hotels', 'wedding'),
        'name_admin_bar'        => __('Hotel', 'wedding'),
        'archives'              => __('Archivo', 'wedding'),
        'attributes'            => __('Atributos', 'wedding'),
        'parent_item_colon'     => __('Hotel Padre', 'wedding'),
        'all_items'             => __('Todas Los Hotels', 'wedding'),
        'add_new_item'          => __('Agregar Hotel', 'wedding'),
        'add_new'               => __('Agregar Hotel', 'wedding'),
        'new_item'              => __('Nueva Hotel', 'wedding'),
        'edit_item'             => __('Editar Hotel', 'wedding'),
        'update_item'           => __('Actualizar Hotel', 'wedding'),
        'view_item'             => __('Ver Hotel', 'wedding'),
        'view_items'            => __('Ver Hotels', 'wedding'),
        'search_items'          => __('Buscar Hotel', 'wedding'),
        'not_found'             => __('No Encontrado', 'wedding'),
        'not_found_in_trash'    => __('No Encontrado en Papelera', 'wedding'),
        'featured_image'        => __('Imagen Destacada', 'wedding'),
        'set_featured_image'    => __('Guardar Imagen destacada', 'wedding'),
        'remove_featured_image' => __('Eliminar Imagen destacada', 'wedding'),
        'use_featured_image'    => __('Utilizar como Imagen Destacada', 'wedding'),
        'insert_into_item'      => __('Insertar en Hotel', 'wedding'),
        'uploaded_to_this_item' => __('Agregado en Hotel', 'wedding'),
        'items_list'            => __('Lista de Hotels', 'wedding'),
        'items_list_navigation' => __('Navegación de Hotels', 'wedding'),
        'filter_items_list'     => __('Filtrar Hotels', 'wedding'),
    );
    $args = array(
        'label'                 => __('Hotel', 'wedding'),
        'description'           => __('Hotels para el Sitio Web', 'wedding'),
        'labels'                => $labels,
        'supports'              => array('title', 'thumbnail'),
        'hierarchical'          => true, // true = posts , false = paginas
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('wedding_Hotels', $args);
}
add_action('init', 'wedding_Hotels_post_type', 0);
