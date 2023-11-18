<?php
/**
 * 
 */

 get_header();
 ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
    <?php 
        
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                get_template_part('template-parts/post/content');
            endwhile;
        
        endif;

        echo paginate_links([
            'prev_text' => esc_html__('Prev', 'speeltuin'),
            'next_text' => esc_html__('Next', 'speeltuin'),
        
        ]);

    ?>
</main>
<?php get_sidebar(); ?>
</div>

<?php 
get_footer();
?>