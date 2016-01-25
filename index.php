<?php get_header(); ?>


	<?php
	if(is_front_page()):
		if (have_posts()):
			while (have_posts()): the_post();
				the_content();
			endwhile;
		endif;
	
	$query = new WP_Query('type=post');

	if ($query->have_posts()):
		$count = 1;
		while ($query->have_posts()): $query->the_post();
				$newclass = ' odd-step';
			?>
			</div>
			<div class="my-step<?php if(($count % 2) === 1) print($newclass) ?>">
				<div class="step-text">
					<h3><?php the_title(); ?></h3>
					<small>Posted by <?php the_author(); ?></small>
					<?php
					the_excerpt();
					?>
				</div>
			</div>
			<div class="contatiner">
			<?php
			$count++;
		endwhile;
	endif;

	wp_reset_postdata();
	endif;
	?>

	<?php
	if(!is_front_page()):
		if (have_posts()):
			echo '<div class="container">';
			while (have_posts()): the_post();
				?>
				<h3><?php the_title(); ?></h3>
				<small>Posted by <?php the_author(); ?></small>
				<?php
				the_content();
				the_comment();
			endwhile;
			echo '</div>';
		endif;
	endif;
	?>

	<?php get_footer(); ?>