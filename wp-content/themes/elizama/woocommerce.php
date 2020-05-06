<?php get_header(); ?>

<main class="page project-page" id="content">
    <section class="portfolio-block project"> 
    	<div class="row">
         <?php 
            	if( ! is_active_sidebar( 'sidebar-1' ) ): ?>
    				<div class="col-12 col-md-12 info">
        		<?php else: ?>
        			<div class="col-12 col-md-8 info">
         		<?php endif;

                     woocommerce_content();

         				get_template_part( 'template-parts/pagination' ); ?>
     				</div>
     	                  <?php get_sidebar(  ); ?>

 			</div>

    </section>
</main>

<?php get_footer();?>
