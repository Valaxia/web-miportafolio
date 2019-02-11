<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body>

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

			<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
				<?php wp_nav_menu( array( 
					'theme_location' => 'header-menu',
					'menu_class' => 'sidenav__links',
					'container' => null,
					'walker' => new DL_Walker()
				)); ?>
			<?php } ?>
		</nav>


		<article class="main-header col-md-10 col-sm-9 col-xs-12">

			<div class="sidenav__hamb">
				<a href="#" class="sidenav__hamb-link"><img src="<?php the_theme_file_uri('assets/images/hamb.svg') ?>" class="sidenav__hamb-img" alt="menú"></a>
			</div>

			<div class="texto-svg">
				<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 759 567" style="enable-background:new 0 0 759 567;">
					<style type="text/css">
					.st0{fill:#1d1c1a;}
					.st1{font-family:'Gilroy';font-weight: 900}
					.st2{font-size:152.2549px;}
					.st3{letter-spacing:1;}
					.st4{fill:#1d1c1a;}
					.st5{font-family:'Gilroy';font-weight: 300}
					.st6{font-size:99.2702px;}
					.st7{letter-spacing:2;}
					.st8{font-family:'Montserrat'; font-weight: 800}
					.st9{font-size:20px;}
					</style>
					<text transform="matrix(1 0 0 1 15.7714 136.7349)"><tspan x="0" y="0" class="st0 st1 st2 st3">GRAPHIC</tspan></text>
					<text transform="matrix(1 0 0 1 15.7714 291.8833)"><tspan x="0" y="0" class="st0 st1 st2 st3">DESIGNER</tspan></text>
					<text transform="matrix(1 0 0 1 15.5072 391.4155)"><tspan x="0" y="0" class="st4 st5 st6">FREELANCER</tspan></text>
					<text transform="matrix(1 0 0 1 621.869 331.3599)"><tspan x="0" y="0" class="st4 st8 st9">sence 2009</tspan></text>
					<text transform="matrix(1 0 0 1 523.1288 533.4399)" class="st4 st8 st9">Based on</text>
					<text transform="matrix(1 0 0 1 498.1688 557.4399)"><tspan x="0" y="0" class="st4 st8 st9">Stgo. CHILE</tspan></text>
				</svg>
			</div>
		</article>
	</div>








