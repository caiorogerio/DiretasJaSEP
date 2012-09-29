<?php

register_sidebar(array(
	'name' => 'Left sidebar',
	'id' => 'sidebar-left',
	'before_widget' => '<div class="info-content">',
	'after_widget' => '</div>',
	'before_title' => '<div class="rec-item"><h2>',
	'after_title' => '</h2></div><div class="rec-item-l"></div><div class="rec-item-r"></div>',
));

add_action('init', function() {
	register_post_type('FAQ', array(
		'label' => 'Perguntas',
		'labels' => array(
			'singular_name' => 'Pergunta',
		),
		'description' => 'Pergunta e resposta do FAQ',
		'public' => true,
		'show_ui' => true,
		'show_in_admin_bar' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'faq'),
		'taxonomies' => array('category'),
	));

	/*register_sidebar(array(
		'name' => 'home',
		'id' => 'home-bloco',
		'before_widget' => '',
		'after_widget' => '',

	));

	register_nav_menus(array(
		'top' => 'Menu superior',
	));*/
});

/*add_action('pre_get_posts', function($wp_query) {
	if(!is_admin() && $wp_query->is_main_query()) {
		$wp_query->query_vars['post_type'] = 'FAQ';
	}
});*/

/*add_action('widgets_init', function() {
	register_widget('HomeBlock');
});*/

add_filter('term_link', function($link, $term, $taxonomy) {
	if('category' == $taxonomy) {
		$link = home_url( '/' . $term->slug );
	}

	return $link;
}, 10, 3);

add_action('wp_enqueue_scripts', function(){
	//wp_enqueue_script('jquery');
	wp_enqueue_script('faq', get_bloginfo('stylesheet_directory') . '/js/scripts.js', array('jquery'));
});
/*
add_action('wp_footer', function() {
	?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=479204948762706";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<?php
});

class HomeBlock extends WP_Widget {
	public function __construct() {
		parent::__construct(false, 'Bloco para home');
	}

	public function widget($args, $instance) {
		if(!term_exists( (int) $instance['category'], 'category')) return;

		$category = get_term( (int) $instance['category'], 'category');
		?>
		<section class="<?php echo $category->slug ?>">
			<h1><a href="<?php echo get_term_link($category) ?>"><?php echo $category->name ?></a></h1>
			<p><a href="<?php echo get_term_link($category) ?>"><?php echo $category->description ?></a></p>
		</section>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}

	public function form($instance) {
		?>
		<p>
			<label for="<?php echo $this->get_field_id('category') ?>"><?php _e('Category') ?></label>
			<select id="<?php echo $this->get_field_id('category') ?>" name="<?php echo $this->get_field_name('category') ?>">
				<?php foreach((array) get_terms('category') as $term): ?>
				<option value="<?php echo $term->term_id ?>"<?php if($term->term_id == $instance['category']):?> selected="true"<?php endif; ?>><?php echo $term->name ?></option>
				<?php endforeach; ?>				
			</select>
		</p>
		<?php
	}
}

