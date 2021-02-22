<?php
add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');

function data_fetch(){

    $the_query = new WP_Query( 
    	array( 
    		'posts_per_page' => 5, 
    		's' => esc_attr( $_POST['keyword'] ), 
    		'post_type' => 'books' ,
    		'tax_query' => array(
		        'relation' => 'AND',
		        array(
		            'taxonomy' => 'author',
		            'field'    => 'slug',
		            'terms'    => $_POST['authorkeyword'],
		        ),
		        array(
		            'taxonomy' => 'publisher',
		            'field'    => 'slug',
		            'terms'    => $_POST['publisherkeyword'],
		        ),
		    ),
    	) 
    );
    if( $the_query->have_posts() ) :
        while( $the_query->have_posts() ): $the_query->the_post(); ?>

            <a href="<?php echo esc_url( post_permalink() ); ?>"><?php the_title();?></a>

        <?php endwhile;
		wp_reset_postdata();  
	else: 
		echo '<h3>No Results Found</h3>';
    endif;

    die();
}
// add the ajax fetch js
add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() {
?>
<script type="text/javascript">
$("#search-btn").click(function(){
var keyword = $("#booksearch").val();
var authorkeyword = $("#authorsearch").val();
var publisherkeyword = $("#publishersearch").val();
	jQuery.ajax({
		url: '<?php echo admin_url('admin-ajax.php'); ?>',
		type: 'post',
		data: { action: 'data_fetch', keyword: keyword, authorkeyword: authorkeyword, publisherkeyword: publisherkeyword  },
		success: function(data) {
			jQuery('#datafetch').html( data );
		}
	});
});
</script>

<?php
}