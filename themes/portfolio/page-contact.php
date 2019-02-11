<?php get_header() ?>
	<?php the_post() ?>



<div class="col-md-10 col-md-offset-2 col-sm-9 col-sm-offset-3 col-xs-12">
	
	<div class="contactme">
		<h4 class="contactme__mail"><?php the_field('mail'); ?></h4>

		<a href="https://www.instagram.com/valaxia/" target="_blank"><div class="contactme__mail_2"> Follow me in Instagram <i class="fab fa-instagram"></i></a></div>
	</div>			
</div>



<?php get_footer() ?>