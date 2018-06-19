<?php
	/**
	 * header/corporatehome.php
	 * @package Thompson
	 * @author Period Three
	 * 
	 * Pages    | 
	 * Includes | 
	 * 
	 * @version 1.0
	 * Created  6/16/2018
	 * Updated
	 *
	 * Comments | 
	**/
?>

<div id="page-content">
	
	<?php
		while ( have_posts() ) :
			the_post();

			get_template_part('template-parts/content', 'page');

			if ( comments_open() || get_comments_number() ):
				comments_template();
			endif;
		endwhile;
	?>

</div> <!-- /#PAGE-CONTENT -->