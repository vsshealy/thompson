<?php
	/**
	 * template-parts/content-page.php
	 * @package Thompson
	 * @author Period Three
	 * 
	 * Pages    | 
	 * Includes | 
	 * 
	 * @version 1.0
	 * Created  6/19/2018
	 * Updated
	 *
	 * Comments | 
	**/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div>
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'thompson' ),
				'after' => '</div>',
			) );
		?>
	</div>

</article> <!-- /#POST -->