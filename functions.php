<?php

register_sidebar(array(
	'name' => 'Left sidebar',
	'id' => 'sidebar-left',
	'before_widget' => '<div class="info-content">',
	'after_widget' => '</div>',
	'before_title' => '<div class="rec-item"><h2>',
	'after_title' => '</h2></div><div class="rec-item-l"></div><div class="rec-item-r"></div>',
));