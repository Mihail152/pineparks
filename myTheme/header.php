<?php 
// wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); 
// echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';?>


<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css?_v=20240704194647" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<div class="wrapper">
		<header id="header" class="header">
	<div class="header__container">
		<div class="header__column--left">
			<a href="/" class="header__logo">
				<img src="<?php echo get_template_directory_uri();?>/img/logo.svg" class="img-logo">
				<span>SAFARI</span>
			</a>
			<div class="header__inline">
				<div class="header__menu menu">
					<nav class="menu__body">
						<input type="checkbox" id="burger-checkbox" class="burger-checkbox">
						<label for="burger-checkbox" class="burger"></label>
						<div class="menu__list">
                            <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<div class="header__column--right">
			<button class="header__btn btn black">Book a tour</button>
		</div>
	</div>
</header>
		<main class="page wrapper">