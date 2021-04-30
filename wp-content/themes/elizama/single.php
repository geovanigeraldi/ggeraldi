<?php get_header(); ?>

<main class="page project-page" id="content">
    <section class="portfolio-block project">

        <div class="row">
        <?php if( ! is_active_sidebar( 'sidebar-1' ) ): ?>
            <div class="col-lg-12">
        <?php else : ?>
            <div class="col-lg-8">
        <?php endif;

            if( have_posts() ) :

                while ( have_posts() ) : the_post();
                                        
                    get_template_part( 'template-parts/content', 'single' );

                        echo  wp_kses_post( elizama_post_navigation() );
                    if( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
               
                endwhile;

            endif;
            ?>

            </div><!-- col-lg-8 -->
            <?php get_sidebar(  ); ?>

        </div> 

    </section>
</main>
<?php get_footer();?>