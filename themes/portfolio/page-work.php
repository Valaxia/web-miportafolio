<?php get_header('index') ?>


	<?php
		$work = array(
			'post_type'		 => 'work',
			'posts_per_page' => 1, 
			'cat' => 1
		);
	
		$get_work = new WP_Query( $work );

		$counter = 0;
	
		while ( $get_work->have_posts() ) {
			$get_work->the_post(); $counter++;
		?>


<section class="seccion-last-proyect col-md-10 col-sm-9 col-xs-12">
	<div class="text-descript">
		<p class="text-descript__title"> Last proyect > </p>
		<p class="text-descript__client"><?php the_title(); ?> |</p> 
		<p class="text-descript__client"><?php the_field('cliente'); ?></p>
	</div>

		<a href="<?php the_permalink() ?>" class="foto-destacada" alt="Responsive image"><?php the_post_thumbnail() ?></a>


	<div class="text-descript">
		<p class="text-descript__title"> All proyects ></p>
	</div>
</section>

	<?php } wp_reset_postdata(); ?>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-2 col-sm-9 col-sm-offset-3 col-xs-12">
			<ul class="masonry">

			<?php
				$work = array(
					'post_type'		 => 'work',
					'posts_per_page' => -1
				);
			
				$get_work = new WP_Query( $work );

				$counter = 0;
			
				while ( $get_work->have_posts() ) {
					$get_work->the_post(); $counter++;
				?>

					
				<li class="item" data-id="id-<?php echo $counter ?>" data-type="<?php the_field('categoria') ?>">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
				</li>

			<?php } wp_reset_postdata(); ?>

			</ul>
	



	<a href="<?php the_permalink() ?>"><img src="<?php the_field('img_fotos'); ?>" alt="<?php the_title(); ?>" class="img-responsive"></a>

		</div>
	</div>
</div>

<?php get_footer() ?>