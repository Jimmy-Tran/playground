<?php 
/**
 *  Contains the header
 */
?> 
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="style.css">

    <?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?>>
<nav id="navbar" class="navbar">
    <?php if (has_custom_logo()): ?>
        <div id="logo">
            <?php the_custom_logo(); ?>
        </div>
    <?php else : ?>
        <div id="site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
        </div>
    <?php endif; ?>

    <?php
    if (has_nav_menu('primary')) :
        wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'navbar_pages',
            'menu_id'        => '',
            'depth'          => 3
        ]);
    else :
        printf(
            '<a href="%1$s">%2$s</a>',
            esc_url(admin_url('/nav-menus.php')),
            esc_html__('Assign a menu', 'herobiz')
        );
    endif;
    ?>
</nav>
<div class="container">