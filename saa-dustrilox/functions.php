<?php  
	register_nav_menus(
		array('primary-menu'=>'Header Menu') // 01. get menu option 
	);

	add_theme_support('post-thumbnails'); // 02. show the feature img for thumbnail
	add_theme_support('custom-header'); // 02. show the Header img/logo img for Header

	// register wiget in admin sidebar
	register_sidebar(
		array(
			'name'=>'Sidebar Location',
			'id'=>'sidebar',
		)
		);

	// custome background
	add_theme_support('custom-background');

	

?>