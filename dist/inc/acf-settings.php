<?php
if( function_exists('acf_add_options_page') ) {
   $parent = acf_add_options_page(array(
		'page_title' 	=> 'Site Settings',
		'menu_title'	=> 'Site Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'position' => 2
	));
    $child = acf_add_options_page(array(
		'page_title' 	=> 'Hero',
		'menu_title'	=> 'Hero',
		'menu_slug' 	=> 'Hero',
		'capability'	=> 'edit_posts',
		'parent_slug'   => $parent['menu_slug'],
		'redirect'		=> false,
	));
    $child1 = acf_add_options_page(array(
		'page_title' 	=> 'Footer Banner',
		'menu_title'	=> 'Footer Banner',
		'menu_slug' 	=> 'banner-callto',
		'capability'	=> 'edit_posts',
		'parent_slug'   => $parent['menu_slug'],
		'redirect'		=> false,
	));

}