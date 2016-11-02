<?php
$context = Timber::get_context();
$context['title_option'] = framework_page('title');
$context['main_option'] = framework_page('no_padding');
$context['page_layout'] = framework_page('layout_page');
$context['sidebar_left'] = framework_page('sidebar_left');
//$context['sidebar_right'] = framework_page('sidebar_right');

$post = new TimberPost();
$context['post'] = $post;

$sidebar_menu = framework_page('sidebar_menu');
$menu_obj = wp_get_nav_menu_object($sidebar_menu);
$context['sidebar_menu'] = $sidebar_menu;
//$context['menu_select'] = new TimberMenu($menu_obj->term_id);

Timber::render( array( 'page-' . $post->post_name . '.twig', 'page.twig'), $context );
