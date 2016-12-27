<?php 
/**
 * Registers a custom post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function prefix_register_post_type()
{
	register_post_type(
		'laptop',
		array(
			'labels'        => array(
				'name'               => __('Laptop', 'text_domain'),
				'singular_name'      => __('Laptop', 'text_domain'),
				'menu_name'          => __('Laptop', 'text_domain'),
				'name_admin_bar'     => __('Laptop', 'text_domain'),
				'all_items'          => __('Tất cả', 'text_domain'),
				'add_new'            => _x('Thêm mới', 'laptop', 'text_domain'),
				'add_new_item'       => __('Thêm Mới Laptop', 'text_domain'),
				'edit_item'          => __('Chỉnh sửa Laptop', 'text_domain'),
				'new_item'           => __('Mới Laptop', 'text_domain'),
				'view_item'          => __('View Laptop', 'text_domain'),
				'search_items'       => __('Search Laptop', 'text_domain'),
				'not_found'          => __('No Laptop found.', 'text_domain'),
				'not_found_in_trash' => __('No Laptop found in Trash.', 'text_domain'),
				'parent_item_colon'  => __('Parent Items:', 'text_domain'),
			),
			'public'        => true,
			'menu_position' => 5,
			'supports'      => array(
				'title',
				'tags',
				'editor',
				'thumbnail',
				'excerpt',
				'custom-fields',
			),
			'taxonomies'    => array(
				'hang',
				'post_tag'
			),
			'has_archive'   => true,
			'rewrite'       => array(
				'slug' => 'laptop',
			),
		)
	);
	
	register_post_type(
		'linh-kien',
		array(
			'labels'        => array(
				'name'               => __('Linh kiện', 'text_domain'),
				'singular_name'      => __('Linh kiện', 'text_domain'),
				'menu_name'          => __('Linh kiện', 'text_domain'),
				'name_admin_bar'     => __('Linh kiện', 'text_domain'),
				'all_items'          => __('Tất cả', 'text_domain'),
				'add_new'            => _x('Thêm mới', 'linh-kien', 'text_domain'),
				'add_new_item'       => __('Thêm Mới Linh kiện', 'text_domain'),
				'edit_item'          => __('Chỉnh sửa Linh kiện', 'text_domain'),
				'new_item'           => __('Mới Linh kiện', 'text_domain'),
				'view_item'          => __('View Linh kiện', 'text_domain'),
				'search_items'       => __('Search Linh kiện', 'text_domain'),
				'not_found'          => __('No Linh kiện found.', 'text_domain'),
				'not_found_in_trash' => __('No Linh kiện found in Trash.', 'text_domain'),
				'parent_item_colon'  => __('Parent Items:', 'text_domain'),
			),
			'public'        => true,
			'menu_position' => 5,
			'taxonomies' => array('post_tag'),
			'supports'      => array(
				'title',
				'tags',
				'editor',
				'thumbnail',
				'excerpt',
				'custom-fields',
			),
			'has_archive'   => true,
			'rewrite'       => array(
				'slug' => 'linh-kien',
			),
		)
	);

	register_post_type(
		'dich-vu',
		array(
			'labels'        => array(
				'name'               => __('Dịch vụ', 'text_domain'),
				'singular_name'      => __('Dịch vụ', 'text_domain'),
				'menu_name'          => __('Dịch vụ', 'text_domain'),
				'name_admin_bar'     => __('Dịch vụ', 'text_domain'),
				'all_items'          => __('Tất cả', 'text_domain'),
				'add_new'            => _x('Thêm mới', 'dich-vu', 'text_domain'),
				'add_new_item'       => __('Thêm Mới Dịch vụ', 'text_domain'),
				'edit_item'          => __('Chỉnh sửa Dịch vụ', 'text_domain'),
				'new_item'           => __('Mới Dịch vụ', 'text_domain'),
				'view_item'          => __('View Dịch vụ', 'text_domain'),
				'search_items'       => __('Search Dịch vụ', 'text_domain'),
				'not_found'          => __('No Dịch vụ found.', 'text_domain'),
				'not_found_in_trash' => __('No Dịch vụ found in Trash.', 'text_domain'),
				'parent_item_colon'  => __('Parent Items:', 'text_domain'),
			),
			'public'        => true,
			'menu_position' => 5,
			'taxonomies' => array('post_tag'),
			'supports'      => array(
				'title',
				'tags',
				'editor',
				'thumbnail',
				'excerpt',
				'custom-fields',
			),
			// 'taxonomies'    => array(
			// 	'loai-linh-kien'
			// ),
			'has_archive'   => true,
			'rewrite'       => array(
				'slug' => 'dich-vu',
			),
		)
	);
}

add_action('init', 'prefix_register_post_type');


/**
 * Registers a custom taxonomy.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function prefix_register_taxonomy()
{
	register_taxonomy(
		'hang',
		array(
			'laptop',
		),
		array(
			'labels'            => array(
				'name'              => _x('Hãng', 'laptop', 'text_domain'),
				'singular_name'     => _x('Hãng', 'laptop', 'text_domain'),
				'menu_name'         => __('Hãng', 'text_domain'),
				'all_items'         => __('All Hãng', 'text_domain'),
				'edit_item'         => __('Chỉnh sửa Hãng', 'text_domain'),
				'view_item'         => __('View Hãng', 'text_domain'),
				'update_item'       => __('Cập nhật Hãng', 'text_domain'),
				'add_new_item'      => __('Thêm mới Hãng', 'text_domain'),
				'new_item_name'     => __('Mới Hãng', 'text_domain'),
				'parent_item'       => __('Parent Hãng', 'text_domain'),
				'parent_item_colon' => __('Parent Hãng:', 'text_domain'),
				'search_items'      => __('Search Hãng', 'text_domain'),
			),
			'show_admin_column' => true,
			'hierarchical'      => true,
			'query_var' => true,
			'rewrite'           => array(
				'slug' => 'laptop/hang',
			),
		)
	);

	register_taxonomy(
		'gia',
		array(
			'laptop',
		),
		array(
			'labels'            => array(
				'name'              => _x('Giá', 'laptop', 'text_domain'),
				'singular_name'     => _x('Giá', 'laptop', 'text_domain'),
				'menu_name'         => __('Giá', 'text_domain'),
				'all_items'         => __('All Giá', 'text_domain'),
				'edit_item'         => __('Chỉnh sửa Giá', 'text_domain'),
				'view_item'         => __('View Giá', 'text_domain'),
				'update_item'       => __('Cập nhật Giá', 'text_domain'),
				'add_new_item'      => __('Thêm mới Giá', 'text_domain'),
				'new_item_name'     => __('Mới Giá', 'text_domain'),
				'parent_item'       => __('Parent Giá', 'text_domain'),
				'parent_item_colon' => __('Parent Giá:', 'text_domain'),
				'search_items'      => __('Search Giá', 'text_domain'),
			),
			'show_admin_column' => true,
			'hierarchical'      => true,
			'query_var' => true
		)
	);

	register_taxonomy(
		'loai-linh-kien',
		array(
			'linh-kien',
		),
		array(
			'labels'            => array(
				'name'              => _x('Loại linh kiện', 'linh-kien', 'text_domain'),
				'singular_name'     => _x('Loại linh kiện', 'linh-kien', 'text_domain'),
				'menu_name'         => __('Loại linh kiện', 'text_domain'),
				'all_items'         => __('All Loại linh kiện', 'text_domain'),
				'edit_item'         => __('Chỉnh sửa Loại linh kiện', 'text_domain'),
				'view_item'         => __('View Loại linh kiện', 'text_domain'),
				'update_item'       => __('Cập nhật Loại linh kiện', 'text_domain'),
				'add_new_item'      => __('Thêm mới Loại linh kiện', 'text_domain'),
				'new_item_name'     => __('Mới Loại linh kiện', 'text_domain'),
				'parent_item'       => __('Parent Loại linh kiện', 'text_domain'),
				'parent_item_colon' => __('Parent Loại linh kiện:', 'text_domain'),
				'search_items'      => __('Search Loại linh kiện', 'text_domain'),
			),
			'show_admin_column' => true,
			'hierarchical'      => true,
			'query_var' => true
		)
	);

}

add_action('init', 'prefix_register_taxonomy', 0);


function prefix_flush_rewrite_rules()
{
	flush_rewrite_rules();
}

add_action('after_switch_theme', 'prefix_flush_rewrite_rules');


function add_my_post_types_to_query( $query ) {
	if ( is_home() && $query->is_main_query() )
		$query->set( 'post_type', array( 'post', 'laptop' ) );
	return $query;
}
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );