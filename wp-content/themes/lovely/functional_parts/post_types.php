<?php 

function kozak_register_cpt(){

    $labels = array(
		'name'                  => _x( 'Послуги', 'Послуги General Name', 'text_domain' ),
		'singular_name'         => _x( 'Послуга', 'Послуги Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Послуги', 'text_domain' ),
		'name_admin_bar'        => __( 'Послуги', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Всі Послуги', 'text_domain' ),
		'add_new_item'          => __( 'Додати нову Послугу', 'text_domain' ),
		'add_new'               => __( 'Додати нову', 'text_domain' ),
		'new_item'              => __( 'Нова Послуга', 'text_domain' ),
		'edit_item'             => __( 'Редагувати послугу', 'text_domain' ),
		'update_item'           => __( 'Оновити Послугу', 'text_domain' ),
		'view_item'             => __( 'Показати Послугу', 'text_domain' ),
		'view_items'            => __( 'Показати Всі Послуги', 'text_domain' ),
		'search_items'          => __( 'Пошук Послуги', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Список Послуг', 'text_domain' ),
		'items_list_navigation' => __( 'Навігація по списку', 'text_domain' ),
		'filter_items_list'     => __( 'Фільтр списку', 'text_domain' ),
	);

	$args = array(
		'label'                 => __( 'Послуги', 'text_domain' ),
		'description'           => __( 'Послуги Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'author' ,'thumbnail' , 'editor', 'excerpt', 'content', 'taxonomy' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'services', $args );



    $labels_reply = array(
        'name'               => 'Відгуки',
        'singular_name'      => 'Відгук', 
        'add_new'            => 'Додати новий',
        'add_new_item'       => 'Додати новий відгук',
        'edit_item'          => 'Рудагувати відгук',
        'new_item'           => 'Новий відгук',
        'view_item'          => 'Подивитись відгук',
        'search_items'       => 'Знайти Відгук',
        'not_found'          => 'Відгукув не знайдено',
        'not_found_in_trash' => 'В корзині відгуків не знайдено',
        'menu_name'          => 'Відгуки'

    );

    $args_reply = array(
		'labels'             => $labels_reply,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	);

    register_post_type('replies', $args_reply );


}
add_action('init', 'kozak_register_cpt');
