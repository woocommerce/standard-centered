<?php

/*
/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\ INSTRUCTIONS /\/\/\/\/\/\/\/\/\/\/\/\/\//\/\/\/\/\

	The following functions in Standard 3 are able to be overridden in your child 
	theme.
	
		standard_page_menu
		standard_add_theme_background
		standard_add_theme_editor_style
		standard_add_theme_menus
		standard_add_theme_sidebars
		standard_add_theme_features
		standard_set_theme_colors
		standard_header_style
		standard_admin_header_style
		standard_admin_header_image
		standard_custom_comment
		standard_process_link_post_format_content
		standard_process_link_post_format_title
		standard_remove_paragraph_on_media
		standard_wrap_embeds
		standard_search_form
		standard_post_format_rss
		standard_modify_widget_titles
		standard_add_title_to_single_post_pagination
		standard_comment_form
    
    Do not modify anything in-between the "DO NOT MODIFY" start and end sections.
    
	You may place any functions outlined in our FAQs & tutorials on the support
	forum in this file, as instructed, or any other code you create yourself or find
	from around the web below the "CUSTOMIZATIONS" section at the end of the file.
	
	Be forewarned that even the simplest mistake within this file can completely
	bring down your website. Please make sure to create backups and have FTP
	access to your server before modifying this file so you amy correct any issues.
	
/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\//\/\/\/\/\/\/\/\/\/\
*/


/* /\/\/\/\/\/\/\/\/\/\/\/\/\/\/ DO NOT MODIFY START /\/\/\/\/\/\/\/\/\/\/\/\/\/\/ */

/**
 * Reorders the loading of Standard's styles to ensure that the child theme kit's
 * styles.css gets loaded last. This allows the child theme kit to override all 
 * Standard styles.
 *
 * @since	3.2.1
 * @version	1.0
 */
function standard_child_theme_kit_reorder_styles() {
    wp_dequeue_style( 'theme-responsive' );
} // end standard_child_theme_kit_reorder_styles

add_action( 'wp_enqueue_scripts', 'standard_child_theme_kit_reorder_styles', 1000 );

/* /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\ DO NOT MODIFY END /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\ */



/* /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\ CUSTOMIZATIONS /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ */

/**
 * Adds four widgetized areas: the sidebar, the left footer, center footer, and right footer.
 *
 * This function can be overridden by child themes.
 *
 * @since	3.0
 * @version	3.2
 */
function standard_add_theme_sidebars() {
	
	// main left
	register_sidebar(
		array(
			'name' 			=> __( 'Sidebar Left', 'standard' ),
			'id' 			=> 'sidebar-0',
			'description'	=> __( 'The primary sidebar.', 'standard' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>'
		)
	);
	
	// main right
	register_sidebar(
		array(
			'name' 			=> __( 'Sidebar Right', 'standard' ),
			'id' 			=> 'sidebar-5',
			'description'	=> __( 'The primary sidebar.', 'standard' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>'
		)
	);
	
	// header
	register_sidebar(
		array(
			'name' 			=> __( 'Header', 'standard' ),
			'id' 			=> 'sidebar-1',
			'description'	=> __( 'This area is designed for a 468x60 advertisement, but other widgets can be used here as well.', 'standard' ),
			'before_widget' => '<div id="%1$s" class="header-widget widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>'
		)
	);
	
	// post advertisements
	register_sidebar(
		array(
			'name'			=>	__( 'Below Single Post', 'standard'),
			'id'			=>	'sidebar-2',
			'description'	=>	__( 'Shown after post content and before comments. Ideal for the 468x60 ad widget.', 'standard' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>'
		)
	);
	
	// footer left
	register_sidebar(
		array(
			'name' 			=> __( 'Footer Left', 'standard' ),
			'id' 			=> 'sidebar-3',
			'description'	=> __( 'Shown in the left column of the footer.', 'standard' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>'
		)
	);
	
	// footer right
	register_sidebar(
		array(
			'name' 			=> __( 'Footer Right', 'standard' ),
			'id' 			=> 'sidebar-4',
			'description'	=> __( 'Shown in the right column of the footer.', 'standard' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>'
		)
	);
	
} // end add_theme_sidebars
add_action( 'widgets_init', 'standard_add_theme_sidebars' );
