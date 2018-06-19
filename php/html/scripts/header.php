<?php
	/**
	 * scripts/header.php
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

<!-- META DATA -->
<meta charset="utf-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900|Roboto:100,300,400,500,700,900" rel="stylesheet"/>

<!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"/>

<!-- FONT AWESOME -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

<!-- STYLESHEET -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="all"/>

<!-- GOOGLE ANALYTICS -->

<!-- WP_HEAD -->
<?php wp_head(); ?>