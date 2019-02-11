<?php get_header() ?>
<?php the_post() ?>

<div class="col-md-10 col-md-offset-2 col-sm-9 col-sm-offset-3 col-xs-12">
	
	<div class="aboutme">
		<div class="aboutme__textos">
		<h2 class="aboutme__text"><?php the_title(); ?></h2> 
		<h2 class="aboutme__text2"><?php the_field('subtitulo'); ?></h2>
		<div class="aboutme__text3"> <?php the_content(); ?></div>


		<h3 class="aboutme__text4"> Studies & Work Experience </h3>

			<?php

			// check if the repeater field has rows of data
			if( have_rows('work_experience') ): ?>
				<table class="table">
				<p class="aboutme__text5"> Work Experience</p>

			<?php

			 	// loop through the rows of data
			    while ( have_rows('work_experience') ) : the_row();?>
					 <tr>
					    <th class="col-md-2"><p class="aboutme__ano"><?php the_sub_field('years'); ?></p></th>
					    <th class="col-md-2"><p class="aboutme__que"><?php the_sub_field('place'); ?></p></th>
					    <th class="col-md-7"><p class="aboutme__donde"><?php the_sub_field('description'); ?></p></th>
					  </tr>


				<?php

			    endwhile; ?>

			</table>

			<?php else :

			    // no rows found

			endif;

			?>



			<?php

			// check if the repeater field has rows of data
			if( have_rows('studies') ): ?>
				<table class="table">
				<p class="aboutme__text5"> Studies</p>

			<?php

			 	// loop through the rows of data
			    while ( have_rows('studies') ) : the_row();?>
					 <tr>
					    <th class="col-md-2 col-xs-2"><p class="aboutme__ano"><?php the_sub_field('years'); ?></p></th>
					    <th class="col-md-4 col-xs-2"><p class="aboutme__que"><?php the_sub_field('place'); ?></p></th>
					    <th class="col-md-4 col-xs-8"><p class="aboutme__donde"><?php the_sub_field('description'); ?></p></th>
					  </tr>


				<?php

			    endwhile; ?>

			</table>

			<?php else :

			    // no rows found

			endif;

			?>





		</div>
	</div>
</div>



<?php get_footer() ?>

