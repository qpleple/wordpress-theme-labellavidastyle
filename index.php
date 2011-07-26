<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>
	<div class="post">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</div>
<?php endwhile; ?>

<?php get_footer(); ?>