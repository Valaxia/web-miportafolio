<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body class="alt">

	<div class="row">
		<nav class="sidenav col-md-2 col-sm-3 col-xs-12">

			<div class="nav-button"></div>

			<ul class="sidenav__info">
				<h1 class="mi-nombre"> Valentina Opazo </h1>
				<li class="sidenav__infolist">
					<a href="tel:<?php the_field('telefono', 'option'); ?>"><?php the_field('telefono', 'option'); ?></a>
				</li>
				<li class="sidenav__infolist">
					<a href="<?php the_field('linkedin', 'option'); ?>"><?php the_field('linkedin', 'option'); ?></a>
				</li>
				<li class="sidenav__infolist">
					<a href="<?php the_field('instagram', 'option'); ?>"><?php the_field('instagram', 'option'); ?></a>
				</li>
				<li class="sidenav__infolist">
					<a href="mailto:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a>
				</li>
			</ul>
		<hr>	

			<?php if ( has_nav_menu( 'new-menu' ) ) { ?>
				<?php wp_nav_menu( array( 
					'theme_location' => 'new-menu',
					'menu_class' => 'sidenav__links',
					'container' => null,
					'walker' => new DL_Walker()
				)); ?>
			<?php } ?>
		</nav>


		<article class="main-header-alt col-md-10 col-sm-9 col-xs-12">

			<div class="sidenav__hamb">
				<a href="#" class="sidenav__hamb-link"><img src="<?php the_theme_file_uri('assets/images/hamb.svg') ?>" class="sidenav__hamb-img" alt="menú"></a>
			</div>

		</article>
	</div>
