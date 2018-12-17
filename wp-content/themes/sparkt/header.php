<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( "charset" ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a href="<?php echo get_home_url(); ?>">Logo</a>
<?php wp_nav_menu( array( "theme_location" => "main-menu", "container_class" => "c-navigation" ) ); ?>