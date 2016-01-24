<?php 
	/* Template Name: Contact Form */ 
	get_header(); 
?>

	<?php
		if (have_posts()):
			while (have_posts()): the_post();
				?>
				<h3><?php the_title(); ?></h3>
				<?php
				the_content();
			endwhile;
		endif;
	?>

	<?php get_footer(); ?>