<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>
	<div class="post">
		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<span class="post-metadata"><?php the_author() ?>, <?php the_date() ?></span>
		<?php the_content(); ?>
	</div>
<?php endwhile; ?>

<?php get_footer(); ?>