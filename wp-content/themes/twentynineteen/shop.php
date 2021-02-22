<?php /* Template Name: Shop Template */
get_header();
echo '<div class="main-shop container">';
	echo '<div class="row">';
		echo '<div class="col-sm-4">';
			echo 'filter by size';
			$sizes = get_terms( 'sizes', 'orderby=count&hide_empty=0' );
			echo '<div class="size-div">';
			foreach ($sizes as $size ) {
				echo '<div class="taxonomy-list" data-id="'.$size->term_id.'" taxonomy-name="sizes">';
					echo $size->name;
				echo '</div>';
			}
			echo '</div>';

			
			echo 'filter by color';	
			$colors = get_terms( 'colors', 'orderby=count&hide_empty=0' );
			echo '<div class="color-div">';
			foreach ($colors as $color ) {
				echo '<div class="taxonomy-list" data-id="'.$color->term_id.'" taxonomy-name="colors">';
					echo $color->name;
				echo '</div>';
			}
			echo '</div>';
		echo '</div>';

		$args = array(
		    'post_type' => 'products',
		    'post_status' => 'publish',
		);
		$productlist = get_posts( $args );
		echo '<div class="col-sm-8">';
			echo '<div class="product-selected">';
				foreach ($productlist as $product ) {
					echo '<div class="product-list">';
						echo '<div>';
							echo get_the_post_thumbnail($product->ID);
						echo '</div>';
						echo '<div>';
							echo '<a href="'.$product->guid.'">'.$product->post_title.'</a>';
						echo '</div>';
						echo '<div>';
							echo $product->post_excerpt;
						echo '</div>';
					echo '</div>';
				}
			echo '</div>';
		echo '</div>';
	echo '</div>';
echo '</div>';

get_footer();
?>