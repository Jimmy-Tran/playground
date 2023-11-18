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
    <a class="company_name"><?php bloginfo( 'name' ); ?></a>
                <?php
                    if ( has_nav_menu( 'primary' ) ) :
                        wp_nav_menu( [
                            'theme_location' => 'primary',
                            'container'      => false,
                            'menu_class'     => 'navbar_pages',
                            'menu_id'        => '',
                            'depth'          => 3
                        ] );
                    else :
                        printf(
                            '<a href="%1$s">%2$s</a>',
                            esc_url( admin_url( '/nav-menus.php' ) ),
                            esc_html__( 'Asign a menu', 'herobiz' )
                        );
                    endif;
                ?>
                <!-- <ul>
                <li><a class="nav-link scrollto" href="index.html#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
                <li><a class="nav-link scrollto" href="index.html#services">Services</a></li>
                <li><a class="nav-link scrollto" href="index.html#portfolio">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="index.html#team">Team</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                    <li><a href="#">Drop Down 1</a></li>
                    <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                        <li><a href="#">Deep Drop Down 1</a></li>
                        <li><a href="#">Deep Drop Down 2</a></li>
                        <li><a href="#">Deep Drop Down 3</a></li>
                        <li><a href="#">Deep Drop Down 4</a></li>
                        <li><a href="#">Deep Drop Down 5</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Drop Down 2</a></li>
                    <li><a href="#">Drop Down 3</a></li>
                    <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
                </ul> -->
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav>