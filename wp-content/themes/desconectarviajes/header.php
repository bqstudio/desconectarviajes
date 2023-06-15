<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php 
	if ( $favicon = get_field('favicon','option') ){ ?>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon['url']; ?>">
	<?php } ?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>



<div id="page" class="site">
	<header class="header">
		<div class="container">
			<div class="header__top">
				<div class="header__top__left">				
					<?php //get_template_part('modules/components/site-logo'); ?> <!-- Creo que se usa este -->
				</div>
				<div class="header__top__center">
					<?php //get_template_part('modules/components/search'); ?>
				</div>
				<div class="header__top__right">
					<?php //get_template_part('modules/components/account'); ?>
					<?php //get_template_part('modules/components/cart'); ?>
					<?php get_template_part('//modules/components/responisve-btn'); ?>
				</div>
			</div>
			<div class="header__bottom" data-block="menu">
				<?php //get_template_part('modules/components/menu'); ?> <!-- Creo que se usa este -->
			</div>
		</div>
	</header>

	<main id="content" class="site-content">
