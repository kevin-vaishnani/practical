<?php 

function create_posttype() {
 
    register_post_type( 'books',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Books' ),
                'singular_name' => __( 'Book' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'books'),
            'show_in_rest' => true,
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

function author_taxonomy() {
    register_taxonomy(
        'author', 
        'books',   
        array(
            'hierarchical' => true,
            'label' => 'Author', 
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'author',    
                'with_front' => false  
            )
        )
    );
}
add_action( 'init', 'author_taxonomy');

function publisher_taxonomy() {
    register_taxonomy(
        'publisher', 
        'books',   
        array(
            'hierarchical' => true,
            'label' => 'Publisher', 
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'publisher',    
                'with_front' => false  
            )
        )
    );
}
add_action( 'init', 'publisher_taxonomy');