<?php

if( ! function_exists('speeltuin_setup')) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function speeltuin_setup() {
        load_theme_textdomain('speeltuin', get_template_directory() . '/languages');
    
        add_theme_support('automatic-feed-links');

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        add_theme_support('custom-background', apply_filters('speeltuin_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
        
        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support('custom-header', apply_filters('speeltuin_custom_header_args', array(
            'default-image' => '',
            'default-text-color' => '000000',
            'width' => 1000,
            'height' => 250,
            'flex-height' => true,
        )));

        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'audio',
        ));

        register_nav_menus(array(
            'primary' => esc_html__('Primary', 'speeltuin'),
            'footer' => esc_html__('Footer', 'speeltuin'),
        ));
    }
 }

 function herobiz_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'herobiz_content_width', 1170 );
}
add_action( 'after_setup_theme', 'herobiz_content_width', 0 );


function speeltuin_sidebar_widgets_init() {
	// Default Sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'speeltuin' ),
		'id'            => 'default-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'speeltuin' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'speeltuin_sidebar_widgets_init' );

 add_action('after_setup_theme', 'speeltuin_setup');

 function speeltuin_public_scripts() {
        wp_enqueue_style('default', get_template_directory_uri( ) . '/assets/css/default.css', array(), wp_rand(), 'all');
        wp_enqueue_style('main', get_template_directory_uri( ) . '/assets/css/main.css', array(), wp_rand(), 'all');

        wp_enqueue_script( 'main', get_template_directory_uri(  ) . '/assets/js/main.js', ['jquery'], wp_rand(), true );
 }
    add_action('wp_enqueue_scripts', 'speeltuin_public_scripts');

    function theme_custom_logo_setup() {
        add_theme_support('company-logo', array(
            'height'      => 100,
            'width'       => 200,
            'flex-height' => true,
            'flex-width'  => true,
        ));
    }
    add_action('after_setup_theme', 'theme_custom_logo_setup');