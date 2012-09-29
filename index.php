<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="content">
	<?php while(have_posts()): the_post();?>
	<div class="post">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php the_content(); ?>
	</div>
	<?php endwhile; ?>
</div>
<?php get_footer(); ?>