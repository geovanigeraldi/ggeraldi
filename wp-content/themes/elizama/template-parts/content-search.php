<div id="page-<?php the_ID();?>" <?php post_class( 'container');?>>
    <div class="block-content">
     
        <div class="post-body">
                <h3><a href="<?php echo esc_url(get_permalink( ));?>"><?php the_title_attribute(  ); ?></a></h3>
                <?php the_excerpt();?>

        </div>
    </div>
</div>
    