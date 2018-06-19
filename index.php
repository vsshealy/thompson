<?php
	/**
	 * index.php
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

<!DOCTYPE HTML>
<html id="<?php echo $site ?>" <?php language_attributes(); ?>>
	
	<!-- HEAD -->
	<head>
		<?php include("php/html/head/".$site.".php"); ?>
		<?php include("php/html/scripts/header.php"); ?>
	</head>

	<!-- BODY -->
	<body>
		
		<!-- HEADER -->
		<?php include("php/header/".$site.".php"); ?>

		<!-- CONTENT | INDEX.PHP -->
		<?php include("php/content/".$site.".php"); ?>

		<!-- FOOTER -->
		<?php include("php/footer/".$site.".php"); ?>

		<!-- SCRIPTS -->
		<?php include("php/html/scripts/footer.php"); ?>

	</body>

</html>