<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="content">
	<?php while(have_posts()): the_post();?>
	<div class="post">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
	<?php endwhile; ?>
</div>
<?php get_footer(); ?>