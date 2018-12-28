<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo("charset"); ?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php get_template_part("components/schedule-demo-modal-component") ?>
<div class="c-navigation">
	<div class="c-navigation__wrapper">
		<div class="c-navigation__hamburger" data-hamburger></div>
		<div class="c-navigation__wrapper-logo-menu">
			<a class="c-navigation__logo-link" href="<?php echo get_home_url(); ?>"><img src='<?php echo get_template_directory_uri() ?>/public/images/logo.svg' /></a>
			<?php wp_nav_menu(array("theme_location" => "main-menu")); ?>
		</div>
		<button class="o-btn o-btn o-btn--small c-navigation__btn" href="#" data-schedule-demo>Schedule demo</button>
	</div>
</div>