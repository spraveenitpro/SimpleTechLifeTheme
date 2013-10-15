<?php get_header(); ?>

<?php bloginfo('name'); ?>



<?php if( have_posts() ) :  while ( have_posts() ) : the_post(); ?>

	<h3><?php the_title(); ?></h3>
	<?php the_content(); ?>
	<hr>

<?php endwhile; else: ?>

	<p>There are no posts now !</p>

<?php endif;   ?>

<?php get_footer(); ?>