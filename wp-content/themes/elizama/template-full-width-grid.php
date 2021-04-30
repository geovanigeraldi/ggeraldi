<?php
/**
 * Template Name: Full Width With Grid Template
 * Template Post Type: post, page
 *
 * @since 1.0
 */

get_header( 'grid' ); ?>


    <main class="page projets-page" id="content">
        <section class="portfolio-block projects compact-grid">
            <div class="row no-gutters">


           <?php    /*
                             * The WordPress Query class.
                             *
                             * @link http://codex.wordpress.org/Function_Reference/WP_Query
                             */
                            $elizama_args = array(
                                'post_type' => 'post'
                                // Order & Orderby Parameters
                                // Pagination Parameters
                        
                            );
                        
                        $elizama_query_rand = new WP_Query( $elizama_args );
                        
                             if( $elizama_query_rand->have_posts()) : 

                                while( $elizama_query_rand->have_posts()) : $elizama_query_rand->the_post();


                                    get_template_part( 'template-parts/content', 'grid' );
                                    

                              endwhile;
                     endif;?>
                </div>
            </section>
        </main>

<?php get_footer(); ?>