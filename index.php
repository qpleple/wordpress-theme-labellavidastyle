<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>
	<div class="post">
		<h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<span class="post-metadata"><?php the_author() ?>, <?php the_time('F jS, Y') ?></span>
		<?php if (has_post_thumbnail()): ?>
		<div style="clear:left"></div>
		<div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
		<?php endif ?>
		<?php the_excerpt(); ?>
	</div>
<?php endwhile; ?>

<?php get_footer(); ?>