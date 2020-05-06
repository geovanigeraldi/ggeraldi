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
                                        
                    get_template_part( 'template-parts/content', 'page' );
               
                endwhile;

            endif;
            ?>


		            <div class="more-projects">
		                    <h3 class="text-center"><?php esc_html_e('More Posts','elizama');?></h3>
		                    <div class="row gallery">

		                        <?php   /*
		                             * The WordPress Query class.
		                             *
		                             * @link http://codex.wordpress.org/Function_Reference/WP_Query
		                             */
		                            $args = array(
		                                'post_type' => 'post',
		                                // Order & Orderby Parameters
		                                'orderbay'               => 'rand',
		                                // Pagination Parameters
		                                'posts_per_page'         => 3,
		                        
		                            );
		                        
		                        $queryrand = new WP_Query( $args );
		                        
		                             if( $queryrand->have_posts()) : 

		                                while( $queryrand->have_posts()) : $queryrand->the_post();


		                                    get_template_part( 'template-parts/content', 'randpost' );
		                                    

		                              endwhile;
		                     endif;?>
	                    </div><!-- gallery -->
	                </div><!-- more project -->
	            </div><!-- col-lg-8 -->
	                  <?php get_sidebar(  ); ?>

            </div><!-- row -->
    </section>
</main>
<?php get_footer();?>
