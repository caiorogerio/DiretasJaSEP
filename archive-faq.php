<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="content">
	<dl>
		<?php while(have_posts()): the_post();?>
		<dt><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dt>
		<dd>
			<?php the_content(); ?>
		</dd>
		<?php endwhile; ?>
	</dl>
</div>
<?php get_footer(); ?>