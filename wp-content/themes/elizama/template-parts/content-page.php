
<div id="post-<?php the_ID();?>" <?php  post_class("container") ?>>
    <div class="row">
        <div class="col-12 col-md-12 info elizama-card">
            <?php the_title( '<h2 class="entry-title text-center card-title">', '</h2>'); ?>
            <p><?php the_content();?></p>

           <?php
                wp_link_pages( array(
               'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'elizama' ),
               'after'  => '</div>',
                 ) );
                 ?>

         </div>
    </div>
</div>
