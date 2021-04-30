

<div id="post-<?php the_ID();?>" <?php  post_class("container") ?>>
        <div class="col-12 col-md-12 info elizama-card">
            <?php the_title( '<h3 class="entry-title text-center card-title">', '</h3>'); ?>
            <p><?php the_content();?></p>
         </div>

            <?php if ( get_edit_post_link() ) : ?>
            <footer class="col-lg-12">
            <?php
                elizama_link_edit();
                wp_kses_post(elizama_posted_footer()); ?>
             </footer><!-- End entry-footer -->

            <?php endif;?>
</div>




