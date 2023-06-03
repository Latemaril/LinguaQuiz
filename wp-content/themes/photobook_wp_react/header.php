<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package photobook_wp_react
 */

//$current_page =  "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//
//
//if ($current_page == "https://".getenv('HTTP_HOST')."/"){
//    $redirect = "https://".getenv('HTTP_HOST')."/order-photos/";
//    header('Location: '. $redirect);
//}


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="icon" type="image/png" href="">
	<?php wp_head(); ?>
</head>

<body>
