<?php

/*
* Plugin Name: Мой первый плагин
*/

// Register Custom Post Type
function cities_posttype() {

	$labels = array(
		'name'                  => _x( 'Города', 'Post Type General Name', 'cities' ),
		'singular_name'         => _x( 'Город', 'Post Type Singular Name', 'cities' ),
		'menu_name'             => __( 'Города', 'cities' ),
		'name_admin_bar'        => __( 'Города', 'cities' ),
		'archives'              => __( 'Архив Городов', 'cities' ),
		'attributes'            => __( 'Атрибут города', 'cities' ),
		'parent_item_colon'     => __( 'Parent Item:', 'cities' ),
		'all_items'             => __( 'Все города', 'cities' ),
		'add_new_item'          => __( 'Добавить новый город', 'cities' ),
		'add_new'               => __( 'Добавить новую запись', 'cities' ),
		'new_item'              => __( 'Новый город', 'cities' ),
		'edit_item'             => __( 'Изменить запись', 'cities' ),
		'update_item'           => __( 'Обновить запись', 'cities' ),
		'view_item'             => __( 'Просмотреть запись', 'cities' ),
		'view_items'            => __( 'Посмотреть записи', 'cities' ),
		'search_items'          => __( 'Поиск городов', 'cities' ),
		'not_found'             => __( 'Not found', 'cities' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'cities' ),
		'factories_image'        => __( 'factories Image', 'cities' ),
		'set_factories_image'    => __( 'Set factories image', 'cities' ),
		'remove_factories_image' => __( 'Remove factories image', 'cities' ),
		'use_factories_image'    => __( 'Use as factories image', 'cities' ),
		'insert_into_item'      => __( 'Insert into item', 'cities' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'cities' ),
		'items_list'            => __( 'Items list', 'cities' ),
		'items_list_navigation' => __( 'Items list navigation', 'cities' ),
		'filter_items_list'     => __( 'Filter items list', 'cities' ),
	);
	$args = array(
		'label'                 => __( 'Город', 'cities' ),
		'description'           => __( 'Города', 'cities' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-building',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'cities', $args );

}
add_action( 'init', 'cities_posttype', 0 );

// Register Custom Post Type
function factory_posttype() {

	$labels = array(
		'name'                  => _x( 'Предприятие', 'Post Type General Name', 'factory' ),
		'singular_name'         => _x( 'Предприятие', 'Post Type Singular Name', 'factory' ),
		'menu_name'             => __( 'Предприятие', 'factory' ),
		'name_admin_bar'        => __( 'Предприятие', 'factory' ),
		'archives'              => __( 'Архив Предприятий', 'factory' ),
		'attributes'            => __( 'Атрибут Предприятия', 'factory' ),
		'parent_item_colon'     => __( 'Parent Item:', 'factory' ),
		'all_items'             => __( 'Все Предприятия', 'factory' ),
		'add_new_item'          => __( 'Добавить новое Предприятие', 'factory' ),
		'add_new'               => __( 'Добавить новую запись', 'factory' ),
		'new_item'              => __( 'Новое Предприятие', 'factory' ),
		'edit_item'             => __( 'Изменить запись', 'factory' ),
		'update_item'           => __( 'Обновить запись', 'factory' ),
		'view_item'             => __( 'Просмотреть запись', 'factory' ),
		'view_items'            => __( 'Посмотреть записи', 'factory' ),
		'search_items'          => __( 'Поиск городов', 'factory' ),
		'not_found'             => __( 'Not found', 'factory' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'factory' ),
		'factories_image'        => __( 'factories Image', 'factory' ),
		'set_factories_image'    => __( 'Set factories image', 'factory' ),
		'remove_factories_image' => __( 'Remove factories image', 'factory' ),
		'use_factories_image'    => __( 'Use as factories image', 'factory' ),
		'insert_into_item'      => __( 'Insert into item', 'factory' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'factory' ),
		'items_list'            => __( 'Items list', 'factory' ),
		'items_list_navigation' => __( 'Items list navigation', 'factory' ),
		'filter_items_list'     => __( 'Filter items list', 'factory' ),
	);
	$args = array(
		'label'                 => __( 'Предприятие', 'factory' ),
		'description'           => __( 'Предприятие', 'factory' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-store',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'factory', $args );

}
add_action( 'init', 'factory_posttype', 0 );
function factory_data ($factories_posts) {
    if( $factories_posts ): ?>
        <ul>
        <?php foreach( $factories_posts as $factories_post ): 
            $permalink = get_permalink( $factories_post->ID );
            $title = get_the_title( $factories_post->ID );
            $custom_field = get_field( 'field_name', $factories_post->ID );
            ?>
            <li>
                <a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
                <span>A custom field from this post: <?php echo esc_html( $custom_field ); ?></span>
            </li>
        <?php endforeach; ?>
        </ul>
    <?php endif;
}
function append_slider( $content ) {
    $args = array( 'post_type' => 'cities', 'posts_per_page' => -1 );
    $loop = new WP_Query( $args );
    if($loop->have_posts()){
    while ( $loop->have_posts() ) : $loop->the_post();
    echo '<div class="entry-content">';
    the_title();
    the_field('area');
    factory_data(get_field('factory'));
    echo '</div>';
    endwhile;
    }
    wp_reset_query();
    return $content; 
}
add_filter( 'the_content', 'append_slider');

add_action( 'wp_enqueue_scripts', 'plugin_style' );
function plugin_style() {
	wp_enqueue_style ('style', plugin_dir_url(__FILE__) . '/style.css');
	wp_enqueue_script( 'script', plugin_dir_url(__FILE__) . '/script.js', array(), '1.0.0', true );
}