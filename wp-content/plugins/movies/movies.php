<?php
/**
Plugin Name: Movies
**/

//Kreiranje novog post type-a
function movies_post_type() {
  
    register_post_type( 'movies',
        array(
            'labels' => array(
                'name' => __( 'Movies' ),
                'singular_name' => __( 'Movie' )
            ),
            'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
            'has_archive' => true,
            'rewrite' => true,
            'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'thumbnail' ),
  
        )
    );
}
add_action( 'init', 'movies_post_type', 0 );

//Dodavanje taxonomije
function create_movies_taxonomy() {
    register_taxonomy('categories','movies',array(
        'hierarchical' => false,
        'labels' => array(
            'name' => _x( 'Categories', 'taxonomy general name' ),
            'singular_name' => _x( 'Categorie', 'taxonomy singular name' ),
            'menu_name' => __( 'Categories' ),
            'all_items' => __( 'All Categories' ),
            'edit_item' => __( 'Edit Categories' ), 
            'update_item' => __( 'Update Categories' ),
            'add_new_item' => __( 'Add Categories' ),
            'new_item_name' => __( 'New Categories' ),
        ),
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    ));
}
add_action( 'init', 'create_movies_taxonomy', 0 );

//Kreiranje novog metabox za custom post type movies
function movies_add_custom_box() {
	$screens = ['movies'];
	foreach ( $screens as $screen ) {
		add_meta_box(
			'movies_name_box',                 
			'Movie Title',      
			'show_add_movie_name_box', 
			$screen                           
		);
	}
}
add_action( 'add_meta_boxes', 'movies_add_custom_box' );

//Definisanje HTML-a za metabox
function show_add_movie_name_box( $post ) {
	?>
	<label for="movie_name">Movie name</label><br>
	<input type="text" name="movie_name" id="movie_name" class="postbox" value="<?php echo get_post_meta($post->ID, "movie_name_meta_key", true) ?>">
	<?php
}

//Pamćenje informacija u metabox-u
function movie_title_save_postdata( $post_id ) {
	if ( array_key_exists( 'movie_name', $_POST ) ) {
		update_post_meta(
			$post_id,
			'movie_name_meta_key',
			$_POST['movie_name']
		);
	}
}
add_action( 'save_post', 'movie_title_save_postdata' );





