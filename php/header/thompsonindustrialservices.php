<?php
	/**
	 * header/thompsonindustrialservices.php
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

<header id="header-thompsonindustrialservices">
	
	<!-- #HEADER-TOP -->
	<div id="header-top">
		<div class="wrapper-content clearfix">
						
			<div id="header-corporatehome" class="col-lg-4">
				<a href="http://www.thompsonsoutheast.com">
					<i class="fas fa-home"></i> Thompson Corporate
				</a>
			</div> <!-- /#HEADER-CORPORATEHOME -->

		</div> <!-- /.WRAPPER-CONTENT -->
	</div> <!-- /#HEADER-TOP -->

	<!-- #HEADER-MAIN -->
	<div id="header-main">
		<div class="wrapper-content clearfix">
			
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id' => 'primary-menu',
				) );
			?>

		</div> <!-- /.WRAPPER-CONTENT -->
	</div> <!-- /#HEADER-MAIN -->

</header> <!-- /#HEADER-THOMPSONINDUSTRIALSERVICES -->