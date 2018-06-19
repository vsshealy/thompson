<?php
	/**
	 * header/mega-menu.php
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

<div id="header-main-menu-mega">
	
	<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id' => 'primary-menu',
		) );
	?>

</div> <!-- /#HEADER-MAIN-MENU-MEGA -->