
<?php get_header() ?>

<main>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

<div class="col-md-8 col-md-offset-2 col-xs-12">
	<h3 class="titulo-proyecto"><?php the_title(); ?></h3>
	<h4 class="cliente-proyecto"><?php the_field('cliente'); ?></h4>
	<div class="parrafo-proyecto"><?php the_content(); ?></div>


			<?php

			// check if the repeater field has rows of data
			if( have_rows('imagenes_proyecto') ): ?>

			<?php

			 	// loop through the rows of data
			    while ( have_rows('imagenes_proyecto') ) : the_row();?>
			    	<div class="item">
						<img src="<?php the_sub_field('proyecto'); ?>" alt=""></div>


				<?php

			    endwhile; ?>

			<?php else :

			    // no rows found

			endif;

			?>

</div>

	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>

</main>
<?php get_footer() ?>


