<?php
/*
* Tempalte for displaying all the pages

*/

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
                while ( have_posts() ) :
                    the_post();
                    get_template_part('template-parts/page/content', 'page'); //content-page.php
                endwhile;
        ?>
        </main>
            </div>
        <?php get_footer(); ?>