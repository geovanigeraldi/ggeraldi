<?php
global $detect;
?>
<div id="post-<?php the_ID();?>" <?php  post_class("container") ?>>
        
            <div class="elizama-card row">
                <div class="col-lg-12">
                    <?php the_title( '<h3 class="entry-title"><a href="'. esc_url(get_the_permalink( )).'">', '</a></h3>'); ?>
                    <?php the_excerpt();?>
                </div>
                <div class="col-lg-12">
                    <?php if(! has_post_thumbnail()): ?>
                    <div class="image img-fluid " style="background-image:url(<?php echo esc_url(get_template_directory_uri() ."/assets/img/nature/image2.jpg");?>">
                    </div>
                    <?php else : ?>
                    <div class="image img-fluid" style="background-image:url(<?php echo esc_url(elizama_get_attachment()); ?>);">
                    </div>
                <?php endif; ?>

                </div>

            </div>
</div>

