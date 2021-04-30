<?php

get_header( );
?>

<main class="page project-page" id="content">
    <section class="portfolio-block project">

        <div class="row">
        <?php if( ! is_active_sidebar( 'sidebar-1' ) ): ?>
            <div class="col-lg-12">
        <?php else : ?>
            <div class="col-lg-8">
        <?php endif;
            if( have_posts() ) : ?>

        <h1 class="page-title">
          <?php
          /* translators: %s: search query. */
          printf( esc_html__( 'Search Results for: %s', 'elizama' ), '<span>' . get_search_query() . '</span>' );
          ?>
        </h1>
      </header><!-- .page-header -->

               <?php  while ( have_posts() ) : the_post();
                                        
                    get_template_part( 'template-parts/content', 'search' );
               
                endwhile;

            else:
                    get_template_part( 'template-parts/content', 'none' );


            endif;
            ?>

            </div><!-- col-lg-8 -->
            <?php get_sidebar(  ); ?>

        </div> 

    </section>
</main>
<?php get_footer();?>