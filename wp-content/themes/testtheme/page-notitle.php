<?php 

/*

	Template Name: Page No Title
*/
get_header();
?>
<?php
	if(have_posts())
	{
		while(have_posts())
		{
			the_post(); ?>
            <small>Posted on: <?php the_time('F,j,Y'); ?></small><?php the_category(); ?>
            <p><?php the_content(); ?></p>
            <hr/>
		<?php }
	}
?>
<?php get_footer(); ?>