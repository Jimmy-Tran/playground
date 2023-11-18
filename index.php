<?php
/**
 * 
 */

 get_header();
 ?>

<div id="primary" class="content-area">
    <div class="hero-container">
        <div class="left">
            <span class="small_slogan">Welcome to Venum</span>
            <h1 class="slogan">
                Premium sportwear <br>for atlethes
            </h1>
            <p>We are a French based brand that sells premium sportwear for athletes we have been in the scene since 1974 and have been many people their favorite company.</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/heroimage.webp' ?>" alt="Hero image">
        </div>
    </div>
</div>

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